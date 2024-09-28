<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'author_name' => 'required|min:2|max:30|alpha_num',
            'title' => 'required|min:10|max:30',
            'content' => 'required|min:30|max:123',
        ]);
        Post::create($validated);
        //dd($post);
        return redirect()->route('posts.index');
    }

    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }
    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, Post $post)
    {
        $post->update($request->all());
        //dd($request->all());
        return redirect()->route('posts.index');

    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('posts.index');
    }
}
