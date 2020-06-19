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
.categories-card{
            max-height: 300px;
            overflow: auto;
        }
</style>
@endsection
@section('content')
<main>
    <div class="container">
    <form action="{{route('admin.updatepost')}}">
        @csrf
        <input type="number" name="post_id" hidden="" value="{{$post->id}}">
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
                  <input type="text" id="form1" class="form-control" value="{{$post->title}}" name="title">
                  <label class="form-check-label" for="form1" class="">Post title<sup><i class="fas fa-asterisk asterisk"></i></sup></label>
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
            <!-- Third card -->
            <div class="card mb-4">
              <textarea id="froala_description">{!!$post->description!!}</textarea>
              <input type="text" name="description" hidden="" id="description" value="">
            </div>
            <!-- Third card -->

            <!-- Fourth Card -->
            <div class="card mb-4">
              <div class="card-body">
                <div class="md-form mb-0 mt-2">
                  <textarea type="text" id="address-textarea" class="md-textarea form-control" rows="3">{{$post->address}}</textarea>
                  <label class="form-check-label" for="address">Address</label>
                  <input type="text" name="address" id="address" hidden="" value="{{$post->address}}">
                </div>
              </div>
            </div>
            <!-- Fourth Card -->

            <!--Form with header -->
                <div class="card">

                  <div class="card-body">
                    <p>Contact Details
                    <br>
                    <!--Body -->
                    <div class="md-form">
                      <i class="fas fa-user prefix grey-text"></i>
                      <input type="text" id="form-name" class="form-control" name="contact_name" value="{{$post['contact'][0]->contact_name ?? ''}}">
                      <label for="form-name">Name</label>
                    </div>

                    <div class="md-form">
                      <i class="fas fa-envelope prefix grey-text"></i>
                      <input type="text" id="form-email" class="form-control" name="contact_email" value="{{$post['contact'][0]->contact_email ?? '' }}">
                      <label for="form-email">Email</label>
                    </div>

                    <div class="md-form">
                      <i class="fas fa-tag prefix grey-text"></i>
                      <input type="text" id="form-Subject" class="form-control" name="contact_mobile" value="{{$post['contact'][0]->contact_mobile ?? ''}}">
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
                      <input class="form-check-input" type="checkbox" name="category[]" id="{{$category->category_name}}" value="{{$category->id}}" @if(in_array($category->id,$post->categories->pluck('id')->toArray()))checked="true"@endif>
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
                <h4 class="font-weight-500 mb-0">Update</h4>
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
                  <button class="btn btn-primary">Save</button>
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
  @include('includes.froala')
@endsection
@section('js')
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

