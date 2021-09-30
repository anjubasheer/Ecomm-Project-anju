<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;


use Illuminate\Database\Seeder;

class productSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            'name'=>'Sugar Free Natura Diet Sugar',
            "price"=>"215",
            "description"=>"Sugar Free is nutritious, safe and ideal low calorie sugar substitute, giving you the sweetness and taste of sugar but with negligible calories; ideal for health conscious, overweight and diabetics and absolutely safe",
            "category"=>"diabetes care",
            "gallery"=>"https://res.sastasundar.com/incom/images/product/Sugar-Free-Natura-Diet-Sugar-1553331902-10009695-1.jpg"
        ],
        [
            'name'=>'Accu-Chek Active Test Strips, 50 Count',
            "price"=>"877",
            "description"=>"Accu-Chek Active Test Strip is a portable and handy self-testing kit for people with diabetes and high blood sugar levels. With this super smart and easy test strip, you can get results at home that is accurate and quickly available. In just a few seconds, it reflects the results and there is also an option for double-checking the displayed test result.",
            "category"=>"diabetes care",
            "gallery"=>"https://n3.sdlcdn.com/imgs/a/m/7/Accu-Chek-Active-100-Strips-1519366-1-a9e8c.jpg"
        ]);
    }
}
