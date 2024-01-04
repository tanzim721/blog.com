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
                    <h5 class="card-title">Edit User</h5>
                    <!-- Vertical Form -->
                    <form class="row g-3" action="" method="post">
                        {{ csrf_field() }}
                        <div class="col-12">
                            <label for="inputNanme4" class="form-label">Name</label>
                            <input type="text" value="{{ $getRecord->name }}" required name="name" class="form-control" id="inputNanme4">
                            <div style="color:red" >{{ $errors->first('name')}}</div>
                        </div>
                        <div class="col-12">
                            <label for="inputEmail4" class="form-label">Email</label>
                            <input type="email" value="{{ $getRecord->email }}" required name="email" class="form-control" id="inputEmail4">
                            <div style="color:red" >{{ $errors->first('email')}}</div>
                        </div>
                        <div class="col-12">
                            <label for="inputPassword4" class="form-label">Password</label>
                            <input type="text" name="password" class="form-control" id="inputPassword4">
                            <p>Do you want to change password? please fill password input box.</p>
                        </div>
                        <div class="col-12">
                            <label for="inputPassword4" class="form-label">Status</label>
                            <select name="status" id="" class="form-control">
                                <option {{ ($getRecord->status == 1) ? 'selected' : '' }} value="1">Active</option>
                                <option {{ ($getRecord->status == 0) ? 'selected' : '' }} value="0">Inactive</option>
                            </select>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form><!-- Vertical Form -->

                    </div>
                </div>

            </div>
        </div>
    </section>


@endsection

@section('script')
@endsection

