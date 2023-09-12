<?php

use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home",
        "active" => "home",
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "active" => "about",
        "name" => "Moch Rizki Maulana N",
        "email" => "mochrizki290699@gmail.com",
        "image" => "rizki.jpg",
    ]);
});

Route::get('/posts', [PostController::class, 'index']);

//halaman single post
// {post:slug} mengambil data dari tabel post berdasarkan slug
Route::get('/posts/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function(){
    return view('categories',[
        'title' => 'Post Categories',
        'active' => 'categories',
        'categories' => Category::all(),
    ]);
});

// Route::get('/categories/{category:slug}', function(Category $category){
//     return view('posts',[
//         'title' => "Post by Category : $category->name",
//         'active' => 'categories',
//         'posts' => $category->posts->load('category','author')
//     ]);
// });

// Route::get('/authors/{author:username}', function(User $author){
//     return view('posts',[
//         'title' => "Post by Author : $author->name",
//         'active' => "posts",
//         'posts' => $author->posts->load('category','author'),
//     ]);
// });

//load() / LazyEagerLoading = digunakan di fun closure atau digunakan di tabel yang menitipkan
//with() / EagerLoading = digunakan di Controller atau digunakan di tabel yang dititipkan

Route::get('/login',[LoginController::class, 'index']);
Route::get('/register',[RegisterController::class, 'index']);
