@extends('layouts.main')
@section('styles')
@endsection
    @section('content')
        <!-- Breadcrumbs Start -->
        <div class="rs-breadcrumbs img3">
          <div class="breadcrumbs-inner text-center">
              <h1 class="page-title">วีดีโอ</h1>
              <ul>
                  <li title="Braintech - IT Solutions and Technology Startup HTML Template">
                      <a class="active" href="{{url('/')}}">หน้าแรก</a>
                  </li>
                  <li>วีดีโอ</li>
              </ul>
          </div>
      </div>
      <!-- Breadcrumbs End -->

      <!-- Project Section Start -->
      <div class="rs-project style7 pt-120 pb-120 md-pt-90 md-pb-90 gray-color">
          <div class="container">
              <div class="row">
                @foreach ($videos as $video)
                    <div class="col-lg-4 col-md-6 mb-30">
                        <div class="project-item" style="height: 220px">
                            <div class="project-img">
                                <a href="{{$video->url}}"><img src="{{asset($video->image)}}" alt="images"></a>
                            </div>
                            <div class="project-content ">
                                <div class="vertical-middle">
                                    <div class="vertical-middle-cell">
                                        <h3 class="title"><a class="popup-border popup-videos" href="{{$video->url}}">{{$video->title}}<br>
                                        <i class="fa fa-play"></i></a></h3>
                                        <span class="category"><a class="popup-border popup-videos" href="{{$video->url}}">{{$video->name}}</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
              </div>
          </div>
      </div>
      <!-- Project Section End -->
    @endsection
@section('script')
@endsection
