<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">

      <li class="nav-item {{ request()->routeIs('manager.dashboard') ? 'active ' : '' }}">
        <a class="nav-link" href="{{ route('manager.dashboard')}}">
          <i class="icon-paper menu-icon"></i>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>
      <li class="nav-item {{ request()->routeIs('manager.transport.index') ? 'active ' : '' }}">
        <a class="nav-link" href="{{ route('manager.transport.index')}}">
          <i class="icon-paper menu-icon"></i>
          <span class="menu-title">Data master angkutan</span>
        </a>
      </li>
      {{-- <li class="nav-item {{ request()->routeIs('manager.reviews.index') ? 'active ' : '' }}">
        <a class="nav-link" href="{{ route('manager.reviews.index')}}">
          <i class="icon-paper menu-icon"></i>
          <span class="menu-title">Reviews</span>
        </a>
      </li> --}}
      <li class="nav-item {{ request()->routeIs('manager.profile') ? 'active ' : '' }}">
        <a class="nav-link" href="{{ route('manager.profile')}}">
          <i class="icon-paper menu-icon"></i>
          <span class="menu-title">Profile</span>
        </a>
      </li>
      </li>
    </ul>
  </nav>