<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-warning elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="{{ asset('img/LogoK.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-bold" style="color: #ffff00">Kas<span style="color: #00ffff">in</span></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        {{-- <div class="image">
          <img src="{{ asset('') }}assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div> --}}
        <div class="info">
          <a href="/profil" class="d-block">{{ $user->name }}</a>
        </div>
        <a href="/logout" class="btn btn-outline-danger ml-auto btn-sm">Logout</a>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="/dashboard" class="nav-link {{ $active == 'dashboard' ? 'active' : '' }}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item {{ ($active == 'anggota') ? 'menu-is-opening menu-open' : (($active == 'absen') ? 'menu-is-opening menu-open' : (($active == 'kas') ? 'menu-is-opening menu-open' : ''))}}">
            <a href="#" class="nav-link {{ ($active == 'anggota') ? 'active' : (($active == 'absen') ? 'active' : (($active == 'kas') ? 'active' : ''))}}">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Fitur
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/anggota" class="nav-link {{ $active == 'anggota' ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Anggota</p>
                </a>
              </li>
              {{-- <li class="nav-item">
                <a href="/absen" class="nav-link {{ $active == 'absen' ? ' active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Absen</p>
                </a>
              </li> --}}
              <li class="nav-item">
                <a href="/kas" class="nav-link {{ $active == 'kas' ? ' active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kas</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
    </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>