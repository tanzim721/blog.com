@extends('backend.layouts.app')
@section('style')
@endsection
@section('content')
    <div class="pagetitle">
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('panel.dashboard')}}">Home</a></li>
                <li class="breadcrumb-item">Contact</li>
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
                        Contact List
                        <a href="{{route('panel.contacts.add')}}" class="btn btn-success" style="float:right"><i class="bi bi-plus-circle"></i> Add new</a>
                    </h5>
                    <!-- Table with stripped rows -->
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Address</th>
                            <th scope="col">Mobile no.</th>
                            <th scope="col">Email</th>
                            <th scope="col">Facebook</th>
                            <th scope="col">Twitter</th>
                            <th scope="col">Youtube</th>
                            <th scope="col">Google Plus</th>
                            <th scope="col">Action</th> 
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($allData as $key => $contacts)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{$contacts->address}}</td>
                                    <td>{{$contacts->mobile_no}}</td>
                                    <td>{{$contacts->email}}</td>
                                    <td>{{$contacts->facebook}}</td>
                                    <td>{{$contacts->youtube}}</td>
                                    <td>{{$contacts->twitter}}</td>
                                    <td>{{$contacts->google_plus}}</td>
                                    <td>
                                        <a title="Edit" class="btn btn-sm btn-primary" href="{{route('panel.contacts.edit', $contacts->id)}}"><span class="bi bi-pencil-square"></span></a>
                                        <a title="Delete" class="btn btn-sm btn-danger" href="{{route('panel.contacts.delete', $contacts->id)}}"><span class="bi bi-trash"></span></a>
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
