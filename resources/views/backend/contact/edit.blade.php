@extends('backend.layouts.app')
@section('style')
@endsection
@section('content')
    <div class="pagetitle">
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('panel.dashboard')}}">Home</a></li>
                <li class="breadcrumb-item">Edit Contact</li>
            </ol>
        </nav>
    </div>
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                @include('layouts._message')
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">
                            Edit Contact
                            <a class="btn btn-success btn-sm" href="{{route('panel.contacts.view')}}" style="float:right;">Contact list</a>
                        </h5>
                        <br>
                        <!-- Vertical Form -->
                        <form class="row g-3" action="{{route('panel.contacts.update',$editData->id)}}" method="post" id="myForm" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="col-12">
                                <label for="address" class="form-label">Address</label>
                                <input type="text" value="{{$editData->address}}" name="address" class="form-control" id="datepicker">
                            </div> 
                            <div class="col-12">
                                <label for="mobile_no" class="form-label">Mobile no.</label>
                                <input type="text" value="{{$editData->mobile_no}}" name="mobile_no" class="form-control" id="datepicker">
                            </div> 
                            <div class="col-12">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" value="{{$editData->email}}" name="email" class="form-control" id="datepicker">
                            </div> 
                            <div class="col-12">
                                <label for="facebook" class="form-label">Facebook</label>
                                <input type="text" value="{{$editData->facebook}}" name="facebook" class="form-control" id="datepicker">
                            </div> 
                            <div class="col-12">
                                <label for="youtube" class="form-label">Youtube</label>
                                <input type="text" value="{{$editData->youtube}}" name="youtube" class="form-control" id="datepicker">
                            </div> 
                            <div class="col-12">
                                <label for="twitter" class="form-label">Twitter</label>
                                <input type="text" value="{{$editData->twitter}}" name="twitter" class="form-control" id="datepicker">
                            </div> 
                            <div class="col-12">
                                <label for="google_plus" class="form-label">Google Plus</label>
                                <input type="text" value="{{$editData->google_plus}}" name="google_plus" class="form-control" id="datepicker">
                            </div> 
                            <div class="col-12 text-center">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('script')
@endsection













