@extends('backend.layouts.app')
@section('style')
@endsection
@section('content')
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                @include('layouts._message')
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">
                            Edit Logo
                            <a class="btn btn-success btn-sm" href="{{route('panel.logo.view')}}" style="float-right;">Logo list</a>

                        </h5>
                        <!-- Vertical Form -->
                        <form class="row g-3" action="{{route('panel.logo.update', $editData->id)}}" method="post" id="myForm" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="row mb-3">
                                <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Logo</label>
                                <div class="col-md-8 col-lg-9">
                                    <img src="{{(!empty($editData->logo))?url('upload/logo_images/',$editData->logo):asset('upload/no_image.png')}}" alt="Profile" id="showImage" style="height:120px; width:120px;">
                                    <div class="pt-2">
                                        <input name="image" type="file" class="form-control" id="image" value="">
                                    </div>
                                </div>
                                <div class="text-center">
                                    <br>
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

