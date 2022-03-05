<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use App\Models\Subscription;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class BaseController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function category()
    {
        return view('category');
    }

    public function categories()
    {
        return view('categories');
    }

    public function post()
    {
        return view('post')->with('post', Post::find(38));
    }

    public function search()
    {
        return view('search');
    }

    public function contactUs()
    {
        return view('contact-us');
    }

    public function aboutUs()
    {
        return view('about-us');
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
