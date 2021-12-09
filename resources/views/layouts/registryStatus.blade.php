    <div class="row">
        @if($message = Session::get('Listo'))
            <div class="col-12 alert alert-success alert-dismissible fade show" role="alert">
                <span>{{ $message }}</span>
            </div>
        @elseif($errors->any())
            <div class="col-12 alert alert-danger alert-dismissible fade show" role="alert">
                <h5>Errores: </h5>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>