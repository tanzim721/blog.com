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
                        <!-- Profile Edit Form -->
                        <form method="post" action="{{route('panel.profile.store')}}" id="myForm" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="row mb-3">
                                <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
                                <div class="col-md-8 col-lg-9">
                                    <img src="{{(!empty($editData->image))?url('upload/user_images/',$editData->image):asset('upload/no_image.png')}}" alt="Profile" id="showImage" style="height:160px; width:160px;">
                                    <div class="pt-2">
                                        <input name="image" type="file" class="form-control" id="image" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Full Name</label>
                                <div class="col-md-8 col-lg-9">
                                    <input name="fullName" type="text" class="form-control" id="fullName" value="{{$editData->name}}">
                                </div>
                                <span style="color:red;">{{($errors->has('name'))?($errors->first('name')):''}}</span>
                            </div>
                            <div class="row mb-3">
                                <label for="about" class="col-md-4 col-lg-3 col-form-label">About</label>
                                <div class="col-md-8 col-lg-9">
                                    <textarea name="about" class="form-control" id="about" style="height: 100px">Sunt est soluta temporibus accusantium neque nam maiores cumque temporibus. Tempora libero non est unde veniam est qui dolor. Ut sunt iure rerum quae quisquam autem eveniet perspiciatis odit. Fuga sequi sed ea saepe at unde.</textarea>
                                </div>
                                <span style="color:red;">{{($errors->has('about'))?($errors->first('about')):''}}</span>
                            </div>
    
                            <div class="row mb-3">
                                <label for="company" class="col-md-4 col-lg-3 col-form-label">Company</label>
                                <div class="col-md-8 col-lg-9">
                                    <input name="company" type="text" class="form-control" id="company" value="Lueilwitz, Wisoky and Leuschke">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="Job" class="col-md-4 col-lg-3 col-form-label">Job</label>
                                <div class="col-md-8 col-lg-9">
                                    <input name="job" type="text" class="form-control" id="Job" value="Web Designer">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="Address" class="col-md-4 col-lg-3 col-form-label">Address</label>
                                <div class="col-md-8 col-lg-9">
                                    <input name="address" type="text" class="form-control" id="Address" value="{{$editData->address}}">
                                </div>
                                <span style="color:red;">{{($errors->has('address'))?($errors->first('address')):''}}</span>
                            </div>

                            <div class="row mb-3">
                                <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Mobile</label>
                                <div class="col-md-8 col-lg-9">
                                    <input name="mobile" type="text" class="form-control" id="Phone" value="{{$editData->mobile}}">
                                </div>
                                <span style="color:red;">{{($errors->has('mobile'))?($errors->first('mobile')):''}}</span>
                            </div>

                            <div class="row mb-3">
                                <label for="Email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                                <div class="col-md-8 col-lg-9">
                                    <input name="email" type="email" class="form-control" id="Email" value="{{$editData->email}}">
                                </div>
                                <span style="color:red;">{{($errors->has('email'))?($errors->first('email')):''}}</span>
                            </div>

                            <div class="row mb-3">
                                <label class="col-md-4 col-lg-3 col-form-label">Gender</label>
                                <div class="col-md-8 col-lg-9">
                                    <select class="form-select" aria-label="Default select example">
                                    <option value="">Select Gender</option>
                                    <option value="Male" {{($editData->gender=="Male")?"selected":""}}>Male</option>
                                    <option value="Female" {{($editData->gender=="Female")?"selected":""}}>Female</option>
                                    <option value="Others" {{($editData->gender=="Others")?"selected":""}}>Others</option>
                                    </select>
                                </div>
                                
                            </div>

                            <div class="text-center">
                            <button type="submit" class="btn btn-primary">Save Changes</button>
                            </div>

                            
                        </form><!-- End Profile Edit Form -->

                    </div>
                </div>

            </div>
        </div>
    </section>


@endsection

@section('script')
@endsection

