@extends('backend.layouts.app')
@section('style')
@endsection
@section('content')
    <div class="pagetitle">
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('panel.dashboard')}}">Home</a></li>
                <li class="breadcrumb-item">Add Merchandising list</li>
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
                            View Merchandising List
                            <a class="btn btn-success btn-sm" href="{{route('panel.merchandisinglist.view')}}" style="float:right;"><i class="bi bi-list"></i>Merchandising list</a>
                        </h5>
                        <br>
                        <!-- Vertical Form -->
                        <form class="row g-3" action="{{route('panel.merchandisinglist.store')}}" method="post" id="myForm" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="cl-12">
                            <div class="col-12">
                                <label for="long_title" class="form-label">Long Title</label>
                                <textarea name="long_title" name="long_title" id="long_title" rows="5" class="form-control"></textarea>
                            </div>
                            <div class="col-12 pt-3">
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













