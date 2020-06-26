  <!-- Footer -->
  <footer class="page-footer pt-0 mt-5 mdb-color lighten-4">

    <!-- Copyright -->
    <div class="footer-copyright py-3 text-center">
      <div class="container-fluid">
        © 2020 Copyright: <a href="" target="_blank"> CityClassifieds.com </a>

      </div>
    </div>
    <!-- Copyright -->

  </footer>
  <!-- Footer -->

<!-- JQuery -->
  <script src="{{url('assets/backend/js/jquery-3.4.1.min.js')}}"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="{{url('assets/backend/js/popper.min.js')}}"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="{{url('assets/backend/js/bootstrap.js')}}"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="{{url('assets/backend/js/mdb.min.js')}}"></script>
  <script type="text/javascript" src="{{url('assets/backend/js/modules/toastr.js')}}"></script>
  @if(Session::has('message'))
    <script type="text/javascript">
      @if(Session::get('response') == 1)
        toastr.success('{{Session::get('message')}}');
      @else
        toastr.error('{{Session::get('message')}}');
      @endif
    </script>
  @endif
