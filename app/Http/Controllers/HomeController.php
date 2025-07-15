<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\Brand;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'featuredProducts' => Product::featured()->take(12)->get(),
            'flashDeals' => Product::onSale()->take(8)->get(),
            'bestSellers' => Product::bestSelling()->take(8)->get(),
            'newReleases' => Product::latest()->take(8)->get(),
            'categories' => Category::active()->get(),
            'brands' => Brand::active()->take(8)->get(),
            'cartCount' => auth()->user() ? auth()->user()->cartItems()->count() : 0,
            'wishlistCount' => auth()->user() ? auth()->user()->wishlistItems()->count() : 0,
        ];

        return view('home', $data);
    }
}