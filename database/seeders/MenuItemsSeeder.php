<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuItemsSeeder extends Seeder
{
    public function run()
    {
        DB::table('menu_items')->insert([
            [
                'name' => 'Sample Item 1',
                'description' => 'Description for Sample Item 1',
                'price' => 9.99,
                'image' => 'path/to/image1.jpg',
            ],
            [
                'name' => 'Sample Item 2',
                'description' => 'Description for Sample Item 2',
                'price' => 12.99,
                'image' => 'path/to/image2.jpg',
            ],
            [
                'name' => 'Sample Item 3',
                'description' => 'Description for Sample Item 3',
                'price' => 12.99,
                'image' => 'https://images.pexels.com/photos/1146760/pexels-photo-1146760.jpeg?auto=compress&cs=tinysrgb&w=600',
            ],
            [
                'name' => 'Sample Item 4',
                'description' => 'Description for Sample Item 4',
                'price' => 12.99,
                'image' => 'path/to/image2.jpg',
            ],
            [
                'name' => 'Sample Item 5',
                'description' => 'Description for Sample Item 5',
                'price' => 12.99,
                'image' => 'path/to/image2.jpg',
            ],
            [
                'name' => 'Sample Item 6',
                'description' => 'Description for Sample Item 6',
                'price' => 12.99,
                'image' => 'path/to/image2.jpg',
            ],
            [
                'name' => 'Sample Item 7',
                'description' => 'Description for Sample Item 7',
                'price' => 12.99,
                'image' => 'path/to/image2.jpg',
            ],
            [
                'name' => 'Sample Item 8',
                'description' => 'Description for Sample Item 8',
                'price' => 12.99,
                'image' => 'path/to/image2.jpg',
            ],
            [
                'name' => 'Sample Item 9',
                'description' => 'Description for Sample Item 9',
                'price' => 12.99,
                'image' => 'path/to/image2.jpg',
            ],
            // Add more sample menu items here
        ]);
    }
}
