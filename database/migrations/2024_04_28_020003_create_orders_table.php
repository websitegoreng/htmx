<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId("user_id")->constrained()->onDelete("cascade");
            $table->unsignedBigInteger(
                "total_order"
            );
            $table->unsignedBigInteger(
                "subtotal"
            );
            $table->string("order_code");
            $table->string("payment_type");
            $table->dateTimeTz(
                "order_date"
            );
            $table->dateTimeTz("shipping_date");
            $table->string(
                "address"
            );
            $table->string(
                "region"
            );
            $table->string(
                "city"
            );
            $table->string(
                "postal_code"
            );
            $table->string(
                "buyer_name"
            );
            $table->string(
                "buyer_email"
            );
            $table->string(
                "buyer_telp"
            );
            $table->string(
                "recipient_name"
            );
            $table->string(
                "recipient_email"
            );
            $table->string(
                "recipient_telp"
            );
            // $table->string(
            //     "coupon"
            // );
            // $table->unsignedBigInteger(
            //     "coupon_discount"
            // );
            $table->string(
                "shipping_type"
            );
            $table->unsignedBigInteger(
                "shipping_cost"
            );
            $table->string(
                "status"
            );
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
};
