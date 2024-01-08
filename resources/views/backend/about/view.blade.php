@extends('backend.layouts.app')
@section('style')
@endsection
@section('content')
    <div class="pagetitle">
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('panel.dashboard')}}">Home</a></li>
                <li class="breadcrumb-item">About</li>
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
                            About List
                            <a href="{{route('panel.abouts.add')}}" class="btn btn-success btn-sm" style="float:right"><i class="bi bi-plus-circle"></i> Add new</a>
                        </h5>
                        <!-- Table with stripped rows -->
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Image</th>
                                <th scope="col">Short Title</th>
                                <th scope="col">Long Title</th>
                                <th scope="col">CEO Name</th>
                                <th scope="col" style="width:150px;">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($allData as $key => $abouts)
                                    <tr>
                                        <td>{{$key+1}}</td>
                                        <td><img src="{{(!empty($abouts->image))?url('upload/about_images/',$abouts->image):asset('upload/no_image.png')}}" alt="" width="120px" height="120px"></td>
                                        <td>{{$abouts->short_title}}</td>
                                        <td>{{$abouts->long_title}}</td>
                                        <td>{{$abouts->ceo_name}}</td>
                                        <td>
                                            <a title="Edit" class="btn btn-sm btn-primary" href="{{route('panel.abouts.edit', $abouts->id)}}"><span class="bi bi-pencil-square"></span></a>
                                            <a title="Delete" class="btn btn-sm btn-danger" href="{{route('panel.abouts.delete', $abouts->id)}}"><span class="bi bi-trash"></span></a>
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
