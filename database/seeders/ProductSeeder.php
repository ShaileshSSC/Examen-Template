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
                'name' => 'Taart',
                'price' => 9.99,
                'instock'    => true
            ],
            [
                'name' => 'Appelflap',
                'price' => 1.99,
                'instock'    => true
            ],
            [
                'name' => 'Brood',
                'price' => 1.00,
                'instock'    => true
            ],
            [
                'name' => 'Cookies',
                'price' => 4.99,
                'instock'    => true
            ]
        ]);
    }
}
