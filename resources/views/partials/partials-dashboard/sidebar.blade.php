<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Men Cargo</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ Request::is('home') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('home') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Wilayah
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item {{ Request::is('wilayah*') ? 'active' : '' }}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Wilayah</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Isi Data:</h6>
                <a class="collapse-item" href="{{route('datawilayah.index')}}">Data Wilayah</a>
                <a class="collapse-item" href="{{route('tingkatanwilayah.index')}}">Tingkatan Wilayah</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

      <!-- Divider -->

      <div class="sidebar-heading">
        Customer
      </div>

      <li class="nav-item {{ Request::is('customer*') ? 'active' : '' }}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCustomer"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-user"></i>
            <span>Customer</span>
        </a>
        <div id="collapseCustomer" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Data Customer:</h6>
                <a class="collapse-item" href="{{route('customer.index')}}">Customer</a>
        </div>
    </li>

    <hr class="sidebar-divider">

    <div class="sidebar-heading">
        Pesanan
    </div>

    <li class="nav-item {{ Request::is('pesanan*') ? 'active' : '' }}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePesanan"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-shopping-cart"></i>
            <span>Pesanan</span>
        </a>
        <div id="collapsePesanan" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Data Pesanan:</h6>
                <a class="collapse-item" href="{{route('pesananmencargo.index')}}">Pesanan Mencargo</a>
            </div>
        </div>
    </li>

    <hr class="sidebar-divider">

    <div class="sidebar-heading">
        MTC
    </div>

    <li class="nav-item {{ Request::is('mtc*') ? 'active' : '' }}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseMtc"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-road"></i>
            <span>MTC</span>
        </a>
        <div id="collapseMtc" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Data Mtc:</h6>
                <a class="collapse-item" href="">MTC</a>
            </div>
        </div>
    </li>

    <hr class="sidebar-divider">

    <div class="sidebar-heading">
        Pembayaran
    </div>

    <li class="nav-item {{ Request::is('pembayaran*') ? 'active' : '' }}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePembayaran"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-money-bill-wave"></i>
            <span>Pembayaran</span>
        </a>
        <div id="collapsePembayaran" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Data Pembayaran:</h6>
                <a class="collapse-item" href="{{route('statuspembayaran.index')}}">Status Pembayaran</a>
                <a class="collapse-item" href="{{route('metodepembayaran.index')}}">Metode Pembayaran</a>
            </div>
        </div>
    </li>

    <div class="sidebar-heading">
        Status Manifes
    </div>

    <li class="nav-item {{ Request::is('statusmanifes*') ? 'active' : '' }}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseStatusManifes"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-exclamation-circle"></i>
            <span>Status Manifes</span>
        </a>
        <div id="collapseStatusManifes" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Data Status Manifes:</h6>
                <a class="collapse-item" href="{{route('statusmanifes.index')}}">Status Manifes</a>
            </div>
        </div>
    </li>


    <div class="sidebar-heading">
        Logout
    </div>

    <li class="nav-item ">
            <a href="{{ route('logout') }}" class='nav-link' onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
                <i class="fas fa-power-off"></i>
                <span>Logout</span>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>



</ul>
