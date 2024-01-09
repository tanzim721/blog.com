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
                            <li class="breadcrumb-item active">Why Choose Us</li>
                        </strong>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="box-add-products">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12">
                    @foreach($services as $service)
					<div class="offer-box-products" style="border:20px solid #b0b54d;">
						<img class="img-fluid" style="width:100%;" src="{{asset('upload/service_images/'.$service->image)}}" alt="" />
					</div>
                    @endforeach    
				</div>
                
				<div class="col-lg-6 col-md-6 col-sm-12 font-weight-bold">
					<div class="offer-box-products p-3">
                        <h2 class="text-danger"><strong>Why Choose Us_____</strong></h2>
                        @foreach($services as $service)
                        <h1><strong>{{$service->short_title}}</strong> </h1>
                        <p class="text-justify">{{$service->long_title}}</p>
                        @endforeach
                        
					</div>
					<div class="offer-box-products p-3">
                        @foreach($servicelists as $servicelist)
			        		<div class="offer-box-products p-3">
                                <ul>
                                    <li><strong><span style="color:red; width:10px;">-</span> {{$servicelist->short_title}}</strong></li>
                                </ul> 
                            </div>        
                        @endforeach
                    </div>
				</div>
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
