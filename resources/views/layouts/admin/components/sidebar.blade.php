<div id="sidebar" class='active'>
    <div class="sidebar-wrapper active">
        <div class="sidebar-header">
            {{-- <h2 style="color:DodgerBlue;">JadwaLine</h2> --}}
            <img src="{{ asset ('admin/images/JadwaLine.png')}}" alt="">
        </div>
        <div class="sidebar-menu">
            <ul class="menu">


                <li class='sidebar-title'>Main Menu</li>



                <li class="sidebar-item active ">
                    <a href="{{ route('admin.dashboard')}}" class='sidebar-link'>
                        <i data-feather="home" width="20"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i data-feather="user" width="20"></i>
                        <span>Kelola Akun</span>
                    </a>

                    <ul class="submenu ">

                        <li>
                            <a href="{{ route('admin.account.manage.manager.index')}}"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-briefcase"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path></svg> Manager</a>
                        </li>

                        <!-- <li>
                            <a href="{{ route('admin.account.manage.driver')}}">Supir</a>
                        </li> -->
                    </ul>
                </li>
                
                <li class="sidebar-item ">
                    <a href="{{ route('admin.review.index')}}" class='sidebar-link'>
                        <i data-feather="star" width="20"></i>
                        <span>Review</span>
                    </a>
                </li> 

                 {{-- <li class="sidebar-item ">
                    <a href="index.html" class='sidebar-link'>
                        <i data-feather="bar-chart" width="20"></i>
                        <span>Statistika Pendapatan</span>
                    </a>
                </li> --}}

            </ul>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>
