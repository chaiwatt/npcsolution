<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class FooterServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('footer_services')->insert([
            [
                'name' => 'ผลิตและจำหน่ายระบบคิวอัตโนมัติ',    
            ],
            [
                'name' => 'ออกแบบและระบบติดตั้งเครือข่าย',    
            ],
            [
                'name' => 'ออกแบบและพัฒนาระบบสารสนเทศ',    
            ],
            [
                'name' => 'อบรมการเขียนโปรแกรมและเว็บไซต์',    
            ]
        ]);
    }
}
