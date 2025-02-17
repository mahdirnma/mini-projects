<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'title' => 'D1400',
            'description' => 'lorem ipsum',
            'price' => '9000000',
            'category_id' => 1,
            'user_id' => 1,
        ]);
        Product::create([
            'title' => '2000D',
            'description' => 'lorem ipsum2',
            'price' => '20000000',
            'category_id' => 1,
            'user_id' => 1,
        ]);
        Product::create([
            'title' => 'S25+',
            'description' => 'lorem ipsum3',
            'price' => '80000000',
            'category_id' => 2,
            'user_id' => 2,
        ]);

    }
}
