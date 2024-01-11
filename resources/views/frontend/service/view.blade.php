@extends('frontend.layouts1.app')

@section('style')
@endsection

@section('content')
   
    <!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2><strong>Service</strong></h2>
                    <ul class="breadcrumb">
                        <strong>
                            <li class="breadcrumb-item"><a href="{{route('home1')}}">Home</a></li>
                            <li class="breadcrumb-item active">Service</li>
                        </strong>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Start Categories  -->
    <div class="categories-shop">
        <div class="container">
            <h1 class="text-danger text-center pb-3"><strong>_______Services We Offer________</strong></h1>
            <div class="row contact-info-left">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    @foreach($serviceoffers as $serviceoffer)
                        <div class="shop-cat-box font-weight-bold p-3">
                            <h2><strong>{{$serviceoffer->short_title}}</strong> </h2>
                            <p class="p-2">{{$serviceoffer->long_title}}</p>                         
                        </div>
                    @endforeach
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="row">
                        @foreach($serviceofferlists as $serviceofferlist)
                        <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                            <div class="shop-cat-box">      
                                <img class="img-fluid" src="{{asset('upload/service_offer_list_images/'.$serviceofferlist->image)}}" alt="" />
                                <a class="btn hvr-hover" href="#">{{$serviceofferlist->short_title}}</a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    
                </div>
                
            </div>
        </div>
    </div>
    <!-- End Categories -->
	
	<div class="box-add-products">
		<div class="container">
			<div class="row">
				
                
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
                <div class="col-lg-6 col-md-6 col-sm-12">
                    @foreach($services as $service)
					<div class="offer-box-products" style="border:20px solid #b0b54d;">
						<img class="img-fluid" style="width:100%;" src="{{asset('upload/service_images/'.$service->image)}}" alt="" />
					</div>
                    @endforeach    
				</div>
			</div>
		</div>
	</div>


    <!-- Start Instagram Feed  -->
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
