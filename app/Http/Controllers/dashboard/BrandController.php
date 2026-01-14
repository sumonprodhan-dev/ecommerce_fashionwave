<?php

namespace App\Http\Controllers\dashboard;

use App\Models\Brand;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BrandController extends Controller
{
    public function index() {
        $brands = Brand::latest()->paginate(10);
        return view('dashboard.pages.brand.index', compact('brands'));
    }

    public function create() {
        return view('dashboard.pages.brand.create');
    }

    public function store(Request $request) {
        $request->validate([
            'en_name' => 'required',
            'slug' => 'required',
            'gn_name' => 'required',
            'status' => 'required',
        ]);

        $brand = new Brand();
        $brand->en_name = $request->en_name;
        $brand->slug = $request->slug;
        $brand->gn_name = $request->gn_name;
        $brand->status = $request->status;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/uploads/brand');
            $image->move($destinationPath, $name);
            $brand->image = $name;
            
        }

        $brand->save();

        return redirect()->route('admin.brand.index')->with('success', 'Brand created successfully.');
    }

    public function edit( $id ) {
        $brand = Brand::find($id);
        return view('dashboard.pages.brand.edit', compact('brand'));
    }


    public function update(Request $request, $id) {
        $request->validate([
            'en_name' => 'required',
            'slug' => 'required',
            'gn_name' => 'required',
            'status' => 'required',
        ]);

        $brand = Brand::find($id);
        $brand->en_name = $request->en_name;
        $brand->slug = $request->slug;
        $brand->gn_name = $request->gn_name;
        $brand->status = $request->status;

        if ($request->hasFile('image')) {
            if($brand->image && file_exists(public_path('/uploads/brand/'.$brand->image))){
                unlink(public_path('/uploads/brand/'.$brand->image));
            }
            $image = $request->file('image');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/uploads/brand');
            $image->move($destinationPath, $name);
            $brand->image = $name;
            
        }

        $brand->save();

        return redirect()->route('admin.brand.index')->with('success', 'Brand updated successfully.');
    }


    public function delete($id) {
        
        $brand = Brand::find($id);
        if($brand->image && file_exists(public_path('/uploads/brand/'.$brand->image))){
            unlink(public_path('/uploads/brand/'.$brand->image));
        }
        $brand->delete();
        return redirect()->route('admin.brand.index')->with('success', 'Brand deleted successfully.');
    }
}
