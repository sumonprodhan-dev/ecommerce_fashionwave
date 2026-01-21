<?php

namespace App\Http\Controllers\dashboard;

use App\Models\Setting;
use App\Models\Custom_page;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SettingsController extends Controller
{
    // SettingsController.php এর ভেতরে

    // public function privacyindex()
    // {
    //     // $custom_pages = Custom_page::where('slug', 'privacy-policy')->firstOrFail();
    //     // return view('dashboard.pages.settings.privacy', compact('custom_pages'));
    //     return view('dashboard.pages.settings.privacy');
    // }

    // public function privacyUpdate(Request $request){
    //     $request->validate([
    //         'title' => 'required',
    //         'slug' => 'required | unique:custom_pages,slug',
    //         'content' => 'required',
    //         'meta_keywords' => 'nullable',
    //         'meta_title' => 'nullable',
    //         'meta_description' => 'nullable',
    //         'status' => 'required',
    //     ]);
        
    //     $custom_page = Custom_page::where('slug', $request->slug)->firstOrFail($request->slug);
    //     $custom_page->title = $request->title;
    //     $custom_page->slug = $request->slug;
    //     $custom_page->meta_keywords = $request->meta_keyword;
    //     $custom_page->meta_title = $request->meta_title;
    //     $custom_page->meta_description = $request->meta_description;
    //     $custom_page->status = $request->status;
    //     $custom_page->save();

    //     return redirect()->route('custom_page.index')->with('success', 'Custom Page Updated Successfully');
    // }

    // public function privacyUpdate(Request $request) {
    // // ১. প্রথমে ডাটাটি খুঁজে বের করুন (যাতে ইউনিক চেক করার সময় বর্তমান আইডি বাদ দেওয়া যায়)
    // $custom_page = Custom_page::where('slug', $request->slug)->firstOrFail();

    // // ২. ভ্যালিডেশন
    // $request->validate([
    //     'title' => 'required',
    //     // 'unique:table,column,ignore_id' -> এখানে 'string' এর বদলে $custom_page->id হবে
    //     'slug' => 'required|unique:custom_page,slug,' . $custom_page->id, 
    //     'content' => 'required',
    //     'status' => 'required',
    // ]);
    
    // // ৩. ডাটা অ্যাসাইন করা
    // $custom_page->title = $request->title;
    // $custom_page->slug = $request->slug;
    // $custom_page->content = $request->content; // আপনি ফর্ম থেকে content পাঠাচ্ছেন
    
    // // বানান চেক: আপনার ফর্মে meta_keywords আর কন্ট্রোলারে meta_keyword (সঠিকটি লিখুন)
    // $custom_page->meta_keywords = $request->meta_keywords; 
    // $custom_page->meta_title = $request->meta_title;
    // $custom_page->meta_description = $request->meta_description;
    // $custom_page->status = $request->status;
    
    // $custom_page->save();

    // // ৪. রিডাইরেকশন (নিশ্চিত করুন custom_page.index নামে রাউট আছে)
    // return redirect()->back()->with('success', 'Custom Page Updated Successfully');
    // }


        public function privacyindex()
    {
        // ডাটাবেজ থেকে নির্দিষ্ট পেজটি ধরুন (ধরি আইডি ১)
        $custom_pages = Custom_page::where('slug', 'privacy-policy')->first();
        
        // যদি ডাটা না থাকে তবে একটি খালি অবজেক্ট দিন যাতে ভিউতে এরর না আসে
        return view('dashboard.pages.settings.privacy', compact('custom_pages'));
    }

    public function privacyUpdate(Request $request) {
        // এখানে আপনার ডাটাবেজের আইডি ব্যবহার করা নিরাপদ (হিডেন ইনপুট থেকে আসবে)
        $custom_page = Custom_page::findOrFail($request->id);

        $request->validate([
            'title' => 'required',
            // table name: custom_pages (আপনার ডাটাবেজ অনুযায়ী চেক করুন)
            'slug'  => 'required|unique:custom_pages,slug,' . $custom_page->id, 
            'content' => 'required',
            'status'  => 'required',
        ]);
        
        $custom_page->title = $request->title;
        $custom_page->slug = $request->slug;
        $custom_page->content = $request->content;
        $custom_page->meta_keywords = $request->meta_keywords; 
        $custom_page->meta_title = $request->meta_title;
        $custom_page->meta_description = $request->meta_description;
        $custom_page->status = $request->status;
        
        $custom_page->save();

        return redirect()->back()->with('success', 'Privacy Policy Updated Successfully');
    }

    public function termsPage(){
        return view('dashboard.pages.settings.terms');
    }

    public function contactPage(){
        return view('dashboard.pages.settings.contact');
    }

    public function aboutPage(){
        return view('dashboard.pages.settings.about');
    }
}
