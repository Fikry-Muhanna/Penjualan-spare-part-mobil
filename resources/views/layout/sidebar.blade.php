
     <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{asset ('adminlte/index3.html')}}" class="brand-link">
      <img src="{{asset ('adminlte/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Toko Spare Parts</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset ('adminlte/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Admin 2</a>
        </div>
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
            <a href="{{route('dashboard')}}" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
            <li class="nav-item">
            <a href="{{url('admin/useradmin/index')}}" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                User Admin
              </p>
            </a>
          <li class="nav-item">
            <a href="{{url('admin/transaksi/index')}}" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Transaksi
              </p>
            </a>
          <li class="nav-item">
            <a href="{{url('admin/sparepart/index')}}" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Spare Part
              </p>
            </a>
            <li class="nav-item">
            <a href="{{url('admin/kategori/index')}}" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Kategori
              </p>
            </a>
          <li class="nav-item">
            <a href="{{route('customerIndex')}}" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Customer
              </p>
            </a>
            
              
           
          </li>
          <li class="nav-item">
            <a href="{{url('admin/transdetail/index')}}" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Detail Transaksi
              </p>
            </a>
            
          
          </li>
          <li class="nav-header"></li>
          <li class="nav-item">
            <a href="{{route('logout')}}" class="nav-link">
              <i class="fas fa-circle nav-icon"></i>
              <p>Log Out</p>
            </a>
          </li>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>