     <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-light-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('/admin') }}" class="brand-link">
      <img src="{{asset('image/unimar.jpg')}}" alt="Logo UNIMAR" class="brand-image" style="opacity: .8">
      <span class="brand-text font-weight-normal text-nowrap" style="width: 8rem;"></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <!-- <div class="image">
          <img src="{{asset('image/user.png')}}" class="img-circle elevation-2" alt="Usuario">
        </div> -->
        @if (Route::has('login'))
        <div class="info">
          @if (auth()->user()->role === "Administrador")
              <a href="/admin/profile" class="d-block">{{ auth()->user()->name }}</a> 
           @else
              <a href="{{ route('login') }}">{{trans('header.login')}}</a>
              <!--Crear redirección-->
          @endif
        </div>
        @endif
      </div>
      
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
                with font-awesome or any other icon font library -->
           <li class="nav-item">
            <!-- link news -->
            <ul class="nav">
              <li class="nav-item">
                <a href="/admin/users" class="nav-link" id="btn-nav">
                  <i class="fas fa-users nav-icon grape" id="navicon"></i>
                  <p> Usuarios </p>
                </a>
                <!-- agregar condicion en js para cambiar de color el icono cuando se haga hover en el item -->
              </li>
              <li class="nav-item">
                <span class="nav-link" id="pubtitle">
                  <i class="fas fa-book-open nav-icon grape"></i>
                  <p> Publicaciones </p>
                </span>
              </li>
              <li class="nav-item">
                <a href="/admin/news" class="nav-link active" id="btn-nav">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Noticias</p>
                </a>
              </li>
              <!-- links events -->
              <li class="nav-item">
                <a href="/admin/events" class="nav-link" id="btn-nav">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Eventos</p>
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