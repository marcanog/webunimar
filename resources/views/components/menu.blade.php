<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<style>
.flex-container {
    display: flex;
    margin: 0 auto;
    position: sticky;
}

</style>
<body>
    <div class="flex-container">
        <div class="flex logo">
                        <a href="#"><img class="img-logo" src="{{URL::asset ('./image/unimar.jpg') }}"></a>
        </div>
        <div class="flex-bar">
            <nav class="navbar navbar-light">
        <!-- Navbar content -->
                <a class="navbar-brand" id="header-menu" href="#">Nuestra Institución</a>
                <a class="navbar-brand" id="header-menu" href="#">Organización</a>
                <a class="navbar-brand" id="header-menu" href="#">Decanatos</a>
                <a class="navbar-brand" id="header-menu" href="#">Extensión</a>
                <a class="navbar-brand" id="header-menu" href="#">Investigación</a>
           <!-- </nav>
            <nav class="navbar navbar-light">
             Navbar content -->
                <a class="navbar-brand" id="header-menu" href="#">Nuevos Ingresos</a>
                <a class="navbar-brand" id="header-menu" href="#">Estudiantes Regulares</a>
                <a class="navbar-brand" id="header-menu" href="#">Egresados</a>
                <a class="navbar-brand" id="header-menu" href="#">Profesores</a>
                <a class="navbar-brand" id="header-menu" href="#">Internacional</a>
                <a class="navbar-brand" id="header-menu" href="#">Servicios</a>
            </nav>
        </div>
    </div>
</body>
</html>