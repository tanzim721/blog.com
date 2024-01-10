@extends('frontend.layouts1.app')

@section('style')
@endsection

@section('content')
    

    <!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2><strong>About</strong></h2>
                    <ul class="breadcrumb">
                        <strong>
                            <li class="breadcrumb-item"><a href="{{route('home1')}}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{route('team')}}">Team</a></li>
                            <li class="breadcrumb-item active">Compititive Pricing</li>
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
                        <h1 class="text-danger"><strong>Our Team</strong></h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="special-menu text-center">
                        <div class="button-group filter-button-group">
                            <button data-filter=".compititivePricing"><strong>Compititive Pricing</strong></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($compititivePricings as $compititivePricing)
                <div class="col-lg-6">
                    <div class="shop-cat-box" style="border:20px solid #b0b54d;">      
                        <img class="img-fluid" src="{{asset('upload/compititive_pricings_images/'.$compititivePricing->image)}}" alt="" />
                    </div>
                </div>
                <div class="col-lg-6">
                    <h1 class="noo-sh-title-top text-danger"><strong>Compititive Pricing</strong></h1>
                    <h2>{{$compititivePricing->short_title}}</h2>
                    <h2>{{$compititivePricing->long_title}}</h2>
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


