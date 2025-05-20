<?php

use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/blog', function () {
    return view('blog', ['posts' => Post::all()]);
});

Route::get('/article/{post}', function (Post $post) {
    return view('article', ['post' => $post]);
});

Route::get('/article/slug/{post:slug}', function (Post $post) {
    return view('article', ['post' => $post]);
});

Route::get('/author/{user}', function (User $user) {
    return view('author-post', ['author' => $user, 'posts' => $user->posts]);
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});
