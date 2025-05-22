<?php

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/blog', function () {
    return view('list-article', ['title' => 'Blog', 'posts' => Post::all()]);
});

Route::get('/article/{post}', function (Post $post) {
    return view('article', ['post' => $post]);
});

Route::get('/article/slug/{post:slug}', function (Post $post) {
    return view('article', ['post' => $post]);
});

Route::get('/author/{user:username}', function (User $user) {
    return view('list-article', ['title' => count($user->posts) . " Artikel oleh `$user->name`", 'author' => $user, 'posts' => $user->posts]);
});

Route::get('/category/{category:slug}', function (Category $category) {
    return view('list-article', ['title' => count($category->posts) . " Artikel di `$category->name`", 'posts' => $category->posts]);
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});
