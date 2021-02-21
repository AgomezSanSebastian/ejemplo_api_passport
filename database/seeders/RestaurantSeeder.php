<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('restaurants')->insert([
            'name' => 'Mcdonals',
            'street' => 'Holea'
        ]);

        DB::table('restaurants')->insert([
            'name' => 'Burguer King',
            'street' => 'La Palmera'
        ]);

        DB::table('restaurants')->insert([
            'name' => 'Pizza Hut',
            'street' => 'La Joya'
        ]);

        DB::table('restaurants')->insert([
            'name' => 'Afrika',
            'street' => 'Bomberos'
        ]);
    }
}
