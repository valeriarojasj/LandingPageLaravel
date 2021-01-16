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
                        <tfoot>
                            <tr>
                                <td>
                                    <input type='text' placeholder='ID' class='tfoot-input' />
                                </td>
                                <td>
                                    <input type='text' placeholder='Búsqueda' class='tfoot-input' />
                                </td>
                                <td>
                                    <input type='text' placeholder='Nombre Completo' class='tfoot-input'/>
                                </td>
                                <td>
                                    <input type='text' placeholder='DNI' class='tfoot-input' />
                                </td>
                                <td>
                                    <input type='text' placeholder='Fecha de Nacimiento'  class='tfoot-input'/>
                                </td>
                                <td>
                                    <input type='text' placeholder='Email' class='tfoot-input' />
                                </td>
                                <td>
                                    <input type='text' placeholder='Linkedin'  class='tfoot-input'/>
                                </td>
                                <td>
                                    <input type='text' placeholder='País'  class='tfoot-input'/>
                                </td>
                                <td>
                                    <input type='text' placeholder='Provincia' class='tfoot-input'/>
                                </td>
                                <td>
                                    <input type='text' placeholder='Ciudad'  class='tfoot-input'/>
                                </td>
                                <td>
                                    <input type='text' placeholder='Nivel Educativo' class='tfoot-input' />
                                </td>
                                <td>
                                    <input type='text' placeholder='Status Estudios' class='tfoot-input' />
                                </td>
                                <td>
                                    <input type='text' placeholder='Título Universitario' class='tfoot-input' />
                                </td>
                                <td>
                                    <input type='text' placeholder='Fecha de Aplicación' class='tfoot-input' />
                                </td>
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
                        dom: 'Blfrtip',
                        "scrollX": true,
                        "scrollY": true,
                        buttons: [
                            'copy', 'excel', 'pdf'
                        ],
                        language:{
                            paginate : {
                                next : 'Siguiente',
                                previous : 'Anterior'
                            }
                        }
                    }).columns.adjust().responsive.recalc();
                });
            </script>
        </div>
    </div>
</div>
