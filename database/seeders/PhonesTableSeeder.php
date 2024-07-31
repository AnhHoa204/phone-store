<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PhonesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('phones')->insert([
            ['title' => 'Samsung Galaxy S21', 'thumbnail' => 's21.jpg', 'publication' => '2023-01-01', 'price' => 999.99, 'quantity' => 10, 'description' => 'A great phone from Samsung', 'category_id' => 1],
            ['title' => 'Samsung Galaxy S21', 'thumbnail' => 's21.jpg', 'publication' => '2023-01-01', 'price' => 600, 'quantity' => 10, 'description' => 'A great phone from Samsung', 'category_id' => 1],
            ['title' => 'Samsung Galaxy S21', 'thumbnail' => 's21.jpg', 'publication' => '2023-01-01', 'price' => 898, 'quantity' => 10, 'description' => 'A great phone from Samsung', 'category_id' => 1],
            ['title' => 'Samsung Galaxy S21', 'thumbnail' => 's21.jpg', 'publication' => '2023-01-01', 'price' => 855, 'quantity' => 10, 'description' => 'A great phone from Samsung', 'category_id' => 5],
            ['title' => 'Samsung Galaxy S21', 'thumbnail' => 's21.jpg', 'publication' => '2023-01-01', 'price' => 432, 'quantity' => 10, 'description' => 'A great phone from Samsung', 'category_id' => 1],
            ['title' => 'Samsung Galaxy S21', 'thumbnail' => 's21.jpg', 'publication' => '2023-01-01', 'price' => 809, 'quantity' => 10, 'description' => 'A great phone from Samsung', 'category_id' => 3],
            ['title' => 'Samsung Galaxy S21', 'thumbnail' => 's21.jpg', 'publication' => '2023-01-01', 'price' => 476, 'quantity' => 10, 'description' => 'A great phone from Samsung', 'category_id' => 1],
            ['title' => 'Samsung Galaxy S21', 'thumbnail' => 's21.jpg', 'publication' => '2023-01-01', 'price' => 795, 'quantity' => 10, 'description' => 'A great phone from Samsung', 'category_id' => 4],
            ['title' => 'Samsung Galaxy S21', 'thumbnail' => 's21.jpg', 'publication' => '2023-01-01', 'price' => 348, 'quantity' => 10, 'description' => 'A great phone from Samsung', 'category_id' => 1],
            ['title' => 'Samsung Galaxy S21', 'thumbnail' => 's21.jpg', 'publication' => '2023-01-01', 'price' => 587, 'quantity' => 10, 'description' => 'A great phone from Samsung', 'category_id' => 1],
            ['title' => 'Samsung Galaxy S21', 'thumbnail' => 's21.jpg', 'publication' => '2023-01-01', 'price' => 464, 'quantity' => 10, 'description' => 'A great phone from Samsung', 'category_id' => 2],
            ['title' => 'Samsung Galaxy S21', 'thumbnail' => 's21.jpg', 'publication' => '2023-01-01', 'price' => 576, 'quantity' => 10, 'description' => 'A great phone from Samsung', 'category_id' => 4],
            ['title' => 'Samsung Galaxy S21', 'thumbnail' => 's21.jpg', 'publication' => '2023-01-01', 'price' => 675, 'quantity' => 10, 'description' => 'A great phone from Samsung', 'category_id' => 3],
            ['title' => 'Samsung Galaxy S21', 'thumbnail' => 's21.jpg', 'publication' => '2023-01-01', 'price' => 658, 'quantity' => 10, 'description' => 'A great phone from Samsung', 'category_id' => 3],
            ['title' => 'Samsung Galaxy S21', 'thumbnail' => 's21.jpg', 'publication' => '2023-01-01', 'price' => 577, 'quantity' => 10, 'description' => 'A great phone from Samsung', 'category_id' => 2],
            ['title' => 'Samsung Galaxy S21', 'thumbnail' => 's21.jpg', 'publication' => '2023-01-01', 'price' => 3634, 'quantity' => 10, 'description' => 'A great phone from Samsung', 'category_id' => 5],
            ['title' => 'Samsung Galaxy S21', 'thumbnail' => 's21.jpg', 'publication' => '2023-01-01', 'price' => 466, 'quantity' => 10, 'description' => 'A great phone from Samsung', 'category_id' => 1],
            ['title' => 'Samsung Galaxy S21', 'thumbnail' => 's21.jpg', 'publication' => '2023-01-01', 'price' => 979, 'quantity' => 10, 'description' => 'A great phone from Samsung', 'category_id' => 1],
            
        ]);
    }
    
}
