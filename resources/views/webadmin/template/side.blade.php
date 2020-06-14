<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
<a href="{{ aca_url('adminPanel') }}" class="brand-link">
    <img src="{{ aca_asset('dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">Blood</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{ aca_asset('dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">Aiacademy</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
       
        <li class="nav-item">
        <a href="{{ aca_url('adminPanel') }}" class="nav-link boold">
            <i class="nav-icon fas fa-tint"></i>
            <p>
              Blood donors
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ aca_url('adminPanel/country') }}" class="nav-link country-btn">
            <i class="nav-icon fas fa-flag"></i>
              <p>
                country & city
              </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ aca_url('adminPanel/profil') }}" class="nav-link profil">
            <i class="nav-icon fas fa-id-card"></i>
              <p>
                Profil
              </p>
          </a>
        </li>
       
  
  

      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>