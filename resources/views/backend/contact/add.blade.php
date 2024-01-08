@extends('backend.layouts.app')
@section('style')
@endsection
@section('content')
    <div class="pagetitle">
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('panel.dashboard')}}">Home</a></li>
                <li class="breadcrumb-item">Add Contact</li>
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
                            View Contact
                            <a class="btn btn-success btn-sm" href="{{route('panel.contacts.view')}}" style="float:right;">Contact list</a>
                        </h5>
                        <br>
                        <!-- Vertical Form -->
                        <form class="row g-3" action="{{route('panel.contacts.store')}}" method="post" id="myForm" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="col-12">
                                <label for="address" class="form-label">Address</label>
                                <input type="text" value=""  name="address" class="form-control" id="address">
                            </div>
                            <div class="col-12">
                                <label for="mobile_no" class="form-label">Mobile No</label>
                                <input type="text" value=""  name="mobile_no" class="form-control" id="mobile_no">
                            </div>
                            <div class="col-12">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" value=""  name="email" class="form-control" id="email">
                            </div>
                            <div class="col-12">
                                <label for="facebook" class="form-label">Facebook</label>
                                <input type="text" value=""  name="facebook" class="form-control" id="facebook">
                            </div>
                            <div class="col-12">
                                <label for="twitter" class="form-label">Twitter</label>
                                <input type="text" value=""  name="twitter" class="form-control" id="twitter">
                            </div>
                            <div class="col-12">
                                <label for="youtube" class="form-label">Youtube</label>
                                <input type="text" value=""  name="youtube" class="form-control" id="youtube">
                            </div>
                            <div class="col-12">
                                <label for="google_plus" class="form-label">Google Plus</label>
                                <input type="text" value=""  name="google_plus" class="form-control" id="google_plus">
                            </div>

                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        $('#datepicker').datepicker({
            uiLibrary: 'bootstrap5'
        });
    </script>
@endsection

@section('script')
@endsection













