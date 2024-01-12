<div class="main-top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="right-phone-box">
                        @foreach($contacts as $contact)
                        <p>Call US : <a href="#"> {{$contact->mobile_no}}</a></p>
                        @endforeach
                    </div>
                    <div class="our-link">
                        <ul>
                            <!-- <li><a href="#"><i class="fa fa-user s_color"></i> My Account</a></li> -->
                            <li><a href="{{route('panel.location.view')}}"><i class="fas fa-location-arrow"></i> Our location</a></li>
                            <li><a href="{{route('panel.contact_from.add')}}"><i class="fas fa-headset"></i> Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="login-box">
                        <a href="{{url('login')}}" class="text-white">Sign In</a>
                        <br>
                        <a href="{{url('register')}}" class="text-white">Register Here</a>
					</div>
                    <div class="text-slid-box">
                        <div id="offer-box" class="carouselTicker">
                            <ul class="offer-box">
                                @foreach($times as $time)   
                                <li>
                                    <i class="fab fa-opencart"></i>{{$time->short_title}}: {{$time->time}}
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Main Top -->

    <!-- Start Main Top -->
    <header class="main-header">
        <!-- Start Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-default bootsnav">
            <div class="container">
                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href=""><img src="images/logo.png" class="logo" alt=""></a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <a href="" class="logo d-flex w-auto">
                        <img src="{{url('upload/logo_images/',$logo->logo)}}" alt="">
                    </a>
                    <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
                        <li class="nav-item"><a class="nav-link" href="{{route('home1')}}">Home</a></li>
                        <li classs="dropdown">
                            <a href="#" class="nav-link dropdown-toggle arrow" data-toggle="dropdown">About Us </a>
                            <ul class="dropdown-menu p-3">
                                <li><a href="{{route('about')}}"><strong>About</strong></a></li>
                                <li><a href="{{route('why_choose_us')}}"><strong>Why Choose Us</strong></a></li>
                                <li><a href="{{route('team')}}"><strong>Team</strong></a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="{{route('service')}}">Services</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('partner')}}">Our Partner</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('quality')}}">Quality Control</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('aop')}}">AOP</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('panel.contact_from.add')}}">Contact</a></li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->

                <!-- Start Atribute Navigation -->
                <!-- <div class="attr-nav">
                    <ul>
                        <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
                        <li class="side-menu">
							<a href="#">
								<i class="fa fa-shopping-bag"></i>
								<span class="badge">3</span>
								<p>My Cart</p>
							</a>
						</li>
                    </ul>
                </div> -->
                <!-- End Atribute Navigation -->
            </div>
            <!-- Start Side Menu -->
            <!-- <div class="side">
                <a href="#" class="close-side"><i class="fa fa-times"></i></a>
                <li class="cart-box">
                    <ul class="cart-list">
                        <li>
                            <a href="#" class="photo"><img src="images/img-pro-01.jpg" class="cart-thumb" alt="" /></a>
                            <h6><a href="#">Delica omtantur </a></h6>
                            <p>1x - <span class="price">$80.00</span></p>
                        </li>
                        <li>
                            <a href="#" class="photo"><img src="images/img-pro-02.jpg" class="cart-thumb" alt="" /></a>
                            <h6><a href="#">Omnes ocurreret</a></h6>
                            <p>1x - <span class="price">$60.00</span></p>
                        </li>
                        <li>
                            <a href="#" class="photo"><img src="images/img-pro-03.jpg" class="cart-thumb" alt="" /></a>
                            <h6><a href="#">Agam facilisis</a></h6>
                            <p>1x - <span class="price">$40.00</span></p>
                        </li>
                        <li class="total">
                            <a href="#" class="btn btn-default hvr-hover btn-cart">VIEW CART</a>
                            <span class="float-right"><strong>Total</strong>: $180.00</span>
                        </li>
                    </ul>
                </li>
            </div> -->
            <!-- End Side Menu -->
        </nav>
        <!-- End Navigation -->
    </header>