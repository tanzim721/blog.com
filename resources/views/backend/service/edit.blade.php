@extends('backend.layouts.app')
@section('style')
@endsection
@section('content')
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                @include('frontend.layouts._message')
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">
                            Edit Service
                            <a class="btn btn-success btn-sm" href="{{route('panel.services.view')}}" style="float:right;">Service list</a>
                        </h5>
                        <br>
                        <!-- Vertical Form -->
                        <form class="row g-3" action="{{route('panel.services.update',$editData->id)}}" method="post" id="myForm" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="col-12">
                                <label for="short_title" class="form-label">Short Title</label>
                                <input type="text" value="{{$editData->short_title}}"  name="short_title" class="form-control" id="short_title">
                            </div>
                            <div class="col-12">
                                <label for="long_title" class="form-label">Long Title</label>
                                <textarea name="long_title" name="long_title" id="long_title" rows="5" class="form-control">{{$editData->long_title}}</textarea>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Submit</button>
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













