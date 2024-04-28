<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carts = Cart::where("user_id", Auth::id())->get();
        return view("front.cart.index", [
            "carts" => $carts
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            "product_id" => ["required", "numeric", "min:0"],
        ]);

        DB::beginTransaction();
        try {
            $validated["user_id"] = Auth::id();
            DB::commit();

            return redirect()->to_route("front.cart.index")->with("success", "Product added successfully");
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
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function show(Cart $cart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cart $cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cart $cart)
    {
        DB::beginTransaction();
        try {

            $cart->delete();
            DB::commit();
            return redirect()->to_route("front.cart.index")->with("success", "Product deleted successfully");
        } catch (Exception $e) {
            DB::rollBack();
            $error = ValidationException::withMessages([
                "system_error" => ["system_error", $e->getMessage()]
            ]);


            throw $error;
        }
    }
}
