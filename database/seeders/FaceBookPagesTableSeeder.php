<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;

class FaceBookPagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('face_book_pages')->insert([
            [
                'pagename' => 'Laravel VueJs',
                'url' => 'https://www.facebook.com/LaravelVueJs',
            ],
            [
                'pagename' => 'Vue Developers',
                'url' => 'https://www.facebook.com/VueDevelopers',
            ],
            [
                'pagename' => 'Laravel News',
                'url' => 'https://www.facebook.com/laravelnews',
            ],
            [
                'pagename' => 'JustLaravel.com',
                'url' => 'https://www.facebook.com/justLaravel',
            ],
            [
                'pagename' => 'Laravel',
                'url' => 'https://www.facebook.com/LaravelCommunity',
            ],
            [
                'pagename' => 'Laravel Developers',
                'url' => 'https://www.facebook.com/laravel4u',
            ]
        ]);
    }
}
