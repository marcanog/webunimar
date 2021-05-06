<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<style>
    /* .location-content {
        display: flex;
        justify-content: space-around;
        padding: 1.5em 1em 3em;
    }
    .map-direction {
        display: flex;
        width: 50%;
        flex-direction: column;
        text-align: left;
        padding: 1em;
        margin: 0 auto;
    }
    .map-direction > span {
        font-size: 1.35em;
        padding: 0.5em;
        text-align: justify;
        letter-spacing: 0.05em;
    }
    .map-location {
        display: flex;
        margin: 0 auto;
        padding: 1em;
    } */
</style>
<body>
    <div class="location-content">
        <div class= "map-location">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3916.7972847852143!2d-63.88208018566738!3d10.978668292184503!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8c318c3b89e345cd%3A0xbaf23c34b11f9d7!2sUniversidad%20De%20Margarita!5e0!3m2!1ses-419!2sve!4v1620079489335!5m2!1ses-419!2sve" width="700" height=350" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
        <div class="map-direction">
            <span> Av. Concepción Mariño, Sector El Toporo, El Valle del Espiritu Santo, Estado Nueva Esparta, Venezuela. </span>
            <span> Código Postal:  6308 </span>
            <span>Código Plus: X4HC+F2 El Valle del Espíritu Santo, Nueva Esparta
            Teléfonos: 800-UNIMAR (800-86462) / +58 295-2871722 / 0466 / 0866 </span>
            <span>Correo: info@unimar.edu.ve </span>
        </div>
    </div>
</body>
</html>