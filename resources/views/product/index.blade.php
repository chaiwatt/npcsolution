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
                    @foreach ($products as $product)
                        <div class="col-lg-4 col-md-6 mb-80">
                            <div class="product-list">
                                <div class="image-product">
                                    <img src="{{asset($product->picture)}}" alt="">
                                    <div class="overley">
                                        <a href="{{route('product.detail',['id'=>$product->slug])}}"><i class="flaticon-shopping-bag"></i></a>
                                    </div>
                                    {{-- <span class="onsale">ราคาพิเศษ!</span> --}}
                                </div>
                                <div class="content-desc text-center">
                                    <h2 class="loop-product-title pt-15"><a href="{{route('product.detail',['id'=>$product->slug])}}">{{$product->name}}</a></h2>
                                    <span class="price">{{number_format($product->saleprice)}} บาท</span>
                                </div>
                            </div>
                        </div>
                    @endforeach

                        {{-- <div class="col-lg-12 text-center pt-40">
                            <ul class="pagination-part">
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a class="next-page" href="#">Next</a></li>
                            </ul> 
                        </div> --}}
                </div>
            </div>
        </div>
    @endsection
@section('script')
@endsection
