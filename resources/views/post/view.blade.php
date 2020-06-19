@extends('layouts.app')
@section('css')
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="{{url('assets/backend/css/mdb.min.css')}}">
  <style type="text/css">
    .card .custom-style{
        max-height: 50%;
        max-width: 50%;
        margin: auto;
    }
  </style>
@endsection
@section('js')
@endsection
@section('content')
<!-- Hero Start-->
        <div class="hero-area3 hero-overly2 d-flex align-items-center ">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-lg-9">
                        <div class="hero-cap text-center pt-50 pb-20">
                            <h2>{!!$post->title!!}</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Hero End -->
    <main>
 <!-- Main layout -->
    <div class="container  pt-120 pb-120">

      <!-- Section: Blog v.4 -->
      <section class="mt-5 pb-3 wow fadeIn">

        <!-- Grid row -->
        <div class="row">

          <!-- Grid column -->
          <div class="col-md-12">

            <!-- Featured image -->
            <div class="card card-cascade wider reverse">
              <div class="view view-cascade overlay custom-style">
                @php $coverImage = '';
                  if($post->cover_image!=null){
                    $coverImage = url('images/'.$post->cover_image);
                  }
                  else{
                    $coverImage = url('images/no-image.png');
                  }
                  @endphp
                <img src="{{url($coverImage)}}" alt="Wide sample post image" class="img-fluid">
                <a>
                  <div class=""></div>
                </a>
              </div>

              <!-- Post data -->
              <div class="card-body card-body-cascade text-center" style="margin: auto;width: 30%;margin-top: -1rem;">
                <h2><a><strong>{!!$post->title!!}</strong></a></h2>
                <p>Posted by <a>{{$post['user']->first_name}}</a>, {{Carbon\Carbon::parse($post->created_at)->format('d/m/y')}}</p>
                @auth
                  @if(Auth::user()->id == $post->user_id)
                    @if($post->publish_status == 1)
                      <strong>Status: </strong><span class="badge badge-success">Published</span>
                    @else
                      <strong>Status: </strong><span class="badge badge-secondary">Not Published</span>
                    @endif
                  @endif
                @endauth

                {{-- <!-- Social shares -->
                <div class="social-counters ">

                  <!-- Facebook -->
                  <a class="btn btn-fb ">
                    <i class="fab fa-facebook-f left "></i>
                    <span class="hidden-md-down ">Facebook</span>
                  </a>
                  <span class="counter ">46</span>

                  <!-- Twitter -->
                  <a class="btn btn-tw ">
                    <i class="fab fa-twitter left "></i>
                    <span class="hidden-md-down ">Twitter</span>
                  </a>
                  <span class="counter ">22</span>

                  <!-- Dribbble -->
                  <a class="btn btn-dribbble ">
                    <i class="fab fa-dribbble left "></i>
                    <span class="hidden-md-down ">Dribbble</span>
                  </a>
                  <span class="counter ">31</span>

                  <!-- Comments -->
                  <a class="btn btn-blue-grey ">
                    <i class="fas fa-comments-o left "></i>
                    <span class="hidden-md-down ">Comments</span>
                  </a>
                  <span class="counter ">18</span>

                </div>
                <!-- Social shares -->

              </div> --}}
              <!-- Post data -->
            </div>

            <!-- Excerpt -->
            <div class="excerpt mt-5 wow fadeIn" data-wow-delay="0.3s">
                <h6><strong>Description:</strong></h6>
                {!!$post->description!!}
              <div class="mt-4 d-flex justify-content-end">
                @php $array=array('pink','badge-primary','badge-info') @endphp
                @foreach ($post['categories'] as $category)
                    <span class="badge mx-1 {{$array[array_rand($array)]}}">{{$category->category_name}}</span>
                @endforeach
              </div>

            </div>

          </div>
          <!-- Grid column -->

        </div>
        <!-- Grid row -->

      </section>
      <!-- Section: Blog v.4 -->

      <hr class="mb-5 mt-4">

    </div>
@endsection
