@extends('admin.home')

@section ('admincontent')
    <!-- Add user form -->
    <div class="card card-primary">
        <div class="modal-header">
            <h3 class="card-title">Agregar Noticia</h3>
        </div>
        <form action="{{URL('/admin/news')}}" method="POST">
            @csrf
            <div class="card-body">
                <!-- Success message for registry -->
                @include('layouts.registryStatus')

                <div class="form-group">
                    <label for="title">Título</label>
                    <input type="text" class="form-control" id="title" placeholder="" name='title'
                           value="{{ old('title') }}" required minlength="10" autocomplete="title" autofocus>
                </div>
                <div class="form-group">
                    <label for="content">Contenido</label>
                    <textarea class="form-control" id="content" placeholder="" name="content"
                              value="{{ old('content') }}" autocomplete="content">{{ old('content') }}</textarea>
                </div>
                <div class="form-group">
                    <label for="resume">Resumen</label>
                    <textarea class="form-control" id="resume" placeholder="" name="resume" value="{{ old('resume') }}"
                              autocomplete="resume">{{ old('resume') }}</textarea>
                </div>
                <div class="form-group">
                    <label for="tag">Tag</label>
                    <div class="form-group-lg">
                        <input type="text" name="tags"
                               value="Prensa,Unimar,Rectorado,Vicerrectorado,Académico,Extensión"
                               data-role="tagsinput"/>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                {{--<a href="javascript:history.back();">volvemos a la página anterior</a>--}}

                <a type="button" class="btn btn-default" href="javascript:history.go(-2);">Descartar</a>
                <button type="submit" class="btn btn-primary float-right">Agregar</button>
            </div>
        </form>
    </div>

    <!-- Local scripts -->
    <script>
        //CKEDITOR Textareas replacement
        ClassicEditor.create(document.querySelector('#content'), {
            ckfinder: {
                uploadUrl: '{{ route('ckfinder_connector') }}?command=QuickUpload&type=Files&responseType=json'
            }
        })
        .catch(error => {
            console.error(error);
        });
        ClassicEditor.create(document.querySelector('#resume'), {
            ckfinder: {
                uploadUrl: '{{ route('ckfinder_connector') }}?command=QuickUpload&type=Files&responseType=json'
            }
        })
        .catch(error => {
            console.error(error);
        });
    </script>
@endsection
