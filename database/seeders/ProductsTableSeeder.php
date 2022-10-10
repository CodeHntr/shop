<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Database\Factories\ProductsFactory;


class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

//        DB::table('products')->insert([
//            'name' => str_random(10),
//            'category' => str_random(5),
//            'count' => 10,
//            'price' => '15.50',
//            'limit' => 3
//        ]);
    }
}
