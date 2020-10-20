<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
               'name'=>'Samsung Fridge',
               'price'=>'450',
               'category'=>'Homeware',
               'description'=>'A Smart fridge with all the extras',
               'gallery'=>"https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQai2TIaO5yReNNbmUHEn2finhDisVShPm0qg&usqp=CAU"            ],
            [
               'name'=>'Samsung TV',
               'price'=>'870',
               'category'=>'Entertainment',
               'description'=>'A Smart TV with all the extras',
               'gallery'=>"https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTsiW2ASVwp5ZaEPygUopHBGDlrNjqwGi4YtA&usqp=CAU"
            ],
            [
               'name'=>'Apple Macbook',
               'price'=>'1350',
               'category'=>'Laptop',
               'description'=>'A Laptop with all the extras',
               'gallery'=>"https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSysRUU-NrhRuNE23LHkxSqQkysIHqgYPXPSQ&usqp=CAU"
            ],
            [
               'name'=>'Lenovo Laptop',
               'price'=>'880',
               'category'=>'Laptop',
               'description'=>'A PC Laptop with all the extras',
               'gallery'=>"https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRQs8hEAKnCmUFrwR05zRhhOQ6B5zA2cEqISQ&usqp=CAU"
            ]
        ]);
    }
}
