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
                            <li class="breadcrumb-item active">AOP</li>
                        </strong>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Start Products  -->
    <div class="products-box">
        <div class="container contact-info-left">
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
                        <div class="button-group filter-button-group">
                            <button class="active" data-filter="*">All</button>
                            <button data-filter=".one">AOP one</button>
                            <button data-filter=".two">AOP two</button>
                            <button data-filter=".three">AOP three</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row special-list">
                @foreach($AopOnes as $AopOnes)
                <div class="col-lg-4 col-md-6 special-grid one">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <div class="type-lb">
                                <p class="sale">AOP one</p>
                            </div>
                            <img src="{{asset('upload/aop_ones_images/'.$AopOnes->image)}}" class="img-fluid" alt="Image" style="width:100%; height:300px">
                            <div class="mask-icon">
                                <ul>
                                    <li><a href="{{route('aop.one')}}" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                    <!-- <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li> -->
                                </ul>
                                <p class="text-light pt-5 px-2">{{$AopOnes->short_title}}</p>
                            </div>
                        </div>
                        
                    </div>
                </div>
                @endforeach
                @foreach($AopTwos as $AopTwo)
                <div class="col-lg-4 col-md-6 special-grid two">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <div class="type-lb">
                                <p class="new">AOP Two</p>
                            </div>
                            <img src="{{asset('upload/aop_twos_images/'.$AopTwo->image)}}" class="img-fluid" alt="Image" style="width:100%; height:300px">
                            <div class="mask-icon">
                                <ul>
                                    <li><a href="" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                    <!-- <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li> -->
                                </ul>
                                <p class="text-light pt-5 px-2">{{$AopTwo->short_title}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                @foreach($AopThrees as $AopThree)
                <div class="col-lg-4 col-md-6 special-grid three">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <div class="type-lb">
                                <p class="sale">AOP Three</p>
                            </div>
                            <img src="{{asset('upload/aop_threes_images/'.$AopThree->image)}}" class="img-fluid" alt="Image" style="width:100%; height:300px">
                            <div class="mask-icon">
                                <ul>
                                    <li><a href="" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                    <!-- <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li> -->
                                </ul>
                                <p class="text-light pt-5 px-2">{{$AopThree->short_title}}</p>
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
