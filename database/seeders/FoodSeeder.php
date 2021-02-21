<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('food')->insert([
            'name' => 'BigMac',
            'restaurant_id' => '1'
        ]);

        DB::table('food')->insert([
            'name' => 'Happy Meal',
            'restaurant_id' => '1'
        ]);

        DB::table('food')->insert([
            'name' => 'Hamburguesa con queso',
            'restaurant_id' => '2'
        ]);

        DB::table('food')->insert([
            'name' => 'Plato de lagarto',
            'restaurant_id' => '4'
        ]);

        DB::table('food')->insert([
            'name' => 'Perrito caliente',
            'restaurant_id' => '2'
        ]);

        DB::table('food')->insert([
            'name' => 'Pizza pepperoni',
            'restaurant_id' => '3'
        ]);

        DB::table('food')->insert([
            'name' => 'Lechuga a las finas hierbas',
            'restaurant_id' => '4'
        ]);

        DB::table('food')->insert([
            'name' => 'Pizza queso',
            'restaurant_id' => '3'
        ]);

        DB::table('food')->insert([
            'name' => 'Doble con menu de cosas',
            'restaurant_id' => '1'
        ]);
    }
}
