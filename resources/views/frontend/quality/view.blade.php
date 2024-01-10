@extends('frontend.layouts1.app')

@section('style')
@endsection

@section('content')
   
    
    <!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2><strong>Quality</strong></h2>
                    <ul class="breadcrumb">
                        <strong>
                            <li class="breadcrumb-item"><a href="{{route('home1')}}">Home</a></li>
                            <li class="breadcrumb-item active">Quality</li>
                        </strong>
                    </ul>
                </div>
            </div>
        </div>
    </div>
   
	<div class="box-add-products">
		<div class="container">
            <h1 class="text-danger text-center pb-4"><strong>_______Quality Control________</strong></h1>
			<div class="row">
                @foreach($qualitys as $quality)
				<div class="col-lg-4 col-md-6 col-sm-12 font-weight-bold p-3">
					<div class="offer-box-products p-3">
                        <p class="text-center text-dark p-2"><strong>{{$quality->long_title}}</strong></p>
					</div>
				</div>
                @endforeach
			</div>
		</div>
	</div>

    

@endsection

@section('script')
@endsection
