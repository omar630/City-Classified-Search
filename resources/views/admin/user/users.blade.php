@extends('admin.layouts.app')
@section('css')
@endsection
@section('js')
<script type="text/javascript">
  function changeRole($user_id){
    console.log($user_id);
    $.ajax({
      type: "GET",
      url: "{{route('changerole')}}",
      data: { user_id: $user_id },
      beforeSend: function(){
        $('#type_'+$user_id).html('<span class="spinner-border spinner-border-sm mr-2" role="status" aria-hidden="true"></span>').addClass('disabled');
      },
      success: function(data){
        console.log(data);
        if(data.message == "success"){
          $('#type_'+$user_id).html(data.role).removeClass('disabled');
        }
        else{
          alert('some error occured');
        }
      }
    });
  }
</script>
@endsection
@section('content')
<main>
<div class="container-fluid">
        <div class="card card-cascade narrower z-depth-1">

          <!-- Card image -->
          <div class="view view-cascade gradient-card-header blue-gradient narrower py-2 mx-4 mb-3 d-flex justify-content-between align-items-center">

            <div>
              {{-- <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2"><i class="fas fa-th-large mt-0"></i></button>
              <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2"><i class="fas fa-columns mt-0"></i></button> --}}
            </div>

            <a href="" class="white-text mx-3">All Users</a>

            <div>
              {{-- <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2"><i class="fas fa-pencil-alt mt-0"></i></button>
              <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2"><i class="fas fa-eraser mt-0"></i></button>
              <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2"><i class="fas fa-info-circle mt-0"></i></button> --}}
            </div>

          </div>
          <!-- /Card image -->

          <div class="px-4">

            <div class="table-responsive">
              <!-- Table -->
              <table class="table table-hover mb-0">

                <!-- Table head -->
                <thead>
                  <tr>
                    <th>
                      <label class="form-check-label" for="checkbox" class="mr-2 label-table">#</label>
                    </th>
                    <th class="th-lg"><a href="#">First Name </a></th>
                    <th class="th-lg"><a href="#">Last Name</a></th>
                    <th class="th-lg"><a href="#">Email</a></th>
                    <th class="th-lg"><a href="#">Role</a></th>
                  </tr>
                </thead>
                <!-- Table head -->

                <!-- Table body -->
                <tbody>
                  @php $i=1; @endphp
                  @foreach($users as $user)
                    <tr>
                      <th scope="row">
                        <label class="form-check-label" for="checkbox1" class="label-table">{{$i}}</label>
                      </th>
                      <td>{{$user->first_name}}</td>
                      <td>{{$user->last_name}}</td>
                      <td>{{$user->email}}</td>
                      <td>
                        <button type="button" class="btn btn-teal btn-rounded btn-sm m-0" id="type_{{$user->id}}" onClick="changeRole({{$user->id}});" >{{$user['role']->name}}</button>
                      </td>
                    </tr>
                    @endforeach
                </tbody>
                <!-- Table body -->
              </table>
              <!-- Table -->
            </div>
          </div>
        </main>
@endsection
