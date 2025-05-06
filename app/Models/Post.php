<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    protected $casts = [
        'created_date' => 'datetime',
    ];

    // public $id;
    // public $title;
    // public $author;
    // public $created_date;
    // public $content;

    // public function __construct($id, $title, $author, $created_date, $content)
    // {
    //     $this->id = $id;
    //     $this->title = $title;
    //     $this->author = $author;
    //     $this->created_date = $created_date;
    //     $this->content = $content;
    // }

    // public static function getAll()
    // {
    //     return [
    //         new Post(1, 'First Post', 'Adnan Anwar', '30 April 2025', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illo ipsam ullam eveniet nisi ducimus tenetur autem modi, repudiandae hic quos alias neque numquam ipsum facere, culpa earum doloremque inventore aliquid?'),
    //         new Post(2, 'Second Post', 'Steven Spielberg', '29 April 2025', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsum est enim dolore praesentium temporibus sit inventore. Quas architecto deleniti quia voluptatum possimus dicta, adipisci explicabo ea, distinctio placeat optio asperiores.'),
    //         new Post(3, 'Third Post', 'Thomas Dickens', '28 April 2025', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ullam hic, aspernatur, ipsa, dolor sapiente labore sunt at sit dolore placeat consequatur quaerat! Ipsum nihil ab repellat cum voluptatibus ad voluptas.')
    //     ];
    // }

    // public static function findById($id)
    // {
    //     $posts = self::getAll();
    //     foreach ($posts as $post) {
    //         if ($post->id == $id) {
    //             return $post;
    //         }
    //     }
    //     return null;
    // }
}
