<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        $product_latests = Product::orderBy("created_at", 'desc')->limit(4)->get();
        $categories = ProductCategory::all();
        return view("front.index", [
            "categories" => $categories,
            "product_latests" => $product_latests
        ]);
    }
    public function search_sort(Request $request)
    {
        $keyword = $request->keyword;
        $sort = $request->sort;

        $selected_products = Product::where("name", "%" . $keyword . "%")->get();

        if ($sort == 1) {
            $selected_products = $selected_products->orderBy("price", 'asc')->get();
        } elseif ($sort == 2) {
            $selected_products = $selected_products->orderBy("price", 'desc')->get();
        } elseif ($sort == 3) {
            $selected_products = $selected_products->orderBy("created_at", 'desc')->get();
        }

        return view("front.products.search", [
            "selected_products" => $selected_products
        ]);
    }
}
