<?php

namespace App\Http\Controllers\dashboard;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TestimonialController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::latest()->paginate(10);
        return view('dashboard.pages.testimonials.index', compact('testimonials'));
    }

    public function create()
    {
        return view('dashboard.pages.testimonials.create');
    }

    public function store(Request $request)
    {
        dd($request->all());
        $request->validate([
            'name' => 'required',
            'designation' => 'nullable',
            'rating' => 'required',
            'status' => 'required',
            'en_description' => 'nullable',
            'gn_description' => 'nullable',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);


        $testimonial = new Testimonial();
        $testimonial->name = $request->name;
        $testimonial->designation = $request->designation;
        $testimonial->en_description = $request->en_description;
        $testimonial->gn_description = $request->gn_description;
        $testimonial->rating = $request->rating;
        $testimonial->status = $request->status;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/testimonials'), $imageName);
            $testimonial->image = $imageName;
        }

        $testimonial->save();

        return redirect()->route('admin.testimonial.index')->with('success', 'Testimonial added successfully');
    }

    public function edit( $id ) {
        $testimonial = Testimonial::find($id);
        return view('dashboard.pages.testimonials.edit', compact('testimonial'));
    }
}
