<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\category;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = category::all();
        return view('category_form', ['categories' => $categories]);
    }

}
