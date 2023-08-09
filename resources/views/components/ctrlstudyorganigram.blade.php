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
                name: "Marianny De Lira",
                title: "Jefe del Departamento",
                img: "https://cdn.balkan.app/shared/2.jpg"
            },
            {
                id: 2,
                pid: 1,
                name: "Celia Reyes",
                title: "Asistente de Grado",
                img: "https://cdn.balkan.app/shared/4.jpg",
            },
            {
                id: 3,
                pid: 1,
                name: "Ricci González",
                title: "Analista de Grado",
                img: "https://cdn.balkan.app/shared/4.jpg"
            },
            {
                id: 4,
                pid: 1,
                name: "Nelson Martínez",
                title: "Auxiliar Equivalencias / Taquilla",
                img: "https://cdn.balkan.app/shared/1.jpg"
            },
            {
                id: 5,
                pid: 1,
                name: "Ana Abreu",
                title: "Auxiliar Servicios Estudiantiles / Taquilla",
                img: "https://cdn.balkan.app/shared/4.jpg"
            }
        ]
    });
</script>
{{--@endsection--}}
