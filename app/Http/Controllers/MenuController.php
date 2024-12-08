<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index($username)
    {
        // Simulated menu data
        $menuItems = [
            [
                'name' => 'Pancakes/Crepes with toppings',
                'price' => '₱35.00',
                'image' => 'css/img1.jpg',
                'rating' => 4
            ],
            [
                'name' => 'Egg Sandwiches',
                'price' => '₱25.00',
                'image' => 'css/img2.jpg',
                'rating' => 4
            ],
            [
                'name' => 'Yummy Burgers',
                'price' => '₱40.00',
                'image' => 'css/img3.jpg',
                'rating' => 4
            ],
            [
                'name' => 'Ground Beef Cheesy Nachos/Tacos',
                'price' => '₱75.00',
                'image' => 'css/img2.jpg',
                'rating' => 4
            ],
            [
                'name' => 'Small Pancit/Bihon Guisado',
                'price' => '₱50.00',
                'image' => 'css/img2.jpg',
                'rating' => 4
            ],
        ];

        // Pass data to the view
        return view('menu', ['username' => $username, 'menuItems' => $menuItems]);
    }
}