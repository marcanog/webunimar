@extends('layouts.layout')

@section('content')
    <link rel="stylesheet" href="{{URL::asset('orgchart/src/css/jquery.orgchart.css')}}">
    {{--<link rel="stylesheet" href="styles/kendo.common.min.css"/>
    <link rel="stylesheet" href="styles/kendo.default.min.css"/>
    <link rel="stylesheet" href="styles/kendo.default.mobile.min.css"/>
    <script src="https://kendo.cdn.telerik.com/2021.3.1207/js/jquery.min.js"></script>
    <script src="https://kendo.cdn.telerik.com/2021.3.1207/js/kendo.all.min.js"></script>--}}
    {{-- <script src="//code.jquery.com/jquery-1.12.4.min.js"></script>--}}
    <script src="{{URL::asset('orgchart/src/js/jquery.orgchart.js')}}"></script>
    <div class="content ml-4 mr-4 mb-4 mt-0 text-center">
        <div id="chart-container"></div>
        <button class="oc-export-btn btn btn-default"><i class="fas fa-file-image" style="width:1rem;"></i></button>
    </div>

    {{-- <a id="github-link" href="https://github.com/dabeng/OrgChart" target="_blank"><i
             class="fa fa-github-square"></i></a>--}}
    <style>
        .btn{
           font-size:1rem;
        }
        #chart-container {
            font-family: Arial;
            height: 420px;
            /*border: 2px dashed #aaa;*/
            border-radius: 5px;
            overflow: auto;
            text-align: center;
        }

        #github-link {
            position: fixed;
            right: 10px;
            font-size: 3em;
        }
    </style>
    <script>
        'use strict';

        (function ($) {

            $(function () {

                var datascource = {
                    'name': ' Rector(a) ',
                    'title': 'Gerente General del Sistema',
                    'children': [
                        {'name': 'Coord. del Departamento', 'title': 'Departamento de Relaciones Interinstitucionales'},
                        {'name': 'Coord. del Departamento', 'title': 'Departamento de Relaciones Públicas'},
                        {
                            'name': 'Vicerrector(a) Académico',
                            'title': 'SUBSISTEMA DE DOCENCIA ',
                            'children': [
                                {
                                    'name': 'Coordinador(a) del Centro',
                                    'title': 'Centro de recursos para el aprendizaje'
                                },
                                {
                                    'name': 'Decano(a)', 'title': 'Área de Humanidades',
                                    'children': [
                                        {'name': 'Coord. del Departamento', 'title': 'Dpto. Educación Integral'},
                                        {'name': 'Coord. del Departamento', 'title': 'Dpto. Idiomas Modernos'},
                                        {
                                            'name': 'Coord. del Departamento',
                                            'title': 'Dpto. Arte mención Diseño Gráfico'
                                        }
                                    ]
                                }, //insertar hijos acá
                                {
                                    'name': 'Decano(a)', 'title': 'Área de Ciencias Sociales y Económicas',
                                    'children': [
                                        {
                                            'name': 'Coord. del Departamento',
                                            'title': 'Dpto. Administración y Contaduría'
                                        }
                                    ]
                                },
                                {
                                    'name': 'Decano(a)', 'title': 'Área de Ciencias jurídicas y Políticas',
                                    'children': [
                                        {'name': 'Coord. del Departamento', 'title': 'Dpto. Derecho'}
                                    ]
                                },
                                {
                                    'name': 'Decano(a)', 'title': 'Área curso introductorio y estudios generales',
                                    'children': [
                                        {'name': 'Coord. del Departamento', 'title': ' Estudios generales'}
                                    ]
                                },
                                {
                                    'name': 'Decano(a)', 'title': 'Área de Ingeniería',
                                    'children': [
                                        {'name': 'Coord. del Departamento', 'title': ' Ingeniería'}
                                    ]
                                },
                                {'name': 'Coordinador(a) de Área', 'title': 'Área de Pasantías'},
                            ]
                        },//acá termina susbsistema de docencia y sus hijos
                        {
                            'name': 'Vicerrector(a) de Extensión',
                            'title': 'SUBSISTEMA DE EXTENSIÓN ',
                            'children': [
                                {'name': 'Coord. del Departamento', 'title': 'Dpto. de Educación permanente'},
                                {
                                    'name': 'Coord. del Departamento',
                                    'title': 'Dpto. de Deporte, recreación y uso del tiempo libre'
                                },
                                {
                                    'name': 'Coord. del Departamento',
                                    'title': 'Dpto. de Cultura'
                                },
                                {
                                    'name': 'Coord. del Departamento',
                                    'title': 'Dpto. de Proyectos Especiales'
                                },
                                {
                                    'name': 'Coord. del Departamento',
                                    'title': 'Dpto. de Servicio Comunitario'
                                },
                            ]
                        },
                        {
                            'name': 'Vicerrector(a) de Investigación y PostGrado',
                            'title': 'SUBSISTEMA DE INVESTIGACIÓN Y POSTGRADO',
                            'children': [
                                {
                                    'name': 'Decano(a)', 'title': 'Área de Investigación Postgrado',
                                    'children': [
                                        {'name': 'Coord. del Departamento', 'title': 'Dpto. de Investigación'},
                                        {'name': 'Coord. del Departamento', 'title': 'Dpto. de Docencia Postgrado'},
                                        {'name': 'Coord. del Departamento', 'title': 'Dpto. de Promoción y Desarrollo'},
                                        {
                                            'name': 'Coord. del Departamento',
                                            'title': 'Dpto. de Administración y logística'
                                        }
                                    ]
                                },
                            ]
                        },
                        {
                            'name': 'Secretario(a) General',
                            'title': 'SUBSISTEMA DE SECRETARIA Y BIENESTAR ESTUDIANTIL',
                            'children': [
                                {'name': 'Coord. del Departamento', 'title': 'Dpto. de Bienestar Estudiantil'},
                                {'name': 'Coord. del Departamento', 'title': 'Dpto. de Control de Estudios'},
                                {
                                    'name': 'Coord. del Departamento',
                                    'title': 'Dpto. de Archivo General y secretaría de Actas'
                                },
                                {'name': 'Coord. del Departamento', 'title': 'Dpto. de Proyectos Especiales'}
                            ]
                        },
                        {
                            'name': 'Director(a) General', 'title': 'DIRECCIÓN GENERAL DE ADMINISTRACIÓN Y SERVICIOS',
                            'children': [
                                {
                                    'name': 'Gerente General del Dpto',
                                    'title': 'Gerente General de Administración y Servicios',
                                    'children': [
                                        {'name': 'Coord. del Departamento', 'title': 'Dpto. de Finanzas'},
                                        {'name': 'Coord. del Departamento', 'title': 'Dpto. de Recursos Humanos'},
                                        {'name': 'Coord. del Departamento', 'title': 'Dpto. de Compras'},
                                        {'name': 'Coord. del Departamento', 'title': 'Dpto. de Mantenimiento'},
                                    ]
                                },
                            ]
                        },

                        {
                            'name': 'Director(a) General',
                            'title': 'DIRECCIÓN GENERAL DE PLANIFICACIÓN, DESARROLLO Y EVALUACIÓN INSTITUCIONAL',
                            'children': [
                                {'name': 'Coord. del Departamento', 'title': 'Dpto. de Planificación y Desarrollo'},
                                {'name': 'Coord. del Centro', 'title': 'Centro de Estadísticas e Informática'},
                                {'name': 'Coord. del Departamento', 'title': 'Dpto. de Evaluación Institucional'},
                            ]
                        }

                    ]
                };

                var oc = $('#chart-container').orgchart({
                    'data': datascource,
                    'nodeContent': 'title',
                    'exportButton': true,
                    'exportFilename': 'OrgChart',
                    'exportFileextension': 'png',
                    'pan': true,
                    'zoom': false,
                    'zoominLimit': 7,
                    'zoomoutLimit': 0.5
                });

            });

        })(jQuery);
        /*  var crudServiceBaseUrl = "https://demos.telerik.com/kendo-ui/service";
          $("#chart-container").kendoOrgChart({
              editable: false,
              dataSource: {
                  transport: {
                      read: {
                          url: crudServiceBaseUrl + "/orgstructure",
                          dataType: "json"
                      }
                  },
                  schema: {
                      model: {
                          id: "Id",
                          parentId: "ParentId",
                          fields: {
                              Id: {type: "number", editable: false, nullable: false},
                              ParentId: {field: "ParentId", nullable: true},
                              hasChildren: {field: "HasChildren", nullable: true},
                              expanded: {field: "Expanded", nullable: true},
                              title: {field: "Position", nullable: true},
                              avatar: {field: "Avatar", nullable: true},
                              name: {field: "FullName"}
                          }
                      }
                  }
              }
          });*/

    </script>
@endsection
