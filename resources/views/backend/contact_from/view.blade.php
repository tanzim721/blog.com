@extends('backend.layouts.app')
@section('style')
@endsection
@section('content')
    <div class="pagetitle">
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('panel.dashboard')}}">Home</a></li>
                <li class="breadcrumb-item">Customer Message</li>
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
                        Customer Message List
                    </h5>
                    <!-- Table with stripped rows -->
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Message</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($allData as $key => $contacts)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{$contacts->name}}</td>
                                    <td>{{$contacts->email}}</td>
                                    <td>{{$contacts->message}}</td>
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
