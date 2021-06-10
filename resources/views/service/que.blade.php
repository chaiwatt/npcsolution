@extends('layouts.main')
@section('styles')
@endsection
    @section('content')

    <div class="rs-breadcrumbs img3">
        <div class="breadcrumbs-inner text-center">
            <h1 class="page-title">บริการ</h1>
            <ul>
                <li title="Braintech - IT Solutions and Technology Startup HTML Template">
                    <a class="active" href="{{url('')}}">หน้าแรก</a>
                </li>
                <li title="Go To Product">
                    <a class="active" href="{{url('')}}#services">บริการ</a>
                </li>
                <li>ระบบคิวอัตโนมัติ</li>
            </ul>
        </div>
    </div>
    <div class="rs-services-single pt-120 pb-120 md-pt-80 md-pb-80">
        <div class="container">
            <div class="text-center" >
                <img  src="http://localhost/npc/wp-content/uploads/2016/01/full_wireless_smartqueuesystem-2-1024x538.png" alt="">
            </div>

            <h2 class="mt-30">ตู้คีออส</h2>
            <div class="row mb-50">
                <div class="col-lg-3 md-mb-50 text-center" data-aos="fade-up" data-aos-delay="100">
                    <img src="{{asset('assets/website/images/services/que/kios.png')}}" style="width: 90%;heigh:90%" alt="">
                </div>
                <div class="col-lg-9 md-mb-50">
                    <div class="rs-testimonial style5">
                        <div class="testi-item mt-2 pt-0 pb-0 pl-0 pr-0 text-left" data-aos="fade-right" data-aos-delay="100">
                            <p><i class="fa fa-check-circle"></i> เครื่องกดบัตรคิวหน้าจอสัมผัส (Touch Screen) ขนาด 15/17/24 นิ้ว แสดงผลความละเอียดสูง (High Definition)</p>
                        </div>
                        <div class="testi-item mt-2 pt-0 pb-0 pl-0 pr-0 text-left mt-1" data-aos="fade-right" data-aos-delay="200">
                            <p><i class="fa fa-check-circle"></i> เชื่อมต่อกับเครื่องเรียกคิว (Caller) ผ่านระบบเครือข่ายสาย LAN (TCP/IP) และระบบไร้สาย (WIFI)</p>
                        </div>
                        <div class="testi-item mt-2 pt-0 pb-0 pl-0 pr-0 text-left mt-1" data-aos="fade-right" data-aos-delay="300" >
                            <p><i class="fa fa-check-circle"></i> ตัวเครื่อง KIOSK ขึ้นรูปด้วยอะคลีลิกและ PVC มีความสวยงาม และมีความแข็งแรง ทนทานสูง</p>
                        </div>
                        <div class="testi-item mt-2 pt-0 pb-0 pl-0 pr-0 text-left mt-1" data-aos="fade-right" data-aos-delay="400">
                            <p><i class="fa fa-check-circle"></i> ติดตั้งปลั๊กอินเครื่องพิมพ์ความร้อนขนาด 80 มม สามารถถอดเปลี่ยนเพื่อทำความสะอาดหรือบำรุงรักษาได้ง่าย</p>
                        </div>
                        <div class="testi-item mt-2 pt-0 pb-0 pl-0 pr-0 text-left mt-1" data-aos="fade-right" data-aos-delay="500">
                            <p><i class="fa fa-check-circle"></i> เชื่อมต่อการแสดงผลผ่านจอทีวีขนาด 32/42/50 นิ้ว ผ่าน HDMI โดยไม่ต้องปรับแต่งโปรแกรม</p>
                        </div>
                        <div class="testi-item mt-2 pt-0 pb-0 pl-0 pr-0 text-left mt-1" data-aos="fade-right" data-aos-delay="600">
                            <p><i class="fa fa-check-circle"></i> สามารถกำหนดประเภทบริการ และจำนวนบริการได้และเลย์เอาท์หน้าจอ ภาพพื้นหลังและสีปุ่มกดได้</p>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <h2 class="mt-30">แอพเรียกคิว</h2>
            <div class="row mb-50">
                <div class="col-lg-3 md-mb-50 text-center">
                    <img src="{{asset('assets/website/images/services/que/iphone-6.png')}}" alt="" data-aos="fade-up" data-aos-delay="100">
                </div>

                
                <div class="col-lg-9 md-mb-50">
                    <div class="rs-testimonial style5">
                        <div class="testi-item mt-2 pt-0 pb-0 pl-0 pr-0 text-left" data-aos="fade-right" data-aos-delay="50">
                            <p><i class="fa fa-check-circle"></i> เครื่องกดเรียกคิวมาตรฐาน 23ฟังก์ชั่น รันบนเว็บบราวเซอร์รองรับการทำงานบนคอมพิวเตอร์และสมาร์ทโฟน</p>
                        </div>
                        <div class="testi-item mt-2 pt-0 pb-0 pl-0 pr-0 text-left mt-1" data-aos="fade-right" data-aos-delay="50">
                            <p><i class="fa fa-check-circle"></i> มีการระบบการเข้าสู่ระบบการใช้งานด้วย username และ password เพื่อความปลอดภัยและการเก็บข้อมูลเจ้าหน้าที่</p>
                        </div>
                        <div class="testi-item mt-2 pt-0 pb-0 pl-0 pr-0 text-left mt-1" data-aos="fade-right" data-aos-delay="50">
                            <p><i class="fa fa-check-circle"></i> สามารถกำหนดและบันทึกหมายเลขไอพีเซิร์ฟเวอร์ หมายเลขบริการและรหัสพนักงานได้</p>
                        </div>
                        <div class="testi-item mt-2 pt-0 pb-0 pl-0 pr-0 text-left mt-1" data-aos="fade-right" data-aos-delay="50">
                            <p><i class="fa fa-check-circle"></i> สามารถกำหนด เปลี่ยน และบันทึกประเภทคิวได้เอง เช่นคิวปกติและคิวสำหรับงานพิเศษ</p>
                        </div>
                        <div class="testi-item mt-2 pt-0 pb-0 pl-0 pr-0 text-left mt-1" data-aos="fade-right" data-aos-delay="50">
                            <p><i class="fa fa-check-circle"></i> สามารถกำหนดและเรียกคิวได้เองโดยระบุหมายเลขคิวโดยไม่ต้องรับคิวจากตู้คีออส</p>
                        </div>

                    </div>
                </div>
            </div>

            <hr>
            <h2 class="mt-30">แอพเรียกคิวติดตั้งลงคอมพิวเตอร์</h2>
            <div class="row mb-50">
                <div class="col-lg-3 md-mb-50 text-center">
                    <img src="{{asset('assets/website/images/services/que/windowsapp.png')}}" alt="" style="width: 90%;heigh:90%" data-aos="fade-up" data-aos-delay="100">
                </div>
                <div class="col-lg-9 md-mb-50">
                    <div class="rs-testimonial style5">
                        <div class="testi-item mt-2 pt-0 pb-0 pl-0 pr-0 text-left" data-aos="fade-right" data-aos-delay="50">
                            <p><i class="fa fa-check-circle"></i> แอพลิเคชั่นเรียกคิวมาตรฐาน 23ฟังก์ชั่น สำหรับติดตั้งลงบนระบบปฏิบัติการวินโดส์ 7/8/10</p>
                        </div>
                        <div class="testi-item mt-2 pt-0 pb-0 pl-0 pr-0 text-left mt-1" data-aos="fade-right" data-aos-delay="50">
                            <p><i class="fa fa-check-circle"></i> มีการระบบการเข้าสู่ระบบการใช้งานด้วย username และ password เพื่อความปลอดภัยและการเก็บข้อมูลเจ้าหน้าที่</p>
                        </div>
                        <div class="testi-item mt-2 pt-0 pb-0 pl-0 pr-0 text-left" data-aos="fade-right" data-aos-delay="50">
                            <p><i class="fa fa-check-circle"></i> แอพลิเคชั่นออกแบบให้มีเมนูสไลด์ด้านข้าง (Navigation drawer) สามารถใช้งานเมนูได้สะดวก</p>
                        </div>
                        <div class="testi-item mt-2 pt-0 pb-0 pl-0 pr-0 text-left mt-1" data-aos="fade-right" data-aos-delay="50">
                            <p><i class="fa fa-check-circle"></i> สามารถกำหนดและบันทึกหมายเลขไอพีเซิร์ฟเวอร์ หมายเลขบริการและรหัสพนักงานได้</p>
                        </div>
                        <div class="testi-item mt-2 pt-0 pb-0 pl-0 pr-0 text-left mt-1" data-aos="fade-right" data-aos-delay="50">
                            <p><i class="fa fa-check-circle"></i> สามารถกำหนด เปลี่ยน และบันทึกประเภทคิวได้เอง เช่นคิวปกติและคิวสำหรับงานพิเศษ</p>
                        </div>
                        <div class="testi-item mt-2 pt-0 pb-0 pl-0 pr-0 text-left mt-1" data-aos="fade-right" data-aos-delay="50">
                            <p><i class="fa fa-check-circle"></i> สามารถเรียกคิวซ้ำและ hold คิวไม่จำกัดจำนวนโดยเลือกจากรายการคิวปัจจุบันที่แสดงบนจอแสดงผล</p>
                        </div>
                        <div class="testi-item mt-2 pt-0 pb-0 pl-0 pr-0 text-left mt-1" data-aos="fade-right" data-aos-delay="50">
                            <p><i class="fa fa-check-circle"></i> แสดงประเภทคิว ลำดับคิว ช่องบริการที่กำลังให้บริการ และจำนวนคิวที่รอบนจอแสดงแบบเรียลไทม์</p>
                        </div>
                        <div class="testi-item mt-2 pt-0 pb-0 pl-0 pr-0 text-left mt-1" data-aos="fade-right" data-aos-delay="50">
                            <p><i class="fa fa-check-circle"></i> สามารถโอนคิวจากช่องบริการได้ก็ได้โดยเลือกจากรายการคิวปัจจุบันที่แสดงบนจอแสดงผล</p>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <h2 class="mt-30">จอแสดงผล</h2>
            <div class="row mb-50">
                <div class="col-lg-3 md-mb-50 text-center">
                    <img src="{{asset('assets/website/images/services/que/tv.png')}}" alt="" data-aos="fade-up" data-aos-delay="100">
                </div>
                <div class="col-lg-9 md-mb-50">
                    <div class="rs-testimonial style5">
                        <div class="testi-item mt-2 pt-0 pb-0 pl-0 pr-0 text-left" data-aos="fade-right" data-aos-delay="50">
                            <p><i class="fa fa-check-circle"></i> จอแสดงผลด้วยทีวีขนาด 32/42/50 นิ้ว เชื่อมต่อกับตู้คีออสผ่านสายเชื่อม HDMI ทำให้แสดงภาพความละเอียดสูง</p>
                        </div>
                        <div class="testi-item mt-2 pt-0 pb-0 pl-0 pr-0 text-left mt-1" data-aos="fade-right" data-aos-delay="50">
                            <p><i class="fa fa-check-circle"></i> เชื่อมต่อกับเครื่องขยายเสียงสามารถเลือกเสียงจากทีวีหรือจากเครื่องคีออสได้</p>
                        </div>
                        <div class="testi-item mt-2 pt-0 pb-0 pl-0 pr-0 text-left mt-1" data-aos="fade-right" data-aos-delay="50">
                            <p><i class="fa fa-check-circle"></i> สามารถเพิ่มไฟล์แสดงผลโฆษณาที่เป็น Play List ไฟล์วีดีโอ หรือภาพสไลด์ได้</p>
                        </div>
                        <div class="testi-item mt-2 pt-0 pb-0 pl-0 pr-0 text-left mt-1" data-aos="fade-right" data-aos-delay="50">
                            <p><i class="fa fa-check-circle"></i> สามารถเพิ่มกราฟฟิคปลั๊กอินพิเศษได้ เช่น หิมะตก, ฝนตก หรือกราฟฟิคอื่น ๆ ได้</p>
                        </div>
                    </div>
                </div>
            </div>
            ้<hr>
            <h2 class="mt-30">ระบบรายงาน</h2>
            <div class="row mb-50">
                <div class="col-lg-3 md-mb-50 text-center">
                    <img src="{{asset('assets/website/images/services/que/report.png')}}" alt="" data-aos="fade-up" data-aos-delay="100">
                </div>
                <div class="col-lg-9 md-mb-50">
                    <div class="rs-testimonial style5">
                        <div class="testi-item mt-2 pt-0 pb-0 pl-0 pr-0 text-left" data-aos="fade-right" data-aos-delay="50">
                            <p><i class="fa fa-check-circle"></i> แสดงผลรายงานแบบเรียลไทม์สามารถดูข้อมูลผ่านเว็บบราวเซอร์ในระบบเครือข่ายหรือผ่านอินเตอร์เน็ต</p>
                        </div>
                        <div class="testi-item mt-2 pt-0 pb-0 pl-0 pr-0 text-left mt-1" data-aos="fade-right" data-aos-delay="50">
                            <p><i class="fa fa-check-circle"></i> แสดงผลการค้นหาในรูปแบบตาราง Chart และการวิเคราะห์ข้อมูลเช่น Radar , Stack Bar</p>
                        </div>
                        <div class="testi-item mt-2 pt-0 pb-0 pl-0 pr-0 text-left mt-1" data-aos="fade-right" data-aos-delay="50">
                            <p><i class="fa fa-check-circle"></i> สามารถค้นหาข้อมูลรายงานและส่งออกในรูปแบบไฟล์ word, pdf หรือพิมพ์ออกทางเครื่องพิมพ์ได้ทันที</p>
                        </div>
                        <div class="testi-item mt-2 pt-0 pb-0 pl-0 pr-0 text-left mt-1" data-aos="fade-right" data-aos-delay="50">
                            <p><i class="fa fa-check-circle"></i> เก็บข้อมูลสติถิการใช้งานระบบ เช่น จำนวนผู้ใช้บริการตามช่วงเวลา, การใช้บริการแต่ละช่องบริการ เป็นต้น</p>
                        </div>
                        <div class="testi-item mt-2 pt-0 pb-0 pl-0 pr-0 text-left mt-1" data-aos="fade-right" data-aos-delay="50">
                            <p><i class="fa fa-check-circle"></i> สามารถตั้งค่าต่าง ๆ ของระบบผ่านเว็บบราวเซอร์ เช่น กำหนดงานบริการ, ช่องบริการ และการตั้งค่าอื่น ๆ</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div id="products" id="rs-portfolio" class="rs-project pt-50 style2 md-pb-80">
            <div class="container">
                <div style="text-align: center">
                    <h2 class=" title title3 pb-20 pt-10">
                        ตัวอย่างงานติดตั้ง
                    </h2>
                </div>
    
                <div class="rs-carousel owl-carousel" data-loop="true" data-items="3" data-margin="30" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false" data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="2" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="3" data-md-device-nav="true" data-md-device-dots="false">
                    <div class="project-item">
                        <div class="project-img">
                            <img src="{{asset('assets/website/images/services/que/1.png')}}" alt="images">
                        </div>
                    </div>
                    <div class="project-item">
                        <div class="project-img">
                            <img src="{{asset('assets/website/images/services/que/2.png')}}" alt="images">
                        </div>
                    </div>
                    <div class="project-item">
                        <div class="project-img">
                            <img src="{{asset('assets/website/images/services/que/3.png')}}" alt="images">
                        </div>
                    </div>
                    <div class="project-item">
                        <div class="project-img">
                            <img src="{{asset('assets/website/images/services/que/4.png')}}" alt="images">
                        </div>
                    </div>
                    <div class="project-item">
                        <div class="project-img">
                            <img src="{{asset('assets/website/images/services/que/5.png')}}" alt="images">
                        </div>
                    </div>
                    <div class="project-item">
                        <div class="project-img">
                            <img src="{{asset('assets/website/images/services/que/6.png')}}" alt="images">
                        </div>
                    </div>
                    <div class="project-item">
                        <div class="project-img">
                            <img src="{{asset('assets/website/images/services/que/7.png')}}" alt="images">
                        </div>
                    </div>
                    <div class="project-item">
                        <div class="project-img">
                            <img src="{{asset('assets/website/images/services/que/8.png')}}" alt="images">
                        </div>
                    </div>
                    <div class="project-item">
                        <div class="project-img">
                            <img src="{{asset('assets/website/images/services/que/9.png')}}" alt="images">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Project Section End -->
    </div>

    @endsection
@section('script')
@endsection
