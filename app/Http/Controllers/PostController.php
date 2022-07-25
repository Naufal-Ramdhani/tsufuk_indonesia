<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**public function index()
    {
        $posts = Post::latest()->get();
        return view('posts.index', compact('posts'));
    }*/
    public function index()
    {
        $posts = Post::latest()->paginate(5);
    
        return view('posts.index',compact('posts'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'detail' => 'required',
        ]);
    
        post::create($request->all());
     
        return redirect()->route('posts.index')
                        ->with('success','post created successfully.');
    }

    public function show(Post $posts)
    {
        return view('posts.show',compact('posts'));
    } 

    public function edit(Post $posts)
    {
        return view('posts.edit',compact('posts'));
    }


}