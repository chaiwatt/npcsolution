<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;

class LineClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('line_clients')->insert([
            [
                'client_id' => 'EgZxcmnu8BOTubAGfxLx5d',    
                'client_secret' => 'wamEBJlAJKHNtDZ08SjRFTrNyXhvS7T3gkWvRW7BSsY',  
            ]
        ]);
    }
}
