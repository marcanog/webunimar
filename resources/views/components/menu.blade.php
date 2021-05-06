<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<style>
.flex-container {
    display: flex;
    margin: 0 auto;
    position: sticky;
}
/* Regla para menu flotante
.flex-container {
    display: flex;
    /* justify-content: space-evenly; */
/*    margin: 0 auto;
    position: fixed;
    top: 0px;
    background: #fff;
    z-index: 100;
}
*/
/* .logo {
    display: flex;
    justify-content: flex-start;
    margin: 0em 3em;
    width: 35%;
}
.flex.logo > a {
    margin: auto;
}
.img-logo {
    margin: 0.25em 0 1.15em;
    width: 350px;
}
.flex-bar {
    display: flex;
    flex-direction: column;
    width: 70%;
    align-items: center;
    position: relative;
    margin: auto !important;
    top: 20px;
}
nav.navbar.navbar-light {
    margin: 5px;
}
a.navbar-brand {
    color: #212121;
    padding: 0 15px;
}
.navbar-brand {
    float: left;
    height: 50px;
    font-size: 1.35em !important;
    line-height: 20px;
}
#header-menu.navbar-brand:focus, #header-menu.navbar-brand:hover {
    text-decoration: underline !important;
    font-weight: 600;
} */
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