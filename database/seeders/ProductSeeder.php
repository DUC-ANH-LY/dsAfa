<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name' => "LG Mobile",
                'price' => "200",
                'description' => "Vividly capture and relive your biggest moments with LG K51's",
                'category' => "mobile",
                'gallery' => "https://www.google.com/search?q=lg+mobile&rlz=1C1KNTJ_enVN1035VN1035&sxsrf=ALiCzsatdrGp01ZkKNBoOGQHkNIF5EcqPw:1671600591734&source=lnms&tbm=isch&sa=X&ved=2ahUKEwig0Oe7_Yn8AhVZq1YBHdGUArcQ_AUoAXoECAEQAw&biw=1536&bih=714&dpr=1.25#imgrc=0BvdzhIqLB0y4M",
            ],
            [
                'name' => "SamSung",
                'price' => "1000",
                'description' => "Vividly capture and relive your biggest moments with LG K51's",
                'category' => "mobile",
                'gallery' => "https://cdn.tgdd.vn/Products/Images/42/262650/samsung-galaxy-a23-cam-thumb-600x600.jpg",
            ],
            [
                'name' => "Apple",
                'price' => "5000",
                'description' => "Vividly capture and relive your biggest moments with LG K51's",
                'category' => "mobile",
                'gallery' => "https://cdn.tgdd.vn/Products/Images/42/247508/iphone-14-pro-tim-thumb-600x600.jpg",
            ]
        ]);
    }
}
