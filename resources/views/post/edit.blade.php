 @extends('layouts.app')
 @section('css')
<style type="text/css">
    .asterisk{
        color: orangered;
        font-size: 1px;
    }

    .card.card-cascade.narrower {
        margin-top: 3.25rem;
    }

    .categories-card {
        max-height: 300px;
        overflow: auto;
    }
</style>
@endsection
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
<form method="post" action="{{route('updatepost')}}" enctype="multipart/form-data">
  @csrf
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
                  <input type="text" id="form1" class="form-control" value="{{$post->title}}" name="title">
                  <label class="form-check-label" for="form1" class="">Post title<sup><i class="fas fa-asterisk asterisk"></i></sup></label>
                  <input type="number" name="post_id" value="{{$post->id}}" hidden="">
                </div>
              </div>
            </div>
            <!-- First card -->
            <div class="card mb-4 post-title-panel">
              <div class="card-body">
                <div class="select-itms" style="margin-right: 120px">
                  <select name="city" class="form-control" style="margin: inherit;" required="">
                      <option value="">Select an City</option>
                      <option value="hyderabad" @if($post->city == 'hyderabad') selected="true" @endif>Hyderabad</option>
                      <option value="mumbai" @if($post->city == 'mumbai') selected="true" @endif>Mumbai</option>
                      <option value="delhi" @if($post->city == 'delhi') selected="true" @endif>Delhi</option>
                  </select>
                </div>
              </div>
            </div>
            <!-- First card -->

            <!-- Second card -->
           <div class="card mb-4 post-title-panel">
              <div class="card-body">
              <input type="file" name="cover_image">
            </div>
          </div>
            <!-- Second card -->

            <!-- Third Card -->
            <div class="card mb-4">
              <div class="card-body">
                <div class="md-form mb-0 mt-2">
                  <textarea id="froala_description">{!!$post->description!!}</textarea>
                  <input type="text" name="description" hidden="" id="description" value="{!!$post->description!!}">
                </div>
              </div>
            </div>

            <!-- Third Card -->
            <!-- Third Card -->
            <div class="card mb-4">
              <div class="card-body">
                <div class="md-form mb-0 mt-2">
                  <textarea type="text" id="address" class="md-textarea form-control" rows="3" name="address">{{$post->address}}</textarea>
                  <label class="form-check-label" for="address">Address</label>
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
                      <input type="text" id="contact_name" class="form-control" name="contact_name" value="{{$post['contact'][0]->contact_name ?? ''}}">
                      <label for="contact_name">Name</label>
                    </div>

                    <div class="md-form">
                      <i class="fas fa-envelope prefix grey-text"></i>
                      <input type="text" id="contact_email" class="form-control" name="contact_email" value="{{$post['contact'][0]->contact_email ?? '' }}">
                      <label for="contact_email">Email</label>
                    </div>

                    <div class="md-form">
                      <i class="fas fa-mobile-alt prefix grey-text"></i>
                      <input type="text" id="contact_mobile" class="form-control" name="contact_mobile" value="{{$post['contact'][0]->contact_mobile ?? ''}}">
                      <label for="contact_mobile">Mobile</label>
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
              <div class="card-body card-body-cascade categories-card">
                @foreach($categories as $category)
                    <fieldset class="form-check mb-4">
                      <input class="form-check-input" type="checkbox" name="category[]" id="{{$category->category_name}}" value="{{$category->id}}" @if(in_array($category->id,$post->categories->pluck('id')->toArray()))checked="true"@endif>
                      <label class="form-check-label" for="{{$category->category_name}}">{{$category->category_name}}</label>
                    </fieldset>
                @endforeach
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

               {{--  <p><i class="fas fa-flag mr-1" aria-hidden="true"></i> Status: <strong>Draft</strong></p> --}}
                <p><i class="far fa-eye mr-1" aria-hidden="true"></i> Visibility <strong>Public</strong></p>
               {{--  <p><i class="fas fa-archive mr-1 mr-1" aria-hidden="true"></i> Revisions: <strong>2</strong></p> --}}
                <p><i class="far fa-calendar-alt mr-1" aria-hidden="true"></i> Publish: <strong> Published after approval</strong></p>
                <div class="text-right">
                  <button class="btn btn-flat waves-effect">Discard</button>
                  <button class="btn btn-primary" type="submit">Publish</button>
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
</form>
  </main>
 <div id="back-top" >
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>
  <!-- Main layout -->
@include('includes.froala')
@endsection
@section('js')
<script type="text/javascript" src="{{url('assets/MDB/js/mdb.min.js')}}"></script>
    <script type="text/javascript">
    $('input[name="category[]"]').click(function () {
      var total=$('input[name="category[]"]:checked').length;
      if(total>3){
        alert('you can select only upto 3 categories');
        $(this).prop('checked', false);
      }
    });
    function desc(){
            $('#description').val(tinymce.activeEditor.getContent());
            console.log(tinymce.activeEditor.getContent());
        }
        $("#address-textarea").on('change keyup paste', function() {
            $('#address').val($('#address-textarea').val());
        });
    function uploadImage(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#preview')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
  </script>
  @endsection

