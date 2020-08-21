<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use App\Traits\UploadTrait;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        
        return view('blog.index',['posts'=>$posts,]);
    }
    public function create()
    {
        return view('blog.create');
    }
    public function store(Request $request)
    {
       
        Post::create($request->all());
                
        return redirect('post');
        
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
   
    public function edit(Post $post)
    {
        return view('blog.edit',['post'=>$post]);
    }

    public function show(Post $post)
    {   
        return view('blog.post', ['post'=>$post]);
    }

    public function update(Request $request, Post $post)
    {   
        $post = Post::find($post->id);
        $post->update($request->all());

        return redirect('/post'); 
    }
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect('post');
    }
}
