<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Admin</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="{{url('assets/backend/css/bootstrap.min.css')}}" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="{{url('assets/backend/css/mdb.min.css')}}" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <style>
    html,
    body,
    header,
    .view {
      height: 100%;
    }
    @media (min-width: 560px) and (max-width: 740px) {
      html,
      body,
      header,
      .view {
        height: 650px;
      }
    }
    @media (min-width: 800px) and (max-width: 850px) {
      html,
      body,
      header,
      .view  {
        height: 650px;
      }
    }
  </style>
</head>

<body class="login-page">

  <!-- Main Navigation -->
  <header>
    <!-- Navbar -->

    <!-- Intro Section -->
    <section class="view intro-2">
        <form method="POST" action="{{ route('login') }}">
            @csrf
        <div class="mask rgba-stylish-strong h-100 d-flex justify-content-center align-items-center">
          <div class="container">
            <div class="row">
              <div class="col-xl-5 col-lg-6 col-md-10 col-sm-12 mx-auto mt-5">

                <!-- Form with header -->
                <div class="card wow fadeIn" data-wow-delay="0.3s">
                  <div class="card-body">

                    <!-- Header -->
                    <div class="form-header purple-gradient">
                      <h3 class="font-weight-500 my-2 py-1"><i class="fas fa-user"></i> Log in:</h3>
                    </div>
                    <div class="md-form">
                      <i class="fas fa-envelope prefix white-text"></i>
                      <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                      <label for="orangeForm-email">Your email</label>
                    </div>

                    <div class="md-form">
                      <i class="fas fa-lock prefix white-text"></i>
                      <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                      <label for="orangeForm-pass">Your password</label>
                    </div>

                    <div class="text-center">
                      <button class="btn purple-gradient btn-lg">Sign in</button>
                      <hr class="mt-4">
                      <div class="inline-ul text-center d-flex justify-content-center">
                        <a class="p-2 m-2 fa-lg tw-ic"><i class="fab fa-twitter white-text"></i></a>
                        <a class="p-2 m-2 fa-lg li-ic"><i class="fab fa-linkedin-in white-text"> </i></a>
                        <a class="p-2 m-2 fa-lg ins-ic"><i class="fab fa-instagram white-text"> </i></a>
                      </div>
                    </div>

                  </div>
                </div>
                <!-- Form with header -->

              </div>
            </div>
          </div>
        </div>
      </form>
    </section>
    <!-- Intro Section -->

  </header>
  <!-- Main Navigation -->

  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="{{url('assets/backend/js/jquery-3.4.1.min.js')}}"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="{{url('assets/backend/js/popper.min.js')}}"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="{{url('assets/backend/js/bootstrap.min.js')}}"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="{{url('assets/backend/js/mdb.js')}}"></script>

  <!-- Custom scripts -->
  <script>

    new WOW().init();

  </script>

</body>

</html>
