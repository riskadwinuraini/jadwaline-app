<div class="sidebar-menu">
            <div class="sidebar-header">
                <div class="logo">
                    <a href="index.html"><img src="/assets/images/icon/logo.png" alt="logo"></a>
                </div>
            </div>
            <div class="main-menu">
                <div class="menu-inner">
                    <nav>
                        <ul class="metismenu" id="menu">
                            <li><a href="{{ route('dashboard')}}"><i class="ti-dashboard"></i> <span>Dashboard</span></a></li>
                            <li><a href="{{ route('transport.index')}}"><i class="ti-map-alt"></i> <span>Data Master</span></a></li>
                            <li><a href="invoice.html"><i class="ti-receipt"></i> <span>Ulasan</span></a></li>
                            <li><a href="invoice.html"><i class="ti-receipt"></i> <span>Riwayat</span></a></li>
                            <li>
                                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">
                                    Logout
                                </a> 
                            </li>

                            <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>