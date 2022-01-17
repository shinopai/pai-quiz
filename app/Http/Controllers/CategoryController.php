<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    public function getAllCategories(){
        $all_categories = Category::all();

        return $all_categories;
    }
}
