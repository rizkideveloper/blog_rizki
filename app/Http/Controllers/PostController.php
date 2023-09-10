<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $data = [
            "title" => "All Posts",
            "active" => "posts",
            // "posts" => Post::all()
            "posts" => Post::latest()->get()
        ];

        return view('posts', $data);
    }

    public function show(Post $post)
    {
        $data = [
            "title" => "Single Post",
            "active" => "posts",
            "post" => $post,
        ];

        return view('post', $data);
    }
}
