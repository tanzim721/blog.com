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
                            <li class="breadcrumb-item active">Contact Us</li>
                        </strong>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Start Contact Us  -->
    <div class="contact-box-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-sm-12">
                    <div class="contact-info-left">
                        @foreach($locations as $location)
                            <iframe src="{{$location->long_title}}" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        @endforeach
                    </div>
                </div>
				<div class="col-lg-4 col-sm-12">
                    <div class="contact-info-left">
                        <h2>CONTACT INFO</h2>
                        @foreach($abouts as $about)
                            <p>{{$about->short_title}}</p>
                            <p>{{$about->long_title}}</p>
                        @endforeach
                        @foreach($contacts as $contact)
                        <ul>
                            <li>
                                <p><i class="fas fa-map-marker-alt"></i>Address: {{$contact->address}}</p>
                            </li>
                            <li>
                                <p><i class="fas fa-phone-square"></i>Phone: {{$contact->mobile}}</p>
                            </li>
                            <li>
                                <p><i class="fas fa-envelope"></i>Email: <a href="{{$contact->email}}">{{$contact->email}}</a></p>
                            </li>
                        </ul>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Cart -->

        

    <!-- Start Instagram Feed  -->
    <div class="contact-info-left">
        <div class="main-instagram owl-carousel owl-theme">
            @foreach($partners as $partner)
            <div class="item">
                <div class="ins-inner-box">
                    <img src="{{asset('upload/partner_images/'.$partner->image)}}" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                    <p class="text-center text-dark"><strong>{{$partner->short_title}}</strong></p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <!-- End Instagram Feed  -->

@endsection

@section('script')
@endsection
