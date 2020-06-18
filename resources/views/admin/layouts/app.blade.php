<!DOCTYPE html>
<html>
<head>
    <title>Admin</title>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
    @include('admin.includes.head')
    @yield('css')
</head>
<body class="fixed-sn white-skin">
    <div>
        @include('admin.includes.navbar')
    </div>
    @yield('content')
    @include('admin.includes.footer')
    @yield('js')
    <script type="text/javascript">
        $( document ).ready(function() {
          // SideNav Initialization
          $(".button-collapse").sideNav();

          var container = document.querySelector('.custom-scrollbar');
          var ps = new PerfectScrollbar(container, {
            wheelSpeed: 2,
            wheelPropagation: true,
            minScrollbarLength: 20
          });
        });
    </script>
</body>
</html>
