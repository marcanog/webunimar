     <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-light-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('/home') }}" class="brand-link">
      <img src="{{asset('image/unimar.jpg')}}" alt="Logo UNIMAR" class="brand-image" style="opacity: .8">
      <span class="brand-text font-weight-normal text-nowrap" style="width: 8rem;"></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('image/user.png')}}" class="img-circle elevation-2" alt="Usuario">
        </div>
        @if (Route::has('login'))
        <div class="info">
          @auth
              <a href="#" class="d-block">{{ auth()->user()->name }}</a>
           @else
              <a href="{{ route('login') }}">{{trans('header.login')}}</a>
              <!--Crear redirección-->
          @endauth
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
                <span class="nav-link" id="pubtitle">
                  <i class="fas fa-book-open nav-icon"></i>
                  <p> Publicaciones </p>
                </span>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link active" id="btn-nav">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Noticias</p>
                </a>
              </li>
              <!-- links events -->
              <li class="nav-item">
                <a href="#" class="nav-link" id="btn-nav">
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