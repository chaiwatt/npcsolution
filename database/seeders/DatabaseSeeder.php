<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Database\Seeders\FaceBookPagesTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(FaceBookPagesTableSeeder::class);
        $this->call(FaceBookPageLikesTableSeeder::class);
        
    }
}
