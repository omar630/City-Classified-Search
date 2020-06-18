 @extends('layouts.app')
@section('content')

       

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Material Design Bootstrap</title>
    <!-- Font Awesome -->
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{url('assets/css/bootstrap.min.css')}}">
    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="{{url('assets/MDB/css/mdb.min.css')}}">

    <!-- Your custom styles (optional) -->
  
</head>


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
                            <h2>Post</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<body class="">

  <!-- Main Navigation -->
 
  
  <!-- Main Navigation -->

  <!-- Main layout -->


    <div class="container">


      <!-- Section: Create Page -->
      <section class="my-5">

        <!-- Grid row -->
        <div class="row">

          <!-- Grid column -->
          <div class="col-lg-8">
  <div class="card mb-4 post-title-panel">
              <div class="card-body">
                <div class="md-form mt-1 mb-0">
                  <input type="text" id="form1" class="form-control" value="" name="title">
                  <label class="form-check-label" for="form1" class="">Post title<sup><i class="fas fa-asterisk asterisk"></i></sup></label>
                </div>
              </div>
            </div>
            <!-- First card -->
            <div class="card mb-4 post-title-panel">
              <div class="card-body">
                <div class="select-itms" style="margin-right: 120px">

                                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<select name="owner" class="owner" style="margin: inherit;" >
    <option value="">Select an City</option>
    <option value="1">Hyderabad</option>
    <option value="2">Mumbai</option>
    <option value="3">Delhi</option>
</select> 
</div>
<div style="float: left;margin-left: 300px">

<select name="co-owner " class="co-owner" >
    <option value="">Select an Address</option>
    <option value="1">Bill</option>
    <option value="2">Mark</option>
    <option value="3">Larry</option>
</select>
  </div>
 
              </div>
            </div>
            <!-- First card -->

            <!-- Second card -->
           <div class="card mb-4 post-title-panel">
              <div class="card-body">
            <input type="file" accept="image/*" onchange="loadFile(event)">
            <img id="output"/>
<input type="submit" value="Upload Image" name="submit">
</form>
            </div>
          </div>
            <!-- Second card -->

            <!-- Third Card -->
            <div class="card mb-4">
              <div class="card-body">
                <div class="md-form mb-0 mt-2">
                 
                  <textarea name="text1"></textarea>
                </div>
              </div>
            </div>
            
            <!-- Third Card -->
            <!-- Third Card -->
            <div class="card mb-4">
              <div class="card-body">
                <div class="md-form mb-0 mt-2">
                  <textarea type="text" id="form7" class="md-textarea form-control" rows="3"></textarea>
                  <label class="form-check-label" for="form7">Address</label>
                </div>
              </div>
            </div>


             <!--Section: Contact v.1 -->

                <!--Form with header -->
                <div class="card">

                  <div class="card-body">
                    <p>Contact Details
                    <br>

                    <!--Body -->
                    <div class="md-form">
                      <i class="fas fa-user prefix grey-text"></i>
                      <input type="text" id="form-name" class="form-control" name="contact_name">
                      <label for="form-name">Name</label>
                    </div>

                    <div class="md-form">
                      <i class="fas fa-envelope prefix grey-text"></i>
                      <input type="text" id="form-email" class="form-control" name="contact_email">
                      <label for="form-email">Email</label>
                    </div>

                    <div class="md-form">
                      <i class="fas fa-mobile-alt prefix grey-text"></i>
                      <input type="text" id="form-Subject" class="form-control" name="contact_mobile">
                      <label for="form-Subject">Mobile</label>
                    </div>
                  </div>

                </div>
                <!--Form with header -->
            <!-- Third Card -->
          </div>

          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-lg-4">

            <!-- Card -->
           
            <!-- Card -->
            
            <!-- Card -->
            <div class="card card-cascade narrower " >

              <!-- Card image -->
              <div class="view view-cascade gradient-card-header blue-gradient">
                <h4 class="font-weight-500 mb-0">Categories</h4>
              </div>
              <!-- Card image -->

              <!-- Card content -->
              <div class="card-body card-body-cascade">
                <fieldset class="form-check mb-4">
                  <input class="form-check-input" type="checkbox" id="color-1">
                  <label class="form-check-label" for="color-1">Material Design</label>
                </fieldset>
                <fieldset class="form-check mb-4">
                  <input class="form-check-input" type="checkbox" id="color-2">
                  <label class="form-check-label" for="color-2">Tutorials</label>
                </fieldset>
                <fieldset class="form-check mb-4">
                  <input class="form-check-input" type="checkbox" id="color-3">
                  <label class="form-check-label" for="color-3">Marketing Automation</label>
                </fieldset>
                <fieldset class="form-check mb-4">
                  <input class="form-check-input" type="checkbox" id="color-4">
                  <label class="form-check-label" for="color-4">Design Resources</label>
                </fieldset>
                <fieldset class="form-check">
                  <input class="form-check-input" type="checkbox" id="color-5">
                  <label class="form-check-label" for="color-5">Random Stories</label>
                </fieldset>
              </div>
              <!-- Card content -->

            </div>
            <!-- Card -->

            <br>
            <br>
             <div class="card card-cascade narrower mb-5">

              <!-- Card image -->
              <div class="view view-cascade gradient-card-header blue-gradient">
                <h4 class="font-weight-500 mb-0">Publish</h4>
              </div>
              <!-- Card image -->

              <!-- Card content -->
              <div class="card-body card-body-cascade">

                <p><i class="fas fa-flag mr-1" aria-hidden="true"></i> Status: <strong>Draft</strong></p>
                <p><i class="far fa-eye mr-1" aria-hidden="true"></i> Visibility <strong>Public</strong></p>
                <p><i class="fas fa-archive mr-1 mr-1" aria-hidden="true"></i> Revisions: <strong>2</strong></p>
                <p><i class="far fa-calendar-alt mr-1" aria-hidden="true"></i> Publish: <strong> Published after approval</strong></p>
                <div class="text-right">
                  <button class="btn btn-flat waves-effect">Discard</button>
                  <button class="btn btn-primary">Publish</button>
                </div>

              </div>
              <!-- Card content -->

            </div>
          </div>
          <!-- Grid column -->

        </div>
        <!-- Grid row -->

      </section>
      <!-- Section: Create Page -->

    </div>

  </main>
 <div id="back-top" >
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>       
  <!-- Main layout -->

  <!-- SCRIPTS -->
  <!-- JQuery -->

  <script src="{{url('assets/MDB/js/jquery.min.js')}}"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="{{url('assets/MDB/js/popper.min.js')}}"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="{{url('assets/MDB/js/bootstrap.js')}}"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="{{url('assets/MDB/js/mdb.min.js')}}"></script>
  <!-- TinyMCE -->
  <script type="text/javascript" src="{{url('assets/MDB/js/vendor/tinymce/tinymce.min.js')}}"></script>

  <!-- Custom scripts -->
  <script>

    // SideNav Initialization
    $(".button-collapse").sideNav();

    var container = document.querySelector('.custom-scrollbar');
    var ps = new PerfectScrollbar(container, {
      wheelSpeed: 2,
      wheelPropagation: true,
      minScrollbarLength: 20
    });

    // TinyMCE Initialization
    tinymce.init({ selector:'#post_content', menubar: false, height : "294" });

  </script>

@endsection 
@section('js')
  <script src="{{url("ckeditor/ckeditor.js")}}"></script>
  
  <script>
    CKEDITOR.replace('text1');
  </script>
  <script>
    $('.owner').change(function() {
  $('.co-owner').prop('disabled', $(this).val().trim() == '');
}).change();
  </script>
 

  @endsection

