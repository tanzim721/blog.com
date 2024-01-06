@extends('backend.layouts.app')
@section('style')
@endsection
@section('content')
    <div class="pagetitle">
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('panel.dashboard')}}">Home</a></li>
                <li class="breadcrumb-item">News and Events</li>
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
                        News and Events List
                        <a href="{{route('panel.news_events.add')}}" class="btn btn-success" style="float:right">Add new</a>
                    </h5>
                    <!-- Table with stripped rows -->
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col" style="width:130px;">Date</th>
                            <th scope="col">Image</th>
                            <th scope="col">Short Title</th>
                            <th scope="col">Long Title</th>
                            <th scope="col" style="width:150px;">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($allData as $key => $news_events)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{$news_events->date}}</td>
                                    <td><img src="{{(!empty($news_events->image))?url('upload/news_event_images/',$news_events->image):asset('upload/no_image.png')}}" alt="" width="120px" height="120px"></td>
                                    <td>{{$news_events->short_title}}</td>
                                    <td>{{$news_events->long_title}}</td>
                                    <td>
                                        <a title="Edit" class="btn btn-sm btn-primary" href="{{route('panel.news_events.edit', $news_events->id)}}">Edit</a>
                                        <a title="Delete" class="btn btn-sm btn-danger" href="{{route('panel.news_events.delete', $news_events->id)}}">Delete</a>
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
