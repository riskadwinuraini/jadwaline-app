<nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
      <a class="navbar-brand brand-logo mr-5" href="/manager-area">
        <img src="/admin/images/jadwaline.png" class="mr-2" alt="logo" style="width: 100%; height:auto;"/ >
      </a>
      <a class="navbar-brand brand-logo-mini" href="/manager-area"><img src="/admin/images/jadwaline.png" alt="logo"/></a>
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
      <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
        <span class="icon-menu"></span>
      </button>
      <ul class="navbar-nav mr-lg-2">
      </ul>
      <ul class="navbar-nav navbar-nav-right">
        <li class="nav-item nav-profile dropdown">
          <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
            <img src="/manager/images/faces/face28.jpg" alt="profile"/>
          </a>
          <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
            <a class="dropdown-item" href="{{ route('manager.logout')}}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">
              <i class="ti-power-off text-primary"></i>
              Logout
            </a>
          </div>
          <form id="frm-logout" action="{{ route('manager.logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
        </li>
        {{-- <li class="nav-item nav-settings d-none d-lg-flex">
          <a class="nav-link" href="#">
            <i class="icon-ellipsis"></i>
          </a>
        </li> --}}
      </ul>
      <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
        <span class="icon-menu"></span>
      </button>
    </div>
  </nav>
