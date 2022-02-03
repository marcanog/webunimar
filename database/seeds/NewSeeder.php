<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class NewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('news')->insert([
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
            'title' => 'Aviso a la comunidad estudiantil sobre Valor de la Moneda a partir del miércoles 24 de noviembre de 2021',
            'content' => '<p>Se informa a la comunidad estudiantil que el Valor de la Moneda a partir del día miércoles 24 de noviembre de 2021 es igual a: <strong>4,60bs</strong></p>',
            'resume' => '<p>Valor de la Moneda a partir de <i>24/11/2021</i></p>',
            'tags_id' => '1,2,3,4',
            'image' => 'new.png',
            'status_id' => '1',
        ]);
        DB::table('news')->insert([
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
            'title' => 'Universidad de Margarita celebra la publicación del primer número de la revista digital',
            'content' => '<p>El 03 de noviembre pasado en la Sala de Conferencias 2 de Unimar, se llevó a cabo el bautizo de la Revista Unimar Científica, al cual asistieron los miembros del Consejo Superior, la Rectora, Dra. Antonieta Rosales de Oxford, el equipo rectoral, representantes del personal docente y administrativo , de Unimar.<br><br>Al acto fueron invitados distintas personalidades del mundo académico, de investigación, cultural y empresarial del estado Nueva Esparta.<br><br>La encargada de hacer la presentación de la revista fue la Dra&nbsp; Mariela Díaz Fernández, editora de la publicación quien hizo un pequeño relato de la creación de este nuevo proyecto editorial-científico:<br><br>"El proyecto de la Revista Unimar Científica nace en el año 2020, con el propósito de fortalecer la actividad científica de quienes hacen vida como docentes e investigadores de Unimar y también para fortalecer la cultura de investigación dentro de la universidad. Es necesario destacar que desde el comienzo se hicieron múltiples reuniones hasta llegar a acuerdos importantes en torno a lo que iba a ser la política editorial de la revista,&nbsp; la normativa, la misión y la visión e inclusive considerar aquellos aspectos que tenían que ver con el tipo de publicaciones que se iban a incluir. Se decidió entonces que fuese una revista de caracter multidisciplinario, para así dar cabida a publicaciones de todas las áreas del conocimiento.<br><br>Una vez decididos esos aspectos fundamentales se constituyó un comité editorial y de inmediato nos dedicamos a pensar en el primer volúmen de la revista y a trabajar en ello. Se hizo el arbitraje de un grupo de artículos y finalmente quedaron aprobados 10,&nbsp; de distintas áreas de investigación.<br><br>Luego vino el trabajo que tiene que ver con el diseño original, el arte, un proceso bastante complejo, pero para ello contamos con el apoyo de jóvenes universitarios de Unimar, Adriana Aguilar y Adrián Quijano,&nbsp; que se&nbsp; dedicaron exclusivamente a esta ardua tarea, bajo mi supervisión y la del Decano de Ingeniería, Ingeniero Andrés Pedroza. Luego de varias revisiones se aprobó el diseño, el logo, el arte de la revista. Comenzó entonces el trabajo del montaje de la edición digital, que ya está listo, en espera de su publicación en la Web:<br>http://www.unimarcientifica.edu.ve"</p>',
            'resume' => '<p><a href="http://www.unimar.edu.ve/unimarportal/documentos/Revista-Unimar-Cientifica-Primera-Edicion-1.pdf">UNIMAR CIENTÍFICA. Revista científica de la Universidad de Margarita</a></p>',
            'tags_id' => '5,6',
            'image' => 'new.png',
            'status_id' => '1',
        ]);
        DB::table('news')->insert([
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
            'title' => 'Universidad de Margarita entregó Título Doctor Honoris Causa al Maestro Ecberht Lucena.',
            'content' => '<p>En una solemne y emotiva ceremonia, realizada el pasado&nbsp; 8 de noviembre&nbsp; en el salón Nueva Cádiz&nbsp; del&nbsp; hotel Venetur,&nbsp; el&nbsp; Maestro Ecberht Lucena recibió el título Doctor Honoris Causa, el primero entregado por la Universidad de Margarita. El acto estuvo presidido por la Rectora, Antonieta Rosales de Oxford, acompañada por los miembros del Consejo Superior, los vicerrectores Académico y de Extensión y la Secretaria General .<br><br>El evento contó con la asistencia de demás integrantes del equipo rectoral, representantes del personal docente y administrativo de Unimar e invitados especiales del&nbsp; ámbito cultural, empresarial y político del estado Nueva Esparta.<br><br>El profesor&nbsp; Pedro&nbsp; Beauperthuy, quien fungió de Padrino del Maestro Lucena en&nbsp; el acto,&nbsp; señaló en su discurso:<br><br>“como fue tan receptivo, invitamos al Maestro a conocer nuestra casa, en el Valle de la Margarita,&nbsp; y desde su primera visita&nbsp; se quedó para siempre como si algo mágico hubiese surgido.”<br>El aporte de Lucena al Alma Mater del Caribe fue añadirle al proyecto académico creado por los fundadores, el arte sublime de la música. La Música penetró la Academia. El Maestro se ha consustanciado con la misión de Unimar. Empezando su vida académica, en Unimar se creó la cátedra obligatoria para todas las carreras: Arte y Cultura Universal<br>Al mismo tiempo fue Maestro Director Fundador del Orfeón de Unimar. Creó el himno de la Universidad de Margarita con lo cual ha confirmado que la música es un lenguaje universal que enaltece la dignidad humana, que trasciende fronteras y transforma la vida, como derecho humano que es”.<br><br>Por su parte, el nuevo Doctor Honoris Causa agradeció la investidura y manifestó que su discurso estaba en consonancia con el de su Padrino, por destacar su vinculación laboral y afectiva con Unimar. Luego&nbsp; afirmó que entre las muchas piezas musicales de su autoría la que más satisfacciones espirituales le ha producido es el himno de Unimar.<br><br>El acto&nbsp; contó con la presentación del&nbsp; Orfeón&nbsp; Unimar, esta vez dirigido por el Maestro Roki&nbsp; Viscuña,&nbsp; y una representación de la Orquesta&nbsp;&nbsp; Sinfónica Juvenil del estado Nueva Esparta, bajo la dirección del&nbsp; Maestro Juan J. García, egresado de Unimar,&nbsp; quienes deleitaron a los asistentes interpretando el "Alelullia" de&nbsp; El Mesías de Haendel, el&nbsp; “Gaudeamos Igitur” antiguo himno universitario, y el "Himno de la Universidad de Margarita", con música y letra del Maestro Ecberht Lucena.<br><br>Antes de finalizar el acto, la Universidad de Margarita entregó medalla y placa de agradecimiento a los&nbsp; maestros Roki&nbsp; Viscuña y Juan J. García por su invaluable colaboración y apoyo prestado al acto de entrega del Doctorado Honoris Causa.</p>',
            'resume' => '<p>El pasado&nbsp; 8 de noviembre&nbsp; en el salón Nueva Cádiz&nbsp; del&nbsp; hotel Venetur,&nbsp; el&nbsp; Maestro Ecberht Lucena recibió el título Doctor Honoris Causa, el primero entregado por la Universidad de Margarita.&nbsp;</p>',
            'tags_id' => '1,3,6',
            'image' => 'new.png',
            'status_id' => '1',
        ]);
        DB::table('news')->insert([
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
            'title' => 'Aviso a la comunidad estudiantil sobre Valor de la Moneda a partir del miércoles 24 de noviembre de 2021',
            'content' => '<p>Se informa a la comunidad estudiantil que el Valor de la Moneda a partir del día miércoles 24 de noviembre de 2021 es igual a: <strong>4,60bs</strong></p>',
            'resume' => '<p>Valor de la Moneda a partir de <i>24/11/2021</i></p>',
            'tags_id' => '1,2,3,4',
            'image' => 'new.png',
            'status_id' => '1',
        ]);
    }
}
