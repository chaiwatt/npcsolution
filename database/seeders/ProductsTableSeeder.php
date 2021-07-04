<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name' => 'เครื่องอ่านบัตรประชาชนพร้อม SDK',    
                'slug' => 'เครื่องอ่านบัตรประชาชนพร้อม-SDK', 
                'picture' => 'assets/website/images/products/smartcard.png', 
                'description' => 'การนำไปใช้งาน ใช้กับระบบงานบัตรประชาชน ระบบทะเบียนราษฏร์ของกรมการปกครอง ระบบประกันสุขภาพ (สปสช. NHSO) และประกันสังคมสำหรับโรงพยาบาล คลินิก โรงพยาบาล โรงเรียน มหาวิทยาลัย หน่วยงานด้านเกษตรและสหกรณ์ สถานีตำรวจ หน่วยงานบริการประชาชนธนาคาร สถาบันการเงิน โรงแรม บริษัทขนส่ง หน่วยงานราชการ องค์การบริหารส่วนจังหวัด ที่ว่าการอำเภอ องค์กรภาครัฐและเอกชนอื่นๆ', 
                'specification' => '<div><h2 style="font-size: 22px">ข้อมูลจำเพาะเครื่องอ่านบัตร</h2></div> <ul class="listing-style"> <li> <i class="fa fa-check-circle text-success"></i> <span>สามารถอ่านบัตรประจําตัวประชาชนแบบเอนกประสงค์(Smart Card )ได้ตามมาตรฐาน ISO/IEC 7816</span> </li> <li> <i class="fa fa-check-circle text-success"></i> <span>สามารถใช้งานได้ตามมาตรฐาน Microsoft Personal Computer /Smart Card(PC/SC)</span> </li> <li> <i class="fa fa-check-circle text-success"></i> <span>ความเร็วในการส่ง: 12 Mbps (USB 2.0 full speed)</span> </li> <li> <i class="fa fa-check-circle text-success"></i> <span>แหล่งจ่ายไฟ: พอร์ตยูเอสบี</span> </li> <li> <i class="fa fa-check-circle text-success"></i> <span>อินเตอร์เฟส: USB 2.0 CCID1 (ใช้ได้กับ USB 1.1)</span> </li> <li> <i class="fa fa-check-circle text-success"></i> <span>มาตรฐาน: ISO/IEC 7816 และ EMV2 2000 ระดับ 1</span> </li> <li> <i class="fa fa-check-circle text-success"></i> <span>โปรโตคอล: T = 0, T = 1, 2 สาย: SLE 4432/42 (S = 10) 3 สาย: SLE 4418/28 (S = 9) I2C (S = 8)</span> </li> <li> <i class="fa fa-check-circle text-success"></i> <span>ขนาดบัตร: ID-1 (ขนาดเต็ม)</span> </li> <li> <i class="fa fa-check-circle text-success"></i> <span>ความเร็วของส่วนการเชื่อมต่อสมาร์ทการ์ด: 420 Kbps (เมื่อรองรับการ์ด)</span> </li> <li> <i class="fa fa-check-circle text-success"></i> <span>ความถี่สัญญาณนาฬิกาสมาร์ทการ์ด: ไม่น้อยกว่า 4.8 MHZ</span> </li> <li> <i class="fa fa-check-circle text-success"></i> <span>ประเภทบัตรที่รองรับ: 5V, 3V และ 1.8V สมาร์ทการ์ด ISO 7816 Class A, AB และ C</span> </li> <li> <i class="fa fa-check-circle text-success"></i> <span>ระบบปฏิบัติการที่รองรับ: Windows 98/Me/2000/NT 4.0/XP/CE/Vista/7/8/8.1/10, Linux, Mac OS 10.6-10.10</span> </li> <li> <i class="fa fa-check-circle text-success"></i> <span>การตรวจจับสมาร์ทการ์ด: การตรวจจับการเสียบบัตรพร้อมการปิดเครื่องอัตโนมัติการตรวจจับชนิดสมาร์ทการ์ดโดยอัตโนมัติการลัดวงจรและการป้องกันความร้อน</span> </li> </ul> <div class="mt-4"><h2 style="font-size: 22px">ข้อมูลจำเพาะ SDK</h2></div> <ul class="listing-style"> <li> <i class="fa fa-check-circle text-success"></i> <span>รองรับเครื่องอ่านบัตรประชาชนทุกยี่ห้อ</span> </li> <li> <i class="fa fa-check-circle text-success"></i> <span>รองรับโปรแกรม Visual Studio 2005/2010/2015/2017/2019</span> </li> <li> <i class="fa fa-check-circle text-success"></i> <span>รองรับรับภาษาโปรแกรม C#, VB, C++ (มีโค้ดโปรแกรมตัวอย่าง C# สำหรับ Win Form และ Javascript สำหรับอ่านบัตรผ่านเว็ปไซต์แถมให้) </span> </li> <li> <i class="fa fa-check-circle text-success"></i> <span>สามารถอ่านข้อมูลบัตรประชาชน ดังนี้ หมายเลขบัตรประชาชน, คำนำหน้าไทย-อังกฤษ, ชื่อไทย-อังกฤษ, นามสกุลไทย-อังกฤษ, รูปถ่าย, ที่อยู่, เพศ, วดป.เกิด, วันออกบัตร-หมดอายุ</span> </li> <li> <i class="fa fa-check-circle text-success"></i> <span>มีระบบป้องกัน License ด้วย Name และ Key</span> </li> </ul>', 
                'details' => 'การนำไปใช้งาน ใช้กับระบบงานบัตรประชาชน ระบบทะเบียนราษฏร์ของกรมการปกครอง ระบบประกันสุขภาพ (สปสช. NHSO) และประกันสังคมสำหรับโรงพยาบาล คลินิก โรงพยาบาล โรงเรียน มหาวิทยาลัย หน่วยงานด้านเกษตรและสหกรณ์ สถานีตำรวจ หน่วยงานบริการประชาชนธนาคาร สถาบันการเงิน โรงแรม บริษัทขนส่ง หน่วยงานราชการ องค์การบริหารส่วนจังหวัด ที่ว่าการอำเภอ องค์กรภาครัฐและเอกชนอื่นๆ', 
                'video' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/hWPJPQz_iEg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>', 
                'saleprice' => 1350, 
                'qrpayment' => 'assets/website/images/products/qrpayment/smartcard.png',
                'product_category_id' => 1,
                'stock' => 10
            ]
        ]);
    }
}
