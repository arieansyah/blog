<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Controllers\Controller;
use App\Repositories\Post\PostRepository;

class PostController extends Controller
{

    public function __construct(PostRepository $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    public function index()
    {
        $data = $this->postRepository->getAll();
        return view('posts.index')
            ->with('post', $data);
    }

    public function show(Post $post)
    {
        $post->comments = $post->comment()->with('user')->get();
        return view('posts.show')
            ->with('show', $post);
    }
}
