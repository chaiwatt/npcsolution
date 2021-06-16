
<!DOCTYPE html>
<html lang="zxx">  

<head>
        <!-- meta tag -->
        <meta charset="utf-8">
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <title>เอ็นพีซีโซลูชั่นแอนเซอร์วิส จำกัด - ผลิตและจำหน่ายระบบคิวอัตโนมัติ</title>
        <meta name="description" content="">
        <!-- responsive tag -->
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- favicon -->
        {{-- <link rel="apple-touch-icon" href="apple-touch-icon.html"> --}}
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/website/images/fav.png')}}">
        <!-- Bootstrap v4.4.1 css -->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/website/css/bootstrap.min.css')}}">
        <!-- font-awesome css -->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/website/css/font-awesome.min.css')}}">
        <!-- flaticon css -->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/website/fonts/flaticon.css')}}">
        <!-- owl.carousel css -->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/website/css/owl.carousel.css')}}">
        <!-- magnific popup css -->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/website/css/magnific-popup.css')}}">
        <!-- Main Menu css -->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/website/css/rsmenu-main.css')}}">
        <!-- spacing css -->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/website/css/rs-spacing.css')}}">
        <!-- style css -->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/website/css/style.css')}}"> <!-- This stylesheet dynamically changed from style.less -->
        <!-- responsive css -->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/website/css/responsive.css')}}">
        <link href="{{asset('assets/website/js/aos/aos.css')}}" rel="stylesheet">
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="defult-home">
        
        <!--Preloader area start here-->
        <div id="loader" class="loader">
            <div class="loader-container"></div>
        </div>
        <!--Preloader area End here--> 
     
		<!-- Main content Start -->
        <div class="main-content">
            
            <!--Full width header Start-->
            <div class="full-width-header">
                <!--Header Start-->
                <header id="header" class="rs-header style2">
                    <!-- Topbar Area Start -->
                    <div class="topbar-area style2">
                       <div class="container">
                           <div class="row y-middle">
                               <div class="col-lg-8">
                                   <ul class="topbar-contact">
                                       <li>
                                           <i class="flaticon-email"></i>
                                           <a href="mailto:contact@npcsolution.com">contact@npcsolution.com</a>
                                       </li>
                                       <li>
                                           <i class="flaticon-call"></i>
                                           <a href="tel:053093254"> 053-093254</a>
                                       </li>
                                   </ul>
                               </div>
                               <div class="col-lg-4 text-right">
                                   <div class="toolbar-sl-share">
                                       <ul>
                                            <li class="opening"> <em><i class="flaticon-clock"></i>ทำการ 08:00-16:00น</em> </li>
                                            <li><a href="https://www.facebook.com/smartquesystem/"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="https://www.youtube.com/channel/UClcDb79bnjr4ivdQxKlOzrA"><i class="fa fa-youtube"></i></a></li>
                                       </ul>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
                    <!-- Topbar Area End -->
                    <!-- Menu Start -->
                    <div class="menu-area menu-sticky">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-3">
                                    <div class="logo-part">
                                        <a href="{{url('')}}"><img src="{{asset('assets/website/images/logo-dark.png')}}" alt=""></a>
                                    </div>
                                    <div class="mobile-menu">
                                        <a href="{{url('')}}" class="rs-menu-toggle rs-menu-toggle-close secondary">
                                            <i class="fa fa-bars"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-9 text-right">
                                    <div class="rs-menu-area">
                                        <div class="main-menu">
                                            <nav class="rs-menu pr-90 md-pr-0">
                                               <ul id="onepage-menu" class="nav-menu">
                                                   <li class="current-menu-item">
                                                       <a href="{{url('/')}}#header">หน้าแรก</a>
                                                   </li>
                                                   <li>
                                                        <a href="{{url('/')}}#customers">ลูกค้าของเรา</a>
                                                    </li>
                                                   <li>
                                                       <a href="{{url('/')}}#services">บริการ</a>
                                                   </li>
                                                   <li>
                                                       <a href="{{url('/')}}#products">สินค้า</a>
                                                   </li>
                                                   <li>
                                                        <a href="{{route('video')}}">วีดีโอ</a>
                                                    </li>
                                                   <li>
                                                       <a href="{{url('/')}}#contact">ติดต่อ</a>
                                                   </li>
                                               </ul> <!-- //.nav-menu -->
                                            </nav>                                         
                                        </div> <!-- //.main-menu -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Menu End --> 
                </header>
                <!--Header End-->

            </div>
            <!--Full width header End-->
         
            @yield('content')

            <!-- Contact Section Start -->
        </div> 
        <!-- Main content End -->
     
        <!-- Footer Start -->
        <footer id="rs-footer" class="rs-footer">
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-12 col-sm-12 footer-widget">
                            <div class="footer-logo mb-30">
                                <a href="{{url('')}}"><img src="{{asset('assets/website/images/logo-dark.png')}}" alt=""></a>
                            </div>
                              <div class="textwidget pb-30"><p>บริษัท เอ็นพีซีโซลูชั่นแอนด์เซอร์วิส จำกัด เลขที่ 105 หมู่ที่ 8 ตำบลเหมืองง่า อำเภอเมือง จังหวัดลำพูน 51000 <br> เลขประจำตัวผู้เสียภาษี 0515558000967</p>
                              </div>
                              <ul class="footer-social md-mb-30">  
                                  <li> 
                                      <a href="https://www.facebook.com/smartquesystem/" target="_blank"><span><i class="fa fa-facebook"></i></span></a> 
                                  </li>
                                  <li> 
                                      <a href="https://www.youtube.com/channel/UClcDb79bnjr4ivdQxKlOzrA" target="_blank"><span><i class="fa fa-youtube"></i></span></a> 
                                  </li>

                                                                           
                              </ul>
                        </div>
                        <div class="col-lg-3 col-md-12 col-sm-12 pl-45 md-pl-15 md-mb-30">
                            <h3 class="widget-title">บริการของเรา</h3>
                            <ul class="site-map">
                                <li><a href="#">ผลิตและจำหน่ายระบบคิวอัตโนมัติ</a></li>
                                <li><a href="#">ออกแบบและระบบติดตั้งเครือข่าย</a></li>
                                <li><a href="#">ออกแบบและพัฒนาระบบสารสนเทศ</a></li>
                                <li><a href="#">อบรมการเขียนโปรแกรมและเว็บไซต์</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-3 col-md-12 col-sm-12 md-mb-30">
                            <h3 class="widget-title">ติดต่อ</h3>
                            <ul class="address-widget">
                                <li>
                                    <i class="flaticon-call"></i>
                                    <div class="desc">
                                       <a href="tel:053093254">053-093254, 088-2514838</a>
                                    </div>
                                </li>
                                <li>
                                    <i class="flaticon-email"></i>
                                    <div class="desc">
                                        <a href="mailto:contact@npcsolution.com">contact@npcsolution.com</a>
                                    </div>
                                </li>
                                <li>
                                    <i class="flaticon-clock-1"></i>
                                    <div class="desc">
                                        เวลาทำการ จันทร์-เสาร์: 08:00 - 16:00น. 
                                    </div>
                                </li>
                            </ul>
                        </div>
                      
                        <div class="col-lg-3 col-md-12 col-sm-12">
                            <h3 class="widget-title">สมัครรับข่าวสาร</h3>
                            <p class="widget-desc">กรอกอีเมลเพื่อรับข้อมูลที่เป็นประโยชน์ ท่านสามารถยกเลิกการรับข้อมูลได้ตลอดเวลา</p>
                            <form method="POST" action="{{route('subscriber.createsave')}}" >
                                <p>                                 
                                    @csrf
                                    <input type="email" name="email" placeholder="กรอกอีเมล">
                                    <em class="paper-plane"><input type="submit" value="Sign up"></em>
                                    <i class="flaticon-send"></i>
                                </p>
                                @captcha
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">                    
                    <div class="row y-middle">
                        <div class="col-lg-6 text-right md-mb-10 order-last">
                            <ul class="copy-right-menu">
                                <li><a href="{{url('/')}}">หน้าแรก</a></li>
                                <li><a href="{{url('/')}}#services">บริการ</a></li>
                                <li><a href="{{url('/')}}#customers">ลูกค้าของเรา</a></li>
                                <li><a href="{{url('/')}}#contact">ติดต่อ</a></li>
                                {{-- <li><a href="faq.html">FAQs</a></li> --}}
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <div class="copyright">
                                <p>&copy; {{date("Y")}} สงวนลิขสิทธิ์ โดย <a href="https://npcsolution.com/">บริษัท เอ็นพีซีโซลูชั่นแอนด์เซอร์วิส จำกัด</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer End -->

    </li>

</li>

        <!-- start scrollUp  -->
        <div id="scrollUp" class="orange-color">
            <i class="fa fa-angle-up"></i>
        </div>
        <!-- End scrollUp  -->

         <!-- modernizr js -->
        <script src="{{asset('assets/website/js/modernizr-2.8.3.min.js')}}"></script>
        <!-- jquery latest version -->
        <script src="{{asset('assets/website/js/jquery.min.js')}}"></script>
        <!-- Bootstrap v4.4.1 js -->
        <script src="{{asset('assets/website/js/bootstrap.min.js')}}"></script>
        <!-- Menu js -->
        <script src="{{asset('assets/website/js/rsmenu-main.js')}}"></script> 
        <!-- owl.carousel js -->
        <script src="{{asset('assets/website/js/owl.carousel.min.js')}}"></script>
        <!-- wow js -->
        <script src="{{asset('assets/website/js/wow.min.js')}}"></script>
        <!-- Skill bar js -->
        <script src="{{asset('assets/website/js/jquery.magnific-popup.min.js')}}"></script>  
        {{-- <script src="{{asset('assets/website/js/contact.form.js')}}"></script> --}}
        <!-- main js -->
        <script src="{{asset('assets/website/js/main.js')}}"></script>
        <script src="{{asset('assets/website/js/aos/aos.js')}}"></script>

        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    </body>
    <script>
        AOS.init();
        console.log("{{$errors->count()}}");
        var errorcount = "{{$errors->count()}}";
        if(errorcount > 0){
            Swal.fire({
            icon: 'warning',
            html:'กรณากรอกข้อมูลให้ถูกต้องค่ะ',
            confirmButtonText:'ตกลง',
            })
        }
      </script>
    @if (session('success'))
        <script>
            Swal.fire({
            icon: 'success',
            html:'เราได้รับข้อมูลเรียบร้อยแล้ว <br> เจ้าหน้าจะติดต่อท่านกลับภายใน 24 ชั่วโมงค่ะ',
            confirmButtonText:'ตกลง',
            })
        </script>
    @endif
    @if (session('subscribe'))
        <script>
            Swal.fire({
            icon: 'success',
            html:'ขอบคุณที่สนใจรับข้อมูลข่าวสารจากเราคะ',
            confirmButtonText:'ตกลง',
            })
        </script>
    @endif
    
</html>