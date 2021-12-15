  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-light-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('/admin') }}" class="brand-link">
      <img src="{{asset('image/logo-formal-horizontal.jpg')}}" alt="Logo UNIMAR" class="brand-image" style="opacity: .8">
      <span class="brand-text font-weight-normal text-nowrap" style="width: 8rem;"></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="mt-3 mb-3 d-flex">
        <!-- <div class="image">
          <img src="{{asset('image/user.png')}}" class="img-circle elevation-2" alt="Usuario">
        </div> -->
        <!-- @if (Route::has('login')) -->
        <div class="info pb-3">
          @if (Auth::guest())
            <!-- <a href="{{ route('login') }}">{{trans('header.login')}}</a> -->
            <span class="d-block">Bienvenid@</san>
          @else
              <a href="/admin/profile" class="d-block">Bienvenid@, {{ auth()->user()->name }}</a>
          @endif
        </div>
        <!-- @endif -->
      </div>
      <!-- Sidebar user panel (optional) -->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
                with font-awesome or any other icon font library -->
          <li class="nav-item">
            <!-- link news -->
           @if( auth()->user()->role_id == '1')
                    <ul class="nav">
                      <li class="nav-item">
                        <a href="/admin/users" class="nav-link" id="btn-nav">
                          <i class="fas fa-users nav-icon grape" id="navicon"></i>
                          <p> Usuarios </p>
                        </a>
                        <!-- agregar condicion en js para cambiar de color el icono cuando se haga hover en el item -->
                      </li>
                @endif
                @if((auth()->user()->role_id=='3') or (auth()->user()->role_id=='1'))
                    <li class="nav-item">
                        <span class="nav-link" id="pubtitle">
                              <i class="fas fa-user nav-icon grape"></i>
                              <p> Estudiantes </p>
                        </span>
                    </li>
                    <li class="nav-item">
                        <a href="/admin/events" class="nav-link" id="btn-nav">
                            <i class="fas fa-circle-notch nav-icon grape"></i>
                            <p>Notas</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/admin/events" class="nav-link" id="btn-nav">
                            <i class="fas fa-circle-notch nav-icon grape"></i>
                            <p>Horarios</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/admin/events" class="nav-link" id="btn-nav">
                            <i class="fas fa-circle-notch nav-icon grape"></i>
                            <p>Materias Cursadas</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/admin/events" class="nav-link" id="btn-nav">
                            <i class="fas fa-circle-notch nav-icon grape"></i>
                            <p>Citas de Inscripción</p>
                        </a>
                    </li>
               @endif
              @if((auth()->user()->role_id=='2') or (auth()->user()->role_id=='1'))
                {{--@if( auth()->user()->role_id == '1')--}}
                      <li class="nav-item">
                        <span class="nav-link" id="pubtitle">
                          <i class="fas fa-book-open nav-icon grape"></i>
                          <p> Publicaciones </p>
                        </span>
                      </li>
                      <li class="nav-item">
                        <a href="/admin/news" class="nav-link active" id="btn-nav">
                          <i class="far fa-circle nav-icon grape"></i>
                          <p>Noticias</p>
                        </a>
                      </li>
                      <!-- links events -->
                      <li class="nav-item">
                        <a href="/admin/events" class="nav-link" id="btn-nav">
                          <i class="far fa-circle nav-icon grape"></i>
                          <p>Eventos</p>
                        </a>
                      </li>
                @endif
                @if((auth()->user()->role_id=='4') or (auth()->user()->role_id=='1'))
                    <li class="nav-item">
                <span class="nav-link" id="pubtitle">
                  <i class="fas fa-id-badge nav-icon grape"></i>
                  <p> Empleados </p>
                </span>
                    </li>
                    <li class="nav-item">
                        <a href="/admin/news" class="nav-link active" id="btn-nav">
                            <i class="far fa-circle nav-icon grape"></i>
                            <p>Notificaciones</p>
                        </a>
                    </li>
                    <!-- links events -->
                    <li class="nav-item">
                        <a href="/admin/events" class="nav-link" id="btn-nav">
                            <i class="far fa-circle nav-icon grape"></i>
                            <p>Recibos de Pago</p>
                        </a>
                    </li>
                @endif
                </ul>
            {{--@endif--}}
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
