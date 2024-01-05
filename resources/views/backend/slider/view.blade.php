@extends('backend.layouts.app')
@section('style')
@endsection
@section('content')
    <div class="pagetitle">
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('panel.dashboard')}}">Home</a></li>
                <li class="breadcrumb-item">Manage Slider</li>
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
                        Sliders List
                        <a href="{{route('panel.sliders.add')}}" class="btn btn-success" style="float:right">Add new</a>
                    </h5>
                    <!-- Table with stripped rows -->
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Image</th>
                            <th scope="col">Short Title</th>
                            <th scope="col">Long Title</th>
                            <th scope="col" style="width:150px;">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($allData as $key => $slider)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td><img src="{{(!empty($slider->image))?url('upload/slider_images/',$slider->image):asset('upload/no_image.png')}}" alt="" width="120px" height="120px"></td>
                                    <td>{{$slider->short_title}}</td>
                                    <td>{{$slider->long_title}}</td>
                                    <td>
                                        <a title="Edit" class="btn btn-sm btn-primary" href="{{route('panel.sliders.edit', $slider->id)}}">Edit</a>
                                        <a title="Delete" class="btn btn-sm btn-danger" href="{{route('panel.sliders.delete', $slider->id)}}">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
      </div>
    </section>

@endsection

@section('script')
@endsection
