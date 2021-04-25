<?php

namespace Database\Seeders;
use DB;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class FaceBookPageLikesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('face_book_page_like_users')->insert([
            [
                'name' => 'สมพร',    
                'email' => 'contact@npcsolution.com',     
                'password' => Hash::make('11111111'), 
                'email_verified_at' => Carbon::now()->toDateString(),
            ]
        ]);
    }
}
