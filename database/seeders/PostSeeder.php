<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $adnan = User::factory()->create([
            'name' => 'Adnan Anwar',
            'email' => 'adnan.nwar@gmail.com'
        ]);

        $kategori_umum = Category::factory()->create([
            'name' => 'Umum',
            'slug' => 'umum'
        ]);

        Post::factory(25)
            ->recycle($adnan)
            ->recycle($kategori_umum)
            ->recycle(User::factory(3)->create())
            ->recycle(Category::factory(5)->create())
            ->create();
    }
}
