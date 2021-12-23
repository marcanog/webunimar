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
        ClassicEditor.create(document.querySelector('#content'))
            .catch(error => {
                console.error(error);
            });
        ClassicEditor.create(document.querySelector('#resume'))
            .catch(error => {
                console.error(error);
            });

        /*Ckeditor uploadimage*/

        /*ClassicEditor.create(document.querySelector('#content'), {
            ckfinder: {
                // Use named route for CKFinder connector entry point
                uploadUrl: '@{{ route(' / admin / addnews / upload') }}?command=QuickUpload&type=Files',
            }
            options: {
                resourceType: 'Images'
            }
        });
        ClassicEditor.create(document.querySelector('#resume'), {
            ckfinder: {
                // Use named route for CKFinder connector entry point
                uploadUrl: '@{{ route(' / admin / addnews / upload') }}?command=QuickUpload&type=Files',
            }
            options: {
                resourceType: 'Images'
            }
        });*/

        {{--CKEDITOR.replace('resume', {
        filebrowserUploadUrl: "{{ asset('/admin/addnews/upload', ['_token' => csrf_token() ])}}",
        filebrowserBrowserdUrl: "{{ asset('/admin/addnews/file_browser', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form'
    });--}}

    </script>
@endsection
