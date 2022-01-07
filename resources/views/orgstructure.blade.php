@extends('layouts.layout')

@section('content')
    <script src="https://balkan.app/js/OrgChart.js"></script>
    <div id="tree"/>
    <style>
        /*html, body {
            margin: 0px;
            padding: 0px;
            width: 100%;
            height: 100%;
            overflow: hidden;
            text-align: center;
            font-family: Helvetica;
        }*/

        #tree {
            width: 100%;
            height: 100%;
            position: relative;

        }

        .field_0, .field_1 [data-l-id] {
            font-size: 12px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .field_0, .field_1 {
            font-size: 12px;
            fill: #cfcfcf;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

    </style>
    <script>
        OrgChart.templates.ula = Object.assign({}, OrgChart.templates.ula);
        OrgChart.templates.ula.field_1 =
            '<text data-width="150" data-text-overflow="multiline" style="font-size: 12px;" fill="#757575" x="160" y="75" text-anchor="middle">{val}</text>';
        var chart = new OrgChart(document.getElementById("tree"), {
            template: "ula",
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
                    id: 3,
                    pid: 1,
                    name: "Thamara Echegaray",
                    title: "Vicerrectora Susbsistema de Extensión",
                    img: "https://cdn.balkan.app/shared/6.jpg"
                },
                {
                    id: 4,
                    pid: 1,
                    name: " ",
                    title: "Vicerrector de Investigación y Postgrado",
                    img: "https://cdn.balkan.app/shared/3.jpg"
                },
                {
                    id: 5,
                    pid: 4,
                    name: "Antonio Torrealba",
                    title: "Decano Área de Postgrado",
                    img: "https://cdn.balkan.app/shared/3.jpg"
                },
                {
                    id: 6,
                    pid: 4,
                    name: "Antonio Sereno",
                    title: "Decano Área de Investigación",
                    img: "https://cdn.balkan.app/shared/3.jpg"
                },
                {
                    id: 7,
                    pid: 1,
                    name: "Fanny Marcano",
                    title: "Subsistema de Secretaría y Bienestar Estudiantil",
                    img: "https://cdn.balkan.app/shared/4.jpg"
                },
                {
                    id: 8,
                    pid: 1,
                    name: "Beatriz Cabello",
                    title: "Dirección General de Administración y Servicios",
                    img: "https://cdn.balkan.app/shared/12.jpg"
                },
                {
                    id: 9,
                    pid: 1,
                    name: "Director General",
                    title: "Dirección General de Planificación, Desarrollo y Evaluación Insitucional",
                    img: "https://cdn.balkan.app/shared/10.jpg"
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
            ]
        });
    </script>
@endsection
