@section('sidebar')
    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                  with font-awesome or any other icon font library -->
            <li class="nav-item">
                <!-- link news -->
                @if( auth()->user()->role_id == '2')
                    <ul class="nav list-unstyled ps-0">
                        <li class="nav-item">
                            <a href="{{url('/admin/users')}}" class="nav-link" id="btn-nav">
                                <i class="fas fa-users nav-icon grape" id="navicon"></i>
                                <p> Usuarios </p>
                            </a>
                            <!-- agregar condicion en js para cambiar de color el icono cuando se haga hover en el item -->
                        </li>
                        @endif
                        @if((auth()->user()->role_id=='4') or (auth()->user()->role_id=='2'))
                            <li class="nav-item has-treeview" style="display: block;">
                                <span class="nav-link" id="pubtitle">
                                      <i class="fas fa-user nav-icon grape"></i>
                                      <p> Estudiantes </p>
                                </span>
                                {{--</li>--}}
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
                            </li>
                        @endif
                        @if((auth()->user()->role_id=='2') or (auth()->user()->role_id=='1'))
                            {{--@if( auth()->user()->role_id == '1')--}}
                            <li class="nav-item has-treeview ">
                                    <span class="nav-link" id="pubtitle">
                                      <i class="fas fa-book-open nav-icon grape"></i>
                                      <p> Publicaciones </p>
                                    </span>
                                <ul class="nav-item list-unstyled ps-0" id="sidebar">
                                    <li class="nav-item">
                                        <a href="{{url('/admin/news')}}" class="nav-link active" id="btn-nav">
                                            <i class="far fa-circle nav-icon grape"></i>
                                            <p>Noticias</p>
                                        </a>
                                    </li>
                                    <!-- links events -->
                                    <li class="nav-item">
                                        <a href="{{url('/admin/events')}}" class="nav-link" id="btn-nav">
                                            <i class="far fa-circle nav-icon grape"></i>
                                            <p>Eventos</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        @endif
                        @if((auth()->user()->role_id=='3') or (auth()->user()->role_id=='2'))
                            <li class="nav-item has-treeview">
                                    <span class="nav-link" id="pubtitle">
                                      <i class="fas fa-id-badge nav-icon grape"></i>
                                      <p> Empleados </p>
                                    </span>
                                <ul class="nav-item list-unstyled ps-0" id="sidebar">
                                    <li class="nav-item mb-1">
                                        <a href="{{url('/admin/employee/notifcations')}}" class="nav-link active "
                                           id="btn-nav">
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
                                </ul>
                            </li>
                        @endif
                        @if((auth()->user()->role_id=='5') or (auth()->user()->role_id=='2'))
                            <li class="nav-item has-treeview">
                                    <span class="nav-link" id="pubtitle">
                                      <i class="fas fa-chalkboard-teacher nav-icon grape"></i>
                                      <p> Profesor </p>
                                    </span>
                                <ul class="nav-item list-unstyled ps-0" id="sidebar">
                                    <li class="nav-item mb-1">
                                        <a href="{{url('/admin/employee/notifcations')}}" class="nav-link active "
                                           id="btn-nav">
                                            <i class="far fa-circle nav-icon grape"></i>
                                            <p>Notificaciones</p>
                                        </a>
                                    </li>
                                    <!-- links events -->
                                    <li class="nav-item">
                                        <a href="{{url('/admin/events')}}" class="nav-link" id="btn-nav">
                                            <i class="far fa-circle nav-icon grape"></i>
                                            <p>Registro de Notas</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{url('/admin/events')}}" class="nav-link" id="btn-nav">
                                            <i class="fas fa-file-alt nav-icon grape"></i>
                                            <p>Documentos Académicos</p>
                                        </a>
                                        <ul class="nav-item list-unstyled ps-0" id="sidebar">
                                            <li class="nav-item">
                                                <a href="{{url('/admin/events')}}" class="nav-link" id="btn-nav">
                                                    <i class="far fa-circle nav-icon grape"></i>
                                                    <p>Carga Académica</p>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="{{url('/admin/events')}}" class="nav-link" id="btn-nav">
                                                    <i class="far fa-circle nav-icon grape"></i>
                                                    <p>Control de Asistencia</p>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="{{url('/admin/events')}}" class="nav-link" id="btn-nav">
                                                    <i class="far fa-circle nav-icon grape"></i>
                                                    <p>Evaluación Continua</p>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="{{url('/admin/events')}}" class="nav-link" id="btn-nav">
                                                    <i class="far fa-circle nav-icon grape"></i>
                                                    <p>Porcentaje de Evaluación</p>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="{{url('/admin/events')}}" class="nav-link" id="btn-nav">
                                                    <i class="far fa-circle nav-icon grape"></i>
                                                    <p>Plan de Evaluación</p>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="{{url('/admin/events')}}" class="nav-link" id="btn-nav">
                                                    <i class="far fa-circle nav-icon grape"></i>
                                                    <p>Materia Vista</p>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        @endif
                        @if(auth::guest())
                            {{--Colocar redirección a la vista de loginl--}}
                            {{--<a href="{{ url('/login?redirect_to='.url()->current()) }}" class="btn blue no-margin">
                               Debe loguearse para acceder a esta funcionalidad
                            </a>--}}
                        @endif
                    </ul>
                    {{--@endif--}}
            </li>
        </ul>
    </nav>
    <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
@endsection
