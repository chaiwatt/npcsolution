<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Database\Seeders\FaceBookPagesTableSeeder;
use Database\Seeders\FooterServicesTableSeeder;
use Database\Seeders\ProductCategoriesTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(FooterServicesTableSeeder::class);
        $this->call(ProductCategoriesTableSeeder::class);
        $this->call(VideosTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(LineClientsTableSeeder::class);
        $this->call(UsersTableSeeder::class); 
    }
}
