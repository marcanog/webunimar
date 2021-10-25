@extends('admin.home')

@section ('admincontent')
    <!-- Success message for registry -->
    <div class="row">
        @if($message = Session::get('Sucess'))
            <div class="col-12 alert alert-success alert-dismissible fade show" role="alert">
                <span>{{ $message }}</span>
            </div>
        @endif
    </div>

    <!-- List of news -->
    <div class="table-responsive-xl">
        <table class="table table-hover col-lg-12 text-center">
            <thead class="thead-blue">
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Título</th>
                    <th scope="col">Resumen</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Status</th>
                    <th scope="col">Operaciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($news as $new)
                    <tr>
                        @if (Auth::guest())
                            <td>{{($new->title)}}</td>
                            <td>{!!($new->resume)!!}</td>
                            <td>{{($new->created_at)}}</td>
                            <td>{{($new->status)}}</td>
                        @else
                            <th>{{($new->id)}}</th>
                            <td>{{($new->title)}}</td>
                            <td>{!!($new->resume)!!}</td>
                            <td>{{($new->created_at)}}</td>
                            <td>{{($new->status)}}</td>
                            <td>
                                <button type="button" class="btn btn-warning open-modal btnedit" data-open="NewUpdModal" data-toggle="modal" data-placement="top" title="Editar"  
                                data-id="{{ $new->id }}" 
                                data-title="{{ $new->title }}" 
                                data-content="{{ $new->content }}" 
                                data-resume="{{ $new->resume }}" 
                                data-tag="{{ $new->tag }}"
                                data-status="{{ $new->status }}"
                                data-target="#NewUpdModal">
                                    <i class="fas fa-edit"></i>
                                </button>
                            </td>
                        @endif
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Add user form -->
    <div class="card card-primary">
        <div class="modal-header">
            <h3 class="card-title">Agregar Noticia</h3>
        </div>
        <form action="/admin/news" method="POST">
            @csrf
            <div class="card-body">
                @if($message = Session::get('ErrorInsert'))
                    <div class="col-12 alert alert-danger alert-dismissible fade show" role="alert">
                        <h5>Errores: </h5>
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="form-group">
                    <label for="title">Título</label>
                    <input type="text" class="form-control" id="title" placeholder="" name='title' value="{{ old('title') }}" required autocomplete="title" autofocus>
                </div>
                <div class="form-group">
                    <label for="content">Contenido</label>
                    <textarea class="form-control" id="content" placeholder="" name="content" value="{{ old('content') }}" required autocomplete="content">{{ old('content') }}</textarea>
                </div>
                <div class="form-group">
                    <label for="resume">Resumen</label>
                    <textarea class="form-control" id="resume" placeholder="" name="resume" value="{{ old('resume') }}" required autocomplete="resume">{{ old('resume') }}</textarea>
                </div>
                <div class="form-group">
                    <label for="tag">Tag</label>
                    <select class="form-control" id="tag" name="tag">
                        <option value="Prensa Unimar">Prensa Unimar</option>
                        <option value="Rectorado">Rectorado</option>
                        <option value="Vicerrectorado Académico">Vicerrectorado Académico</option>
                        <option value="Vicerrectorado de Extensión">Vicerrectorado de Extensión</option>
                    </select>
                </div>
            </div>
            <div class="modal-footer">
                <button type="reset" class="btn btn-default">Descartar</button>
                <button type="submit" class="btn btn-primary float-right">Agregar</button>
            </div>
        </form>
    </div>

    <!-- Update user modal form -->
    <div class="modal fade" id="NewUpdModal" tabindex="-1" role="dialog" aria-labelledby="NewUpdModal" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModalUpdUser">Actualizar Noticias</h5>
                    <button type="button" class="close" data-dismiss="modal" data-toggle="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="/admin/news/edit" method="POST">
                    @csrf
                    <div class="modal-body">
                        @if($message = Session::get('ErrorInsert'))
                            <div class="col-12 alert alert-danger alert-dismissible fade show" role="alert">
                                <h5>Errores: </h5>
                                <ul>
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <input type="hidden" class="form-control" id="idedit" placeholder="" name='idedit' value="{{ old('idedit') }}" required autocomplete="idedit">
                        <div class="form-group">
                            <label for="titleedit">Título</label>
                            <input type="text" class="form-control" id="titleedit" placeholder="" name='title' required autocomplete="titleedit">
                        </div>
                        <div class="form-group">
                            <label for="contentedit">Contenido</label>
                            <textarea class="form-control" id="contentedit" placeholder="" name="content" required autocomplete="contentedit"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="resumeedit">Resumen</label>
                            <textarea class="form-control" id="resumeedit" placeholder="" name="resume" required autocomplete="resumeedit"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="tagedit">Tag</label>
                            <select class="form-control" id="tagedit" name="tag">
                                <option value="Prensa Unimar">Prensa Unimar</option>
                                <option value="Rectorado">Rectorado</option>
                                <option value="Vicerrectorado Académico">Vicerrectorado Académico</option>
                                <option value="Vicerrectorado de Extensión">Vicerrectorado de Extensión</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="statusedit">Status</label>
                            <input type="text" class="form-control" id="statusedit" placeholder="" name='status' value="{{ old('statusedit') }}" required autocomplete="statusedit">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary btnupdtuser">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!--Page scripts -->
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <script>
        //CKEDITOR Textareas replacement
        CKEDITOR.replace( 'content' );
        CKEDITOR.replace( 'resume' );
        CKEDITOR.replace( 'contentedit' );
        CKEDITOR.replace( 'resumeedit' );

        document.addEventListener('DOMContentLoaded',function(){
            //Data load in edit form 
            $('.btnedit').click(function(){
                $('#idedit').val($(this).attr('data-id'));
                $('#titleedit').val($(this).attr('data-title'));
                CKEDITOR.instances['contentedit'].setData($(this).attr('data-content'));
                CKEDITOR.instances['resumeedit'].setData($(this).attr('data-resume'));
                $('#tagedit').val($(this).attr('data-tag'));
                $('#statusedit').val($(this).attr('data-status'));
            });
        });
    </script>
@endsection