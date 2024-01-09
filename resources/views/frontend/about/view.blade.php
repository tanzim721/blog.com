@extends('frontend.layouts1.app')

@section('style')
@endsection

@section('content')
   
    <div class="container">
        <h1 class="text-center p-4 noo-sh-title-top text-danger"><strong>About US</strong></h1>
        <div class="row">
            @foreach($abouts as $about)
            <div class="col-lg-6">
                <div class="shop-cat-box" style="border:20px solid #b0b54d;">      
                    <img class="img-fluid" src="{{asset('upload/about_images/'.$about->image)}}" alt="" />
                </div>
            </div>
            <div class="col-lg-6">
                <h1 class="noo-sh-title-top">Welcome to {{$about->short_title}}</h1>
                <h2>{{$about->long_title}}</h2>
                @foreach($about_lists as $about_list)
                <div>
                    <ul>
                        <li><strong><span style="color:red; width:10px;">-</span> {{$about_list->short_title}}</strong></li>
                    </ul>
                </div>
                @endforeach
                <h4 class="text-right"><strong>{{$about->ceo_name}}</strong></h4>
                <h4 class="text-right"><strong>(CEO and Founder)</strong></h4>
            </div>
            @endforeach
        </div>
    </div>
    <div class="container">
        <h2 class="text-danger text-center font-weight-bold"><strong>__________We Maintain Quality__________</strong></h2> 
        <h1 class="text-danger text-center font-weight-bold"><strong>We Provide Quality Products For You</strong></h1>
        <div class="row my-5">
            <div class="col-sm-12 col-lg-6 font-weight-bold">
                @foreach($visions as $vision)
                <div class="service-block-inner">
                    <h2 class="text-center"><strong>Our Vision</strong></h2>
                    <p>{{$vision->title}}</p>
                </div>
                @endforeach
            </div>
            <div class="col-sm-12 col-lg-6 font-weight-bold">
                @foreach($missions as $mission)
                <div class="service-block-inner">
                    <h2 class="text-center"><strong>Our Mission</strong> </h2>
                    <p>{{$mission->title}}</p>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="instagram-box">
        <div class="main-instagram owl-carousel owl-theme">
            @foreach($partners as $partner)
            <div class="item">
                <div class="ins-inner-box">
                    <img src="{{asset('upload/partner_images/'.$partner->image)}}" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                    <p class="text-center text-white"><strong>{{$partner->short_title}}</strong></p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <!-- End Instagram Feed  -->


@endsection

@section('script')
@endsection
