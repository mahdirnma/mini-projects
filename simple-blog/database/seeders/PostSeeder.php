<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Post::create([
            'title' => 'computer',
            'description' => 'lorem ipsum',
            'category_id' => '1',
        ]);
        Post::create([
            'title' => 'mechanics',
            'description' => 'lorem ipsum2',
            'category_id' => '1',
        ]);
        Post::create([
            'title' => 'Eye specialist',
            'description' => 'lorem ipsum3',
            'category_id' => '2',
        ]);

    }
}
