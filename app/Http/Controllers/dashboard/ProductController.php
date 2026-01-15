<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\Tag;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::latest()->paginate(10);

        return view('dashboard.pages.product.index', compact('products'));
    }

    public function create()
    {
        $categories = Category::all();
        $brands = Brand::all();
        $tags = Tag::all();

        return view('dashboard.pages.product.create', compact('categories', 'brands', 'tags'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'brand_id' => 'nullable',
            'category_id' => 'required',
            'item_teg' => 'nullable',
            'product_tag' => 'nullable | array | max:5',
            'en_name' => 'required',
            'en_slug' => 'required',
            'qty' => 'required',
            'price' => 'required',
            'discount' => 'nullable',
            'discount_price' => 'nullable',
            'en_about' => 'nullable',
            'en_description' => 'nullable',
            'en_shippingreturn' => 'nullable',
            'en_additionalinformation' => 'nullable',
            'primary_image' => 'nullable',
            'image_two' => 'nullable',
            'image_three' => 'nullable',
            'image_four' => 'nullable',
            'image_five' => 'nullable',
            'status' => 'nullable',
            'feature' => 'nullable',
            'best_sale' => 'nullable',
            'on_sale' => 'nullable',
            'on_arrival' => 'nullable',
            'gn_name' => 'required',
            'gn_about' => 'nullable',
            'gn_description' => 'nullable',
            'gn_shippingreturn' => 'nullable',
            'gn_additionalinformation' => 'nullable',
        ]);

        $product = new Product;
        $product->brand_id = $request->brand_id;
        $product->category_id = $request->category_id;
        $product->tag_id = $request->item_teg;
        $product->product_tag_id = $request->product_tag;
        $product->product_tag_id = $request->product_tag;
        $product->en_name = $request->en_name;
        $product->en_slug = $request->en_slug;
        $product->qty = $request->qty;
        $product->price = $request->price;
        $product->discount = $request->discount;
        $product->discount_price = $request->discount_price;
        $product->en_about = $request->en_about;
        $product->en_description = $request->en_description;
        $product->en_shippingreturn = $request->en_shippingreturn;
        $product->en_additionalinformation = $request->en_additionalinformation;
        // $product->primary_image = $request->primary_image;
        // $product->image_two = $request->image_two;
        // $product->image_three = $request->image_three;
        // $product->image_four = $request->image_four;
        // $product->image_five = $request->image_five;
        // $product->status = $request->status;
        // $product->feature = $request->feature;
        // $product->best_sale = $request->best_sale;
        // $product->on_sale = $request->on_sale;
        // $product->on_arrival = $request->on_arrival;
        $product->status = $request->has('status') ? 1 : 0;
        $product->feature = $request->has('feature') ? 1 : 0;
        $product->best_sale = $request->has('best_sale') ? 1 : 0;
        $product->on_sale = $request->has('on_sale') ? 1 : 0;
        $product->on_arrival = $request->has('on_arrival') ? 1 : 0;
        $product->gn_name = $request->gn_name;
        $product->gn_about = $request->gn_about;
        $product->gn_description = $request->gn_description;
        $product->gn_shippingreturn = $request->gn_shippingreturn;
        $product->gn_additionalinformation = $request->gn_additionalinformation;

        if ($request->hasFile('primary_image')) {
            $file = $request->file('primary_image');
            $filename = time().'_1'.$file->getClientOriginalExtension();
            $file->move('uploads/products/', $filename);
            $product->primary_image = $filename;
        }

        // dd($request->all());
        $product->save();

        return redirect()->route('admin.product.index')->with('success', 'Product Added Successfully');
    }
}
