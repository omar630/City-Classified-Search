 @extends('layouts.app')
@section('content')
 <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo/loder.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
   
    <main>

        <!-- Hero Start-->
        <div class="hero-area2  slider-height2 hero-overly2 d-flex align-items-center ">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center pt-50">
                            <h2>Catagories</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Hero End -->
        <!-- Categories Area Start -->
        <div class="categories-area section-padding30">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Section Tittle -->
                        <div class="section-tittle text-center mb-80">
                            <span>We are offering for you</span>
                            <h2>Featured Categories</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-cat text-center mb-50">
                            <div class="cat-icon">
                                <span class="flaticon-bed"></span>
                            </div>
                            <div class="cat-cap">
                                <h5><a href="#">Hotel</a></h5>
                                <p>Share a Grand Experience
                                Makes you feel at home</p>

                                <a href="#">View Details</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-cat text-center mb-50">
                            <div class="cat-icon">
                                <span class="flaticon-drink"></span>
                            </div>
                            <div class="cat-cap">
                                <h5><a href="#">Night Life</a></h5>
                                <p>Must explain your how this keind denoun pleasure</p>
                                <a href="#">View Details</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-cat text-center mb-50">
                            <div class="cat-icon">
                                <span class="flaticon-home"></span>
                            </div>
                            <div class="cat-cap">
                                <h5><a href="#">Culture Place</a></h5>
                                <p>Never be afraid to trust an unknown future to a God</p>
                                <a href="#">View Details</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-cat text-center mb-50">
                            <div class="cat-icon">
                                <span class="flaticon-food"></span>
                            </div>
                            <div class="cat-cap">
                                <h5><a href="#">Restaurent</a></h5>
                                <p>Food with integrity<br>
                                Hot eats, cold treats.</p>
                                <a href="#">View Details</a>
                            </div>
                        </div>
                    </div>
                   
                 </div>
            </div>
        </div>
        <!-- Categories Area End -->
        <!-- Services Area Start -->
        <div class="services-area pt-150 pb-150 section-bg" data-background="assets/img/gallery/section_bg02.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Section Tittle -->
                        <div class="section-tittle section-tittle2 text-center mb-80">
                            <span>Easy to explore</span>
                            <h2>How It Works</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-between">
                    <div class="col-lg-3 col-md-6">
                        <div class="single-services text-center mb-50">
                            <div class="services-icon">
                                <span class="flaticon-list"></span>
                            </div>
                            <div class="services-cap">
                                <h5><a href="#">1. Choose a Category</a></h5>
                                
                            </div>
                            <!-- Shpape -->
                            <img class="shape1 d-none d-lg-block" src="assets/img/icon/serices1.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="single-services text-center mb-50">
                            <div class="services-icon">
                                <span class="flaticon-problem"></span>
                            </div>
                            <div class="services-cap">
                                <h5><a href="#">2. what you want</a></h5>
                               
                            </div>
                            <img class="shape2 d-none d-lg-block" src="assets/img/icon/serices2.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="single-services text-center mb-50">
                            <div class="services-icon">
                                <span class="flaticon-respect"></span>
                            </div>
                            <div class="services-cap">
                                <h5><a href="#">3. Go out & Explore</a></h5>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Services Area End -->
        <!-- Popular Locations Start -->
        <div class="popular-location section-padding30">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Section Tittle -->
                        <div class="section-tittle text-center mb-80">
                            <span>Most visited places</span>
                            <h2>Popular Locations</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-location mb-30">
                            <div class="location-img">
                                <img src="assets/img/gallery/charminar.jpg" alt="">
                            </div>
                            <div class="location-details">
                                <p>Hyderabad</p>
                                <a href="#" class="location-btn">65 <i class="ti-plus"></i> Location</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-location mb-30">
                            <div class="location-img">
                                <img src="assets/img/gallery/taj.jpg" alt="" style="height: 255px">
                            </div>
                            <div class="location-details">
                                <p>Mumbai</p>
                                <a href="#" class="location-btn">60 <i class="ti-plus"></i> Location</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-location mb-30">
                            <div class="location-img">
                                <img src="assets/img/gallery/tajmahal.jpg" alt=""style="height: 255px">
                            </div>
                            <div class="location-details">
                                <p>Delhi</p>
                                <a href="#" class="location-btn">50 <i class="ti-plus"></i> Location</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-location mb-30">
                            <div class="location-img">
                                <img src="assets/img/gallery/location4.png" alt="">
                            </div>
                            <div class="location-details">
                                <p>Italy</p>
                                <a href="#" class="location-btn">28 <i class="ti-plus"></i> Location</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-location mb-30">
                            <div class="location-img">
                                <img src="assets/img/gallery/location5.png" alt="">
                            </div>
                            <div class="location-details">
                                <p>Nepal</p>
                                <a href="#" class="location-btn">99 <i class="ti-plus"></i> Location</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-location mb-30">
                            <div class="location-img">
                                <img src="assets/img/gallery/location6.png" alt="">
                            </div>
                            <div class="location-details">
                                <p>indonesia</p>
                                <a href="#" class="location-btn">78 <i class="ti-plus"></i> Location</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Popular Locations End -->

    </main>
   
    <!-- Scroll Up -->
    <div id="back-top" >
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>
@endsection  