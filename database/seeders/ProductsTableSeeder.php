<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 50)->create()->each(function ($u) {
            $u->posts()->save(factory(App\Post::class)->make());
        });

//        DB::table('products')->insert([
//            'name' => str_random(10),
//            'category' => str_random(5),
//            'count' => 10,
//            'price' => '15.50',
//            'limit' => 3
//        ]);
    }
}
