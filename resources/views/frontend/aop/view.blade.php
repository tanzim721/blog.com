@extends('frontend.layouts1.app')

@section('style')
@endsection

@section('content')
   
    

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

            </div>
        </div>
    </div>
    <!-- End Products  -->


    

@endsection

@section('script')
@endsection
