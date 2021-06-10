@extends('layouts.main')
@section('styles')
@endsection
    @section('content')
        <!-- Breadcrumbs Start -->
        <div class="rs-breadcrumbs img3">
            <div class="breadcrumbs-inner text-center">
                <h1 class="page-title">สินค้า</h1>
                <ul>
                    <li title="Braintech - IT Solutions and Technology Startup HTML Template">
                        <a class="active" href="{{url('')}}">หน้าแรก</a>
                    </li>
                    <li title="Go To Product">
                        <a class="active" href="index.html">สินค้า</a>
                    </li>
                    <li>Digital Tharmomiter</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumbs End -->

        <!-- Shop Single Start -->
        <div id="rs-single-shop" class="rs-single-shop pt-120 pb-80 md-pt-80 sm-pb-60">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-12 sm-mb-30">
                        <div class="single-product-image">
                            <div class="images-single">
                                <img src="{{asset('assets/website/images/shop/1.jpg')}}" alt="Single Product">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="single-price-info pl-30 sm-pl-0">
                            <h4 class="product-title">Digital CC Camera</h4>
                            <span class="single-price">$150.00</span>
                            <p class="some-text">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            <form>
                                <input type="number" class="input-text" step="1" min="1" value="1">
                                <button class="add-btn ml-10" type="submit">Add To cart</button>
                            </form>
                            <p class="category"><span>Category:</span><a href="#"> Business</a></p>
                        </div>
                    </div> 
                </div>
                <div class="tab-area">
                    <ul class="nav nav-tabs">
                        <li><a class="active" href="#one" data-toggle="tab">ข้อมูลจำเพาะของสินค้า</a></li>
                        <li><a href="#two" data-toggle="tab">รายละเอียดสินค้า</a></li>
                    </ul>

                    <div class="tab-content">
                        <div class="tab-pane active" id="one">
                            {{-- <p class="dsc-p"> --}}
                                
                                {{-- <div><h2 style="font-size: 22px">ข้อมูลจำเพาะเครื่องอ่านบัตร</h2></div>
                                <ul class="listing-style">                              
                                    <li>
                                        <i class="fa fa-check-circle text-success"></i>
                                        <span>สามารถอ่านบัตรประจําตัวประชาชนแบบเอนกประสงค์(Smart Card )ได้ตามมาตรฐาน ISO/IEC 7816</span>
                                    </li>
                                    <li>
                                        <i class="fa fa-check-circle text-success"></i>
                                        <span>สามารถใช้งานได้ตามมาตรฐาน Microsoft Personal Computer /Smart Card(PC/SC)</span>
                                    </li>
                                    <li>
                                        <i class="fa fa-check-circle text-success"></i>
                                        <span>ความเร็วในการส่ง: 12 Mbps (USB 2.0 full speed)</span>
                                    </li>  
                                    <li>
                                        <i class="fa fa-check-circle text-success"></i>
                                        <span>แหล่งจ่ายไฟ: พอร์ตยูเอสบี</span>
                                    </li> 
                                    <li>
                                        <i class="fa fa-check-circle text-success"></i>
                                        <span>อินเตอร์เฟส: USB 2.0 CCID1 (ใช้ได้กับ USB 1.1)</span>
                                    </li> 
                                    <li>
                                        <i class="fa fa-check-circle text-success"></i>
                                        <span>มาตรฐาน: ISO/IEC 7816 และ EMV2 2000 ระดับ 1</span>
                                    </li> 
                                    <li>
                                        <i class="fa fa-check-circle text-success"></i>
                                        <span>โปรโตคอล: T = 0, T = 1, 2 สาย: SLE 4432/42 (S = 10) 3 สาย: SLE 4418/28 (S = 9) I2C (S = 8)</span>
                                    </li> 
                                    <li>
                                        <i class="fa fa-check-circle text-success"></i>
                                        <span>ขนาดบัตร: ID-1 (ขนาดเต็ม)</span>
                                    </li> 
                                    <li>
                                        <i class="fa fa-check-circle text-success"></i>
                                        <span>ความเร็วของส่วนการเชื่อมต่อสมาร์ทการ์ด: 420 Kbps (เมื่อรองรับการ์ด)</span>
                                    </li>   
                                    <li>
                                        <i class="fa fa-check-circle text-success"></i>
                                        <span>ความถี่สัญญาณนาฬิกาสมาร์ทการ์ด: ไม่น้อยกว่า 4.8 MHZ</span>
                                    </li>  
                                    <li>
                                        <i class="fa fa-check-circle text-success"></i>
                                        <span>ประเภทบัตรที่รองรับ: 5V, 3V และ 1.8V สมาร์ทการ์ด ISO 7816 Class A, AB และ C</span>
                                    </li>                           
                                    <li>
                                        <i class="fa fa-check-circle text-success"></i>
                                        <span>ระบบปฏิบัติการที่รองรับ:  Windows 98/Me/2000/NT 4.0/XP/CE/Vista/7/8/8.1/10, Linux, Mac OS 10.6-10.10</span>
                                    </li>  
                                    <li>
                                        <i class="fa fa-check-circle text-success"></i>
                                        <span>การตรวจจับสมาร์ทการ์ด: การตรวจจับการเสียบบัตรพร้อมการปิดเครื่องอัตโนมัติการตรวจจับชนิดสมาร์ทการ์ดโดยอัตโนมัติการลัดวงจรและการป้องกันความร้อน</span>
                                    </li> 
                                </ul>

                                <div class="mt-4"><h2 style="font-size: 22px">ข้อมูลจำเพาะ SDK</h2></div>
                                <ul class="listing-style">                              
                                    <li>
                                        <i class="fa fa-check-circle text-success"></i>
                                        <span>รองรับเครื่องอ่านบัตรประชาชนทุกยี่ห้อ</span>
                                    </li>
                                    <li>
                                        <i class="fa fa-check-circle text-success"></i>
                                        <span>รองรับโปรแกรม Visual Studio 2005/2010/2015/2017/2019</span>
                                    </li>
                                    <li>
                                        <i class="fa fa-check-circle text-success"></i>
                                        <span>รองรับรับภาษาโปรแกรม C#, VB, C++ (มีโค้ดโปรแกรมตัวอย่าง C# สำหรับ Win Form และ Javascript สำหรับอ่านบัตรผ่านเว็ปไซต์แถมให้) </span>
                                    </li> 
                                    <li>
                                        <i class="fa fa-check-circle text-success"></i>
                                        <span>สามารถอ่านข้อมูลบัตรประชาชน ดังนี้ หมายเลขบัตรประชาชน, คำนำหน้าไทย-อังกฤษ, ชื่อไทย-อังกฤษ, นามสกุลไทย-อังกฤษ, รูปถ่าย, ที่อยู่, เพศ, วดป.เกิด, วันออกบัตร-หมดอายุ</span>
                                    </li>  
                                    <li>
                                        <i class="fa fa-check-circle text-success"></i>
                                        <span>มีระบบป้องกัน License ด้วย Name และ Key</span>
                                    </li>  

                                </ul> --}}

<div><h2 style="font-size: 22px">ข้อมูลจำเพาะเครื่องอ่านบัตร</h2></div> <ul class="listing-style"> <li> <i class="fa fa-check-circle text-success"></i> <span>สามารถอ่านบัตรประจําตัวประชาชนแบบเอนกประสงค์(Smart Card )ได้ตามมาตรฐาน ISO/IEC 7816</span> </li> <li> <i class="fa fa-check-circle text-success"></i> <span>สามารถใช้งานได้ตามมาตรฐาน Microsoft Personal Computer /Smart Card(PC/SC)</span> </li> <li> <i class="fa fa-check-circle text-success"></i> <span>ความเร็วในการส่ง: 12 Mbps (USB 2.0 full speed)</span> </li> <li> <i class="fa fa-check-circle text-success"></i> <span>แหล่งจ่ายไฟ: พอร์ตยูเอสบี</span> </li> <li> <i class="fa fa-check-circle text-success"></i> <span>อินเตอร์เฟส: USB 2.0 CCID1 (ใช้ได้กับ USB 1.1)</span> </li> <li> <i class="fa fa-check-circle text-success"></i> <span>มาตรฐาน: ISO/IEC 7816 และ EMV2 2000 ระดับ 1</span> </li> <li> <i class="fa fa-check-circle text-success"></i> <span>โปรโตคอล: T = 0, T = 1, 2 สาย: SLE 4432/42 (S = 10) 3 สาย: SLE 4418/28 (S = 9) I2C (S = 8)</span> </li> <li> <i class="fa fa-check-circle text-success"></i> <span>ขนาดบัตร: ID-1 (ขนาดเต็ม)</span> </li> <li> <i class="fa fa-check-circle text-success"></i> <span>ความเร็วของส่วนการเชื่อมต่อสมาร์ทการ์ด: 420 Kbps (เมื่อรองรับการ์ด)</span> </li> <li> <i class="fa fa-check-circle text-success"></i> <span>ความถี่สัญญาณนาฬิกาสมาร์ทการ์ด: ไม่น้อยกว่า 4.8 MHZ</span> </li> <li> <i class="fa fa-check-circle text-success"></i> <span>ประเภทบัตรที่รองรับ: 5V, 3V และ 1.8V สมาร์ทการ์ด ISO 7816 Class A, AB และ C</span> </li> <li> <i class="fa fa-check-circle text-success"></i> <span>ระบบปฏิบัติการที่รองรับ: Windows 98/Me/2000/NT 4.0/XP/CE/Vista/7/8/8.1/10, Linux, Mac OS 10.6-10.10</span> </li> <li> <i class="fa fa-check-circle text-success"></i> <span>การตรวจจับสมาร์ทการ์ด: การตรวจจับการเสียบบัตรพร้อมการปิดเครื่องอัตโนมัติการตรวจจับชนิดสมาร์ทการ์ดโดยอัตโนมัติการลัดวงจรและการป้องกันความร้อน</span> </li> </ul> <div class="mt-4"><h2 style="font-size: 22px">ข้อมูลจำเพาะ SDK</h2></div> <ul class="listing-style"> <li> <i class="fa fa-check-circle text-success"></i> <span>รองรับเครื่องอ่านบัตรประชาชนทุกยี่ห้อ</span> </li> <li> <i class="fa fa-check-circle text-success"></i> <span>รองรับโปรแกรม Visual Studio 2005/2010/2015/2017/2019</span> </li> <li> <i class="fa fa-check-circle text-success"></i> <span>รองรับรับภาษาโปรแกรม C#, VB, C++ (มีโค้ดโปรแกรมตัวอย่าง C# สำหรับ Win Form และ Javascript สำหรับอ่านบัตรผ่านเว็ปไซต์แถมให้) </span> </li> <li> <i class="fa fa-check-circle text-success"></i> <span>สามารถอ่านข้อมูลบัตรประชาชน ดังนี้ หมายเลขบัตรประชาชน, คำนำหน้าไทย-อังกฤษ, ชื่อไทย-อังกฤษ, นามสกุลไทย-อังกฤษ, รูปถ่าย, ที่อยู่, เพศ, วดป.เกิด, วันออกบัตร-หมดอายุ</span> </li> <li> <i class="fa fa-check-circle text-success"></i> <span>มีระบบป้องกัน License ด้วย Name และ Key</span> </li> </ul>

                            {{-- </p> --}}
                        </div><!-- #one -->

                        <div class="tab-pane" id="two">
                            <p>
                                การนำไปใช้งาน ใช้กับระบบงานบัตรประชาชน ระบบทะเบียนราษฏร์ของกรมการปกครอง ระบบประกันสุขภาพ (สปสช. NHSO) และประกันสังคมสำหรับโรงพยาบาล คลินิก โรงพยาบาล  โรงเรียน มหาวิทยาลัย หน่วยงานด้านเกษตรและสหกรณ์ สถานีตำรวจ หน่วยงานบริการประชาชนธนาคาร สถาบันการเงิน โรงแรม บริษัทขนส่ง หน่วยงานราชการ องค์การบริหารส่วนจังหวัด ที่ว่าการอำเภอ องค์กรภาครัฐและเอกชนอื่นๆ
                            </p>
                            <div class="reviews-grid">
                                <div class="top-area">
                                    <h4>วีดีโอ</h4>
                                    <div>
                                        <iframe width="560" height="315" src="https://www.youtube.com/embed/zApGEYo5P9s" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        <iframe width="560" height="315" src="https://www.youtube.com/embed/zApGEYo5P9s" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </div>
                                    {{-- <h6 class="mb-0">Be the first to review “Digital CC Camera”</h6> --}}
                                </div>
                            </div>
                        </div><!-- #two -->
                    </div>
                </div><!-- .tab-area -->
            </div>
        </div>
        <!-- Shop Single Start -->

        <!--Shop part end-->
        <div class="rs-shop-part pb-120 md-pb-75">
            <div class="container">
                <h4 class="title pb-23 md-pb-10">สินค้าที่คล้ายกัน</h4>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6 md-mb-45">
                        <div class="product-list">
                            <div class="image-product">
                                <img src="{{asset('assets/website/images/shop/1.jpg')}}" alt="">
                                <div class="overley">
                                    <a href="shop-single.html"><i class="flaticon-shopping-bag"></i></a>
                                </div>
                            </div>
                            <div class="content-desc text-center">
                                <h2 class="loop-product-title pt-15"><a href="shop-single.html">Electronics Device</a></h2>
                                <span class="price">$30.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 md-mb-45">
                        <div class="product-list">
                            <div class="image-product">
                                <img src="{{asset('assets/website/images/shop/2.jpg')}}" alt="">
                                <div class="overley">
                                    <a href="shop-single.html"><i class="flaticon-shopping-bag"></i></a>
                                </div>
                            </div>
                            <div class="content-desc text-center">
                                <h2 class="loop-product-title pt-15"><a href="shop-single.html">Head Phone Pro</a></h2>
                                <span class="price">$30.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="product-list">
                            <div class="image-product">
                                <img src="{{asset('assets/website/images/shop/3.jpg')}}" alt="">
                                <div class="overley">
                                    <a href="shop-single.html"><i class="flaticon-shopping-bag"></i></a>
                                </div>
                            </div>
                            <div class="content-desc text-center">
                                <h2 class="loop-product-title pt-15"><a href="shop-single.html">Prescription Book</a></h2>
                                <span class="price">$30.00</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Shop part end-->
    @endsection
@section('script')
@endsection
