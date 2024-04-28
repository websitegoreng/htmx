<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = order::all();
        return view("order.index", [
            "orders" => $orders
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("order.create");
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

            "total_order" => ["required", "numeric", "min:0"],
            "subtotal" => ["required", "numeric", "min:0"],
            "payment_type" => [
                "required",
                "string", "max:255"
            ],
            "address" => [
                "required",
                "string", "max:255"
            ],
            "region" => [
                "required",
                "string", "max:255"
            ],
            "city" => ["required", "string", "max:255"],
            "postal_code" => ["required", "string", "max:255"],
            "buyer_name" => ["required", "string", "max:255"],
            "buyer_email" => ["required", "string", "max:255"],
            "buyer_telp" => ["required", "string", "max:255"],
            "recipient_name" => ["required", "string", "max:255"],
            "recipient_email" => ["required", "string", "max:255"],
            "recipient_telp" => ["required", "string", "max:255"],
            // "coupon" => ["required", "string", "max:255"],
            // "coupon_discount" => ["required", "numeric", "min:0"],
            "shipping_type" => ["required", "string", "max:255"],
            "status" => ["required", "string", "max:255"],
            // "shipping_cost" => ["required", "numeric", "min:0"],

        ]);

        DB::beginTransaction();
        try {
            $list = [];
            for ($i = 0; $i < 10000000; $i++) {
                $list[] = $i;
            }

            $collection = collect($list);

            $duar = $collection->random();
            $validated["order_code"] = Hash::make($duar);
            $new_order = Order::create($validated);
            DB::commit();
            return redirect()->to_route("order.index")->with("success", "order created successfully");
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
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
