<?php

namespace App\Http\Controllers;

use App\Models\UserAddress;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;

class UserAddressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $addresses = UserAddress::where("user_id", Auth::id())->get();
        return view("address.index", [
            "addresses" => $addresses
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("address.create");
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
            "address" => ["required", "string", "max:255"],
            "region" => ["required", "string", "max:255"],
            "city" => ["required", "string", "max:255"],
            "postal_code" => ["required", "string", "max:255"],
            "is_primary" => ["required", "numeric", "min:0"],
        ]);

        DB::beginTransaction();
        try {

            $newaddress = UserAddress::create($validated);
            DB::commit();

            if (UserAddress::where("is_primary", 1)->count() > 1) {
                foreach (UserAddress::where("is_primary", 1)->get() as $address) {
                    if ($address->id == $newaddress->id) {
                        continue;
                    } else {
                        $address->update(["is_primary" == 0]);
                    }
                }
            }

            return redirect()->to_route("address.index")->with("success", "Address added successfully");
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
     * @param  \App\Models\UserAddress  $userAddress
     * @return \Illuminate\Http\Response
     */
    public function show(UserAddress $userAddress)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserAddress  $userAddress
     * @return \Illuminate\Http\Response
     */
    public function edit(UserAddress $userAddress)
    {
        $address = UserAddress::where("id", $userAddress->id)->get();
        return view("address.show", [
            "address" => $address
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UserAddress  $userAddress
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserAddress $userAddress)
    {
        $validated = $request->validate([
            "address" => ["required", "string", "max:255"],
            "region" => ["required", "string", "max:255"],
            "city" => ["required", "string", "max:255"],
            "postal_code" => ["required", "string", "max:255"],
            "is_primary" => ["required", "numeric", "min:0"],
        ]);

        DB::beginTransaction();
        try {
            $userAddress->update($validated);
            DB::commit();

            if (UserAddress::where("is_primary", 1)->count() > 1) {
                foreach (UserAddress::where("is_primary", 1)->get() as $address) {
                    if ($address->id == $userAddress->id) {
                        continue;
                    } else {
                        $address->update(["is_primary" == 0]);
                    }
                }
            }

            return redirect()->to_route("address.index")->with("success", "Address updated successfully");
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
     * @param  \App\Models\UserAddress  $userAddress
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserAddress $userAddress)
    {
        DB::beginTransaction();
        try {

            $userAddress->delete();
            DB::commit();
            return redirect()->to_route("address.index")->with("success", "Address deleted successfully");
        } catch (Exception $e) {
            DB::rollBack();
            $error = ValidationException::withMessages([
                "system_error" => ["system_error", $e->getMessage()]
            ]);


            throw $error;
        }
    }
}
