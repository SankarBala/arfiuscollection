<?php

namespace App\Http\Controllers\Admin;

use App\Events\PostPublished;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;


class PostController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->authorizeResource(Post::class, 'post');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        view()->share('posts', Post::orderBy('created_at', 'desc')->paginate(10));
        return view('admin.post.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        view()->share('categories', Category::all());
        return view('admin.post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'title' => 'required|unique:posts|max:255',
            'slug' => 'required|unique:posts|max:255',
            'status' => 'required|in:publishable,draft,rejected,premium,published',
            'content' => 'required',
            'category_id' => 'exists:categories,id|nullable',
            'image' => 'string|url|nullable'
        ]);
        
        $post = new Post;
        $post->title = $request->title;
        $post->slug = $request->slug;
        $post->status = $request->status;
        $post->image = $request->image;
        // $post->category_id = $request->category_id;
        $post->content = $request->content;
        $post->author = auth()->user()->id;
        $post->save();

        return redirect()->route('admin.post.index')->with('success', 'Post created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        view()->share('post', $post);
        return view('admin.post.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        view()->share('categories', Category::all());
        view()->share('post', $post);
        return view('admin.post.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        
        $this->validate($request, [
            'title' => 'required|max:255',
            'slug' => 'required|unique:posts,slug,'.$post->id.'|max:255',
            'status' => 'required|in:publishable,draft,rejected,published',
            'content' => 'required',
            'category_id' => 'exists:categories,id|nullable',
            'image' => 'string|url|nullable'
        ]);
        
        $post->title = $request->title;
        $post->slug = $request->slug;
        $post->status = $request->status;
        $post->image = $request->image;
        // $post->category_id = $request->category_id;
        $post->content = $request->content;
        $post->author = auth()->user()->id;
        $post->save();

        return redirect()->route('admin.post.index')->with('success', 'Post updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('admin.post.index')->with('success', 'Post deleted successfully');
    }


    public function update_status(Request $request, Post $post)
    {
        $this->validate($request, [
            'status' => 'required|in:publishable,draft,rejected,published'
        ]);

        $post->status = $request->status;
        $post->update();

        if($request->status == 'published') {
            event(new PostPublished($post));
         } 

        return redirect()->route('admin.post.index')->with('success', 'Post published successfully');
    }

    public function update_view(Request $request){

        $this->validate($request, [
            'view' => 'required|between:0,99999',
            'id' => 'required|exists:posts,id'
        ]);

        $post = Post::find($request->id);
        $post->view = $request->view;
        $post->update();

        return response()->json(['message' => 'Update post successfully'], 201);
    }

}
