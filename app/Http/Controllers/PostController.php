<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:post-list|post-create|post-edit|post-delete', ['only' => ['index', 'show']]);
         $this->middleware('permission:post-create', ['only' => ['create', 'store']]);
         $this->middleware('permission:post-edit', ['only' => ['edit', 'update']]);
         $this->middleware('permission:post-delete', ['only' => ['destroy']]);
    }
    /**public function index()
    {
        $posts = Post::latest()->get();
        return view('posts.index', compact('posts'));
    }*/
    public function index(Request $request)
    {
        $data = Post::latest()->paginate(5);

        return view('posts.index',compact('data'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required',
        ]);
        $input = $request->except(['_token']);
    
        Post::create($input);
    
        return redirect()->route('posts.index')
            ->with('success','Post created successfully.');
    }

    public function show($id)
    {
        $post = Post::find($id);

        return view('posts.show', compact('post'));
    }

    public function edit($id)
    {
        $post = Post::find($id);

        return view('posts.edit',compact('post'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required',
        ]);

        $post = Post::find($id);
    
        $post->update($request->all());
    
        return redirect()->route('posts.index')
            ->with('success', 'Post updated successfully.');
    }

    public function destroy($id)
    {
        Post::find($id)->delete();
    
        return redirect()->route('posts.index')
            ->with('success', 'Post deleted successfully.');
    }

}