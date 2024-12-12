<?php

namespace App\Http\Controllers;

use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('category')->paginate(5);

        if ($products->isEmpty()) {
            $products = collect([
                (object)[
                    'titleProduct' => 'Automotive Landing Page',
                    'category' => (object)[
                        'name' => 'React'
                    ],
                    'imageSrc' => asset('images/product/product1.png'),
                    'link' => 'https://dribbble.com/shots/24879759-Automotive-Company-Profile'
                ],
                (object)[
                    'titleProduct' => 'Drink Landing Page',
                    'category' => (object)[
                        'name' => 'React'
                    ],
                    'imageSrc' => asset('images/product/product2.png'),
                    'link' => 'https://dribbble.com/shots/24448168-ProShow-Profile-Drink-Company'
                ],
                (object)[
                    'titleProduct' => 'Tech Landing Page',
                    'category' => (object)[
                        'name' => 'Laravel'
                    ],
                    'imageSrc' => asset('images/product/product3.png'),
                    'link' => 'https://dribbble.com/shots/24591438-FATE-Tech-Company-Profile'
                ],
                (object)[
                    'titleProduct' => 'Coming Soon!!',
                    'category' => (object)[
                        'name' => 'On Progress'
                    ],
                    'imageSrc' => asset('images/product/product4.jpg'),
                    'link' => 'https://example.com/product-4'
                ]
            ]);

            $products = new LengthAwarePaginator(
                $products,
                $products->count(),
                5,
                1,
                ['path' => request()->url(), 'query' => request()->query()]
            );
        }

        // $products = Product::with('category')->get(); Use it when you have a data from database migration
        return view('landing-page', compact('products'));
    }
}
