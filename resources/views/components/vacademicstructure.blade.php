{{--@section('orgvacademics')--}}
    <script src="https://balkan.app/js/OrgChart.js"></script>
    <div id="tree"></div>
    <style>
         #tree {
            width: 100%;
            height: 100%;
            position: relative;

        }
        .field_0, .field_1 [data-l-id] {
            font-size: 10px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }
        /*.field_0, .field_1 {*/
        /*    font-size: 10px;*/
        /*    fill: #cfcfcf;*/
        /*    white-space: nowrap;*/
        /*    overflow: hidden;*/
        /*    text-overflow: ellipsis;*/
        /*}*/

    </style>
    <script>
        OrgChart.templates.isla = Object.assign({}, OrgChart.templates.isla);
        OrgChart.templates.isla.field_1 =
            '<text data-width="150" data-text-overflow="multiline" style="font-size: 10px;" fill="#757575" x="90" y="55" text-anchor="middle">{val}</text>';
        var chart = new OrgChart(document.getElementById("tree"), {
            template: "isla",
            enableSearch: false,
            mouseScrool: OrgChart.action.none,
            menu: {
                pdf: {text: "Export PDF"},
                png: {text: "Export PNG"},
                /*svg: { text: "Export SVG" },
                csv: { text: "Export CSV" }*/
            },
            nodeMenu: {
                details: {text: "Details"},
                /*edit: {text:"Edit"},
                add: {text:"Add"},
                remove: {text:"Remove"}*/
            },
            nodeBinding: {
                field_0: "name",
                field_1: "title",
                img_0: "img"
            },
            nodes: [
                {
                    id: 1,
                    name: "Antonieta Rosales de Oxford",
                    title: "Rector, Gerente General del Sistema",
                    img: "https://cdn.balkan.app/shared/2.jpg"
                },
                {
                    id: 2,
                    pid: 1,
                    name: "Antonio Martínez",
                    title: "Vicerrector Subsistema de Docencia",
                    img: "https://cdn.balkan.app/shared/1.jpg",
                },
                {
                    id: 10,
                    pid: 2,
                    name: "Juana Sanchez",
                    title: "Decana de Humanidades, Artes y Educación",
                    img: "https://cdn.balkan.app/shared/4.jpg"
                },
                {
                    id: 11,
                    pid: 2,
                    name: "Cristina Agostini Cancino",
                    title: "Decano de Ciencias Jurídicas y Políticas",
                    img: "https://cdn.balkan.app/shared/4.jpg"
                },
                {
                    id: 12,
                    pid: 2,
                    name: "Karely J. Gil González",
                    title: "Decana de Ciencias Económicas y Sociales",
                    img: "https://cdn.balkan.app/shared/4.jpg"
                },
                {
                    id: 13,
                    pid: 2,
                    name: "Andrés R. Pedroza R.",
                    title: "Decano de Ingeniería y Afines",
                    img: "https://cdn.balkan.app/shared/3.jpg"
                },
                {
                    id: 14,
                    pid: 2,
                    name: "Damelis Vásquez de Villegas",
                    title: "Decana de Estudios Generales",
                    img: "https://cdn.balkan.app/shared/4.jpg"
                },
                {
                    id: 15,
                    pid: 2,
                    name: '',
                    title: "Biblioteca UNIMAR",
                    img:"https://cdn.balkan.app/shared/3.jpg"
                },
                {
                    id: 16,
                    pid: 2,
                    name: '',
                    title: "Área de Pasantías",
                    img: "https://cdn.balkan.app/shared/1.jpg"
                }
            ]
        });
    </script>
{{--@endsection--}}
