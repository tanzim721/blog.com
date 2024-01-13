@extends('frontend.layouts1.app')

@section('style')
@endsection

@section('content')
    

    <!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2><strong>AOP</strong></h2>
                    <ul class="breadcrumb">
                        <strong>
                            <li class="breadcrumb-item"><a href="{{route('home1')}}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{route('aop')}}">AOP</a></li>
                            @foreach($AopTwos as $AopTwo)
                            <li class="breadcrumb-item active">{{$AopTwo->short_title}}</li>
                            @endforeach
                        </strong>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    
    <div class="products-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-all text-center">
                        <h1 class="text-danger"><strong>AOP</strong></h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="special-menu text-center">
                        @foreach($AopTwos as $AopTwo)
                        <div class="button-group filter-button-group">
                            <button data-filter=".Two">{{$AopTwo->short_title}}</button>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($AopTwos as $AopTwo)
                <div class="col-lg-6">
                    <div class="shop-cat-box" style="border:20px solid #b0b54d;">      
                        <img class="img-fluid" src="{{asset('upload/aop_twos_images/'.$AopTwo->image)}}" alt="" />
                    </div>
                </div>
                <div class="col-lg-6">
                    <h1 class="noo-sh-title-top pb-4"><strong>{{$AopTwo->short_title}}</strong></h1>
                    <div class="row">
                        @foreach($AopTwoLists as $AopTwoList)
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <h2><strong><i class="fa-solid fa-list text-danger"></i> {{$AopTwoList->short_title}}</strong></h2>
                            <p><strong> {{$AopTwoList->long_title}}</strong></p>
                        </div>
                        @endforeach
                    </div>
                    
                    <br>
                </div>
                @endforeach
            </div>
            
        </div>
    </div>

    <!-- Start partner one  -->
    <div class="instagram-box">
        <div class="main-instagram owl-carousel owl-theme">
            @foreach($partnerones as $partnerone)
            <div class="item">
                <div class="ins-inner-box p-2">
                    <img src="{{asset('upload/partner_one_images/'.$partnerone->image)}}" alt="" style="width:150px; height:150px; padding-left:60px;">
                    <div class="hov-in">
                        <a href="#"><i class="fa-brands fa-studiovinari"></i></a>
                    </div>
                    <!-- <p class="text-center text-white"><strong>{{$partnerone->short_title}}</strong></p> -->
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <!-- End partner one  -->


@endsection

@section('script')
@endsection
