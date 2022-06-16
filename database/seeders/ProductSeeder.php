<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert(
            [
                "name" => "Lg Mobile",
                "price" => "15000",
                "description" => "A smart phone with 4gb ram and 4g internet enabled",
                "category" => "mobile",
                "gallery" => "https://image.shutterstock.com/shutterstock/photos/421248187/display_1500/stock-photo-chiang-mai-thailand-may-man-hand-holding-lg-g-with-google-maps-application-o-google-421248187.jpg"
            ],
            [
                "name" => "Oppo Mobile",
                "price" => "25000",
                "description" => "A smart phone with 4gb ram and 4g internet enabled",
                "category" => "mobile",
                "gallery" => "https://image.shutterstock.com/image-photo/berlin-20-december-2021-oppo-600w-2094486436.jpg"
            ],
            [
                "name" => "Realme Mobile",
                "price" => "30000",
                "description" => "A smart phone with 4gb ram and 4g internet enabled",
                "category" => "mobile",
                "gallery" => "https://image.shutterstock.com/image-photo/beijing-china-28-march-2021-600w-1945334857.jpg"
            ],
            [
                "name" => "iPhone",
                "price" => "50000",
                "description" => "A smart phone with 4gb ram and 4g internet enabled",
                "category" => "mobile",
                "gallery" => "https://image.shutterstock.com/image-photo/nova-bana-slovakia-nov-28-600w-769425553.jpg"
            ],
            [
                "name" => "LG Led tv",
                "price" => "15000",
                "description" => "A smart LED with 32 inch large hd display",
                "category" => "TV",
                "gallery" => "https://image.shutterstock.com/image-photo/poznan-pol-feb-04-2020-600w-1923161831.jpg"
            ]
        );
    }
}
