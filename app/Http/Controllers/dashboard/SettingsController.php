<?php

namespace App\Http\Controllers\dashboard;

use App\Models\Setting;
use App\Models\Custom_page;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Foundation\Console\OptimizeClearCommand;

class SettingsController extends Controller
{
    // Edit Page Show
    public function privacyindex($slug) {
        $custom_page = Custom_page::where('slug', $slug)->firstOrFail();
        return view('dashboard.pages.settings.privacy', compact('custom_page'));
    }

    // Update Page Logic
    public function privacyUpdate(Request $request, $slug) {
        $custom_page = Custom_page::where('slug', $slug)->firstOrFail();

        $request->validate([
            'title'   => 'required', 
            'content' => 'nullable',
            'status'  => 'required',
        ]);
        
        $custom_page->update([
            'title'            => $request->title,
            'content'          => $request->content,
            'meta_keywords'    => $request->meta_keywords, 
            'meta_title'       => $request->meta_title,
            'meta_description' => $request->meta_description,
            'status'           => $request->status,
        ]);

        // Redirect korar somoy notun slug-ti pass korun
        return redirect()->route('admin.privacy.index', $custom_page->slug)
                        ->with('success', $custom_page->title . ' Updated Successfully');
    }











    public function cc(){
        // all cash clear
        // toastr()->success('Cache Cleared');
        Artisan::call('optimize:clear');
        Artisan::call('storage:link');
        return redirect()->back();
    }
}
