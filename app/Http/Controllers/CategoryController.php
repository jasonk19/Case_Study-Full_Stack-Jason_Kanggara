<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function getData() {
        return Category::join('assets', 'categories.asset_id', '=', 'assets.id')
        ->get(['categories.id', 'categories.category_name', 'categories.category_slug', 'assets.path']);
    }

    public function showCategories() {
        return view('categories', [
            "title" => "Category",
            "categories" => self::getData()
        ]);
    }

    public function showCategoryDetail($slug) {
        $data = self::getData();
        return view('category', [
            "title" => $slug,
            "category" => self::getData()->where('category_slug', $slug)->first()
        ]);
    }
}
