@extends('layouts.app')
@section('content')
 <!-- Preloader Start -->
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
    <!-- Preloader Start -->

    <main>

        <!-- Hero Start-->
        <div class="hero-area3 hero-overly2 d-flex align-items-center ">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-lg-9">
                        <div class="hero-cap text-center pt-50 pb-20">
                            <h2>Classified Search</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Hero End -->
        <!-- listing Area Start -->
        <div class="listing-area pt-120 pb-120">
            <div class="container">
                <div class="row">
                    <!-- Left content -->
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="row">
                            <div class="col-12">
                                    <div class="small-section-tittle2 mb-45">
                                    <h4>Advanced Filter</h4>
                                </div>
                            </div>
                        </div>
                        <!-- Job Category Listing start -->
                        <div class="category-listing mb-50">
                            <!-- single one -->
                            <form action="{{route('search-filter')}}" method="get">
                                <div class="single-listing">
                                    <!-- input -->
                                    <div class="input-form">
                                        <input type="text" placeholder="What are you finding?" name="search_query">
                                    </div>
                                    <!-- Select job items start -->
                                    <div class="select-job-items1">
                                        <select name="category">
                                            <option value="">Choose categories</option>
                                            <option value="">All</option>
                                            <option value="1">Hotel</option>
                                            <option value="2">Business</option>
                                        </select>

                                    </div>
                                    <!--  Select job items End-->
                                    <!-- Select job items start -->
                                    <div class="select-job-items2">
                                        <select name="city">
                                            <option value="">City</option>
                                            <option value="">All</option>
                                            <option value="hyderabad">Hyderabad</option>
                                            <option value="mumbai">Mumbai</option>
                                            <option value="delhi">Delhi</option>
                                        </select>
                                    </div>
                                    <!--  Select job items End-->
                                    <!-- Select job items start
                                    <div class="select-job-items2">
                                        <select name="select2">
                                            <option value="">Area (km)</option>
                                            <option value="">Dhaka- 1km</option>
                                            <option value="">Dinajpur- 2km</option>
                                            <option value="">Chittagong - 3km</option>
                                        </select>
                                    </div>
                                    Select job items End-->
                                </div>

                                <div class="single-listing">


                                  <!-- Range Slider End -->
                                     <input type="submit" class="btn list-btn mt-20" id="search" value="Search">
                                </div>

                                <div class="single-listing">


                                  <!-- Range Slider End -->
                                     <a href="#" class="btn list-btn mt-20" id="reset">Reset</a>
                                </div>

                            </form>
                        </div>
                        <!-- Job Category Listing End -->
                    </div>
                    <!-- Right content -->
                    <div class="col-xl-8 col-lg-8 col-md-6">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="count mb-35">
                                    <span>5432 Listings are available</span>
                                </div>
                            </div>
                        </div>
                        <!-- listing Details Stat-->
                        <div class="listing-details-area">
                            <div class="container">
                                <div class="row">
                                    <!-- post card starts   -->
                                    @foreach($posts as $post)
                                        <div class="col-lg-6 ">
                                            <div class="single-listing mb-30">
                                                <div class="list-img">
                                                    <img src="assets/img/gallery/list1.png" alt="">
                                                    <!-- <span>Open</span> -->
                                                </div>
                                                <div class="list-caption">
                                                    <span>Open</span>
                                                    <h3><a href="listing_details.html">{{$post->title}}</a></h3>
                                                    <p>{{$post->description}}</p>
                                                    <p>{{$post->address}}</p>
                                                    <p>{{$post->city}}</p>
                                                    <div class="list-footer">
                                                        <ul>
                                                            <li>{{$post->name}}</li>
                                                            <li>{{$post->mobile}}</li>
                                                            <li>{{$post->email}}</li>
                                                            <li><b>Category:</b>{{$post->category_name}}</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                    <!-- post card ends   -->
                                </div>
                            </div>
                        </div>
                        <!-- listing Details End -->
                        <!--Pagination Start  -->
                        <div class="pagination-area pt-70 text-center">
                            <div class="container">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="single-wrap d-flex justify-content-center">
                                            <nav aria-label="Page navigation example">
                                                <ul class="pagination justify-content-start">
                                                    <li class="page-item active"><a class="page-link" href="#">01</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">02</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">03</a></li>
                                                <li class="page-item"><a class="page-link" href="#"><span class="ti-angle-right"></span></a></li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Pagination End  -->
                    </div>
                </div>
            </div>
        </div>
        <!-- listing-area Area End -->

    </main>

    <!-- Scroll Up -->
    <div id="back-top" >
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>
@endsection
@section('js')
    <script type="text/javascript">

    </script>
@endsection
