<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductCategory;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;

class ProductController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view("admin.product.index", [
            "products" => $products
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = ProductCategory::all();
        return view("admin.product.create", [
            "categories" => $categories
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            "name" => ["required", "string", "max:255"],
            "price_old" => ["required", "numeric", "min:0"],
            "price_new" => ["required", "numeric", "min:0"],
            "available_stock" => ["required", "numeric", "min:0"],
            "stock" => ["required", "numeric", "min:0"],
            "rating" => ["required", "numeric", "min:0"],
            "desc" => ["required", "string", "max:2048"],
            "brand" => ["required", "string", "max:255"],
            "product_category_id" => ["required", "numeric", "min:0"],
        ]);

        DB::beginTransaction();
        try {

            $validated["slug"] = Str::slug($request->name);
            $newproduct = Product::create($validated);
            DB::commit();

            return redirect()->to_route("admin.product.index")->with("success", "Product added successfully");
        } catch (Exception $e) {
            DB::rollBack();
            $error = ValidationException::withMessages([
                "system_error" => ["system_error", $e->getMessage()]
            ]);


            throw $error;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        $product = Product::where("id", $product->id)->get();
        return view("admin.product.show", [
            "product" => $product
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $product = Product::where("id", $product->id)->get();
        return view("admin.product.show", [
            "product" => $product
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $validated = $request->validate([
            "name" => ["required", "string", "max:255"],
            "price_old" => ["required", "numeric", "min:0"],
            "price_new" => ["required", "numeric", "min:0"],
            "available_stock" => ["required", "numeric", "min:0"],
            "stock" => ["required", "numeric", "min:0"],
            "rating" => ["required", "numeric", "min:0"],
            "desc" => ["required", "string", "max:2048"],
            "brand" => ["required", "string", "max:255"],
            "product-category_id" => ["required", "numeric", "min:0"],
        ]);

        DB::beginTransaction();
        try {

            $validated["slug"] = Str::slug($request->name);
            $product->update($validated);
            DB::commit();
            return redirect()->to_route("admin.product.index")->with("success", "Product updated successfully");
        } catch (Exception $e) {
            DB::rollBack();
            $error = ValidationException::withMessages([
                "system_error" => ["system_error", $e->getMessage()]
            ]);


            throw $error;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {

        DB::beginTransaction();
        try {

            $product->delete();
            DB::commit();
            return redirect()->to_route("admin.product.index")->with("success", "Product deleted successfully");
        } catch (Exception $e) {
            DB::rollBack();
            $error = ValidationException::withMessages([
                "system_error" => ["system_error", $e->getMessage()]
            ]);


            throw $error;
        }
    }
}
