@extends('backend.layouts.app')
@section('style')
@endsection
@section('content')
    <div class="pagetitle">
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('panel.dashboard')}}">Home</a></li>
                <li class="breadcrumb-item">Edit News & Events</li>
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
                            Edit News and Events
                            <a class="btn btn-success btn-sm" href="{{route('panel.news_events.view')}}" style="float:right;">News and event list</a>
                        </h5>
                        <br>
                        <!-- Vertical Form -->
                        <form class="row g-3" action="{{route('panel.news_events.update',$editData->id)}}" method="post" id="myForm" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="col-12">
                                <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Image</label>
                                <div class="col-md-8 col-lg-9">
                                    <img src="{{(!empty($editData->image))?url('upload/news_event_images/',$editData->image):asset('upload/no_image.png')}}" alt="Profile" id="showImage" style="height:120px; width:120px;">
                                    <div class="pt-2">
                                        <input name="image" type="file" class="form-control" id="image" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <label for="date" class="form-label">Date</label>
                                <input type="date" value="{{$editData->date}}" name="date" class="form-control" id="datepicker">
                            </div> 
                            <div class="col-12">
                                <label for="short_title" class="form-label">Short Title</label>
                                <input type="text" value="{{$editData->short_title}}"  name="short_title" class="form-control" id="short_title">
                            </div>
                            <div class="col-12">
                                <label for="long_title" class="form-label">Long Title</label>
                                <textarea name="long_title" name="long_title" id="long_title" rows="5" class="form-control">{{$editData->long_title}}</textarea>
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













