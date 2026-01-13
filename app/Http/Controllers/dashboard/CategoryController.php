<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function indexBrand(){
        return view('dashboard.pages.brand.index');
    }
    
    public function createBrand(){
        return view('dashboard.pages.brand.create');
    }


    public function indexCategory(){
        return view('dashboard.pages.category.index');
    }

    public function createCategory(){
        return view('dashboard.pages.category.create');
    }
}
