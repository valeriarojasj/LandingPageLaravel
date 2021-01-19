<div class="py-12">
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
            <!--<x-jet-welcome />-->
            <!--Container-->
            <div class="container w-full px-2 mx-auto md:w-4/5 xl:w-3/5">
                <!--Title-->
                <h1 class="px-2 py-8 font-sans text-xl font-bold text-indigo-500 break-normal md:text-2xl">
                    Candidatos
                </h1>
                <!--Card-->
                <div id='recipients' class="mt-6 bg-white rounded shadow lg:mt-0">
                    <table id="example" class="stripe">
                    
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Búsqueda</th>
                                <th>Nombre completo</th>
                                <th>DNI</th>
                                <th>Fecha de Nacimiento</th>
                                <th>Email</th>
                                <th>Linkedin</th>
                                <th>País</th>
                                <th>Provincia</th>
                                <th>Ciudad</th>
                                <th>Nivel Educativo</th>
                                <th>Status Estudios</th>
                                <th>Título Universitario</th>
                                <th>Fecha de Aplicación</th>
                            </tr>
                        </thead>

                        <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>Búsqueda</th>
                                <th>Nombre completo</th>
                                <th>DNI</th>
                                <th>Fecha de Nacimiento</th>
                                <th>Email</th>
                                <th>Linkedin</th>
                                <th>País</th>
                                <th>Provincia</th>
                                <th>Ciudad</th>
                                <th>Nivel Educativo</th>
                                <th>Status Estudios</th>
                                <th>Título Universitario</th>
                                <th>Fecha de Aplicación</th>
                            </tr>
                        </tfoot>
                    </table>
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
            






            <script>
                $(document).ready(function () {
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
                            var response = settings.json;
                            console.log(response);
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
                        dom: 'Bfrtip',
                        buttons: [
                            'copyHtml5',
                            'excelHtml5',
                            'csvHtml5',
                            'pdfHtml5'
                        ],
                        language:{
                            paginate : {
                                next : 'Siguiente',
                                previous : 'Anterior'
                            }
                        },
                        initComplete: function (data) {
                            this.api().columns().every( function () {
                                var column = this;
                                const orden = data.json.orden;
                                const index = column[0][0];
                                const selectInfo = data.json.selectInfo;
                                const info= selectInfo[orden[index]];
                                var select = $('<select><option value="">Buscá por '+info.label+'</option></select>')
                                    .appendTo( $(column.footer()).empty() )
                                    .on( 'change', function () {
                                        var val = $.fn.dataTable.util.escapeRegex(
                                            $(this).val()
                                        );
                
                                        column
                                            .search( val ? val : '', true, false )
                                            .draw();
                                    } );
                                for(option of info.selectOptions){
                                    select.append( '<option value="'+option[info.name]+'">'+option[info.name]+'</option>' )
                                };
                            } );
                        }
                    });
                    table.columns.adjust();
                }).on( 'init.dt', function ( e, settings ) {
                    $.fn.dataTable.tables( {visible: true, api: true} ).columns.adjust();
                } );
            </script>
        </div>
    </div>
</div>
