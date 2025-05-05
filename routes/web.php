<?php

use App\Models\Post;
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

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});
