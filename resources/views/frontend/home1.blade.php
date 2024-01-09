@extends('frontend.layouts1.app')

@section('style')
@endsection

@section('content')
   
    <!-- Start Slider -->
    <div id="slides-shop" class="cover-slides">
        <ul class="slides-container">
            @foreach($sliders as $slider)
            <li class="text-center">
                <img src="{{asset('upload/slider_images/'.$slider->image)}}" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20" style="text-transform:uppercase;"><strong>{{$slider->short_title}}</strong></h1>
                            <p class="m-b-40">{{$slider->long_title}}</p>
                            <!-- <p><a class="btn hvr-hover" href="#">Shop New</a></p> -->
                        </div>
                    </div>
                </div>
            </li>
            @endforeach
        </ul>
        <div class="slides-navigation">
            <a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
            <a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
        </div>
    </div>
    <!-- End Slider -->
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
    <!-- Start Categories  -->
    <div class="categories-shop">
        <div class="container">
            <h1 class="text-danger text-center pb-3"><strong>_______Services We Offer________</strong></h1>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="row">
                        @foreach($serviceofferlists as $serviceofferlist)
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="shop-cat-box">      
                                <img class="img-fluid" src="{{asset('upload/service_offer_list_images/'.$serviceofferlist->image)}}" alt="" />
                                <a class="btn hvr-hover" href="#">{{$serviceofferlist->short_title}}</a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    @foreach($serviceoffers as $serviceoffer)
                        <div class="shop-cat-box font-weight-bold p-3">
                            <h2><strong>{{$serviceoffer->short_title}}</strong> </h2>
                            <p class="p-2">{{$serviceoffer->long_title}}</p>                         
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- End Categories -->
	
	<div class="box-add-products">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12">
                    @foreach($services as $service)
					<div class="offer-box-products">
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

    <!-- Start Products  -->
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
                            <button class="active" data-filter="*">All</button>
                            <button data-filter=".supplierIdentifier">Top featured</button>
                            <button data-filter=".merchandising">Merchandising</button>
                            <button data-filter=".compititivePricing">Compititive Pricing</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row special-list">
                @foreach($merchandisings as $merchandising)
                <div class="col-lg-4 col-md-6 special-grid merchandising">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <div class="type-lb">
                                <p class="sale">Merchandising</p>
                            </div>
                            <img src="{{asset('upload/merchandising_images/'.$merchandising->image)}}" class="img-fluid" alt="Image" style="width:100%; height:300px">
                            <div class="mask-icon">
                                <ul>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                </ul>
                                <p class="text-light pt-5 px-2">{{$merchandising->long_title}}</p>
                            </div>
                        </div>
                        
                    </div>
                </div>
                @endforeach
                @foreach($supplierIdentifiers as $supplierIdentifier)
                <div class="col-lg-4 col-md-6 special-grid supplierIdentifier">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <div class="type-lb">
                                <p class="new">Supplier Identifier</p>
                            </div>
                            <img src="{{asset('upload/supplier_identifiers_images/'.$supplierIdentifier->image)}}" class="img-fluid" alt="Image" style="width:100%; height:300px">
                            <div class="mask-icon">
                                <ul>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                </ul>
                                <p class="text-light pt-5 px-2">{{$supplierIdentifier->long_title}}</p>
                            </div>
                        </div>
                        
                    </div>
                </div>
                @endforeach
                @foreach($compititivePricings as $compititivePricing)
                <div class="col-lg-4 col-md-6 special-grid compititivePricing">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <div class="type-lb">
                                <p class="sale">Compititive Pricings</p>
                            </div>
                            <img src="{{asset('upload/compititive_pricings_images/'.$compititivePricing->image)}}" class="img-fluid" alt="Image" style="width:100%; height:300px">
                            <div class="mask-icon">
                                <ul>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                </ul>
                                <p class="text-light pt-5 px-2">{{$compititivePricing->long_title}}</p>
                            </div>
                        </div>
                        
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
    <!-- End Products  -->

    <!-- Start Blog  -->
    <!-- <div class="latest-blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-all text-center">
                        <h1>latest blog</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet lacus enim.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4 col-xl-4">
                    <div class="blog-box">
                        <div class="blog-img">
                            <img class="img-fluid" src="{{asset('frontend/images/blog-img.jpg')}}" alt="" />
                        </div>
                        <div class="blog-content">
                            <div class="title-blog">
                                <h3>Fusce in augue non nisi fringilla</h3>
                                <p>Nulla ut urna egestas, porta libero id, suscipit orci. Quisque in lectus sit amet urna dignissim feugiat. Mauris molestie egestas pharetra. Ut finibus cursus nunc sed mollis. Praesent laoreet lacinia elit id lobortis.</p>
                            </div>
                            <ul class="option-blog">
                                <li><a href="#"><i class="far fa-heart"></i></a></li>
                                <li><a href="#"><i class="fas fa-eye"></i></a></li>
                                <li><a href="#"><i class="far fa-comments"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-4">
                    <div class="blog-box">
                        <div class="blog-img">
                            <img class="img-fluid" src="{{asset('frontend/images/blog-img-01.jpg')}}" alt="" />
                        </div>
                        <div class="blog-content">
                            <div class="title-blog">
                                <h3>Fusce in augue non nisi fringilla</h3>
                                <p>Nulla ut urna egestas, porta libero id, suscipit orci. Quisque in lectus sit amet urna dignissim feugiat. Mauris molestie egestas pharetra. Ut finibus cursus nunc sed mollis. Praesent laoreet lacinia elit id lobortis.</p>
                            </div>
                            <ul class="option-blog">
                                <li><a href="#"><i class="far fa-heart"></i></a></li>
                                <li><a href="#"><i class="fas fa-eye"></i></a></li>
                                <li><a href="#"><i class="far fa-comments"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-4">
                    <div class="blog-box">
                        <div class="blog-img">
                            <img class="img-fluid" src="{{asset('frontend/images/blog-img-02.jpg')}}" alt="" />
                        </div>
                        <div class="blog-content">
                            <div class="title-blog">
                                <h3>Fusce in augue non nisi fringilla</h3>
                                <p>Nulla ut urna egestas, porta libero id, suscipit orci. Quisque in lectus sit amet urna dignissim feugiat. Mauris molestie egestas pharetra. Ut finibus cursus nunc sed mollis. Praesent laoreet lacinia elit id lobortis.</p>
                            </div>
                            <ul class="option-blog">
                                <li><a href="#"><i class="far fa-heart"></i></a></li>
                                <li><a href="#"><i class="fas fa-eye"></i></a></li>
                                <li><a href="#"><i class="far fa-comments"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- End Blog  -->


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
