<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/blog', function () {
    return view('blog', [
        'posts' => [
            ['id' => 1, 'title' => 'First Post', 'author' => 'Adnan Anwar', 'created_date' => '30 April 2025', 'content' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illo ipsam ullam eveniet nisi ducimus tenetur autem modi, repudiandae hic quos alias neque numquam ipsum facere, culpa earum doloremque inventore aliquid?'],
            ['id' => 2, 'title' => 'Second Post', 'author' => 'Steven Spielberg', 'created_date' => '29 April 2025', 'content' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsum est enim dolore praesentium temporibus sit inventore. Quas architecto deleniti quia voluptatum possimus dicta, adipisci explicabo ea, distinctio placeat optio asperiores.'],
            ['id' => 3, 'title' => 'Third Post', 'author' => 'Thomas Dickens', 'created_date' => '28 April 2025', 'content' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ullam hic, aspernatur, ipsa, dolor sapiente labore sunt at sit dolore placeat consequatur quaerat! Ipsum nihil ab repellat cum voluptatibus ad voluptas.'],
        ]
    ]);
});

Route::get('/article/{id}', function ($id) {

    $posts = [
        'posts' => [
            ['id' => 1, 'title' => 'First Post', 'author' => 'Adnan Anwar', 'created_date' => '30 April 2025', 'content' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illo ipsam ullam eveniet nisi ducimus tenetur autem modi, repudiandae hic quos alias neque numquam ipsum facere, culpa earum doloremque inventore aliquid?'],
            ['id' => 2, 'title' => 'Second Post', 'author' => 'Steven Spielberg', 'created_date' => '29 April 2025', 'content' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsum est enim dolore praesentium temporibus sit inventore. Quas architecto deleniti quia voluptatum possimus dicta, adipisci explicabo ea, distinctio placeat optio asperiores.'],
            ['id' => 3, 'title' => 'Third Post', 'author' => 'Thomas Dickens', 'created_date' => '28 April 2025', 'content' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ullam hic, aspernatur, ipsa, dolor sapiente labore sunt at sit dolore placeat consequatur quaerat! Ipsum nihil ab repellat cum voluptatibus ad voluptas.'],
        ]
    ];

    $post = collect($posts['posts'])->firstWhere('id', $id);
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
