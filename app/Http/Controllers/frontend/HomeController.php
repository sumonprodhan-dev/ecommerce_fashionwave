<?php

namespace App\Http\Controllers\frontend;

use App\Models\Brand;
use App\Models\Slider;
use App\Models\Product;
use App\Models\Category;
use App\Models\Subscriber;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function wishlist(){
        return view('frontend.pages.wishlist');
    }


    public function compare(){
        return view('frontend.pages.compare');
    }


    public function index(){

        $sliders = Slider::get();
        $products = Product::get();
        $categories = Category::get();
        $brands = Brand::get();
        $testimonials = Testimonial::get();

        return view('frontend.pages.index', compact('sliders', 'products', 'categories', 'brands', 'testimonials'));

    }

    

    public function about(){
        return view('frontend.pages.about');
    }

    public function contactUs(){
        return view('frontend.pages.contact');
    }


    public function subscribeEmail(Request $request){
        $request->validate([
            'email' => 'required|email | unique:subscribers',
        ]);

        $subscriber = new Subscriber();
        $subscriber->email = $request->email;
        $subscriber->save();

        return redirect()->back()->with('success', 'Subscribed Successfully');
    }
}
