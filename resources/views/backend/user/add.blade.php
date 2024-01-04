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
                    <h5 class="card-title">Add New User</h5>
                    <!-- Vertical Form -->
                    <form class="row g-3" action="" method="post">
                        {{ csrf_field() }}
                        <div class="col-12">
                            <label for="inputNanme4" class="form-label">Name</label>
                            <input type="text" required value="{{ old('name') }}"  name="name" class="form-control" id="inputNanme4">
                            <div style="color:red" >{{ $errors->first('name')}}</div>
                        </div>
                        <div class="col-12">
                            <label for="inputEmail4" class="form-label">Email</label>
                            <input type="email" required value="{{ old('email') }}" name="email" class="form-control" id="inputEmail4">
                            <div style="color:red" >{{ $errors->first('email')}}</div>
                        </div>
                        <div class="col-12">
                            <label for="inputPassword4" class="form-label">Password</label>
                            <input type="password" required name="password" class="form-control" id="inputPassword4">
                            <div style="color:red" >{{ $errors->first('password')}}</div>
                        </div>
                        <div class="col-12">
                            <label for="inputPassword4" class="form-label">Status</label>
                            <select name="status" id="" class="form-control">
                                <option {{(old('status') == 1) ? 'selected' : '' }} value="1">Active</option>
                                <option {{(old('status') == 0) ? 'selected' : '' }} value="0">Inactive</option>
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

