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
                            <li class="breadcrumb-item active">Our Service</li>
                        </strong>
                    </ul>
                </div>
            </div>
        </div>
    </div>
   
	<div class="box-add-products">
		<div class="container">
			<div class="row">
                @foreach($partners as $partner)
				<div class="col-lg-3 col-md-4 col-sm-12 font-weight-bold">
					<div class="offer-box-products p-3">
                        <img src="{{asset('upload/partner_images/'.$partner->image)}}" alt="" />
                        <p class="text-center text-white"><strong>{{$partner->short_title}}</strong></p>
					</div>
				</div>
                @endforeach
			</div>
		</div>
	</div>

    

@endsection

@section('script')
@endsection
