@extends('backend.layouts.app')
@section('style')
@endsection
@section('content')
    <div class="pagetitle">
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('panel.dashboard')}}">Home</a></li>
                <li class="breadcrumb-item">Edit Time</li>
            </ol>
        </nav>
    </div>
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                @include('frontend.layouts._message')
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">
                            Edit Time
                            <a class="btn btn-success btn-sm" href="{{route('panel.business_times.view')}}" style="float:right;"><i class="bi bi-list"></i> Time list</a>
                        </h5>
                        <br>
                        <!-- Vertical Form -->
                        <form class="row g-3" action="{{route('panel.business_times.update',$editData->id)}}" method="post" id="myForm" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="col-12">
                                <label for="short_title" class="form-label">Day</label>
                                <input type="text" value="{{$editData->short_title}}"  name="short_title" class="form-control" id="short_title">
                            </div>
                            <div class="col-12">
                                <label for="time" class="form-label">Time</label>
                                <input type="text" value="{{$editData->time}}"  name="time" class="form-control" id="time">
                            </div>
                            <div class="col-12 pt-3">
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













