<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function getData() {
        return Product::join('product_assets', 'products.id', '=', 'product_assets.product_id')
            ->join('assets', 'product_assets.asset_id', '=', 'assets.id')
            ->get(['products.id', 'products.product_name', 'products.product_slug', 'products.price', 'products.description', 'assets.path']);
    }

    public function getDataBySlug($slug) {
        return Product::join('product_assets', 'products.id', '=', 'product_assets.product_id')
            ->join('assets', 'product_assets.asset_id', '=', 'assets.id')
            ->where('products.product_slug', $slug)
            ->get(['products.id', 'products.product_name', 'products.product_slug', 'products.price', 'products.description', 'assets.path']);
    }

    public function showProducts() {
        return view('products', [
            "title" => "Products",
            "products" => self::getData()->unique('id')
        ]);
    }

    public function showProductDetail($slug) {
        $data = self::getDataBySlug($slug);
        return view('product', [
            "title" => $slug,
            "product" => $data
        ]);
    }
}
