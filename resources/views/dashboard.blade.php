<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
                <!--<x-jet-welcome />-->
                
                {{-- Aca empieza la tabla --}}
                {{-- <div class="py-2 pr-10 -my-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
                   
                    <div class="inline-block min-w-full px-8 pt-3 overflow-hidden align-middle bg-white rounded-bl-lg rounded-br-lg shadow shadow-dashboard">
                        <table class="min-w-full">
                            <thead>
                                <tr>
                                    <th class="px-6 py-3 leading-4 tracking-wider text-left text-blue-500 border-b-2 border-gray-300">ID</th>
                                    <th class="px-6 py-3 text-sm leading-4 tracking-wider text-left text-blue-500 border-b-2 border-gray-300">Búsqueda</th>
                                    <th class="px-6 py-3 text-sm leading-4 tracking-wider text-left text-blue-500 border-b-2 border-gray-300">Nombre Completo</th>
                                    <th class="px-6 py-3 text-sm leading-4 tracking-wider text-left text-blue-500 border-b-2 border-gray-300">Email</th>
                                    <th class="px-6 py-3 text-sm leading-4 tracking-wider text-left text-blue-500 border-b-2 border-gray-300">Linkedin</th>
                                    <th class="px-6 py-3 text-sm leading-4 tracking-wider text-left text-blue-500 border-b-2 border-gray-300">Status</th>
                                    <th class="px-6 py-3 text-sm leading-4 tracking-wider text-left text-blue-500 border-b-2 border-gray-300">Fecha de Postulación</th>
                                    
                                    <th class="px-6 py-3 border-b-2 border-gray-300"></th>
                                </tr>
                            </thead>
                            <tbody class="bg-white">
                                    <tr>
                                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                                            <div class="flex items-center">
                                                <div>
                                                    <div class="text-sm leading-5 text-gray-800">#1</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                                            <div class="text-sm leading-5 text-blue-900">Desarrollador Web</div>
                                        </td>

                                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                                            <div class="text-sm leading-5 text-blue-900">Ana Angel</div>
                                        </td>
                                        <td class="px-6 py-4 text-sm leading-5 text-blue-900 whitespace-no-wrap border-b border-gray-500">ana@angel.com</td>
                                        <td class="px-6 py-4 text-sm leading-5 text-blue-900 whitespace-no-wrap border-b border-gray-500">http://linkedin/anaangel1234556</td>
                                        <td class="px-6 py-4 text-sm leading-5 text-blue-900 whitespace-no-wrap border-b border-gray-500">
                                            <span class="relative inline-block px-3 py-1 font-semibold leading-tight text-green-900">
                                            <span aria-hidden class="absolute inset-0 bg-green-200 rounded-full opacity-50"></span>
                                            <span class="relative text-xs">ok</span>
                                        </span>
                                        </td>
                                        <td class="px-6 py-4 text-sm leading-5 text-blue-900 whitespace-no-wrap border-b border-gray-500">12/01/20</td>
                                        <td class="px-6 py-4 text-sm leading-5 text-right whitespace-no-wrap border-b border-gray-500">
                                            <button class="px-5 py-2 text-blue-500 transition duration-300 border border-blue-500 rounded hover:bg-blue-700 hover:text-white focus:outline-none">Ver más</button>
                                        </td>
                              </tr>
                                   <tr>
                                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                                            <div class="flex items-center">
                                                <div>
                                                    <div class="text-sm leading-5 text-gray-800">#2</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                                            <div class="text-sm leading-5 text-blue-900">Analista Contable</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                                            <div class="text-sm leading-5 text-blue-900">Beatriz Bustamante</div>
                                        </td>
                                        <td class="px-6 py-4 text-sm leading-5 text-blue-900 whitespace-no-wrap border-b border-gray-500">beata@bustamante.com</td>
                                        <td class="px-6 py-4 text-sm leading-5 text-blue-900 whitespace-no-wrap border-b border-gray-500">http://linkedin/beatab1234556</td>
                                        <td class="px-6 py-4 text-sm leading-5 text-blue-900 whitespace-no-wrap border-b border-gray-500">
                                            <span class="relative inline-block px-3 py-1 font-semibold leading-tight text-green-900">
                                            <span aria-hidden class="absolute inset-0 bg-green-200 rounded-full opacity-50"></span>
                                            <span class="relative text-xs">ok</span>
                                        </span>
                                        </td>
                                        <td class="px-6 py-4 text-sm leading-5 text-blue-900 whitespace-no-wrap border-b border-gray-500">12/20/20</td>
                                        <td class="px-6 py-4 text-sm leading-5 text-right whitespace-no-wrap border-b border-gray-500">
                                            <button class="px-5 py-2 text-blue-500 transition duration-300 border border-blue-500 rounded hover:bg-blue-700 hover:text-white focus:outline-none">Ver más</button>
                                        </td>
                              </tr>
                              <tr>
                                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                                            <div class="flex items-center">
                                                <div>
                                                    <div class="text-sm leading-5 text-gray-800">#3</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                                            <div class="text-sm leading-5 text-blue-900">Analista Contable</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                                            <div class="text-sm leading-5 text-blue-900">Clara Caro</div>
                                        </td>
                                        <td class="px-6 py-4 text-sm leading-5 text-blue-900 whitespace-no-wrap border-b border-gray-500">clara@caro.com</td>
                                        <td class="px-6 py-4 text-sm leading-5 text-blue-900 whitespace-no-wrap border-b border-gray-500">http://linkedin/clarac1234556</td>
                                        <td class="px-6 py-4 text-sm leading-5 text-blue-900 whitespace-no-wrap border-b border-gray-500">
                                            <span class="relative inline-block px-3 py-1 font-semibold leading-tight text-red-900">
                                            <span aria-hidden class="absolute inset-0 bg-red-200 rounded-full opacity-50"></span>
                                            <span class="relative text-xs">no ok</span>
                                        </span>
                                        </td>
                                        <td class="px-6 py-4 text-sm leading-5 text-blue-900 whitespace-no-wrap border-b border-gray-500">11/30/20</td>
                                        <td class="px-6 py-4 text-sm leading-5 text-right whitespace-no-wrap border-b border-gray-500">
                                            <button class="px-5 py-2 text-blue-500 transition duration-300 border border-blue-500 rounded hover:bg-blue-700 hover:text-white focus:outline-none">Ver más</button>
                                        </td>
                              </tr>
                              <tr>
                                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                                            <div class="flex items-center">
                                                <div>
                                                    <div class="text-sm leading-5 text-gray-800">#4</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                                            <div class="text-sm leading-5 text-blue-900">Analista Contable</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                                            <div class="text-sm leading-5 text-blue-900">Daniela Diaz</div>
                                        </td>
                                        <td class="px-6 py-4 text-sm leading-5 text-blue-900 whitespace-no-wrap border-b border-gray-500">dani@diazcom</td>
                                        <td class="px-6 py-4 text-sm leading-5 text-blue-900 whitespace-no-wrap border-b border-gray-500">http://linkedin/danid1234556</td>
                                        <td class="px-6 py-4 text-sm leading-5 text-blue-900 whitespace-no-wrap border-b border-gray-500">
                                            <span class="relative inline-block px-3 py-1 font-semibold leading-tight text-green-900">
                                            <span aria-hidden class="absolute inset-0 bg-green-200 rounded-full opacity-50"></span>
                                            <span class="relative text-xs">ok</span>
                                        </span>
                                        </td>
                                        <td class="px-6 py-4 text-sm leading-5 text-blue-900 whitespace-no-wrap border-b border-gray-500">11/15/20</td>
                                        <td class="px-6 py-4 text-sm leading-5 text-right whitespace-no-wrap border-b border-gray-500">
                                            <button class="px-5 py-2 text-blue-500 transition duration-300 border border-blue-500 rounded hover:bg-blue-700 hover:text-white focus:outline-none">Ver más</button>
                                        </td>
                              </tr>
                              <tr>
                                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                                            <div class="flex items-center">
                                                <div>
                                                    <div class="text-sm leading-5 text-gray-800">#5</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                                            <div class="text-sm leading-5 text-blue-900">Analista Contable</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                                            <div class="text-sm leading-5 text-blue-900">David Diaz</div>
                                        </td>
                                        <td class="px-6 py-4 text-sm leading-5 text-blue-900 whitespace-no-wrap border-b border-gray-500">david@diaz.com</td>
                                        <td class="px-6 py-4 text-sm leading-5 text-blue-900 whitespace-no-wrap border-b border-gray-500">http://linkedin/davidl1234556</td>
                                        <td class="px-6 py-4 text-sm leading-5 text-blue-900 whitespace-no-wrap border-b border-gray-500">
                                            <span class="relative inline-block px-3 py-1 font-semibold leading-tight text-orange-900">
                                            <span aria-hidden class="absolute inset-0 bg-orange-200 rounded-full opacity-50"></span>
                                            <span class="relative text-xs">pendiente</span>
                                        </span>
                                        </td>
                                        <td class="px-6 py-4 text-sm leading-5 text-blue-900 whitespace-no-wrap border-b border-gray-500">11/11/20</td>
                                        <td class="px-6 py-4 text-sm leading-5 text-right whitespace-no-wrap border-b border-gray-500">
                                            <button class="px-5 py-2 text-blue-500 transition duration-300 border border-blue-500 rounded hover:bg-blue-700 hover:text-white focus:outline-none">Ver más</button>
                                        </td>
                              </tr>
                            </tbody>
                        </table>
                      <div class="mt-4 sm:flex-1 sm:flex sm:items-center sm:justify-between work-sans">
            <div>
                <p class="text-sm leading-5 text-blue-700">
                    Resultados
                    <span class="font-medium">1</span>
                    a
                    <span class="font-medium">5</span>
                    de
                    <span class="font-medium">100</span>
                    
                </p>
            </div>
            <div>
                <nav class="relative z-0 inline-flex -space-x-px shadow-sm" aria-label="Pagination">
                    <a href="#" class="relative inline-flex items-center px-2 py-2 text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-l-md hover:bg-gray-50">
                      <span class="sr-only">Previous</span>
                      <!-- Heroicon name: chevron-left -->
                      <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                      </svg>
                    </a>
                    <a href="#" class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 hover:bg-gray-50">
                      1
                    </a>
                    <a href="#" class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 hover:bg-gray-50">
                      2
                    </a>
                    <a href="#" class="relative items-center hidden px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 md:inline-flex hover:bg-gray-50">
                      3
                    </a>
                    <span class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300">
                      ...
                    </span>
                    <a href="#" class="relative items-center hidden px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 md:inline-flex hover:bg-gray-50">
                      8
                    </a>
                    <a href="#" class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 hover:bg-gray-50">
                      9
                    </a>
                    <a href="#" class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 hover:bg-gray-50">
                      10
                    </a>
                    <a href="#" class="relative inline-flex items-center px-2 py-2 text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-r-md hover:bg-gray-50">
                      <span class="sr-only">Next</span>
                      <!-- Heroicon name: chevron-right -->
                      <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                      </svg>
                    </a>
                  </nav>
            </div>
        </div>
                    </div>
                </div> --}}

                {{-- Acá termina la tabla --}}



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
         <tr>
            <td>1</td>
            <td>System Architect</td>
             <td>Tiger Nixon</td>
             <td>111111111</td>
             <td>1982/04/25</td>
             <td>tigw@nix.com</td>
             <td>http://linkedin.com/tiger123</td>
             <td>Argentina</td>
             <td>Ciudad de Buenos Aires</td>
             <td>Palermo</td>
             <td>Universitario</td>
             <td>Graduado</td>
             <td>Ingeniero de Sistemas</td>
             <td>2021/01/03</td>
             
             
             
         </tr>
         <!-- Rest of your data (refer to https://datatables.net/examples/server_side/ for server side processing)-->
         <tr>



            <td>2</td>
            <td>Customer Support</td>
             <td>Donna Snider</td>
             <td>1334444444</td>
             <td>1979/05/25</td>
             <td>don@sni.com</td>
             <td>http://linkedin.com/donna123</td>
             <td>Argentina</td>
             <td>Buenos Aires</td>
             <td>La Plata</td>
             <td>Universitario</td>
             <td>En curso</td>
             <td>Administración de Empresas</td>
             <td>2021/01/02</td>
             
             
             
         </tr>

         <tr>



            <td>3</td>
            <td>Accountant</td>
             <td>Joe White</td>
             <td>1334444422</td>
             <td>1975/05/29</td>
             <td>joe@white.com</td>
             <td>http://linkedin.com/joe123</td>
             <td>Argentina</td>
             <td>Buenos Aires</td>
             <td>La Plata</td>
             <td>Doctorado</td>
             <td>En curso</td>
             <td>Administración de Empresas</td>
             <td>2021/01/02</td>
             
             
             
         </tr>
         </tbody>
         <tfoot>
            <tr>
                <th>ID</th>
                <th>Búsqueda</th>
                 <th>Nombre Completo</th>
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
</x-app-layout>
