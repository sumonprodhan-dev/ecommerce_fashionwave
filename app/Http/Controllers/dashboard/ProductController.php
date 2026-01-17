<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\Tag;
use Illuminate\Http\Request;

use function Symfony\Component\String\u;

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
            'tag_id' => 'nullable',
            'en_name' => 'required',
            'en_slug' => 'required',
            'product_tag' => 'nullable | array | max:5',
            'qty' => 'required',
            'price' => 'required|numeric|min:0',
            'discount' => 'nullable|numeric|min:0|max:100',
            'discount_price' => 'nullable',
            'en_about' => 'nullable',
            'en_description' => 'nullable',
            'en_shippingreturn' => 'nullable',
            'en_additionalinformation' => 'nullable',
            'primary_image' => 'required|image|mimes:jpg,jpeg,png|max:5120',
            'image_two' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'image_three' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'image_four' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'image_five' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
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
        $product->tag_id = $request->tag_id;
        $product->en_name = $request->en_name;
        $product->en_slug = $request->en_slug;
        $product->product_tag = json_encode($request->product_tag);
        $product->qty = $request->qty;
        $product->price = $request->price;
        $product->discount = $request->discount;
        $product->discount_price = $request->discount_price;
        $product->en_about = $request->en_about;
        $product->en_description = $request->en_description;
        $product->en_shippingreturn = $request->en_shippingreturn;
        $product->en_additionalinformation = $request->en_additionalinformation;
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

        $images = [
            'primary_image',
            'image_two',
            'image_three',
            'image_four',
            'image_five',
        ];

        foreach ($images as $field) {
            if ($request->hasFile($field)) {

                $file = $request->file($field);

                $imageName = time() . '_' . $field . '.' . $file->getClientOriginalExtension();

                $destinationPath = public_path('uploads/products');

                $product->$field = $imageName;
            }
        }


        // dd($product);
        $product->save();
        $file->move($destinationPath, $imageName);

        return redirect()->route('admin.product.index')->with('success', 'Product Added Successfully');
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $productTags = $product->product_tag ? json_decode($product->product_tag, true) : [];
        $categories = Category::all();
        $brands = Brand::all();
        $tags = Tag::all();
        return view('dashboard.pages.product.edit', compact('product', 'productTags', 'categories', 'brands', 'tags'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'brand_id' => 'nullable',
            'category_id' => 'required',
            'tag_id' => 'nullable',
            'en_name' => 'required',
            'en_slug' => 'required',
            'product_tag' => 'nullable | array | max:5',
            'qty' => 'required',
            'price' => 'required|numeric|min:0',
            'discount' => 'nullable|numeric|min:0|max:100',
            'discount_price' => 'nullable',
            'en_about' => 'nullable',
            'en_description' => 'nullable',
            'en_shippingreturn' => 'nullable',
            'en_additionalinformation' => 'nullable',
            'primary_image' => 'nullable|image|mimes:jpg,jpeg,png|max:5120',
            'image_two' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'image_three' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'image_four' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'image_five' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
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

        $product = Product::findOrFail($id);
        $product->brand_id = $request->brand_id;
        $product->category_id = $request->category_id;
        $product->tag_id = $request->tag_id;
        $product->en_name = $request->en_name;
        $product->en_slug = $request->en_slug;
        $product->product_tag = json_encode($request->product_tag);
        $product->qty = $request->qty;
        $product->price = $request->price;
        $product->discount = $request->discount;
        $product->discount_price = $request->discount_price;
        $product->en_about = $request->en_about;
        $product->en_description = $request->en_description;
        $product->en_shippingreturn = $request->en_shippingreturn;
        $product->en_additionalinformation = $request->en_additionalinformation;
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

        $images = [
            'primary_image',
            'image_two',
            'image_three',
            'image_four',
            'image_five',
        ];

        foreach ($images as $field) {
            if ($request->hasFile($field)) {
                if ($product->$field && file_exists(public_path('uploads/products/' . $product->$field))) {
                    $oldImage = public_path('uploads/products/' . $product->$field);
                    if (file_exists($oldImage)) {
                        unlink($oldImage);
                    }
                }
                $file = $request->file($field);

                $imageName = time() . '_' . $field . '.' . $file->getClientOriginalExtension();

                $destinationPath = public_path('uploads/products');
                $file->move($destinationPath, $imageName);

                $product->$field = $imageName;
            }
        }

        $product->save();

        return redirect()->route('admin.product.index')->with('success', 'Product updated successfully.');
    }


    public function toggleStatus($id)
    {
        $product = Product::findOrFail($id);
        $product->status = $product->status ? 0 : 1;
        $product->save();

        return redirect()->back()->with('success', 'Status Updated Successfully');
    }

    public function delete($id) {
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('admin.product.index')->with('success', 'Product deleted successfully.');
    }
}
