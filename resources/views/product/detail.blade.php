@extends('layouts.main')
@section('styles')
@endsection
    @section('content')
        <!-- Breadcrumbs Start -->
        <div class="rs-breadcrumbs img3">
            <div class="breadcrumbs-inner text-center">
                <h1 class="page-title">สินค้า</h1>
                <ul>
                    <li title="NPC SOLUTION">
                        <a class="active" href="{{url('')}}">หน้าแรก</a>
                    </li>
                    <li title="Go To Product">
                        <a class="active" href="{{route('product')}}">สินค้า</a>
                    </li>
                    <li>{{$product->name}}</li>
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
                                <img src="{{asset($product->picture)}}" alt="Single Product">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="single-price-info pl-30 sm-pl-0">
                            <h4 class="product-title">{{$product->name}}</h4>
                            <span class="single-price">ราคา {{number_format($product->saleprice)}} บาท</span>
                            <p class="some-text">{{$product->description}}</p>
                            <form>
                                {{-- <input type="number" class="input-text" step="1" min="1" value="1"> --}}
                                {{-- <a class="add-btn ml-10" type="button" href="#purchase" target="_blank">สั่งซื้อ</a> --}}
                                <a class="add-btn ml-10" type="button" href="https://www.facebook.com/smartquesystem/" target="_blank">สั่งซื้อ</a>
                            </form>
                            <p class="category"><span>หมวดหมู่:</span><a href="#"> {{$product->category->name}}</a></p>
                        </div>
                    </div> 
                </div>
                <div class="tab-area">
                    <ul class="nav nav-tabs">
                        <li><a class="active" href="#productdescription" data-toggle="tab">ข้อมูลจำเพาะของสินค้า</a></li>
                        <li><a href="#productinfo" data-toggle="tab">รายละเอียดสินค้า</a></li>
                        {{-- <li><a href="#purchase" id="" data-toggle="tab">สั่งซื้อ</a></li> --}}
                    </ul>

                    <div class="tab-content">
                        <div class="tab-pane active" id="productdescription">
                            {!!$product->specification!!}
                        </div>

                        <div class="tab-pane" id="productinfo">
                            <p>
                                {{$product->details}}
                            </p>
                            <div class="reviews-grid">
                                <div class="top-area">
                                    @if (!empty($product->video))
                                    <h4>วีดีโอ</h4>
                                    {!!$product->video!!}
                                    @endif
                                   
                                </div>
                            </div>
                        </div>
                        {{-- <div class="tab-pane" id="purchase">
                            <img src="{{asset($product->qrpayment)}}" alt="" style="width: 250px;">
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
        <!-- Shop Single Start -->

        <!--Shop part end-->
        <div class="rs-shop-part pb-120 md-pb-75">
            <div class="container">
                <h4 class="title pb-23 md-pb-10">สินค้าที่คล้ายกัน</h4>
                <div class="row">
                    @foreach ($products as $product)
                        <div class="col-lg-4 col-md-6 col-sm-6 md-mb-45">
                            <div class="product-list">
                                <div class="image-product">
                                    <img src="{{asset($product->picture)}}" alt="">
                                    <div class="overley">
                                        <a href="{{route('product.detail',['id'=>$product->slug])}}"><i class="flaticon-shopping-bag"></i></a>
                                    </div>
                                </div>
                                <div class="content-desc text-center">
                                    <h2 class="loop-product-title pt-15"><a href="{{route('product.detail',['id'=>$product->slug])}}">{{$product->name}}</a></h2>
                                    <span class="price">{{number_format($product->saleprice)}} บาท</span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!--Shop part end-->
    @endsection
@section('script')
@endsection
