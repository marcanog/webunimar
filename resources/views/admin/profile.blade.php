@extends('admin.home')

@section ('admincontent')
    <div class="h3 mb-0 text-gray-dark"><h3>Perfil del usuario</h3></div>
    <div class="flex-content justify-content-lg-around flex-fill">
        <!-- Success message for registry -->
        @include('layouts.registryStatus')

        <div class="row">
            <div class="col-xl-4">
                <!-- Profile picture card-->
                <div class="card mb-4 mb-xl-0">
                    <div class="card-header">Avatar</div>
                    <div class="card-body text-center">
                        <!-- Profile picture image-->
                        <img class="img-account-profile rounded-circle mb-2" src="{{URL::asset('image/user.png')}}" alt="user-image" style="width:10rem;">
                        <!-- Profile picture help block-->
                        <div class="small font-italic text-muted mb-4">Formato png o jpg menor a 5Mb</div>
                        <!-- Profile picture upload button-->
                        <button class="btn btn-primary" type="button">Carga nueva imagen</button>
                    </div>
                </div>
            </div>
            <div class="col-xl-8">
                <!-- Account details card-->
                <div class="card mb-4">
                    <div class="card-header">Detalles de cuenta</div>
                    <div class="card-body">
                        <form action="/admin/updateProfile" method="GET">
                            @csrf
                            <!-- Form Row-->
                            <div class="row gx-3 mb-3">
                                <!-- Form Group (first name)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputFirstName">Nombre</label>
                                    <input class="form-control" id="inputFirstName" type="text" placeholder="Enter your first name" value="{{($user->name)}}">
                                </div>
                            </div>
                            <!-- Form Row        -->
                            <div class="row gx-3 mb-3">
                                <!-- Form Group (organization name)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputOrgName">Nombre de la Organización</label>
                                    <input class="form-control" id="inputOrgName" type="text" placeholder="Enter your organization name" value="Unimar">
                                </div>
                                <!-- Form Group (location)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputLocation">Ubicación</label>
                                    <input class="form-control" id="inputLocation" type="text" placeholder="Enter your location" value="El Valle del Espíritu Santo">
                                </div>
                            </div>
                            <!-- Form Group (email address)-->
                            <div class="mb-3">
                                <label class="small mb-1" for="inputEmailAddress">Correo electrónico</label>
                                <input class="form-control" id="inputEmailAddress" type="email" placeholder="Enter your email address" value="{{($user->email)}}">
                            </div>
                            <!-- Form Row-->
                            <div class="row gx-3 mb-3">
                                <!-- Form Group (phone number)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputPhone">Número de teléfono</label>
                                    <input class="form-control" id="inputPhone" type="tel" placeholder="Enter your phone number" name="phone" value="{{($user->phone)}}">
                                </div>
                                <!-- Form Group (birthday)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputBirthday">Fecha de nacimiento</label>
                                    <input class="form-control" id="inputBirthday" type="text" name="birthday" placeholder="Enter your birthday" value="{{($user->birth)}}">
                                </div>
                            </div>
                            <!-- Save changes button-->
                            <button class="btn btn-primary" type="Submit">Guardar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
