  <!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4" style="overflow-x: hidden;">
  <!-- Sidebar -->
  <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
              <a href="#">
                  <img src="https://adminlte.io/themes/v3/dist/img/user2-160x160.jpg" class="img-circle elevation-2 perfil-sidebar">
              </a>
          </div>
          <div class="info">
              <a href="#" class="d-block">{{ Auth::user()->name ?? 'Usuário' }}</a>
          </div>
          <div class="info align-self-center">
              <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="fas fa-sign-out-alt"></i>
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  {{ csrf_field() }}
              </form>
          </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item has-treeview ">
              <a href="/home" class="nav-link {{ Route::is('home') ? 'active' : '' }}">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Dashboard
                </p>
              </a>
            </li>
            <li class="nav-item has-treeview">
              <a href="{{ route('admin.planets.index') }}" class="nav-link {{ Route::is('admin.planets.index') ? 'active' : '' }}">
                <i class="nav-icon fas fa-tasks"></i>
                <p>
                  Planetas
                </p>
              </a>
            </li>
            <li class="nav-item has-treeview">
              <a href="{{ route('admin.starships.index') }}" class="nav-link {{ Route::is('admin.starships.index') ? 'active' : '' }}">
                <i class="nav-icon fas fa-tasks"></i>
                <p>
                  Naves
                </p>
              </a>
            </li>
          </ul>
      </nav>
      <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>