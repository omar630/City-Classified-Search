
        <!-- Footer Start-->
        <div class="footer-area">
            <div class="container">
               <div class="footer-top footer-padding">
                    <div class="row justify-content-between">
                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                            <div class="single-footer-caption mb-50">
                                <div class="single-footer-caption mb-30">
                                    <!-- logo -->
                                    <div class="footer-logo">
                                        <a href="index.html"><img src="assets/img/logo/logo2_footer.png" alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>Quick Link</h4>
                                    <ul>
                                       <li><a href="{{route('homepage')}}">Home</a></li>
                                            <li><a href="{{route('aboutpage')}}">About</a></li>
                                         <li><a href="{{route('listingpage')}}">Listing</a></li>

                                         <li><a href="{{route('contactpage')}}">Contact</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>Categories</h4>
                                    <ul>
                                        <li><a href="#">Reasonable Hotel</a></li>
                                        <li><a href="#">Popular Restaurant</a></li>
                                        <li><a href="#">Easy Shopping</a></li>
                                        <li><a href="#">Night Life</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                <div class="footer-bottom">
                    <div class="row d-flex justify-content-between align-items-center">
                        <div class="col-xl-9 col-lg-8">
                            <div class="footer-copy-right">
                                <p>
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved  <i class="fa fa-heart" aria-hidden="true"></i> CityClassifieds.com</a>
</p>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4">
                            <!-- Footer Social -->
                            <div class="footer-social f-right">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>

                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
               </div>
            </div>
        </div>

    <!-- JS here -->
		<!-- All JS Custom Plugins Link Here here -->
        <script src="{{url('assets/js/vendor/modernizr-3.5.0.min.js')}}"></script>
		<!-- Jquery, Popper, Bootstrap -->
		<script src="{{url('/assets/js/vendor/jquery-1.12.4.min.js')}}"></script>
        <script src="{{url('/assets/js/popper.min.js')}}"></script>
        <script src="{{url('/assets/js/bootstrap.min.js')}}"></script>
        <script type="text/javascript" src="{{url('assets/backend/js/mdb.min.js')}}"></script>
	    <!-- Jquery Mobile Menu -->
        <script src="{{url('/assets/js/jquery.slicknav.min.js')}}"></script>

		<!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="{{url('/assets/js/owl.carousel.min.js')}}"></script>
        <script src="{{url('/assets/js/slick.min.js')}}"></script>
		<!-- One Page, Animated-HeadLin -->
        <script src="{{url('/assets/js/wow.min.js')}}"></script>
		<script src="{{url('/assets/js/animated.headline.js')}}"></script>
        <script src="{{url('/assets/js/jquery.magnific-popup.js')}}"></script>

		<!-- Nice-select, sticky -->
        <script src="{{url('/assets/js/jquery.nice-select.min.js')}}"></script>
		<script src="{{url('/assets/js/jquery.sticky.js')}}"></script>

        <!-- contact js -->
        <script src="{{url('/assets/js/contact.js')}}"></script>
        <script src="{{url('/assets/js/jquery.form.js')}}"></script>
        <script src="{{url('/assets/js/jquery.validate.min.js')}}"></script>
        <script src="{{url('/assets/js/mail-script.js')}}"></script>
        <script src="{{url('/assets/js/jquery.ajaxchimp.min.js')}}"></script>

		<!-- Jquery Plugins, main Jquery -->
        <script src="{{url('/assets/js/plugins.js')}}"></script>
        <script src="{{url('/assets/js/main.js')}}"></script>
        <script type="text/javascript" src="{{url('assets/backend/js/modules/toastr.js')}}"></script>
        @if(Session::has('message'))
        <script type="text/javascript">
          @if(Session::get('response') == 1)
            toastr.success('{{Session::get('message')}}');
          @else
            toastr.error('{{Session::get('message')}}');
          @endif
        </script>
        @endif
