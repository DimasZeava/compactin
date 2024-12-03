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
                    'titleProduct' => 'Product 4',
                    'category' => (object)[
                        'name' => 'Category 4'
                    ],
                    'imageSrc' => 'https://via.placeholder.com/150'
                ],
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
