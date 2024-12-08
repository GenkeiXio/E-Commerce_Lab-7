<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\MenuItem; // Move this to the top

class MenuItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        MenuItem::create([
            'name' => 'Pancakes/Crepes with toppings',
            'price' => '₱35.00',
            'image' => 'css/img1.jpg',
            'rating' => 4
        ]);

        MenuItem::create([
            'name' => 'Egg Sandwiches',
            'price' => '₱25.00',
            'image' => 'css/img2.jpg',
            'rating' => 4
        ]);

        MenuItem::create([
            'name' => 'Yummy Burgers',
            'price' => '₱40.00',
            'image' => 'css/img3.jpg',
            'rating' => 4
        ]);

        MenuItem::create([
            'name' => 'Ground Beef Cheesy Nachos/Tacos',
            'price' => '₱75.00',
            'image' => 'css/img2.jpg',
            'rating' => 4
        ]);

        MenuItem::create([
            'name' => 'Small Pancit/Bihon Guisado',
            'price' => '₱50.00',
            'image' => 'css/img2.jpg',
            'rating' => 4
        ]);
    }
}