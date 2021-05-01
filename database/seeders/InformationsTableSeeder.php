<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;

class InformationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('information')->insert([
            [
                'name' => 'FB Page Like Exchange',    
                'version' => '1.0',     
                'mode' => 1, 
                'company' => 'NPC SOLUTION'
            ]
        ]);
    }
}
