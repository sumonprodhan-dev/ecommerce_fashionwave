<?php

namespace App\Http\Controllers\dashboard;

use App\Models\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SliderController extends Controller
{
    public function index()
    {
        $sliders = Slider::latest()->paginate(10);
        return view('dashboard.pages.slider.index' , compact('sliders'));
    }

    public function create()
    {
        return view('dashboard.pages.slider.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'en_title' => 'required',
            'en_sub_title' => 'required',
            'en_btn_text' => 'required',
            'en_description' => 'required',
            'gn_title' => 'required',
            'gn_sub_title' => 'required',
            'gn_btn_text' => 'required',
            'gn_description' => 'required',
            'btn_link' => 'nullable|url',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'status' => 'required',
        ]);

        $slider = new Slider();
        $slider->en_title = $request->en_title;
        $slider->en_sub_title = $request->en_sub_title;
        $slider->en_btn_text = $request->en_btn_text;
        $slider->en_description = $request->en_description;
        $slider->gn_title = $request->gn_title;
        $slider->gn_sub_title = $request->gn_sub_title;
        $slider->gn_btn_text = $request->gn_btn_text;
        $slider->gn_description = $request->gn_description;
        $slider->btn_link = $request->btn_link;
        $slider->status = $request->status;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/sliders'), $imageName);
            $slider->image = $imageName;
        }

        $slider->save();

        

        return view('dashboard.pages.slider.index')->with('success', 'Slider created successfully');
    }

    public function edit($id)
    {
        $slider = Slider::findOrFail($id);
        return view('dashboard.pages.slider.edit', compact('slider'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'en_title' => 'required',
            'en_sub_title' => 'required',
            'en_btn_text' => 'required',
            'en_description' => 'required',
            'gn_title' => 'required',
            'gn_sub_title' => 'required',
            'gn_btn_text' => 'required',
            'gn_description' => 'required',
            'btn_link' => 'nullable|url',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'status' => 'required',
        ]);

        $slider = Slider::findOrFail($id);
        $slider->en_title = $request->en_title;
        $slider->en_sub_title = $request->en_sub_title;
        $slider->en_btn_text = $request->en_btn_text;
        $slider->en_description = $request->en_description;
        $slider->gn_title = $request->gn_title;
        $slider->gn_sub_title = $request->gn_sub_title;
        $slider->gn_btn_text = $request->gn_btn_text;
        $slider->gn_description = $request->gn_description;
        $slider->btn_link = $request->btn_link;
        $slider->status = $request->status;

        if ($request->hasFile('image')) {
            if($slider->image && file_exists(public_path('uploads/sliders/'.$slider->image))){
                unlink(public_path('uploads/sliders/'.$slider->image));
            };
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/sliders'), $imageName);
            $slider->image = $imageName;
        }

        $slider->save();

        return redirect()->route('admin.slider.index')->with('success', 'Slider updated successfully');
    }

    public function delete($id){
        $slider = Slider::findOrFail($id);
        if($slider->image && file_exists(public_path('uploads/sliders/'.$slider->image))){
            unlink(public_path('uploads/sliders/'.$slider->image));
        };
        $slider->delete();
        return redirect()->route('admin.slider.index')->with('success', 'Slider deleted successfully');
    }
}
