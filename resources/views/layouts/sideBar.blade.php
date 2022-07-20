<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Chanaka</a>
        </div>
      </div>

    <!-- Sidebar -->
    <div class="sidebar">
      

      

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="{{ url('/add-student')}}" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Student Registration
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('/add-student')}}" class="nav-link">
                    <i class="nav-icon fas fa-edit"></i>
                    <p>
                      New Registration
                      <i class="fas fa-angle-left right"></i>
                    </p>
                  </a>
              </li>

              <li class="nav-item">
                <a href="{{ url('/students')}}" class="nav-link">
                    <i class="nav-icon fas fa-book"></i>
                    <p>
                      View Students
                      <i class="fas fa-angle-left right"></i>
                    </p>
                  </a>
             </li>

             <li class="nav-item">
              <a href="{{ url('/search')}}" class="nav-link">
                  <i class="nav-icon fas fa-book"></i>
                  <p>
                    Search Student
                    <i class="fas fa-angle-left right"></i>
                  </p>
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