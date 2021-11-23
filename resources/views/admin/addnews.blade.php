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
                    <textarea class="form-control" id="content" placeholder="" name="content" value="{{ old('content') }}" autocomplete="content">{{ old('content') }}</textarea>
                </div>
                <div class="form-group">
                    <label for="resume">Resumen</label>
                    <textarea class="form-control" id="resume" placeholder="" name="resume" value="{{ old('resume') }}" autocomplete="resume">{{ old('resume') }}</textarea>
                </div>
                <div class="form-group">
                    <label for="tag">Tag</label>
{{--                    <select class="form-control" id="tag" name="tag">--}}
{{--                        <option value="1">Prensa Unimar</option>--}}
{{--                        <option value="2">Rectorado</option>--}}
{{--                        <option value="3">Vicerrectorado Académico</option>--}}
{{--                        <option value="4">Vicerrectorado de Extensión</option>--}}
{{--                    </select>--}}
                    <div class="form-group-lg">
{{--                        @foreach($news as $story)--}}
{{--                            <label class="label label-info">{{ $story->tags }}</label>--}}
                            <input type="text" name="tags" value="Prensa,Unimar,Rectorado,Vicerrectorado,Académico,Extensión" data-role="tagsinput"/>
{{--                        @endforeach--}}
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="reset" class="btn btn-default">Descartar</button>
                <button type="submit" class="btn btn-primary float-right">Agregar</button>
            </div>
        </form>
    </div>

    <script>
        //CKEDITOR Textareas replacement
        ClassicEditor.create( document.querySelector( '#content' ) )
            .catch( error => {
                console.error( error );
            } );
            ClassicEditor.create( document.querySelector( '#resume' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
@endsection
