@extends('backend.layouts.app')
@section('style')
@endsection
@section('content')
    <div class="pagetitle">
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('panel.dashboard')}}">Home</a></li>
                <li class="breadcrumb-item">Logo</li>
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
                        Users List
                        @if($countLogo < 1)
                        <a href="{{route('panel.logo.add')}}" class="btn btn-primary" style="float:right">Add new</a>
                        @endif
                    </h5>
                    <!-- Table with stripped rows -->
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Logo</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($allData as $key => $logo)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td><img src="{{(!empty($logo->logo))?url('upload/logo_images/',$logo->logo):asset('upload/no_image.png')}}" alt="" width="120px" height="120px"></td>
                                    <td>
                                        <a title="Edit" class="btn btn-sm btn-primary" href="{{route('panel.logo.edit', $logo->id)}}"><span class="bi bi-pencil-square"></span></a>
                                        <a title="Delete" class="btn btn-sm btn-danger" href="{{route('panel.logo.delete', $logo->id)}}"><span class="bi bi-trash"></span></a>
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

