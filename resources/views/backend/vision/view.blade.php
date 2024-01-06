@extends('backend.layouts.app')
@section('style')
@endsection
@section('content')
    <div class="pagetitle">
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('panel.dashboard')}}">Home</a></li>
                <li class="breadcrumb-item">Vision</li>
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
                        Vision List
                        @if($countVision < 1)
                            <a href="{{route('panel.visions.add')}}" class="btn btn-success" style="float:right">Add new</a>
                        @endif
                    </h5>
                    <!-- Table with stripped rows -->
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Image</th>
                            <th scope="col">Title</th>
                            <th scope="col" style="width:150px;">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($allData as $key => $vision)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td><img src="{{(!empty($vision->image))?url('upload/vision_images/',$vision->image):asset('upload/no_image.png')}}" alt="" width="120px" height="120px"></td>
                                    <td>{{$vision->title}}</td>
                                    <td>
                                        <a title="Edit" class="btn btn-sm btn-primary" href="{{route('panel.visions.edit', $vision->id)}}"><span class="bi bi-pencil-square"></span></a>
                                        <a title="Delete" class="btn btn-sm btn-danger" href="{{route('panel.visions.delete', $vision->id)}}"><span class="bi bi-trash"></span></a>
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
