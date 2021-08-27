 <aside class="main-sidebar sidebar-light-color elevation-4">
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
    </div>
    <!-- /.sidebar -->
</aside>

<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <!-- Add icons to the links using the .nav-icon class
            with font-awesome or any other icon font library -->
      <li class="nav-item menu-open">
        <a href="#" class="nav-link active" id="btn-nav">
          <i class="nav-icon fas fa-tachometer-alt"></i>
          <p>
            {{trans('pub_btn')}}
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        <!-- link news -->
        <ul class="nav nav-treeview">
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
      <li class="nav-item">
        <a href="#" class="nav-link" id="btn-nav">
          <i class="nav-icon fas fa-th"></i>
          <p>
            Simple Link
            <span class="right badge badge-danger">New</span>
          </p>
        </a>
      </li>
    </ul>
</nav>