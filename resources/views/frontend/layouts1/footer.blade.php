 <!-- Start Footer  -->
 <footer>
    <div class="footer-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="footer-top-box">
                        <h3>Business Time</h3>
                        <ul class="list-time">
                            <li>Monday - Friday: 08.00am to 05.00pm</li> <li>Saturday: 10.00am to 08.00pm</li> <li>Sunday: <span>Closed</span></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="footer-top-box">
                        <h3>Newsletter</h3>
                        <form class="newsletter-box">
                            <div class="form-group">
                                <input class="" type="email" name="Email" placeholder="Email Address*" />
                                <i class="fa fa-envelope"></i>
                            </div>
                            <button class="btn hvr-hover" type="submit">Submit</button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12">
                    @foreach($contacts as $contact)
                    <div class="footer-top-box">
                        <h3>Social Media</h3>
                        <ul class="p-3">
                            <li><a href="{{$contact->facebook}}" target="__blank"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="{{$contact->twitter}}" target="__blank"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="{{$contact->youtube}}" target="__blank"><i class="fab fa-youtube" aria-hidden="true"></i></a></li>
                            <li><a href="{{$contact->google}}" target="__blank"><i class="fab fa-google-plus" aria-hidden="true"></i></a></li>
                            <!-- <li><a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fab fa-pinterest-p" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fab fa-whatsapp" aria-hidden="true"></i></a></li> -->
                        </ul>
                    </div>
                    @endforeach
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-lg-4 col-md-12 col-sm-12">
                @foreach($abouts as $about)    
                <div class="footer-widget">
                        <h4>About {{$about->short_title}}</h4>
                        <p>{{$about->long_title}}</p>
                    </div>
                </div>
                @endforeach
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="footer-link">
                        <h4>Information</h4>
                        <ul>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Customer Service</a></li>
                            <li><a href="#">Our Sitemap</a></li>
                            <li><a href="#">Terms &amp; Conditions</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Delivery Information</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="footer-link-contact">
                        <h4>Contact Us</h4>
                        @foreach($contacts as $contact)
                        <ul>
                            <li>
                                <p><i class="fas fa-map-marker-alt"></i>Address: {{$contact->address}}</p>
                            </li>
                            <li>
                                <p><i class="fas fa-phone-square"></i>Phone: <a href="tel:+1-888705770">{{$contact->mobile_no}}</a></p>
                            </li>
                            <li>
                                <p><i class="fas fa-envelope"></i>Email: <a href="mailto:contactinfo@gmail.com">{{$contact->email}}</a></p>
                            </li>
                        </ul>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    <div class="container text-center pt-4">
            <strong>
                <div class="copyright color-dark">
                    &copy; {{date('Y')}} Copyright <strong><span>S&J BD Limited</span></strong>, All Rights Reserved
                </div>
                <div class="credits color-dark">
                    Designed & Developed by <a href="https://tanzim36.xyz/">Tanzimul Islam</a>
                </div>
            </strong>
        </div>
</footer>
<!-- End Footer  -->