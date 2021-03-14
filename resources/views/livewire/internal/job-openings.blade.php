<div>
  <div class="py-12">
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
      <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
        <!--<x-jet-welcome />-->
        <!--Container-->
        <div class="container w-full px-2 mx-auto md:w-4/5 xl:w-3/5">
          <!--Title-->
          <h1 class="px-2 py-8 text-xl font-bold break-normal md:text-2xl">
            Búsquedas laborales
          </h1>
          <!--Card-->

          
          <div class="row">
            <h2 style="font-size:1.2rem !important;" class="text-center">Carrusel</h2>
            <div class="inline-block min-w-full py-2 space-between sm:px-6 lg:px-8">
              <div class="mb-3 overflow-hidden border-b border-gray-200 rounded-lg shadow align-left sm:rounded-lg">
                <table id="carousel-table" class="table" style="margin-bottom:0 !important;">
                  <thead>
                    <tr>
                      <th scope="col" class="px-6 py-3 text-xs font-bold tracking-wider text-center text-blue-700 uppercase align-text-top hard_left" style="width:10px;">
                        Opciones de Edición
                      </th>
                      <th scope="col" class="px-6 py-3 text-xs font-bold tracking-wider text-center text-blue-700 uppercase align-text-top">
                        ID 
                      </th>
                      <th scope="col" class="px-6 py-3 text-xs font-bold tracking-wider text-center text-blue-700 uppercase align-text-top next_left">
                        Título 
                      </th>
                      <th scope="col" class="px-6 py-3 text-xs font-bold tracking-wider text-center text-blue-700 uppercase align-text-top next_left">
                        Ruta de imagen
                      </th>
                      <th scope="col" class="px-6 py-3 text-xs font-bold tracking-wider text-center text-blue-700 uppercase align-text-top next_left">
                        Imagen
                      </th>
                      <th scope="col" class="px-6 py-3 text-xs font-bold tracking-wider text-center text-blue-700 uppercase align-text-top next_left">
                        Descripción
                      </th>
                      <th scope="col" class="px-6 py-3 text-xs font-bold tracking-wider text-center text-blue-700 uppercase align-text-top next_left">
                        Fecha de creación
                      </th>
                      <th scope="col" class="px-6 py-3 text-xs font-bold tracking-wider text-center text-blue-700 uppercase align-text-top next_left">
                        Fecha de actualización
                      </th>
                    </tr>
                  </thead>
                  <tbody class="bg-white divide-y divide-gray-200">
                  @foreach($carousels as $carousel)
                    <tr  style="height:auto;">
                      <td class='px-6 py-4 text-sm font-medium text-right align-middle hard_left iconitos whitespace-nowrap' style="width:10px;">
                        <a class="w-full py-2 font-bold text-blue-700 bg-blue-200 rounded-md focus:outline-none editBtn button button-small edit" style="text-decoration:none;" href="{{route('internal.carousel.edit',$carousel)}}">Editar</a>
                        <!-- <button  class="w-full font-bold text-blue-700 bg-blue-200 rounded-md focus:outline-none editBtn button edit">
                          Editar
                        </button> -->
                      </td>
                      <td class="px-6 py-4 next_left place-content-center whitespace-nowrap" style="position:relative;">
                        <textarea disabled class='text-xs font-semibold text-center textareatd' name="textarea" style="position:absolute; top:0; left:0; resize:none; width:100%; height:100%;">{{$carousel->job_opening_id}}</textarea>
                      </td>
                      <td class="px-6 py-4 whitespace-nowrap" style="position:relative;" >
                        <textarea class="inline-flex text-xs font-semibold textareatd" name="textarea"  style="position:absolute; top:0; left:0; right:0; bottom:0; resize:none; width:100%; height:100%;">{{$carousel->job_title}}</textarea> 
                      </td>
                      <td class="p-0 whitespace-nowrap" style="position:relative;"  >
                          <textarea class="inline-flex text-xs font-semibold textareatd " name="textarea"  style="position:absolute; top:0; left:0; right:0; bottom:0; resize:none; width:100%; height:100%;">{{$carousel->image_url}}</textarea> 
                      </td>
                      
                      <td class="p-0 whitespace-nowrap" style="position:relative; vertical-align:middle">
                        <img src="{{asset($carousel->image_url)}}" style="height:50px;   margin-left: auto; margin-right: auto; display: block;"   alt="">
                        
                      </td>
                      <td class="p-0 whitespace-nowrap " style="position:relative; ">
                          <textarea class="inline-flex text-xs font-semibold textareatd"  name="textarea" style="position:absolute; top:0; left:0; right:0; bottom:0; resize:none; width:100%; height:100%;">{{$carousel->description1}}</textarea>
                      </td>
                      <td class="p-0 whitespace-nowrap" style="position:relative; ">
                          <textarea class="inline-flex text-xs font-semibold text-center textareatd"  name="textarea" style="position:absolute; top:0; left:0; right:0; bottom:0; resize:none; width:100%; height:100%;">{{$carousel->created_at}}</textarea>
                      </td>
                      <td class="p-0 whitespace-nowrap" style="position:relative;">
                          <textarea class="inline-flex text-xs font-semibold text-center textareatd"  name="textarea" style="position:absolute; top:0; left:0; right:0; bottom:0; resize:none; width:100%; height:100%;">{{$carousel->updated_at}}</textarea>
                      </td>
                     
                    </tr>
                    @endforeach
                    
                  </tbody>
                </table>
              </div>
            </div>
            <!-- <div class="col-4">
              <label for="carrusel-job-id">ID de Búsqueda Laboral Carrusel 1</label>
                <input type="number" name="carrusel-job-id" class="form-control file">
            </div>
            <div class="col-3">
              <label for="file">Imagen Carrusel 1</label>
              <input type="file" name="file" class="form-control file">    
           </div> 
          </div>
          <div class="row">
            <div class="col-4">
              <label for="carrusel-job-id">ID de Búsqueda Laboral Carrusel 2</label>
                <input type="number" name="carrusel-job-id" class="form-control file">
            </div>
            <div class="col-3">
              <label for="file">Imagen Carrusel 2</label>
              <input type="file" name="file" class="form-control file">    
           </div> 
          </div>
          <div class="row">
            <div class="col-4">
              <label for="carrusel-job-id">ID de Búsqueda Laboral Carrusel 3</label>
                <input type="number" name="carrusel-job-id" class="form-control file">
            </div>
            <div class="col-3">
              <label for="file">Imagen Carrusel 3</label>
              <input type="file" name="file" class="form-control file">    
           </div> 
          </div> -->
          <div class="row">
          <h2 style="font-size:1.2rem !important;" class="text-center">Listado de búsquedas y preguntas formulario</h2>
            <div class="col-md-12">
              <br>
              <button type="button" wire:click='newRow' class="btn btn-default pull-right add-row">
                <i class="fas fa-plus-circle table-icons" style="font-family: 'Font Awesome 5 Free' !important;"></i>&nbsp;&nbsp; 
                Nuevo Registro
              </button>
            </div>
          </div>
          
         
                <table class="table mb-0" id="editableTable">
                  <thead class="bg-blue-100">
                    <tr>
                      <th>
                        Opciones de Edición
                      </th>
                      <th>
                        ID
                      </th>
                      <th>
                        Título de la búsqueda
                      </th>
                      <th>
                        Tipo de empresa
                      </th>
                      <th>
                        Lugar de la búsqueda
                      </th>
                      <th >
                        Pregunta Abierta 1
                      </th>
                      <th>
                        Pregunta Abierta 2
                      </th>
                      <th>
                        Pregunta de Selección Múltiple 1
                      </th>
                      <th>
                        SM1 Opción 1
                      </th>
                      <th>
                        SM1 Opción 2
                      </th>
                      <th >
                        SM1 Opción 3
                      </th>
                      <th>
                        Pregunta de Selección Múltiple 2
                      </th>
                      <th>
                        SM2 Opción 1
                      </th>
                      <th>
                        SM2 Opción 2
                      </th>
                      <th>
                        SM2 Opción 3
                      </th>
                      <th>
                        Pregunta de Checkbox 1
                      </th>
                      <th>
                        CB1 Opción 1
                      </th>
                      <th>
                        CB1 Opción 2
                      </th>
                      <th>
                        cb1 Opción 3
                      </th>
                      <th>
                        Pregunta de Checkbox 2
                      </th>
                      <th>
                        CB2 Opción 1
                      </th>
                      <th>
                        CB2 Opción 2
                      </th>
                      <th >
                        CB2 Opción 3
                      </th>
                      <th >
                        Fecha de Creación
                      </th>
                      <th>
                        Fecha de Actualización
                      </th>
                    </tr>
                  </thead>
                  <tbody class="bg-white divide-y divide-gray-200">
                  
                    @if($showRow)
                      <livewire:internal.job-opening-row :objeto="$newJob" :nuevoObjeto='true' />
                    @endif
                    @foreach($jobOpenings as $jobOpening)
                      <livewire:internal.job-opening-row :key="$jobOpening->id" :objeto="$jobOpening"/>
                    @endforeach
                  </tbody>
                </table>
         
          {{$jobOpenings->links('pagination::tailwind')}} 
        </div>
      </div>
      <!--/Card-->
    </div>
    <x-jet-confirmation-modal  wire:model="openModal">
      <x-slot name="title">
        Eliminar Registro
      </x-slot>
      <x-slot name="content" >
        <div class="text-xs">
          Estas seguro de que quieres eliminar el registro {{$idToDelete}}? Una vez eliminado se borrará también de la base de datos junto con los candidatos que hayan aplicado a esta búsqueda.
        </div>
      </x-slot>
      <x-slot name="footer">
        <x-jet-secondary-button wire:click="$toggle('openModal')" wire:loading.attr="disabled">
          Cancelar
        </x-jet-secondary-button>
        <x-jet-danger-button wire:model="job" class="ml-2" wire:click="destroy({{$idToDelete}})" wire:loading.attr="disabled">
          Eliminar
        </x-jet-danger-button>
      </x-slot>
    </x-jet-confirmation-modal>
  </div>
  <!--container-->
  
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/fixedcolumns/3.3.2/css/fixedColumns.dataTables.min.css">

  <script  type="text/javascript" src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
  <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.24/fc-3.3.2/datatables.min.js"></script>
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script  type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/fixedcolumns/3.3.2/js/dataTables.fixedColumns.min.js"></script>
  

 


  
  



  
  <!-- <script src="https://cdn.jsdelivr.net/npm/pikaday/pikaday.js"></script> -->
  <script src="https://kit.fontawesome.com/dd0322cf66.js" crossorigin="anonymous"></script>
  <script type="text/javascript" src="{{ asset('js/job-openings.js') }}"></script>
  <script>
    $(document).ready(function() {
    var table = $('#editableTable').DataTable( {
        scrollY:        "300px",
        scrollX:        true,
        scrollCollapse: true,
        paging:         false,
        fixedColumns:   {
            leftColumns: 2
        }
    } );
} );
</script>
</div>
                   
 
