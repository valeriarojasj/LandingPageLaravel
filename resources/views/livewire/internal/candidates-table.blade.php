

<div class="py-12">
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
            <!--<x-jet-welcome />-->
            <!--Container-->
            <div class="container w-full px-2 mx-auto md:w-4/5">
                <!--Title-->
                <h1 class="px-2 py-8 text-xl font-bold break-normal md:text-2xl">
                    Candidatos
                </h1>
                <!--Card-->
                <div class="d-flex justify-content-center">
                <div class="text-blue-700 spinner-border" role="status">
                    <span class="sr-only">Loading...</span>
                </div>
                </div>
                
                <div id='recipients' class="mt-6 bg-white rounded lg:mt-0">
                    <div class="mx-6 overflow-x-auto sm:-mx-6 lg:-mx-8" >  <!--este div hace que haga scroll la tabla -->
                        <div class="inline-block min-w-full pt-0 space-between sm:px-6 lg:px-8">
                            <div class="px-6 mb-3 align-left sm:rounded-lg">
                                <table id="example" class=" stripe">
                                    <thead class="bg-blue-100">
                                        <tr>
                                            <th style=" border-bottom:2px solid #2b6cb0 !important;" >ID</th>
                                            <th style="border-bottom:2px solid #2b6cb0 !important;" >Búsqueda</th>
                                            <th  style="border-bottom:2px solid #2b6cb0 !important;">Nombre completo</th>
                                            <th style="border-bottom:2px solid #2b6cb0 !important;" >DNI</th>
                                            <th  style="border-bottom:2px solid #2b6cb0 !important;">Fecha de Nacimiento</th>
                                            <th  style="border-bottom:2px solid #2b6cb0 !important;">Email</th>
                                            <th  style="border-bottom:2px solid #2b6cb0 !important;">Linkedin</th>
                                            <th  style="border-bottom:2px solid #2b6cb0 !important;">País</th>
                                            <th  style="border-bottom:2px solid #2b6cb0 !important;">Provincia</th>
                                            <th  style="border-bottom:2px solid #2b6cb0 !important;">Ciudad</th>
                                            <th  style="border-bottom:2px solid #2b6cb0 !important;">Nivel Educativo</th>
                                            <th  style="border-bottom:2px solid #2b6cb0 !important;">Status Estudios</th>
                                            <th  style="border-bottom:2px solid #2b6cb0 !important;">Título Universitario</th>
                                            <th  style="border-bottom:2px solid #2b6cb0 !important;">Fecha de Aplicación</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th style="border-top:2px solid #2b6cb0 !important;" >ID</th>
                                            <th style="border-top:2px solid #2b6cb0 !important;" >Búsqueda</th>
                                            <th  style="border-top:2px solid #2b6cb0 !important;">Nombre completo</th>
                                            <th style="border-top:2px solid #2b6cb0 !important;" >DNI</th>
                                            <th  style="border-top:2px solid #2b6cb0 !important;">Fecha de Nacimiento</th>
                                            <th  style="border-top:2px solid #2b6cb0 !important;">Email</th>
                                            <th  style="border-top:2px solid #2b6cb0 !important;">Linkedin</th>
                                            <th  style="border-top:2px solid #2b6cb0 !important;">País</th>
                                            <th  style="border-top:2px solid #2b6cb0 !important;">Provincia</th>
                                            <th  style="border-top:2px solid #2b6cb0 !important;">Ciudad</th>
                                            <th  style="border-top:2px solid #2b6cb0 !important;">Nivel Educativo</th>
                                            <th  style="border-top:2px solid #2b6cb0 !important;">Status Estudios</th>
                                            <th  style="border-top:2px solid #2b6cb0 !important;">Título Universitario</th>
                                            <th  style="border-top:2px solid #2b6cb0 !important;">Fecha de Aplicación</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/Card-->
            </div>
            <!--/container-->
            <!-- jQuery -->
            <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
            <!--Datatables -->
            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
            <script type="text/javascript" src="https://cdn.datatables.net/v/dt/jszip-2.5.0/dt-1.10.22/b-1.6.4/b-flash-1.6.4/b-html5-1.6.4/b-print-1.6.4/datatables.min.js"></script>
            <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
            <script type="text/javascript" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
            <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
            <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
            

            <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.16.9/xlsx.full.min.js"></script>
            <script type="text/javascript" src="{{asset('js/fileSaver.js')}}"></script>
            <script type="text/javascript" src="{{asset('js/excel.js')}}"></script>


            <script>
                $(document).ready(function () {
                    $('.spinner-border').hide();
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    let table = $('#example').DataTable({
                        processing: true,
                        serverSide: true,
                        ajax: "{{route('candidatos')}}",
                        "drawCallback": function (settings) { 
                            /*var response = settings.json;
                            console.log(response);*/
                        },
                        columns : [
                            {data:'id'},
                            {data:'job_to_apply'},
                            {data:'fullName'},
                            {data:'dni'},
                            {data:'birthday'},
                            {data:'email'},
                            {data:'linkedin'},
                            {data:'country'},
                            {data:'province'},
                            {data:'city'},
                            {data:'education_level'},
                            {data:'education_status'},
                            {data:'career'},
                            {data:'created_at'}
                        ],
                        responsive: true,
                        autoWidth : false,
                        "scrollX": true,
                        "scrollY": true,
                        scrollCollapse: true,
                        dom: 'Blfrtip',
                        buttons: [ 'copy',
                            {
                                text: 'EXCEL',
                                action: async function ( e, dt, node, config ) {
                                    var datos = dt["context"][0]["json"];
                                    $.ajax({
                                        headers: {
                                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                        },
                                        url: '/internal/candidates-excel',
                                        dataType : 'json',
                                        type: 'POST',
                                        data: datos,
                                        success:function(response) {
                                            downloadAsExcel(response);
                                        }
                                    });
                                }
                            }
                        ],
                        language:{
                            emptyTable:     "No hay datos disponibles",
                            info:           "Resultados _START_ a _END_ de _TOTAL_ registros",
                            infoEmpty:      "Resultados 0 a 0 de 0 registros",
                            infoFiltered:   "(Resultados filtrados de _MAX_ registros en total)",
                            infoPostFix:    "",
                            thousands:      ",",
                            lengthMenu:     "Mostrar _MENU_ registros",
                            loadingRecords: "Cargando...",
                            processing:     "Procesando...",
                            search:         "Buscar:",
                            zeroRecords:    "No se encontraron registros",
                            paginate : {
                                next : 'SIGUIENTE',
                                previous : 'ANTERIOR'
                            }
                        }
                        // ,
                        // initComplete: function (data) {
                        //     this.api().columns().every( function () {
                        //         var column = this;
                        //         const orden = data.json.orden;
                        //         const index = column[0][0];
                        //         const selectInfo = data.json.selectInfo;
                        //         const info= selectInfo[orden[index]];
                        //         var select = $('<select><option value="">Buscá por '+info.label+'</option></select>')
                        //             .appendTo( $(column.footer()).empty() )
                        //             .on( 'change', function () {
                        //                 var val = $.fn.dataTable.util.escapeRegex(
                        //                     $(this).val()
                        //                 );
                
                        //                 column
                        //                     .search( val ? val : '', true, false )
                        //                     .draw();
                        //             } );
                        //         for(option of info.selectOptions){
                        //             select.append( '<option value="'+option[info.name]+'">'+option[info.name]+'</option>' )
                        //         };
                        //     } );
                        // }
                    });
                    table.columns.adjust();
                }).on( 'init.dt', function ( e, settings ) {
                    $.fn.dataTable.tables( {visible: true, api: true} ).columns.adjust();
                } );
            </script>
        </div>
    </div>
</div>
