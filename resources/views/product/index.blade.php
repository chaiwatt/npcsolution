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
                        <a class="active" href="index.html">หน้าแรก</a>
                    </li>
                    <li>สินค้า</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumbs End -->

        <!--Shop part start-->
        <div class="rs-shop-part pt-120 pb-120 md-pt-70 md-pb-80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 mb-80">
                        <div class="product-list">
                            <div class="image-product">
                                <img src="{{asset('assets/website/images/shop/1.jpg')}}" alt="">
                                <div class="overley">
                                    <a href="{{route('product.detail',['id'=>1])}}"><i class="flaticon-shopping-bag"></i></a>
                                </div>
                            </div>
                            <div class="content-desc text-center">
                                <h2 class="loop-product-title pt-15"><a href="{{route('product.detail',['id'=>1])}}">Digital CC Camera</a></h2>
                                <span class="price">$150.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-80">
                        <div class="product-list">
                            <div class="image-product">
                                <img src="{{asset('assets/website/images/shop/2.jpg')}}" alt="">
                                <div class="overley">
                                    <a href="shop-single.html"><i class="flaticon-shopping-bag"></i></a>
                                </div>
                            </div>
                            <div class="content-desc text-center">
                                <h2 class="loop-product-title pt-15"><a href="shop-single.html">Digital Hand Watch</a></h2>
                                <span class="price">$55.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-80">
                        <div class="product-list">
                            <div class="image-product">
                                <img src="{{asset('assets/website/images/shop/3.jpg')}}" alt="">
                                <div class="overley">
                                    <a href="shop-single.html"><i class="flaticon-shopping-bag"></i></a>
                                </div>
                                <span class="onsale">sale!</span>
                            </div>
                            <div class="content-desc text-center">
                                <h2 class="loop-product-title pt-15"><a href="shop-single.html">Digital Sound Mk</a></h2>
                                <span class="price">$50.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-80">
                        <div class="product-list">
                            <div class="image-product">
                                <img src="{{asset('assets/website/images/shop/4.jpg')}}" alt="">
                                <div class="overley">
                                    <a href="shop-single.html"><i class="flaticon-shopping-bag"></i></a>
                                </div>
                            </div>
                            <div class="content-desc text-center">
                                <h2 class="loop-product-title pt-15"><a href="shop-single.html">Droit Sound Mk</a></h2>
                                <span class="price">$30.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-80">
                        <div class="product-list">
                            <div class="image-product">
                                <img src="{{asset('assets/website/images/shop/5.jpg')}}" alt="">
                                <div class="overley">
                                    <a href="shop-single.html"><i class="flaticon-shopping-bag"></i></a>
                                </div>
                                <span class="onsale">sale!</span>
                            </div>
                            <div class="content-desc text-center">
                                <h2 class="loop-product-title pt-15"><a href="shop-single.html">Electronics Device</a></h2>
                                <span class="price">$30.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-80">
                        <div class="product-list">
                            <div class="image-product">
                                <img src="{{asset('assets/website/images/shop/6.jpg')}}" alt="">
                                <div class="overley">
                                    <a href="shop-single.html"><i class="flaticon-shopping-bag"></i></a>
                                </div>
                                <span class="onsale">sale!</span>
                            </div>
                            <div class="content-desc text-center">
                                <h2 class="loop-product-title pt-15"><a href="shop-single.html">Head Phone Pro</a></h2>
                                <span class="price">$45.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 sm-mb-80">
                        <div class="product-list">
                            <div class="image-product">
                                <img src="{{asset('assets/website/images/shop/7.jpg')}}" alt="">
                                <div class="overley">
                                    <a href="shop-single.html"><i class="flaticon-shopping-bag"></i></a>
                                </div>
                            </div>
                            <div class="content-desc text-center">
                                <h2 class="loop-product-title pt-15"><a href="shop-single.html">Portable Sound Mk</a></h2>
                                <span class="price">$150.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 sm-mb-80">
                        <div class="product-list">
                            <div class="image-product">
                                <img src="{{asset('assets/website/images/shop/8.jpg')}}" alt="">
                                <div class="overley">
                                    <a href="shop-single.html"><i class="flaticon-shopping-bag"></i></a>
                                </div>
                                <span class="onsale">sale!</span>
                            </div>
                            <div class="content-desc text-center">
                                <h2 class="loop-product-title pt-15"><a href="shop-single.html">Smart Device Pm</a></h2>
                                <span class="price">$50.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="product-list">
                            <div class="image-product">
                                <img src="{{asset('assets/website/images/shop/9.jpg')}}" alt="">
                                <div class="overley">
                                    <a href="shop-single.html"><i class="flaticon-shopping-bag"></i></a>
                                </div>
                            </div>
                            <div class="content-desc text-center">
                                <h2 class="loop-product-title pt-15"><a href="shop-single.html">Smart Hand Watch</a></h2>
                                <span class="price">$75.00</span>
                            </div>
                        </div>
                    </div>
                        <div class="col-lg-12 text-center pt-40">
                            <ul class="pagination-part">
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a class="next-page" href="#">Next</a></li>
                            </ul> 
                        </div>
                </div>
            </div>
        </div>
    @endsection
@section('script')
@endsection
