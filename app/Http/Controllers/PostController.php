<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;

class PostController extends Controller
{
    public function index()
    {
        $title = '';
        if (request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in ' . $category->name;
        }

        if (request('author')) {
            $category = User::firstWhere('username', request('author'));
            $title = ' by ' . $category->name;
        }

        $data = [
            "title" => "All Posts" . $title,
            "active" => "posts",
            // "posts" => Post::all()
            // "posts" => Post::latest()->filter(request(['keyword', 'category', 'author']))->get()
            "posts" => Post::latest()->filter(request(['keyword', 'category', 'author']))->paginate(7)->withQueryString() //apapun query string yang ada sebelumnya
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
