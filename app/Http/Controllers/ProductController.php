<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = collect([
        (object)[
            'titleProduct' => 'Product 1',
            'category' => (object)[
                'name' => 'Category 1'
            ],
            'imageSrc' => 'https://via.placeholder.com/150'
        ],
        (object)[
            'titleProduct' => 'Product 2',
            'category' => (object)[
                'name' => 'Category 2'
            ],
            'imageSrc' => 'https://via.placeholder.com/150'
        ],
        (object)[
            'titleProduct' => 'Product 3',
            'category' => (object)[
                'name' => 'Category 3'
            ],
            'imageSrc' => 'https://via.placeholder.com/150'
        ],
        (object)[
            'titleProduct' => 'Product 3',
            'category' => (object)[
                'name' => 'Category 3'
            ],
            'imageSrc' => 'https://via.placeholder.com/150'
        ],   
        ]);

        // $products = Product::with('category')->get(); Use it when you have a data from database migration
        return view('landing-page', compact('products'));
    }

}
