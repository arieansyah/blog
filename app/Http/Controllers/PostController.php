<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $post = Post::with('user')->get();
        // dd($post);
        return view('posts.index')
            ->with('post', $post);
    }
}
