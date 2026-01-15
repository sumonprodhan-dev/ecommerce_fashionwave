<?php

namespace App\Http\Controllers\frontend;

use App\Models\Brand;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ShopController extends Controller
{
    public function index(){
        $categories = Category::all();
        $brands = Brand::all();
        $products = Product::latest()->paginate(9);
        return view('frontend.pages.shop', compact('categories', 'brands', 'products'));
    }

    public function productDetails($slug){
        $product = Product::where('en_slug', $slug)->first();
        return view('frontend.pages.product_details', compact('product'));
    }
}
