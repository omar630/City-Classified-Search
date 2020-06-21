@extends('layouts.app')
@section('css')
@endsection
@section('content')
<!-- Hero Start-->
        <div class="hero-area3 hero-overly2 d-flex align-items-center ">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-lg-9">
                        <div class="hero-cap text-center pt-50 pb-20">
                            <h2>My Profile</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Hero End -->
<!-- Main layout -->
  <main>
    <div class="container-fluid">

      <!-- Section: Edit Account -->
      <section class="section">
        <!-- First row -->
        <div class="row">
          <!-- First column -->
          <div class="col-lg-4 mb-4">

            <!-- Card -->
            <div class="card card-cascade narrower">

              <!-- Card image -->
              <div class="view view-cascade gradient-card-header mdb-color lighten-3">
                <h5 class="mb-0 font-weight-bold">Edit Photo</h5>
              </div>
              <!-- Card image -->

              <!-- Card content -->
              <div class="card-body card-body-cascade text-center">
                <img src="https://mdbootstrap.com/img/Photos/Avatars/avatar-5.jpg" alt="User Photo" class="z-depth-1 mb-3 mx-auto" />

                <p class="text-muted"><small>Profile photo will be changed automatically</small></p>
                <div class="row flex-center">
                  <button class="btn btn-info btn-rounded btn-sm">Upload New Photo</button><br>
                  <button class="btn btn-danger btn-rounded btn-sm">Delete</button>
                </div>
              </div>
              <!-- Card content -->

            </div>
            <!-- Card -->

          </div>
          <!-- First column -->

          <!-- Second column -->
          <div class="col-lg-8 mb-4">

            <!-- Card -->
            <div class="card card-cascade narrower">

              <!-- Card image -->
              <div class="view view-cascade gradient-card-header mdb-color lighten-3">
                <h5 class="mb-0 font-weight-bold">Edit Account</h5>
              </div>
              <!-- Card image -->

              <!-- Card content -->
              <div class="card-body card-body-cascade text-center">

                <!-- Edit Form -->
                <form method="POST" action="{{route('udpateprofile')}}">
                  @csrf
                  <input type="number" name="user_id" value="{{$user->id}}" hidden="">
                  <!-- First row -->
                  <div class="row">
                    <!-- First column -->
                    <div class="col-md-6">
                      <div class="md-form mb-0">
                        <input type="text" id="first_name" class="form-control validate" value="{{$user->first_name}}" name="first_name">
                        <label for="first_name" data-error="wrong" data-success="right">First name</label>
                      </div>
                    </div>

                    <!-- Second column -->
                    <div class="col-md-6">
                      <div class="md-form mb-0">
                        <input type="text" id="last_name" class="form-control validate" value="{{$user->last_name}}" name="last_name">
                        <label for="last_name" data-error="wrong" data-success="right">Last name</label>
                      </div>
                    </div>
                  </div>
                  <!-- First row -->

                  <!-- Second row -->
                  <div class="row">

                    <!-- First column -->
                    <div class="col-md-6">
                      <div class="md-form mb-0">
                        <input type="email" id="email" class="form-control validate" value="{{$user->email}}" name="email">
                        <label for="email">Email address</label>
                      </div>
                    </div>
                    <!-- Second column -->
                  </div>
                  <!-- Second row -->

                  {{-- <!-- Third row -->
                  <div class="row">

                    <!-- First column -->
                    <div class="col-md-12">
                      <div class="md-form mb-0">
                        <textarea type="text" id="about" class="md-textarea form-control" rows="3"></textarea>
                        <label for="about">About me</label>
                      </div>
                    </div>
                  </div>
                  <!-- Third row --> --}}

                  <!-- Fourth row -->
                  <div class="row">
                    <div class="col-md-12 text-center my-4">
                      <input type="submit" value="Update Account" class="btn btn-info btn-rounded">
                    </div>
                  </div>
                  <!-- Fourth row -->

                </form>
                <!-- Edit Form -->

              </div>
              <!-- Card content -->

            </div>
            <!-- Card -->

          </div>
          <!-- Second column -->

        </div>
        <!-- First row -->

      </section>
      <!-- Section: Edit Account -->

    </div>

  </main>
  <!-- Main layout -->
@endsection
