<nav class="sidebar sidebar-offcanvas mt-4" id="sidebar">
    <ul class="nav">

      <li class="nav-item">
        <a class="nav-link" href="/manager-area">
          <i class="icon-paper menu-icon"></i>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="{{ route('manager.transport.index')}}">
          <i class="icon-paper menu-icon"></i>
          <span class="menu-title">Data master angkutan</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{ route('manager.schedules.index')}}">
          <i class="icon-paper menu-icon"></i>
          <span class="menu-title">Jadwal</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('manager.profile')}}">
          <i class="icon-paper menu-icon"></i>
          <span class="menu-title">Profile</span>
        </a>
      </li>
    </ul>
  </nav>