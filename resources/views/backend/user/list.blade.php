@extends('backend.layouts.app')
@section('style')
@endsection
@section('content')
    <div class="pagetitle">
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('panel/dashboard')}}">Home</a></li>
                <li class="breadcrumb-item">User</li>
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
                        Users List
                        <a href="{{url('panel/user/add')}}" class="btn btn-primary" style="float:right">Add new</a>
                    </h5>
                    <!-- Table with stripped rows -->
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Email Verified</th>
                            <th scope="col">Status</th>
                            <th scope="col">Created Date</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            @forelse($getRecord as $value)
                                <tr>
                                    <th scope="row">{{ $value->id }}</th>
                                    <td>{{ $value->name }}</td>
                                    <td>{{ $value->email }}</td>
                                    <td>{{ !empty($value->email_verified_at) ? 'Yes' : 'No' }}</td>
                                    <td>{{ !empty($value->status) ? 'Active' : 'Inactive' }}</td>
                                    <td>{{ date('d-m-Y H:i A', strtotime($value->created_at)) }}</td>
                                    <td>
                                        <a href="{{url('panel/user/edit/'.$value->id)}}" class="btn btn-primary">Edit</a>
                                        <a onclick="return confirm(' Are you sure you want to delete?');" href="{{url('panel/user/delete/'.$value->id)}}" class="btn btn-danger btn-sm">Delete</a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="100%">Record not found.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                        {{$getRecord->appends(Illuminate\Support\Facades\Request::except('page'))->links()}}
                </div>
            </div>
        </div>
      </div>
    </section>

@endsection

@section('script')
@endsection

