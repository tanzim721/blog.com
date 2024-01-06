@extends('backend.layouts.app')
@section('style')
@endsection
@section('content')
    <div class="pagetitle">
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('panel.dashboard')}}">Home</a></li>
                <li class="breadcrumb-item">Mission</li>
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
                        Mission List
                        @if($countMission < 1)
                            <a href="{{route('panel.missions.add')}}" class="btn btn-success" style="float:right">Add new</a>
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
                            @foreach($allData as $key => $mission)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td><img src="{{(!empty($mission->image))?url('upload/mission_images/',$mission->image):asset('upload/no_image.png')}}" alt="" width="120px" height="120px"></td>
                                    <td>{{$mission->title}}</td>
                                    <td>
                                        <a title="Edit" class="btn btn-sm btn-primary" href="{{route('panel.missions.edit', $mission->id)}}"><span class="bi bi-pencil-square"></span></a>
                                        <a title="Delete" class="btn btn-sm btn-danger" href="{{route('panel.missions.delete', $mission->id)}}"><span class="bi bi-trash"></span></a>
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
