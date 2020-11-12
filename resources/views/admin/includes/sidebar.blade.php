<aside class="main-sidebar elevation-4 sidebar-dark-primary" style="overflow-x: hidden;">
	<a href="index3.html" class="brand-link">
		<span class="brand-text font-weight-light">AdminLTE 3</span>
	</a>
	<div class="sidebar">
		<div class="user-panel mt-3 pb-3 mb-3 d-flex">
			<div class="image">
				<img src="https://pbs.twimg.com/profile_images/794107415876747264/g5fWe6Oh.jpg" 
				class="img-circle elevation-2" alt="User Image">
			</div>
			<div class="info">
				<a href="#" class="d-block">{{ Auth::user()->name }}</a>
			</div>
			<div class="info align-self-center">
				<form id="logout-form" method="post" action="{{ route('logout') }}">
					@csrf
					<a href="#" onclick="$('#logout-form').submit()" class="d-block"><i class="nav-icon fas fa-power-off"></i></a>
				</form>
			</div>
		</div>
		<nav class="mt-2">
			<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
				<li class="nav-item has-treeview ">
					<a href="/" class="nav-link {{ Route::is('dashboard') ? 'active' : '' }}">
						<i class="nav-icon fas fa-tachometer-alt"></i>
						<p>
							Dashboard
						</p>
					</a>
				</li>
				<li class="nav-item has-treeview">
					<a href="{{ route('admin.planets.index') }}" class="nav-link {{ Route::is('admin.planets.index') ? 'active' : '' }}">
					  <i class="nav-icon fas fa-globe-europe"></i>
					  <p>
						Planetas
					  </p>
					</a>
				  </li>
				  <li class="nav-item has-treeview">
					<a href="{{ route('admin.starships.index') }}" class="nav-link {{ Route::is('admin.starships.index') ? 'active' : '' }}">
					  <i class="nav-icon fas fa-space-shuttle"></i>
					  <p>
						Naves
					  </p>
					</a>
				  </li>
				  <li class="nav-item has-treeview">
					<a href="{{ route('admin.favorites.index') }}" class="nav-link {{ Route::is('admin.favorites.index') ? 'active' : '' }}">
					  <i class="nav-icon fas fa-star"></i>
					  <p>
						Favoritos
					  </p>
					</a>
				  </li>
			</ul>
		</nav>
	</div>
</aside>