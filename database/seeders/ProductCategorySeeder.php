<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("product_categories")->insert([
            [
                "name" => "Accecory",
                "slug" => "accecory",
                "order_position" => 1,
                "icon" => "assets/category/accessoris.png",
            ],
            [
                "name" => "Camera",
                "order_position"
                => 2,
                "slug" => "camera",
                "icon" => "assets/category/camera.png",
            ],
            [
                "name" => "Gaming",
                "order_position"
                => 3,
                "slug" => "gaming",
                "icon" => "assets/category/gaming.png",
            ],
            [
                "name" => "Hp",
                "order_position" => 4,
                "slug" => "hp",
                "icon" => "assets/category/hp.png",
            ],
            [
                "name" => "Laptop",
                "order_position"
                => 5,
                "slug" => "laptop",
                "icon" => "assets/category/laptop.png",
            ],
            [
                "name" => "Smartwatch",
                "order_position" => 6,
                "slug" => "smartwatch",
                "icon" => "assets/category/smartwatch.png",
            ],
        ]);
    }
}
