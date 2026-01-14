<?php

namespace App\Http\Controllers\dashboard;

use App\Models\Tag;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TagController extends Controller
{
    public function index() {
        $tags = Tag::latest()->paginate(10);
        return view('dashboard.pages.item_tag.index', compact('tags'));
    }

    public function create() {
        return view('dashboard.pages.item_tag.create');
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required',
            'slug' => 'required',
            'status' => 'required',
        ]);

        $tag = new Tag();
        $tag->name = $request->name;
        $tag->slug = $request->slug;
        $tag->status = $request->status;

        $tag->save();

        return redirect()->route('admin.tag.index')->with('success', 'Tag created successfully.');
    }

    public function edit( $id ) {
        $tag = Tag::find($id);
        return view('dashboard.pages.item_tag.edit', compact('tag'));
    }


    public function update(Request $request, $id) {
        $request->validate([
            'name' => 'required',
            'slug' => 'required',
            'status' => 'required',
        ]);

        $tag = tag::find($id);
        $tag->name = $request->name;
        $tag->slug = $request->slug;
        $tag->status = $request->status;

        $tag->save();

        return redirect()->route('admin.tag.index')->with('success', 'Tag updated successfully.');
    }


    public function delete($id) {
        $tag = tag::find($id);
        $tag->delete();
        return redirect()->route('admin.tag.index')->with('success', 'Tag deleted successfully.');
    }
}
