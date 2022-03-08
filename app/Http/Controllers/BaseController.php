<?php

namespace App\Http\Controllers;

use App\Mail\ContactRequest;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use App\Models\Subscription;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\View;

class BaseController extends Controller
{
    public function __construct()
    {
        View::share('categoriesHasPost', Category::has('posts')->get());
        View::share('recentPosts', Post::where('status', 'published')->orderBy('created_at', 'desc')->take(4)->get());
        View::share('popularPosts', Post::where('status', 'published')->orderBy('view', 'desc')->take(5)->get());
    }

    public function index()
    {
        $posts = Post::where('status', 'published')->orderBy('created_at', 'desc')->paginate(5);
        return view('index', compact('posts'));
    }

    public function category(Request $request, Category $category)
    {
        $posts = $category->posts()->where('status', 'published')->orderBy('created_at', 'desc')->paginate(10);
        return view('category', compact('posts'));
    }

    public function categories()
    {
        $categories = Category::with('children')->where('parent_id', 0)->get();
        return view('categories', compact('categories'));
    }

    public function post(Post $post)
    {
        if (!Gate::allows('view-post', $post)) {
            abort(403);
        }

        $post->increment('view');
        view()->share('related_posts', Post::where('category_id', $post->category_id)->where('id', '!=', $post->id)->orderBy('created_at', 'desc')->take(4)->get());

        return view('post')->with('post', $post);
    }

    public function search(Request $request)
    {
        $search = $request->input('query');

        $posts = Post::query()
            ->where('title', 'LIKE', "%{$search}%")
            ->orWhere('content', 'LIKE', "%{$search}%")
            ->orWhere('slug', 'LIKE', "%{$search}%")
            ->paginate(10);

        return view('search', compact('posts'));
    }

    public function contactUs()
    {
        return view('contact-us');
    }

    public function contactRequest(Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
                'email' => 'required|email',
                'subject' => 'required',
                'message' => 'required'
            ]
        );

        Mail::to(env('ADMIN_EMAIL'))->queue(new ContactRequest($request->all()));



        return redirect()->back()->with('success', 'Your message has been sent successfully.');
    }

    public function aboutUs()
    {
        return view('about-us');
    }

    public function profile()
    {
        view()->share('user',  Auth::user());
        return view('profile');
    }

    public function privacyPolicies()
    {
        return view('privacy-policy');
    }


    public function subscription(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:subscriptions',
        ]);

        $subscription = new Subscription();
        $subscription->email = $request->email;
        $subscription->save();

        return response()->json(['message' => 'Subscription successful'], 201);
    }

    public function comment(Request $request)
    {
        $request->validate([
            'name' => 'required|string|min:3|max:20',
            'email' => 'required|email',
            'body' => 'required',
            'commentable_id' => 'required',
            'commentable_type' => 'required',
        ]);

        $user = User::firstOrCreate(['email' => $request->email], ['name' => $request->name, 'password' => Hash::make('password')]);

        Auth::login($user);

        $comment = new Comment();
        $comment->body = $request->body;
        $comment->author = $user->id;
        $comment->commentable_id = $request->commentable_id;
        $comment->commentable_type = $request->commentable_type;
        $comment->save();

        return back();
    }
}
