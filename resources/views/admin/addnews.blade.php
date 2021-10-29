@extends('admin.home')

@section ('admincontent')
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
                        <option value="1">Prensa Unimar</option>
                        <option value="2">Rectorado</option>
                        <option value="3">Vicerrectorado Académico</option>
                        <option value="4">Vicerrectorado de Extensión</option>
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
                        <div class="form-group row">
                            <label for="tag" class="col-md-3 col-form-label text-md-right">Tag: </label>
                            <div class="col-md-7">
                                <select class="form-control" id="tagedit" name="tag">
                                    <option value="1">Prensa Unimar</option>
                                    <option value="2">Rectorado</option>
                                    <option value="3">Vicerrectorado Académico</option>
                                    <option value="4">Vicerrectorado de Extensión</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="statusedit" class="col-md-3 col-form-label text-md-right">Status: </label>
                            <div class="col-md-7">
                                <select class="form-control" id="statusedit" name="status">
                                    <option value="1">Activo</option>
                                    <option value="2">Inactivo</option>
                                </select>
                            </div>
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
