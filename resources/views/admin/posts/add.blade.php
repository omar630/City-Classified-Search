@extends('admin.layouts.app')
@section('css')
<style type="text/css">
    .asterisk{
        color: orangered;
        font-size: 1px;
    }
    .card.card-cascade.narrower {
    margin-top: 3.25rem;
}
</style>
@endsection
@section('content')
<main>
    <div class="container">
    <form action="{{route('admin.savepost')}}" method="post">
        @csrf
        <input type="number" name="user_id" hidden="" value="{{1}}">
      <!-- Section: Create Page -->
      <section class="my-5">

        <!-- Grid row -->
        <div class="row">

          <!-- Grid column -->
          <div class="col-lg-8">

            <!-- First card -->
            <div class="card mb-4 post-title-panel">
              <div class="card-body">
                <div class="md-form mt-1 mb-0">
                  <input type="text" id="form1" class="form-control" value="" name="title">
                  <label class="form-check-label" for="form1" class="">Post title<sup><i class="fas fa-asterisk asterisk"></i></sup></label>
                </div>
              </div>
            </div>
            <!-- First card -->

            <!-- Second card -->
            <div class="card mb-4">
              <textarea name="" id="post_content"></textarea>
              <input type="text" name="description" hidden="" id="description">
            </div>
            <!-- Second card -->

            <!-- Third Card -->
            <div class="card mb-4">
              <div class="card-body">
                <div class="md-form mb-0 mt-2">
                  <textarea type="text" id="address-textarea" class="md-textarea form-control" rows="3"></textarea>
                  <label class="form-check-label" for="address">Address</label>
                  <input type="text" name="address" id="address" hidden="">
                </div>
              </div>
            </div>
            <!-- Third Card -->
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
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-lg-4">
            <!-- Card -->
            <div class="card card-cascade narrower">

              <!-- Card image -->
              <div class="view view-cascade gradient-card-header blue-gradient">
                <h4 class="font-weight-500 mb-0">Categories</h4>
              </div>
              <!-- Card image -->

              <!-- Card content -->
              <div class="card-body card-body-cascade categories-card">
                @foreach($categories as $category)
                    <fieldset class="form-check mb-4">
                      <input class="form-check-input" type="checkbox" name="category[]" id="{{$category->category_name}}" value="{{$category->id}}">
                      <label class="form-check-label" for="{{$category->category_name}}">{{$category->category_name}}</label>
                    </fieldset>
                @endforeach
              </div>
              <!-- Card content -->

            </div>
            <!-- Card -->

            <!-- Card -->
            <div class="card card-cascade narrower mb-5">

              <!-- Card image -->
              <div class="view view-cascade gradient-card-header blue-gradient">
                <h4 class="font-weight-500 mb-0">Publish</h4>
              </div>
              <!-- Card image -->

              <!-- Card content -->
              <div class="card-body card-body-cascade">

                {{-- <p><i class="fas fa-flag mr-1" aria-hidden="true"></i> Status: <strong>Draft</strong></p> --}}
                <p><i class="far fa-eye mr-1" aria-hidden="true"></i> Visibility <strong>Public</strong></p>
                {{-- <p><i class="fas fa-archive mr-1 mr-1" aria-hidden="true"></i> Revisions: <strong>2</strong></p> --}}
                <p><i class="far fa-calendar-alt mr-1" aria-hidden="true"></i> Publish: <strong>Immediately</strong></p>
                <div class="text-right">
                  <a class="btn btn-flat waves-effect" href="{{route('admin.allposts')}}">Discard</a>
                  <button class="btn btn-primary">Publish</button>
                </div>

              </div>
              <!-- Card content -->

            </div>
            <!-- Card -->
          </div>
          <!-- Grid column -->

        </div>
        <!-- Grid row -->

      </section>
      <!-- Section: Create Page -->
    </form>
    </div>

  </main>
  <!-- Main layout -->
@endsection
@section('js')
    <script type="text/javascript" src="{{url('assets/backend/js/vendor/tinymce/tinymce.min.js')}}"></script>
    <script type="text/javascript">
        // TinyMCE Initialization
        tinymce.init({
            selector:'#post_content',
            menubar: true,
            height : "294",
            init_instance_callback: function(editor) {
                editor.on('Change', function(e) {
                  desc();
                });
            }
         });
        function desc(){
            $('#description').val(tinymce.activeEditor.getContent());
            console.log(tinymce.activeEditor.getContent());
        }
        $("#address-textarea").on('change keyup paste', function() {
            $('#address').val($('#address-textarea').val());
        });
    </script>
        @if(isset($response))
        <script type="text/javascript">
            if({{$response}}==1)
                toastr.success('Post added.');
            else
                toastr.error('Error ocurred please try again.');
        </script>
        @endif
@endsection
@section('css')
    <style type="text/css">
        .categories-card{
            max-height: 300px;
            overflow: auto;
        }
    </style>
