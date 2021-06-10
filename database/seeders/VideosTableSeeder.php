<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;

class VideosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('videos')->insert([
            [
                'title' => 'ระบบคิวอัตโนมัติ',  
                'name'  => 'แอพเรียกคิว',
                'image' => 'assets/website/images/videos/1.png',
                'url' => 'https://www.youtube.com/watch?v=OAthoBs3PC8'
            ],
            [
                'title' => 'ระบบคิวอัตโนมัติ',  
                'name'  => 'ใส่เอฟเฟคโปรแกรมเรียกคิว',
                'image' => 'assets/website/images/videos/2.png',
                'url' => 'https://www.youtube.com/watch?v=6fEyEPFvVHY'
            ],
            [
                'title' => 'ระบบคิวอัตโนมัติ',  
                'name'  => 'การเรียกคิว',
                'image' => 'assets/website/images/videos/3.png',
                'url' => 'https://www.youtube.com/watch?v=--tVj-KKyUI'
            ],
            [
                'title' => 'ระบบคิวอัตโนมัติ',  
                'name'  => 'คิวห้องจ่ายยา',
                'image' => 'assets/website/images/videos/4.png',
                'url' => 'https://www.youtube.com/watch?v=c61ooPsyY0c'
            ],
            [
                'title' => 'ระบบคิวอัตโนมัติ',  
                'name'  => 'คิวสถานีขนส่ง',
                'image' => 'assets/website/images/videos/5.png',
                'url' => 'https://www.youtube.com/watch?v=FZfMyRCg_8g'
            ],
            [
                'title' => 'ระบบคิวอัตโนมัติ',  
                'name'  => 'ตู้กดคิว',
                'image' => 'assets/website/images/videos/6.png',
                'url' => 'https://www.youtube.com/watch?v=sMhP9Z1TlVM'
            ],
            [
                'title' => 'ระบบคิวอัตโนมัติ',  
                'name'  => 'ระบบรายงาน',
                'image' => 'assets/website/images/videos/7.png',
                'url' => 'https://www.youtube.com/watch?v=EmeSkoHAylo'
            ],
            [
                'title' => 'โปรแกรมรังวัด',  
                'name'  => 'การแปลงพิกัด UTM และพิกัดภูมิศาสตร์',
                'image' => 'assets/website/images/videos/8.png',
                'url' => 'https://www.youtube.com/watch?v=dfX6WnxZmvA'
            ],
            [
                'title' => 'โปรแกรมรังวัด',  
                'name'  => 'การเพิ่มระวาง',
                'image' => 'assets/website/images/videos/9.png',
                'url' => 'https://www.youtube.com/watch?v=YZCrY_6dxbI'
            ],
            [
                'title' => 'โปรแกรมรังวัด',  
                'name'  => 'สร้างระวางแผนที่',
                'image' => 'assets/website/images/videos/10.png',
                'url' => 'https://www.youtube.com/watch?v=VAQiFbSVsgQ'
            ],
        ]);
    }
}
