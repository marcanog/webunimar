<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-light-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('/admin') }}" class="brand-link">
        <img src="{{URL::asset('image/logo-formal-horizontal.jpg')}}" alt="Logo UNIMAR" class="brand-image"
             style="opacity: .8">
        <span class="brand-text font-weight-normal text-nowrap" style="width: 8rem;"></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        {{--<div class="mt-3 mb-3 d-flex">
        <!-- <div class="image">
          <img src="{{asset('image/user.png')}}" class="img-circle elevation-2" alt="Usuario">
        </div> -->
        <!-- @if (Route::has('login')) -->
            <div class="info pb-3">
            @if (Auth::guest())
                <!-- <a href="{{ route('login') }}">{{trans('header.login')}}</a> -->
                    <span class="d-block text-decoration-none">Bienvenid@</san>
            @else
                            <a href="/admin/profile"
                               class="d-block text-decoration-none">Bienvenid@, {{ auth()->user()->name }}</a>
                @endif
            </div>
        <!-- @endif -->
        </div>--}}
        <!-- Sidebar user panel (optional) -->
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column"
                data-widget="treeview"
                role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                      with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <!-- link news -->
                @auth
                    @if( auth()->user()->role_id == '2')
                        <ul class="nav list-unstyled ps-0">
                            <li class="nav-item">
                                <a href="{{url('/admin/users')}}" class="nav-link " id="btn-nav">
                                    <i class="fas fa-users nav-icon grape" id="navicon"></i>
                                    <p> Usuarios </p>
                                </a>
                                <!-- agregar condicion en js para cambiar de color el icono cuando se haga hover en el item -->
                            </li>
                            @endif
                            @if((auth()->user()->role_id=='4') or (auth()->user()->role_id=='2'))
                                <li class="nav-item has-treeview" data-bs-toggle="collapse"
                                    href="#collapseExample"
                                    role="button" aria-expanded="false" aria-controls="collapseExample"
                                    style="display: block;">
                                    <a class="nav-link " id="btn-nav">
                                        <i class="fas fa-user nav-icon grape" id="navicon"></i>
                                        <p> Estudiantes </p>
                                    </a>
                                    <!-- agregar condicion en js para cambiar de color el icono cuando se haga hover en el item -->
                                </li>
                                <div class="collapse" id="collapseExample">
                                    <ul class="nav-item list-unstyled ps-0" id="sidebar">
                                        <li class="nav-item">
                                            <a href="{{url('/admin/student/record')}}" class="nav-link" id="btn-nav">
                                                <i class="fas fa-circle-notch nav-icon grape"></i>
                                                <p>Notas</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{url('/admin/events')}}" class="nav-link" id="btn-nav">
                                                <i class="fas fa-circle-notch nav-icon grape"></i>
                                                <p>Horarios</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{url('/admin/events')}}" class="nav-link" id="btn-nav">
                                                <i class="fas fa-circle-notch nav-icon grape"></i>
                                                <p>Materias Cursadas</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{url('/admin/events')}}" class="nav-link" id="btn-nav">
                                                <i class="fas fa-circle-notch nav-icon grape"></i>
                                                <p>Citas de Inscripción</p>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                </li>
                            @endif
                            @if((auth()->user()->role_id=='2') or (auth()->user()->role_id=='1'))
                                {{--@if( auth()->user()->role_id == '1')--}}
                                <li class="nav-item has-treeview" data-bs-toggle="collapse"
                                    href="#collapseExample1"
                                    role="button" aria-expanded="false" aria-controls="collapseExample1">
                                    <a class="nav-link " id="btn-nav">
                                        <i class="fas fa-book-open nav-icon grape"></i>
                                        <p> Publicaciones </p>
                                    </a>
                                    <div class="collapse" id="collapseExample1">
                                        <ul class="nav-item list-unstyled ps-0" id="sidebar">
                                            <li class="nav-item">
                                                <a href="{{url('/admin/news')}}" class="nav-link active" id="btn-nav">
                                                    <i class="fas fa-circle-notch nav-icon grape"></i>
                                                    <p>Noticias</p>
                                                </a>
                                            </li>
                                            <!-- links events -->
                                            <li class="nav-item">
                                                <a href="{{url('/admin/events')}}" class="nav-link" id="btn-nav">
                                                    <i class="fas fa-circle-notch nav-icon grape"></i>
                                                    <p>Eventos</p>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            @endif
                            @if((auth()->user()->role_id=='3') or (auth()->user()->role_id=='2'))
                                <li class="nav-item has-treeview" data-bs-toggle="collapse"
                                    href="#collapseExample2"
                                    role="button" aria-expanded="false" aria-controls="collapseExample2">
                                    <a class="nav-link " id="btn-nav">
                                        <i class="fas fa-id-badge nav-icon grape"></i>
                                        <p> Empleados </p>
                                    </a>
                                    <div class="collapse" id="collapseExample2">
                                        <ul class="nav-item list-unstyled ps-0" id="sidebar">
                                            <li class="nav-item mb-1">
                                                <a href="{{url('/admin/employee/notifcations')}}" class="nav-link active "
                                                   id="btn-nav">
                                                    <i class="fas fa-circle-notch nav-icon grape"></i>
                                                    <p>Notificaciones</p>
                                                </a>
                                            </li>
                                            <!-- links events -->
                                            <li class="nav-item">
                                                <a href="{{url('/admin/events')}}" class="nav-link" id="btn-nav">
                                                    <i class="fas fa-circle-notch nav-icon grape"></i>
                                                    <p>Recibos de Pago</p>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            @endif
                            @if((auth()->user()->role_id=='5') or (auth()->user()->role_id=='2'))
                                <li class="nav-item has-treeview" data-bs-toggle="collapse"
                                    href="#collapseExample3"
                                    role="button" aria-expanded="false" aria-controls="collapseExample3">
                                    <a class="nav-link " id="btn-nav">
                                        <i class="fas fa-chalkboard-teacher nav-icon grape"></i>
                                        <p> Profesor </p>
                                    </a>
                                    <div class="collapse" id="collapseExample3">
                                        <ul class="nav-item list-unstyled ps-0" id="sidebar">
                                            <li class="nav-item mb-1">
                                                <a href="{{url('/admin/employee/notifcations')}}" class="nav-link active "
                                                   id="btn-nav">
                                                    <i class="fas fa-circle-notch nav-icon grape"></i>
                                                    <p>Notificaciones</p>
                                                </a>
                                            </li>
                                            <!-- links events -->
                                            <li class="nav-item">
                                                <a href="{{url('/admin/events')}}" class="nav-link" id="btn-nav">
                                                    <i class="fas fa-circle-notch nav-icon grape"></i>
                                                    <p>Registro de Notas</p>
                                                </a>
                                            </li>
                                            <li class="nav-item has-treeview" data-bs-toggle="collapse"
                                                href="#collapseExample4"
                                                role="button" aria-expanded="false" aria-controls="collapseExample4">
                                                <a class="nav-link " id="btn-nav">
                                                    <i class="fas fa-file-alt nav-icon grape"></i>
                                                    <p>Documentos Académicos</p>
                                                </a>
                                                <div class="collapse" id="collapseExample4">
                                                    <ul class="nav-item list-unstyled ps-0" id="sidebar">
                                                        <li class="nav-item">
                                                            <a href="{{url('/admin/events')}}" class="nav-link" id="btn-nav">
                                                            <a href="{{url('/admin/events')}}" class="nav-link" id="btn-nav">
                                                                <i class="fas fa-circle-notch nav-icon grape"></i>
                                                                <p>Carga Académica</p>
                                                            </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="{{url('/admin/events')}}" class="nav-link" id="btn-nav">
                                                                <i class="fas fa-circle-notch nav-icon grape"></i>
                                                                <p>Control de Asistencia</p>
                                                            </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="{{url('/admin/events')}}" class="nav-link" id="btn-nav">
                                                                <i class="fas fa-circle-notch nav-icon grape"></i>
                                                                <p>Evaluación Continua</p>
                                                            </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="{{url('/admin/events')}}" class="nav-link" id="btn-nav">
                                                                <i class="fas fa-circle-notch nav-icon grape"></i>
                                                                <p>Porcentaje de Evaluación</p>
                                                            </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="{{url('/admin/events')}}" class="nav-link" id="btn-nav">
                                                                <i class="fas fa-circle-notch nav-icon grape"></i>
                                                                <p>Plan de Evaluación</p>
                                                            </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="{{url('/admin/events')}}" class="nav-link" id="btn-nav">
                                                                <i class="fas fa-circle-notch nav-icon grape"></i>
                                                                <p>Materia Vista</p>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            @endif
                            <li class="nav-item has-treeview" data-bs-toggle="collapse"
                                href="#collapseExample5"
                                role="button" aria-expanded="false" aria-controls="collapseExample5">
                                <a class="nav-link " id="btn-nav">
                                    <i class="fas fa-id-badge nav-icon grape"></i>
                                    <p> Cuenta </p>
                                </a>
                                <div class="collapse" id="collapseExample5">
                                    <ul class="nav-item list-unstyled ps-0" id="sidebar">
                                        <li class="nav-item mb-1">
                                            <a href="{{url('/admin/profile')}}" class="nav-link active "
                                               id="btn-nav">
                                                <i class="fas fa-circle-notch nav-icon grape"></i>
                                                <p>Perfil</p>
                                            </a>
                                        </li>
                                        <!-- links events -->
                                        <li class="nav-item">
                                            <a href="{{ url('/logout') }}" class="nav-link" id="btn-nav">
                                                <i class="fas fa-circle-notch nav-icon grape"></i>
                                                <p>Cerrar Sesión</p>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            @else{{--if (auth::guest())--}}
                           {{-- <a href="{{ route('login') }}">{{trans('header.login')}}</a>--}}
                            <!--Crear redirección-->
                            <li class="nav-item has-treeview" data-bs-toggle="collapse"
                                href="#collapseExample5"
                                role="button" aria-expanded="false" aria-controls="collapseExample5">
                                <a class="nav-link " id="btn-nav">
                                    <i class="fas fa-id-badge nav-icon grape"></i>
                                    <p> Cuenta </p>
                                </a>
                                <div class="collapse" id="collapseExample5">
                                    <ul class="nav-item list-unstyled ps-0" id="sidebar">
                                        {{--<li class="nav-item mb-1">
                                            <a href="/admin/profile" class="nav-link active "
                                               id="btn-nav">
                                                <i class="fas fa-circle-notch nav-icon grape"></i>
                                                <p>Perfil</p>
                                            </a>
                                        </li>--}}
                                        <!-- links events -->
                                        <li class="nav-item">
                                            <a href="{{ url('/login?redirect_to='.url()->current()) }}" class="nav-link" id="btn-nav">
                                                <i class="fas fa-circle-notch nav-icon grape"></i>
                                                <p>Iniciar Sesión</p>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            @endauth
                            {{-- @if(auth::guest())
                                 --}}{{--Colocar redirección a la vista de loginl--}}{{--
                                 --}}{{--<a href="{{ url('/login?redirect_to='.url()->current()) }}" class="btn blue no-margin">
                                    Debe loguearse para acceder a esta funcionalidad
                                 </a>--}}{{--
                             @endif--}}
                        </ul>
                        {{--@endif--}}
                        </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
