  <!-- Main Navigation -->
  <header>

    <!-- Sidebar navigation -->
    @include('admin.includes.sidebar')
    <!-- Sidebar navigation -->

    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg scrolling-navbar double-nav">

      <!-- SideNav slide-out button -->
      <div class="float-left">
        <a href="#" data-activates="slide-out" class="button-collapse"><i class="fas fa-bars"></i></a>
      </div>

      <!-- Breadcrumb -->
      <div class="breadcrumb-dn mr-auto">
        <p>City Classifieds</p>
      </div>

      <!-- Navbar links -->
      <ul class="nav navbar-nav nav-flex-icons ml-auto">

        <!-- Dropdown -->
        <li class="nav-item dropdown notifications-nav">
          <a class="nav-link dropdown-toggle waves-effect" id="navbarDropdownMenuLink" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            <span class="badge red">3</span> <i class="fas fa-bell"></i>
            <span class="d-none d-md-inline-block">Notifications</span>
          </a>
          <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="#">
              <i class="far fa-money-bill-alt mr-2" aria-hidden="true"></i>
              <span>New order received</span>
              <span class="float-right"><i class="far fa-clock" aria-hidden="true"></i> 13 min</span>
            </a>
            <a class="dropdown-item" href="#">
              <i class="far fa-money-bill-alt mr-2" aria-hidden="true"></i>
              <span>New order received</span>
              <span class="float-right"><i class="far fa-clock" aria-hidden="true"></i> 33 min</span>
            </a>
            <a class="dropdown-item" href="#">
              <i class="fas fa-chart-line mr-2" aria-hidden="true"></i>
              <span>Your campaign is about to end</span>
              <span class="float-right"><i class="far fa-clock" aria-hidden="true"></i> 53 min</span>
            </a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link waves-effect"><i class="fas fa-envelope"></i> <span class="clearfix d-none d-sm-inline-block">Contact</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link waves-effect"><i class="far fa-comments"></i> <span class="clearfix d-none d-sm-inline-block">Support</span></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle waves-effect" href="#" id="userDropdown" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user"></i> <span class="clearfix d-none d-sm-inline-block">Profile</span>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="#"onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Log Out</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
            <a class="dropdown-item" href="{{route('admin.profile')}}">Profile</a>
          </div>
        </li>

      </ul>
      <!-- Navbar links -->

    </nav>
    <!-- Navbar -->

  </header>
  <!-- Main Navigation -->
