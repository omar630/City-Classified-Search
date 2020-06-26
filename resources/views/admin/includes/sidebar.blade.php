<div id="slide-out" class="side-nav sn-bg-4 fixed">
      <ul class="custom-scrollbar">

        <!-- Logo -->
        <li class="logo-sn waves-effect py-3">
          <div class="text-center">
            <a href="#" class="pl-0" style="background-color: darkblue; "><img src="{{url('assets/img/logo/logo.png')}}"></a>
          </div>
        </li>

        <!-- Search Form -->
        <li>
          <form class="search-form" role="search">
            <div class="md-form mt-0 waves-light">
              <input type="text" class="form-control py-2" placeholder="Search">
            </div>
          </form>
        </li>

        <!-- Side navigation links -->
        <li>
          <ul class="collapsible collapsible-accordion">
            <li>
              <a href="{{route('admin.dashboard')}}" class="collapsible-header waves-effect"><i class="w-fa fas fa-tachometer-alt"></i> Dashboard</a>
            </li>
            <li>
              <a class="collapsible-header waves-effect arrow-r">
                <i class="w-fa fas fa-image"></i>Pages<i class="fas fa-angle-down rotate-icon"></i>
              </a>
              <div class="collapsible-body">
                <ul>
                  <li>
                    <a href="{{route('admin.allposts')}}" class="waves-effect">All Posts</a>
                    <a href="{{route('admin.addpost')}}" class="waves-effect">Create Post</a>
                    <a href="{{route('admin.postsapprove')}}" class="waves-effect">Approval Posts</a>
                  </li>
                </ul>
              </div>
            </li>
            <li>
              <a href="{{route('admin.profile')}}" class="collapsible-header waves-effect"><i class="w-fa fas fa-user"></i> Profile</a>
            </li>
            <li>
              <a href="{{route('category.index')}}" class="collapsible-header waves-effect"><i class="fab fa-microsoft"></i> Categories</a>
            </li>
            <li>
              <a href="{{route('admin.users')}}" class="collapsible-header waves-effect"><i class="fas fa-user"></i> Users</a>
            </li>
          </ul>
        </li>
        <!-- Side navigation links -->
      </ul>
      <div class="sidenav-bg mask-strong"></div>
    </div>
