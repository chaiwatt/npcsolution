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
                <li>อบรมการเขียนโปรแกรมและเว็บไซต์</li>
            </ul>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-12 md-mb-50 pb-50 pt-50">
                <div id="rs-faq" class="rs-faq gray-color pt-50 pb-50 md-pt-50 ">
                    <div class="container">
                        <div class="row">
                           <div class="col-lg-12">
                                <div class="sec-title2 mb-45">
                                    <h2 class="title title6">
                                     <ul>หลักสูตรอบรม Full Stack Developper</ul>  
                                    </h2>
                                </div>
                               <div class="faq-content">
                                   <div id="accordion" class="accordion">
                                      <div class="card">
                                          <div class="card-header">
                                              <a class="card-link" data-toggle="collapse" href="#collapseOne">DAY 1 - CSS5 และ HTML5</a>
                                          </div>
                                          <div id="collapseOne" class="collapse show" data-parent="#accordion">
                                              <div class="card-body">
                                                <ul class="listing-style">                              
                                                    <li>
                                                        <i class="fa fa-check-circle"></i>
                                                        <span>แนะนำคอร์ส</span>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-check-circle"></i>
                                                        <span>ติดตั้งโปรแกรม VS Code</span>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-check-circle"></i>
                                                        <span>แนะนำตัวอย่าง Responsive website</span>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-check-circle"></i>
                                                        <span>CSS deep dive#1</span>
                                                    </li>                                
                                                </ul>
                                              </div>
                                          </div>
                                      </div>
                                       <div class="card">
                                           <div class="card-header">
                                               <a class="card-link collapsed" data-toggle="collapse" href="#collapseTwo" aria-expanded="false">DAY 2 - CSS5 และ HTML5 deep dive</a>
                                           </div>
                                           <div id="collapseTwo" class="collapse" data-parent="#accordion" style="">
                                               <div class="card-body">
                                                <ul class="listing-style">                              
                                                    <li>
                                                        <i class="fa fa-check-circle"></i>
                                                        <span>CSS deep dive#2</span>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-check-circle"></i>
                                                        <span>CSS deep dive#3</span>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-check-circle"></i>
                                                        <span>เรียนรู้การออกแบบ Responsive website ด้วย CSS</span>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-check-circle"></i>
                                                        <span>Workshop1#: ออกแบบ Responsive website</span>
                                                    </li>                                
                                                </ul>
                                               </div>
                                           </div>
                                       </div>
                                       <div class="card">
                                           <div class="card-header">
                                              
                                               <a class="card-link collapsed" data-toggle="collapse" href="#collapseThree" aria-expanded="false">DAY 3 - Vue2 &Laravel8</a>
                                           </div>
                                           <div id="collapseThree" class="collapse" data-parent="#accordion" style="">
                                               <div class="card-body">
                                                <ul class="listing-style">                              
                                                    <li>
                                                        <i class="fa fa-check-circle"></i>
                                                        <span>ติดตั้งเครื่องมือ composer, nodejs, Vue2, Laravel8</span>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-check-circle"></i>
                                                        <span>Basic Vue2</span>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-check-circle"></i>
                                                        <span>Basic Laravel</span>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-check-circle"></i>
                                                        <span>Laravel API</span>
                                                    </li>                                
                                                </ul>
                                               </div>
                                           </div>
                                       </div>     
                                       <div class="card">
                                           <div class="card-header">
                                              
                                               <a class="card-link collapsed" data-toggle="collapse" href="#collapsefour" aria-expanded="false">DAY 4 - Vue &Laravel deep dive </a>
                                           </div>
                                           <div id="collapsefour" class="collapse" data-parent="#accordion" style="">
                                               <div class="card-body">
                                                    <ul class="listing-style">                              
                                                        <li>
                                                            <i class="fa fa-check-circle"></i>
                                                            <span>Workshop#1 Vue&Laravel</span>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-check-circle"></i>
                                                            <span>Workshop#2 Vue&Laravel</span>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-check-circle"></i>
                                                            <span>Workshop#3 Vue&Laravel</span>
                                                        </li>                             
                                                    </ul>
                                               </div>
                                           </div>
                                       </div>                                       
                                       <div class="card">
                                        <div class="card-header">
                                           
                                            <a class="card-link collapsed" data-toggle="collapse" href="#collapsefive" aria-expanded="false">Day 5 - Work with networking</a>
                                        </div>
                                        <div id="collapsefive" class="collapse" data-parent="#accordion" style="">
                                            <div class="card-body">
                                                <ul class="listing-style">                              
                                                    <li>
                                                        <i class="fa fa-check-circle"></i>
                                                        <span>ติดตั้ง Web server (Apache, PHP8, PHP Myadmin) บน VPS</span>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-check-circle"></i>
                                                        <span>Config domain, SSL, DomainKeys Identified Mail (DKIM)</span>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-check-circle"></i>
                                                        <span>ติดตั้ง Web mail (Postfix, Dovecot, Roundcube)</span>
                                                    </li>  
                                                    <li>
                                                    <i class="fa fa-check-circle"></i>
                                                        <span>Upload เว็ปไซต์</span>
                                                    </li>                             
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                   </div>
                               </div>
                           </div>  
                        </div>
                    </div>
                </div>
                        
                <div class="rs-testimonial mt-50 mb-50 style5">
                    <div class="testi-item">
                        <div class="testi-img">
                            <img src="{{asset('assets/website/images/testimonial/main-home/quote-white2.png')}} " alt="">
                        </div>
                        <p class="text-left">การเป็น Full Stack Developper นั้นไม่ง่าย หลาย ๆ คนเข้าใจว่าการที่สามารถเขียนโปรแกรม Fronted end กับ Back end ได้ ก็ได้ชื่อว่าเป็น  Full Stack Dev แล้วนั้นไม่ถูกต้องทั้งหมดครับ เพราะถ้าง่ายขนาดนั้นเงินเดือน Full Stack Dev คงไม่สูงเป็นระดับแสนบาท อันที่จริงแล้ว Full Stack dev ต้องมีความรู้รอบด้าน เช่น ถ้าลูกค้ามี Requirement ให้ทำเว็ปไซต์สักเว็บแล้วให้ออนไลน์ให้ลูกค้าดูใน 2-3 วัน สิ่งที่ Full Stack Dev ต้องทำได้คือ ทำ Demo UI (Fronted End) และตัวอย่างชุดคำสั่งการเรียกใช้ฐานข้อมูล (Back End) และการอัพโหลดขึ้นเซิร์ฟเวอร์นั้นสำคัญ การทำเว็บไซต์สมัยใหม่นั้นไม่ใช้ Share hosting กันแล้ว สิ่งที่ Full Stack Dev ต้องเป็นคือ "ทำทุกอย่างเอง ให้ได้ทั้งหมด" ประกอบด้วย การติดตั้งเว็บเซิร์ฟเวอร์บน VPS (Amazon aws, Upcloud, Digital Ocean), การติดตั้งและ Config Mail Server(Postfix, Dovecot, Roundcube / Squirrelmail, SMTP relay), การ Config SSL โดเมน ซึ่งเหล่านี้เป็นองค์ประกอบสำคัญที่ Full Stack Dev ทำได้ ถ้าทำไม่ได้หรือใช้เวลามากเกินไป ลูกค้าก็อาจจะเปลี่ยนใจได้ ในบริษัทใหญ่ ๆ การทำทุกอย่างให้เป็นหมดอาจไม่จำเป็น แต่กับบริษัทขนาดเล็กนั้นไม่ใช่ การมีทักษะเหล่านี้จะสามารถช่วยคุณในการหางานได้ง่ายขึ้น</p>
                        <div class="testi-content">
                            <div class="testi-img">
                            <img src="assets/images/testimonial/main-home/5.jpg" alt="">
                            </div>
                            <div class="author-part">
                                <div class="name">ชัยวัฒน์ ทวีจันทร์</div>
                                <span class="designation">กรรมการผู้จัดการ บริษัทเอ็นพีซีโซลูชั่นแอนด์เซอร์วิส จำกัด</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        
               
      
        </div>

    </div>


    @endsection
@section('script')
@endsection
