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
                            <li class="breadcrumb-item active">Team</li>
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
                            <button class="active" data-filter="*">All</button>
                            <button data-filter=".merchandising">Merchandising</button>
                            <button data-filter=".supplierIdentifier">Supplier Identifier</button>
                            <button data-filter=".compititivePricing">Compititive Pricing</button>
                            <button data-filter=".factory_evaluations">Factory Evaluation</button>
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
                                    <li><a href="{{route('merchandising')}}" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                    <!-- <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li> -->
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
                                    <li><a href="{{route('supplier_identifier')}}" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                    <!-- <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li> -->
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
                                    <li><a href="{{route('compititive_pricing')}}" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                    <!-- <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li> -->
                                </ul>
                                <p class="text-light pt-5 px-2">{{$compititivePricing->long_title}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                @foreach($factoryEvaluations as $factoryEvaluation)
                <div class="col-lg-4 col-md-6 special-grid factory_evaluations">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <div class="type-lb">
                                <p class="new">Factory Evaluation</p>
                            </div>
                            <img src="{{asset('upload/factory_evaluations_images/'.$factoryEvaluation->image)}}" class="img-fluid" alt="Image" style="width:100%; height:300px">
                            <div class="mask-icon">
                                <ul>
                                    <li><a href="{{route('factory_evaluation')}}" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                    <!-- <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li> -->
                                </ul>
                                <p class="text-light pt-5 px-2">{{$factoryEvaluation->long_title}}</p>
                            </div>
                        </div>
                    </div>
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
