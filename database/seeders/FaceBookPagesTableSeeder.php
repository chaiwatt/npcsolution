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
                'user_id' => 1,
                'pagename' => 'FB page like exchage',
                'url' => 'https://www.facebook.com/FB-page-like-exchage-106841894882459',
                'premium' => 2,
            ],
            [
                'user_id' => 1,
                'pagename' => 'Full stack developer',
                'url' => 'https://www.facebook.com/Full-stack-developer-106732008227295',
                'premium' => 2,
            ],
            [
                'user_id' => 1,
                'pagename' => 'หวยวิ่งเวียดนามเข้าทุกงวด',
                'url' => 'https://www.facebook.com/vietnamlottery',
                'premium' => 2,
            ],
            [
                'user_id' => 1,
                'pagename' => 'Zigmamedical',
                'url' => 'https://www.facebook.com/Zigmamedical-1367738453363931',
                'premium' => 2,
            ],
            [
                'user_id' => 2,
                'pagename' => 'ผลิตภัณฑ์จากสมุนไพรแท้ 100%',
                'url' => 'https://www.facebook.com/%E0%B8%9C%E0%B8%A5%E0%B8%B4%E0%B8%95%E0%B8%A0%E0%B8%B1%E0%B8%93%E0%B8%91%E0%B9%8C%E0%B8%88%E0%B8%B2%E0%B8%81%E0%B8%AA%E0%B8%A1%E0%B8%B8%E0%B8%99%E0%B9%84%E0%B8%9E%E0%B8%A3%E0%B9%81%E0%B8%97%E0%B9%89-100-110511401175464',
                'premium' => 2,
            ],
            [
                'user_id' => 2,
                'pagename' => 'สินค้านำเข้าคุณภาพดีราคาถูก 100%',
                'url' => 'https://www.facebook.com/%E0%B8%AA%E0%B8%B4%E0%B8%99%E0%B8%84%E0%B9%89%E0%B8%B2%E0%B8%99%E0%B8%B3%E0%B9%80%E0%B8%82%E0%B9%89%E0%B8%B2%E0%B8%84%E0%B8%B8%E0%B8%93%E0%B8%A0%E0%B8%B2%E0%B8%9E%E0%B8%94%E0%B8%B5%E0%B8%A3%E0%B8%B2%E0%B8%84%E0%B8%B2%E0%B8%96%E0%B8%B9%E0%B8%81-100-106425608260946',
                'premium' => 2,
            ],
            [
                'user_id' => 2,
                'pagename' => 'สินค้าราคาถูก คุณภาพดี',
                'url' => 'https://www.facebook.com/%E0%B8%AA%E0%B8%B4%E0%B8%99%E0%B8%84%E0%B9%89%E0%B8%B2%E0%B8%A3%E0%B8%B2%E0%B8%84%E0%B8%B2%E0%B8%96%E0%B8%B9%E0%B8%81-%E0%B8%84%E0%B8%B8%E0%B8%93%E0%B8%A0%E0%B8%B2%E0%B8%9E%E0%B8%94%E0%B8%B5-106435741594009',
                'premium' => 2,
            ]
        ]);
    }
}
