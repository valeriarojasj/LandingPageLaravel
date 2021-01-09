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
                                <th data-priority="1">ID</th>
                                <th data-priority="2">Búsqueda</th>
                                <th data-priority="3">Nombre Completo</th>
                                <th data-priority="4">DNI</th>
                                <th data-priority="5">Fecha de Nacimiento</th>
                                <th data-priority="6">Email</th>
                                <th data-priority="7">Linkedin</th>
                                <th data-priority="8">País</th>
                                <th data-priority="9">Provincia</th>
                                <th data-priority="10">Ciudad</th>
                                <th data-priority="11">Nivel Educativo</th>
                                <th data-priority="12">Status Estudios</th>
                                <th data-priority="13">Título Universitario</th>
                                <th data-priority="14">Fecha de Aplicación</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($candidates as $candidate)
                            <tr>
                                <td>{{ $candidate->id }}</td>
                                <td>{{ $candidate-> job_to_apply}}</td>
                                <td>{{ $candidate-> fullName}}</td>
                                <td>{{ $candidate-> dni}}</td>
                                <td>{{ $candidate-> birthday}}</td>
                                <td>{{ $candidate-> email}}</td>
                                <td>{{ $candidate-> linkedin}}</td>
                                <td>{{ $candidate-> country}}</td>
                                <td>{{ $candidate-> province}}</td>
                                <td>{{ $candidate-> city}}</td>
                                <td>{{ $candidate-> education_level}}</td>
                                <td>{{ $candidate-> education_status}}</td>
                                <td>{{ $candidate-> career}}</td>
                                <td>{{ $candidate-> created_at}}</td>
                            </tr>
                        @endforeach
                            
                            
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
            <script>
                $(document).ready(function () {
                    let table = $('#example').DataTable({
                        initComplete: function () {
                            this.api().columns().every( function () {
                                var column = this;
                                var select = $('<select><option value=""></option></select>')
                                    .appendTo( $(column.footer()).empty() )
                                    .on( 'change', function () {
                                        var val = $.fn.dataTable.util.escapeRegex(
                                            $(this).val()
                                        );
                
                                        column
                                            .search( val ? '^'+val+'$' : '', true, false )
                                            .draw();
                                    } );
                
                                column.data().unique().sort().each( function ( d, j ) {
                                    select.append( '<option value="'+d+'">'+d+'</option>' )
                                } );
                            } );
                        },
                        
                        responsive: true,
                        dom: 'Blfrtip',
                        "scrollX": true,
                        "scrollY": true,
                        buttons: [
                            'copy', 'excel', 'pdf'
                        ]
                    }).columns.adjust().responsive.recalc();
                });
            </script>
        </div>
    </div>
</div>
