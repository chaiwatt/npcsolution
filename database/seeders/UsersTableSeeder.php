<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'chaiwat',
                'email' => 'contact@npcsolution.com',        
                'linetoken' => 'FzQOFQXI2UPTluBNPIHdlyq3qneOvO9GoYSRAGof6Do',
                'type' => 1,
                'password' => Hash::make('11111111')
            ],
            [
                'name' => 'karn',
                'email' => 'npcsolutionandservice@gmail.com',    
                'linetoken' => '',    
                'type' => 1,    
                'password' => Hash::make('11111111')
            ]
        ]);
    }
}
