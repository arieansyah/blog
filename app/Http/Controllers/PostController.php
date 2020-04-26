<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $post = Post::with('user')
            ->withCount('comment')
            ->get();

        return view('posts.index')
            ->with('post', $post);
    }

    public function show(Post $post)
    {
        $post->comments = $post->comment()->with('user')->get();
        return view('posts.show')
            ->with('show', $post);
    }
}
