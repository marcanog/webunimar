<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<style>
    /* .footer{
        background-color: #336699;
        width: 100%;
        display: flex;
        height: 50%;
    }
    .copyright-content{
         background-color: #336699;
         color: #ffffff;
    }
    .info-university, .our-institution, .offers, .webs-service, .quickly-access {
        display: flex;
        width: 20%;
        flex-direction: column;
        padding: 1.5em 1em;
    }
    .info-university > img {
        width: 40%;
        margin: 0 auto;
        padding: 0.4em;
    }
   .info-university > span, .our-institution > span, .offers > span, .webs-service > span, .quickly-access > span {
        text-align: center;
        width: 80%;
        font-size: 1em;
        color: #ffffff;
        padding: 0.4em;
        margin: 0 auto;
    }
    .our-institution > a, .offers > a, .webs-service > a, .quickly-access > a {
        color: #ffffff;
        font-size: 1.15em;
        padding: 0.35em;
        text-decoration: none;
        text-align: left;
    }
    .rrss {
        text-align: left;
    }
    .rrss > a > img {
        width:32px;
    } */
</style>
<body>
    <div class="footer">
        <div class="info-university">
            <img src={{("./image/logo-blanco.png")}}>
            <span>Av. Concepción Mariño, Sector El Toporo, El Valle del Espíritu Santo, Edo. Nueva Esparta, Venezuela.</span>
        </div>
        <div class="our-institution">
            <a href="#"><b>Nuestra Institución</b></a>
            <a href="#">Rectorado</a>
            <a href="#">Vicerrectorado Académico</a>
            <a href="#">Decanatos</a>
            <a href="#">Bienestar Estudiantil</a>
        </div>
        <div class="offers">
            <a href="#"><b>Ofertas de Estudios</b></a>
            <a href="#">Pregrado</a>
            <a href="#">Postgrado</a>
            <a href="#">Diplomados</a>
            <a href="#">Cursos y Talleres</a>
        </div>
        <div class="webs-service">
            <a href="#"><b>Servicios Web</b></a>
            <a href="#">Pagos Online</a>
            <a href="#">Recibos de Pago</a>
            <a href="#">Educación Virtual</a>
            <a href="#">Horarios Académcos</a>
        </div>
        <div class="quickly-access">
            <a href="#"><b>Acceso Rápido</b></a>
            <a href="#">Calendario Académico</a>
            <a href="#">Directorio Telefónico</a>
            <a href="#">Contáctanos a tráves de</a>
            <div class="rrss">
                <a href="#"><img src={{('./image/rrss/email.png')}}></a>
                <a href="#"><img src={{('./image/rrss/facebook.png')}}></a>
                <a href="#"><img src={{('./image/rrss/gorjeo.png')}}></a>
                <a href="#"><img src={{('./image/rrss/instagram.png')}}></a>
                <a href="#"><img src={{('./image/rrss/linkedin.png')}}></a>
            </div>
        </div>
    </div>
    <div class="copyright-content">
            <span>© Copyright 2001-2021 Universidad de Margarita, Rif: J-30660040-0. Teléfono: 800-UNIMAR (800-864627). Isla de Margarita - Venezuela.</span>
    </div>
</body>
</html>