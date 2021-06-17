<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class ProductCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_categories')->insert([
            [
                'name' => 'ฮาร์ดแวร์',    
            ],
            [
                'name' => 'ซอร์ฟแวร์',    
            ]
        ]);

        
    }
}
