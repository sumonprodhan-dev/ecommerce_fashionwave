<?php

namespace App\Http\Controllers\dashboard;

use App\Models\Tag;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function index() {
        $categories = Category::latest()->paginate(10);
        return view('dashboard.pages.category.index', compact('categories'));
    }

    public function create() {
        return view('dashboard.pages.category.create');
    }


    public function store(Request $request){

        $request->validate([
            'en_name' => 'required',
            'slug' => 'required',
            'gn_name' => 'required',
            'en_description' => 'nullable',
            'gn_description' => 'nullable',
            'status' => 'required',
        ]);

        $category = new Category();
        $category->en_name = $request->en_name;
        $category->gn_name = $request->gn_name;
        $category->en_description = $request->en_description;
        $category->gn_description = $request->gn_description;
        $category->slug = $request->slug;
        $category->status = $request->status;

        if($request->hasFile('image')) {
            $image = $request->file('image');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/uploads/category');
            $image->move($destinationPath, $name);
            $category->image = $name;
        }

        $category->save();
        return redirect()->route('admin.category.index')->with('success', 'Category created successfully');

    }



    public function edit($id) {
        $category = Category::findOrFail($id);
        return view('dashboard.pages.category.edit', compact('category'));
    }


    public function update(Request $request, $id) {

        $request->validate([
            'en_name' => 'required',
            'slug' => 'required',
            'gn_name' => 'required',
            'en_description' => 'nullable',
            'gn_description' => 'nullable',
            'status' => 'required',
        ]);

        $category = Category::findOrFail($id);
        $category->en_name = $request->en_name;
        $category->gn_name = $request->gn_name;
        $category->en_description = $request->en_description;
        $category->gn_description = $request->gn_description;
        $category->slug = $request->slug;
        $category->status = $request->status;

        if($request->hasFile('image')) {
            if($category->image && file_exists(public_path('/uploads/category/'.$category->image))){
                unlink(public_path('/uploads/category/'.$category->image));
            }
            $image = $request->file('image');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/uploads/category');
            $image->move($destinationPath, $name);
            $category->image = $name;
        }

        $category->save();
        return redirect()->route('admin.category.index')->with('success', 'Category updated successfully');
    }

    public function delete($id){
        $category = Category::findOrFail($id);
        $category->delete();
        return redirect()->route('admin.category.index')->with('success', 'Category deleted successfully');
    }
}
