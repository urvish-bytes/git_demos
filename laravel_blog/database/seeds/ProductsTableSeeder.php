<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('products')->insert([[
            'title' => 'iphone 11',
            'product_code' => 'Apple',
            'description'=>'Apple company'
        ],
        [
            'title' => 'Samsung S10',
            'product_code' => 'samsung',
            'description'=>'Samsung mobile company'
        ],
        [
            'title' => 'Vivo V17',
            'product_code' => 'Vivo',
            'description'=>'Vivo digital company'
        ]]);
    }
}
