@extends('admin.layouts.app')
@section('css')
<style type="text/css">
.teal-text{
    padding: 7px;
}
</style>
@endsection
@section('js')
@endsection
@section('content')
<!-- Main layout -->
  <main>

    <div class="container">

      <!-- Section: Blog v.3 -->
      <section class="my-5 text-center text-lg-left wow fadeIn" data-wow-delay="0.3s">

        <!-- Section heading -->
        <h2 class="text-center my-5 h1">Pending Approvals({{count($posts)}})</h2>
        @foreach($posts as $post)
        <!-- Grid row -->
        <div class="row mt-3">

          <!-- Grid column -->
          <div class="col-lg-4 mb-4">
            <!-- Featured image -->
            <div class="view overlay z-depth-1">
              <img src="https://mdbootstrap.com/img/Photos/Others/img (38).jpg" class="img-fluid" alt="First sample image">
              <a>
                <div class="mask rgba-white-slight"></div>
              </a>
            </div>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-lg-7 mb-4">
            <div class="row">
                <!-- Excerpt -->
            <a href="{{url("admin/post/edit/$post->id")}}" class="teal-text">
               <h6 class=""><i class="far fa-edit"></i><strong> Edit </strong></h6>
            </a>
            <a href="{{url("admin/post/delete/$post->id")}}" class="teal-text">
               <h6 class=""><i class="far fa-trash-alt"></i><strong> Delete/reject </strong></h6>
            </a>
            <a href="{{url("admin/post/approve/$post->id")}}" class="teal-text">
               <h6 class=""><i class="far fa-check-circle"></i><strong> Approve </strong></h6>
            </a>
            </div>
            <h4 class="mb-4"><strong>{{$post->title}}</strong></h4>
            <div class="discription">
                {!!$post->description!!}
            </div>
            <div class="posted_by">
                <p>by <a><strong>{{$post['user']->first_name}}</strong></a>, {{Carbon\Carbon::parse($post->updated_at)->format('d/m/y h:i A')}}</p>
            </div>
            {{-- <a class="btn btn-primary btn-rounded btn-sm">Read more</a> --}}
            <h6 class="pb-1"><i class="far fa-list-alt"></i><strong> Category: </strong></h6>
                <div class="row ">
                    @foreach($post['categories'] as $category)
                        <div class="chip chip-md pink darken-2 white-text">
                          {{$category->category_name}}
                        </div>
                    @endforeach
                </div>
          </div>
          <!-- Grid column -->

        </div>
        <!-- Grid row -->
        <hr class="mb-5">
        @endforeach
        <!-- Pagination dark -->
        <nav class="wow fadeIn mb-4 mt-4" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeIn;">
          <ul class="pagination pg-dark flex-center">
            <!-- Arrow left -->
            <li class="page-item">
              <a class="page-link waves-effect waves-effect" aria-label="Previous">
                <span aria-hidden="true">«</span>
                <span class="sr-only">Previous</span>
              </a>
            </li>

            <!-- Numbers -->
            <li class="page-item active"><a class="page-link waves-effect waves-effect">1</a></li>
            <li class="page-item"><a class="page-link waves-effect waves-effect">2</a></li>
            <li class="page-item"><a class="page-link waves-effect waves-effect">3</a></li>
            <li class="page-item"><a class="page-link waves-effect waves-effect">4</a></li>
            <li class="page-item"><a class="page-link waves-effect waves-effect">5</a></li>

            <!-- Arrow right -->
            <li class="page-item">
              <a class="page-link waves-effect waves-effect" aria-label="Next">
                <span aria-hidden="true">»</span>
                <span class="sr-only">Next</span>
              </a>
            </li>
          </ul>
        </nav>
        <!-- /Pagination dark -->

      </section>
      <!-- Section: Blog v.3 -->

    </div>

  </main>
  <!-- Main layout -->
@endsection
