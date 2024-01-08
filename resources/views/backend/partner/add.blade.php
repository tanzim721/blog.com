@extends('backend.layouts.app')
@section('style')
@endsection
@section('content')
    <div class="pagetitle">
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('panel.dashboard')}}">Home</a></li>
                <li class="breadcrumb-item">Add Partner</li>
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
                            View Partner
                            <a class="btn btn-success btn-sm" href="{{route('panel.partners.view')}}" style="float:right;"><i class="bi bi-list"></i>Partner list</a>
                        </h5>
                        <br>
                        <!-- Vertical Form -->
                        <form class="row g-3" action="{{route('panel.partners.store')}}" method="post" id="myForm" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="cl-12">
                            <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Image</label>
                                <div class="col-md-8 col-lg-9">
                                    <img src="{{(!empty($editData->image))?url('upload/partner_images/',$editData->image):asset('upload/no_image.png')}}" alt="Profile" id="showImage" style="height:160px; width:160px;">
                                    <div class="pt-2">
                                        <input name="image" type="file" class="form-control" id="image" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <label for="short_title" class="form-label">Short Title</label>
                                <input type="text" value=""  name="short_title" class="form-control" id="short_title">
                            </div>
                            <div class="col-12">
                                <label for="long_title" class="form-label">Long Title</label>
                                <textarea name="long_title" name="long_title" id="long_title" rows="5" class="form-control"></textarea>
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
    <script>
        $('#datepicker').datepicker({
            uiLibrary: 'bootstrap5'
        });
    </script>
@endsection

@section('script')
@endsection













