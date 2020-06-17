<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('id', 'desc')->get();
        return view('posts.index', ['posts' => $posts]);
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
        $post = new Post();
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->save();
        return redirect('/posts')->with('success', 'Post Created successfully!');
    }
    public function show($id)
    {
        $post = Post::where('id', $id)->first();
        return view('posts.detail', ['post' => $post]);
    }
    public function edit($id)
    {
        $post = Post::where('id', $id)->first();
        return view('posts.edit')->with(['post' => $post]);
    }
    public function update(Request $request, $id)
    {
        $post = Post::where('id', $id)->first();
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->save();
        return view('posts.detail')->with(['post' => $post]);
    }
    public function destroy($id)
    {
        # code...
    }
}
