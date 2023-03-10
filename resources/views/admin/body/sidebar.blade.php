<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    {{-- <a href="index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a> --}}

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          {{-- <a href="#" class="d-block">Alexander Pierce</a> --}}
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
          <li class="nav-item menu-open">
            <a href="{{route('dashboard')}}" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                {{-- <i class="right fas fa-angle-left"></i> --}}
              </p>
            </a>
            {{-- <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./index.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v1</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index2.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v2</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index3.html" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v3</p>
                </a>
              </li>
            </ul> --}}
          </li>
         
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Attendance Options   
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">2</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('add-attendance')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Attendance</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('view-attendance')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Attendance</p>
                </a>
              </li>

            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Payroll List
                {{-- <i class="right fas fa-angle-left"></i> --}}
              </p>
            </a>
         
          </li>    
          <li class="nav-item">
            <a href="{{route('employee')}}" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i> 
              <p>
                Employee List
                {{-- <i class="right fas fa-angle-left"></i> --}}
              </p>
            </a>
         
          </li>    
          <li class="nav-item">
            <a href="{{route('department')}}" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Department List              
                  {{-- <i class="right fas fa-angle-left"></i> --}}
              </p>
            </a>
         
          </li>    
          <li class="nav-item">
            <a href="{{route('position')}}" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Position List
                {{-- <i class="right fas fa-angle-left"></i> --}}
              </p>
            </a>
         
          </li>    
          <li class="nav-item">
            <a href="{{route('bouns')}}" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Bonus List
                {{-- <i class="right fas fa-angle-left"></i> --}}
              </p>
            </a>
         
          </li>    
          <li class="nav-item">
            <a href="{{route('allowance')}}" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i> 
              <p>
                Allowance List
                {{-- <i class="right fas fa-angle-left"></i> --}}
              </p>
            </a>
         
          </li>    
          <li class="nav-item">
            <a href="{{route('deductions')}}" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i> 
              <p>
                Deduction List
                {{-- <i class="right fas fa-angle-left"></i> --}}
              </p>
            </a>
         
          </li>    
          <li class="nav-item">
            <a href="{{route('user')}}" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                User List
                {{-- <i class="right fas fa-angle-left"></i> --}}
              </p>
            </a>
         
          </li>    
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>