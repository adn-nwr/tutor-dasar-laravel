<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/blog', function () {
    return view('blog', ['posts' => Post::getAll()]);
});

Route::get('/article/{id}', function ($id) {

    $post = Post::findById($id);
    if (!$post) {
        abort(404);
    }

    return view('article', ['post' => $post]);
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});
