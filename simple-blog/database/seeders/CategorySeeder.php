<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'title' => 'Engineering',
            'description' => 'lorem ipsum',
        ]);
        Category::create([
            'title' => 'Medicine',
            'description' => 'lorem ipsum2',
        ]);

    }
}
