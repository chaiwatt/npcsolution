@extends('layouts.main')
@section('styles')
@endsection
    @section('content')
        <!-- Banner Section Start -->
        <div class="rs-banner style4">
            <div class="container">
                <div class="banner-content">
                    <span class="sub-title">Our mission</span>
                    <h1 class="title">พันธกิจของเรา</h1>
                    <p class="desc">
                        ออกแบบและพัฒนาไอทีโซลูชั่นหลากหลายรูปแบบเพื่อตอบสนองความต้องการของลูกค้า โดยใช้เทคโนโลยีที่ทันสมัย
                    </p>
                    <ul class="banner-btn">
                        <li><a class="readon discover" href="#contact">ติดต่อเรา</a></li>
                        <li>
                            <div class="rs-videos">
                                <div class="animate-border white-color">
                                    <a class="popup-border popup-videos" href="https://www.youtube.com/watch?v=OAthoBs3PC8">
                                        <i class="fa fa-play"></i>
                                    </a>
                                </div>
                            </div> 
                        </li>
                    </ul>
                    <div id="customers"></div>
                </div>
            </div>
        </div>
        <!-- Banner Section End -->

        <!-- customers Start -->
        <div class="rs-partner style2 pt-50 pb-50">
            <div class="container">
                <div class="rs-carousel owl-carousel" data-loop="true" data-items="5" data-margin="30" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false" data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="2" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="4" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="3" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="5" data-md-device-nav="false" data-md-device-dots="false">
                    <div class="partner-item">
                        <div class="logo-img">
                            <a href="#">
                                <img src="{{asset('assets/website/images/clients/1.png')}}" style="width: 100px;width:100px" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="partner-item">
                        <div class="logo-img">
                            <a href="#">
                                <img src="{{asset('assets/website/images/clients/2.png')}}" style="width: 100px;width:100px" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="partner-item">
                        <div class="logo-img">
                            <a href="#">
                                <img src="{{asset('assets/website/images/clients/3.png')}}" style="width: 100px;width:100px" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="partner-item">
                        <div class="logo-img">
                            <a href="#">
                                <img src="{{asset('assets/website/images/clients/4.png')}}" style="width: 100px;width:100px" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="partner-item">
                        <div class="logo-img">
                            <a href="#">
                                <img src="{{asset('assets/website/images/clients/5.png')}}" style="width: 100px;width:100px" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="partner-item">
                        <div class="logo-img">
                            <a href="#">
                                <img src="{{asset('assets/website/images/clients/6.png')}}" style="width: 100px;width:100px" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="partner-item">
                        <div class="logo-img">
                            <a href="#">
                                <img src="{{asset('assets/website/images/clients/7.png')}}" style="width: 100px;width:100px" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="partner-item">
                        <div class="logo-img">
                            <a href="#">
                                <img src="{{asset('assets/website/images/clients/8.png')}}" style="width: 100px;width:100px" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Partner End -->

        <!-- Services Section Start -->
        <div id="services" class="rs-services style4 gray-color pt-110 pb-120 md-pt-75 md-pb-80">
            <div class="container">
                <div class="sec-title2 text-center mb-45">
                    <span class="sub-text">Services</span>
                    <h2 class="title">
                        บริการของเรา
                    </h2>
                    {{-- <div class="mt-4" style="font-size:18px; text-align:left">
                        เราเป็นบริษัทที่ให้บริการด้านอินโนเวชั่นหลากหลายรูปแบบทั้งด้านฮาร์ดแวร์ ซอร์ฟแวร์ การพัฒนาระบบสารสนเทศ การติดตั้งระบบเครือข่าย และการอบรมด้านการเขียนโปรแกรมและเว็บไซต์ ลูกค้าที่เราได้พัฒนาระบบสารสนเทศให้มีหลากหลายหน่วยงานแตกต่างธุรกิจและมีหน่วยงานระดับประเทศ เช่น กรมคุมประพฤติ (กระทรวงยุติธรรม), สำนักงานการปฏิรูปที่ดินเพื่อเกษตรกรรม (สำนักงานใหญ่), สำนักงานพัฒนาวิทยาศาสตร์และเทคโนโลยีแห่งชาติ (สวทช.), ธนาคารเพื่อสหกรณ์การเกษตรสำนักงานใหญ่บางเขน นอกจากนี้ยังมีหน่วยงานและบริษัทอื่น ๆ เช่น บริษัทคอมเซเว่น, โรงพยาบาลศิริราช, โรงพยาบาลพุทธโสธร เป็นต้น
                    </div> --}}
                </div>
                <div class="row">
                    <div class="col-md-4">
                        
                        <div class="services-item active">
                            <div class="services-icon">
                                <img src="{{asset('assets/website/images/services/style4/01.png')}}" alt="">
                            </div>
                            <div class="services-content">
                                <h2 class="title"><a href="#">ระบบคิวอัตโนมัติ</a></h2>
                                <p style="font-size:17px; text-align:center">
                                    ระบบคิวอัตโนมัติของเราพัฒนาบนระบบเว็บแอพลิเคชั่น การทำงานผ่านเว็บบราวเซอร์ทำให้ไม่มีปัญหาเรื่องการติดตั้งโปรแกรมหรือรุ่นของระบบปฏิบัติการ นอกจากนี้ยังมีระบบรายงานข้อมูลแบบเรียลไทม์ทำให้สามารถทราบสถานะการใช้งานได้ทันที สามารถนำข้อมูลไปประยุกต์ในการจัดลำดับคิวได้ดียิ่งขึ้น นอกจากนี้ยังมีระบบการแจ้งเตือนผ่านระบบออนไลน์ เช่น การแจ้งเตือนผ่านระบบไลน์, SMS หรืออีเมล เป็นต้น
                                </p>
                                <div class="services-btn2">
                                    <a href="{{route('service.que')}}">เพิ่มเติม</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="services-item active">
                            <div class="services-icon">
                                <img src="{{asset('assets/website/images/services/style4/02.png')}}" alt="">
                            </div>
                            <div class="services-content">
                                <h2 class="title"><a href="#">พัฒนาระบบสารสนเทศ</a></h2>
                                <p style="font-size:17px; text-align:center">
                                    เรารับพัฒนาระบบสารสนเทศหลากหลายรูปแบบ เช่น ระบบบริหารจัดการโรงพยาบาล (HIS), ระบบบัญชี, ระบบที่มีจุดประสงค์การใช้งานเฉพาะ โดยเรามีนักพัฒนาที่มีประสบการณ์ในหลายสาขา เช่น นักวิเคราะห์ระบบ (Systems analysis) โปรแกรมเมอร์ และ Tester นอกจากนี้เรายังใช้เครื่องที่ทันสมัยที่สุดเพื่อให้ระบบสามารถนำไปพัฒนาต่อได้ง่ายในอนาคต เช่น การพัฒนาเว็บแอพลิเคชั่นด้วย Laravel, VueJS เป็นต้น
                                </p>
                                <div class="services-btn2">
                                    <a href="#services">เพิ่มเติม</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="services-item active">
                            <div class="services-icon">
                                <img src="{{asset('assets/website/images/services/style4/03.png')}}" alt="">
                            </div>
                            <div class="services-content">
                                <h2 class="title"><a href="#">การอบรมการเขียนโปรแกรม</a></h2>
                                <p style="font-size:17px; text-align:center">
                                    เรามีหลักสูตรอบรม Full Stack Developper โดยเน้นให้สามารถนำไปใช้งานได้จริงทั้งด้านการออกแบบเว็บไซต์ (Frontend) และการเชื่อมต่อระบบฐาน (Backend), การติดตั้ง Web server บน VPS, การตั้งค่าโดเมน, การตั้งค่า SSL, การติดตั้ง Mail Server, การทำ SMTP relay โดยผู้อบรมจะสามารถได้เรียนเขียนทั้งโปรแกรมและอบรมการ System Admin ซึ่งเป็นทักษะสำคัญที่ Full Stack Developper จำเป็นต้องเรียนรู้
                                </p>
                                <div class="services-btn2">
                                    <a href="{{route('service.training')}}">เพิ่มเติม</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Services Section End -->

        <!-- About Section Start -->
        <div id="rs-about" class="rs-about style3 pt-120 pb-120 md-pt-75 md-pb-80">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <div class="sec-title2 mb-30">
                            <div class="sub-text">Our Company</div>
                            <h2 class=" title title3 pb-20">
                                เกี่ยวกับเรา
                            </h2>
                            <div class="desc desc2">
                                เราเป็นบริษัทที่ให้บริการด้านอินโนเวชั่นหลากหลายรูปแบบทั้งด้านฮาร์ดแวร์ ซอร์ฟแวร์ การพัฒนาระบบสารสนเทศ การติดตั้งระบบเครือข่าย และการอบรมด้านการเขียนโปรแกรมและเว็บไซต์ ลูกค้าที่เราได้พัฒนาระบบสารสนเทศให้มีหลากหลายหน่วยงานแตกต่างธุรกิจและมีหน่วยงานระดับประเทศ เช่น กรมคุมประพฤติ (กระทรวงยุติธรรม), สำนักงานการปฏิรูปที่ดินเพื่อเกษตรกรรม (สำนักงานใหญ่), สำนักงานพัฒนาวิทยาศาสตร์และเทคโนโลยีแห่งชาติ (สวทช.), ธนาคารเพื่อสหกรณ์การเกษตรสำนักงานใหญ่ (บางเขน) นอกจากนี้ยังมีหน่วยงานและบริษัทเอกชนอื่น ๆ เช่น บริษัท คอมเซเว่นจํากัด มหาชน, โรงพยาบาลศิริราช, โรงพยาบาลพุทธโสธร เป็นต้น
                            </div>
                            {{-- <div class="btn-part mt-40">
                                <a class="readon discover more" href="#">Learn More</a>
                            </div> --}}
                        </div>
                    </div>
                    <div class="col-lg-7 md-pt-40">
                        <div class="rs-animation-image">
                            <div class="pattern-img">
                                <img src="{{asset('assets/website/images/about/round.png')}}" alt=""> 
                            </div>
                            <div class="middle-img">
                                <img class="dance3" src="{{asset('assets/website/images/about/about1.png')}}" alt=""> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About Section End -->

        <!-- Technology Section Start -->
        <div class="rs-technology style2 bg11 pt-110 pb-115 md-pt-75 md-pb-80">
            <div class="container">
                <div class="sec-title2 text-center mb-45">
                    <span class="sub-text white-color">Technology Index</span>
                    <h2 class="title title2 white-color">
                        เทคโนโลยีล่าสุดที่เราใช้สำหรับพัฒนาระบบให้ลูกค้า
                    </h2>
                </div>
                <div class="row">
                    <div class="col-lg-2 col-md-4 col-sm-6 md-pb-30">
                        <div class="technology-wrap">
                            <div class="rs-grid-figure">
                                    <div class="logo-img">
                                        <a href="https://laravel.com/" target="_blank">
                                        <img class="hover-img" src="{{asset('assets/website/images/technology/style4/hover-img/01.png')}}" alt="hover-image">
                                        <img class="main-img" src="{{asset('assets/website/images/technology/style4/main-img/01.png')}}" alt="hover-image">
                                        </a>
                                    </div>
                            </div>
                            <div class="logo-title">
                                    <h4 class="title">Laravel</h4>
                            </div> 
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6 md-pb-30">
                        <div class="technology-wrap">
                            <div class="rs-grid-figure">
                                    <div class="logo-img">
                                        <a href="https://vuejs.org/" target="_blank">
                                        <img class="hover-img" src="{{asset('assets/website/images/technology/style4/hover-img/02.png')}}" alt="grid-image">
                                        <img class="main-img" src="{{asset('assets/website/images/technology/style4/main-img/02.png')}}" alt="grid-image">
                                        </a>
                                    </div>
                            </div>
                            <div class="logo-title">
                                    <h4 class="title">VueJs</h4>
                            </div> 
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6 md-pb-30">
                        <div class="technology-wrap">
                            <div class="rs-grid-figure">
                                    <div class="logo-img">
                                        <a href="https://www.mysql.com/" target="_blank">
                                        <img class="hover-img" src="{{asset('assets/website/images/technology/style4/hover-img/3.png')}}" alt="grid-image">
                                        <img class="main-img" src="{{asset('assets/website/images/technology/style4/main-img/3.png')}}" alt="grid-image">
                                        </a>
                                    </div>
                            </div>
                            <div class="logo-title">
                                    <h4 class="title">My Sql</h4>
                            </div> 
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6 sm-pb-30">
                        <div class="technology-wrap">
                            <div class="rs-grid-figure">
                                    <div class="logo-img">
                                        <a href="https://firebase.google.com/" target="_blank">
                                        <img class="hover-img" src="{{asset('assets/website/images/technology/style4/hover-img/4.png')}}" alt="grid-image">
                                        <img class="main-img" src="{{asset('assets/website/images/technology/style4/main-img/4.png')}}" alt="grid-image">
                                        </a>
                                    </div>
                            </div>
                            <div class="logo-title">
                                    <h4 class="title">Firebase</h4>
                            </div> 
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6 sm-pb-30">
                        <div class="technology-wrap">
                            <div class="rs-grid-figure">
                                    <div class="logo-img">
                                        <a href="https://github.com/" target="_blank">
                                        <img class="hover-img" src="{{asset('assets/website/images/technology/style4/hover-img/05.png')}}" alt="grid-image">
                                        <img class="main-img" src="{{asset('assets/website/images/technology/style4/main-img/05.png')}}" alt="grid-image">
                                        </a>
                                    </div>
                            </div>
                            <div class="logo-title">
                                    <h4 class="title">Git Hub</h4>
                            </div> 
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6 sm-pb-30">
                        <div class="technology-wrap">
                            <div class="rs-grid-figure">
                                    <div class="logo-img">
                                        <a href="https://visualstudio.microsoft.com/" target="_blank">
                                        <img class="hover-img" src="{{asset('assets/website/images/technology/style4/hover-img/06.png')}}" alt="grid-image">
                                        <img class="main-img" src="{{asset('assets/website/images/technology/style4/main-img/06.png')}}" alt="grid-image">
                                        </a>
                                    </div>
                            </div>
                            <div class="logo-title">
                                    <h4 class="title">Visual Studio</h4>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>  
        </div>
        <!-- Technology Section End -->

        <!-- Project Section Start -->
        <div id="products" id="rs-portfolio" class="rs-project  style2 pt-120 pb-120 md-pt-80 md-pb-80">
            <div class="container">
                {{-- <div class="sec-title2 text-center mb-45">
                    <span class="sub-text style-bg white-color">Projects</span>
                    <h2 class="title title2 white-color">
                        Our Recent Launched Projects Available into Market
                    </h2>
                </div> --}}
                <div style="text-align: center">
                    <div class="sub-text">PRODUCTS</div>
                    <h2 class=" title title3 pb-20 pt-10">
                        สินค้า
                    </h2>
                </div>
    
                <div class="rs-carousel owl-carousel" data-loop="true" data-items="3" data-margin="30" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false" data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="2" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="3" data-md-device-nav="true" data-md-device-dots="false">
                    @foreach ($products as $product)
                    <div class="project-item">
                        <div class="project-img">
                            <a href="{{route('product.detail',['id'=>$product->slug])}}"><img src="{{asset($product->picture)}}" alt="images"></a>
                        </div>
                        <div class="project-content ">
                            <div class="vertical-middle">
                                <div class="vertical-middle-cell">
                                    <h3 class="title"><a href="{{route('product.detail',['id'=>$product->slug])}}">{{$product->name}}</a></h3>
                                    <span class="category"><a href="{{route('product.detail',['id'=>$product->slug])}}">เพิ่มลงตะกร้า</a></span>
                                </div>
                            </div>
                        </div>
                        <div class="content-desc text-center">
                            <div class="pt-20" style="font-size: 22px;"><h4>{{$product->name}}</h4></div>
                            <span  style="font-size: 22px;">{{number_format($product->saleprice)}} บาท</span>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div id="contact" ></div>
                <div class="btn-part mt-40 text-center">
                    <a class="readon discover more" href="{{route('product')}}">สินค้าทั้งหมด</a>
                </div>
            </div>
        </div>
        <!-- Project Section End -->

        <!-- Contact Section Start -->
        <div class="rs-contact pt-120 gray-color pb-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="contact-box">
                            <div class="sec-title mb-45">
                                {{-- <span class="sub-text new-text white-color">Let's Talk</span> --}}
                                <h2 class="title white-color">ติดต่อเรา</h2>
                            </div>
                            <div class="address-box mb-25">
                                <div class="address-icon">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <div class="address-text">
                                    <span class="label">โทรศัพท์:</span>
                                    <a href="tel:053093254">053-093254, 088-2514838</a>
                                </div>
                            </div>
                            <div class="address-box mb-25">
                                <div class="address-icon">
                                    <i class="fa fa-envelope"></i>
                                </div>
                                <div class="address-text">
                                    <span class="label">อีเมล:</span>
                                    <a href="mailto:contact@npcsolution.com">contact@npcsolution.com</a>
                                </div>
                            </div>
                            <div class="address-box">
                                <div class="address-icon">
                                    <i class="fa fa-map-marker"></i>
                                </div>
                                <div class="address-text">
                                    <span class="label">ที่อยู่:</span>
                                    <div class="desc">105 หมู่ที่ 8 ต.เหมืองง่า อ.เมือง จ.ลำพูน 51000</div>
                                </div>
                            </div>
                        </div>
                    </div> 
                    <div class="col-lg-8 pl-70 md-pl-15 md-mt-40">
                        <div class="contact-widget onepage-style">
                            <div class="sec-title2 mb-40">
                                {{-- <span class="sub-text contact mb-15">กรอกข้อมูลติดต่อ</span> --}}
                                <h2 class="title testi-title">กรอกข้อมูลติดต่อ</h2>

                            </div>
                            <div id="form-messages"></div>
                            <form method="POST" action="{{route('contact.createsave')}}" >
                                @csrf
                                <fieldset>
                                    <div class="row">
                                        <div class="col-lg-6 mb-30 col-md-6 col-sm-6">
                                            <input class="from-control blockhtml" type="text" name="name" placeholder="ชื่อ">
                                        </div> 
                                        <div class="col-lg-6 mb-30 col-md-6 col-sm-6">
                                            <input class="from-control" type="text" name="email" placeholder="อีเมล">
                                        </div>   
                                        <div class="col-lg-6 mb-30 col-md-6 col-sm-6">
                                            <input class="from-control blockhtml" type="text" name="phone" placeholder="เบอร์โทรศัพท์">
                                        </div>   
                                        <div class="col-lg-6 mb-30 col-md-6 col-sm-6">
                                            <input class="from-control blockhtml" type="text" name="company" placeholder="หน่วยงาน">
                                        </div>   
                                        <div class="col-lg-12 mb-30 col-md-12 col-sm-12">
                                            <textarea name="message" class="from-control blockhtml" cols="30" rows="5" placeholder="ข้อความ"></textarea>
                                        </div>   
                                        @captcha
                                    </div>
                                    <div class="btn-part">
                                        <div class="form-group mb-0">
                                            <button class="readon learn-more submit" type="submit">ส่งข้อมูล</button>
                                        </div>
                                    </div> 
                                </fieldset>
                            </form> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection

@section('pageScript')
    <script>
        $(".blockhtml").focusout( function(e) {
            var reg =/<(.|\n)*?>/g; 
            if (reg.test($(this).val()) == true) {
                Swal.fire({
                    icon: 'warning',
                    html:'ไม่อนุญาตให้ใช้ HTML code ค่ะ',
                    confirmButtonText:'ตกลง',
                    })
                }
                $(this).val('');
            e.preventDefault();
        });


    </script>
@endsection
