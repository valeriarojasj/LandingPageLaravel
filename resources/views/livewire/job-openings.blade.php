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
          <div id='recipients' class="mt-6 bg-white rounded shadow lg:mt-0">
            <div class="container">
              <div id="table-container" class="col-md-12 table-container">
                <div class="row">
                  <div class="col-md-12">
                    <br>
                    <button type="button" wire:click='newRow' class="btn btn-default pull-right add-row">
                      <i class="fas fa-plus-circle table-icons"></i>&nbsp;&nbsp; 
                      Nuevo Registro
                    </button>
                  </div>
                </div>
                <div class="row">
                  <table class="table table-bordered" id="editableTable">
                    <thead>
                      <tr>
                        <th>Opciones de edición</th>
                        <th>ID</th>
                        <th>Título de la búsqueda</th>
                        <th>Tipo de empresa</th>
                        <th>Lugar de la búsqueda</th>
                        <th>Pregunta Abierta 1</th>
                        <th>Pregunta Abierta 2</th>
                        <th>Pregunta de Selección Múltiple 1</th>
                        <th>SM1 Opción 1</th>
                        <th>SM1 Opción 2</th>
                        <th>SM1 Opción 3</th>
                        <th>Pregunta de Selección Múltiple 2</th>
                        <th>SM2 Opción 1</th>
                        <th>SM2 Opción 2</th>
                        <th>SM2 Opción 3</th>
                        <th>Pregunta de Checkbox 1</th>
                        <th>CB1 Opción 1</th>
                        <th>CB1 Opción 2</th>
                        <th>CB1 Opción 3</th>
                        <th>Pregunta de Checkbox 2</th>
                        <th>CB2 Opción 1</th>
                        <th>CB2 Opción 2</th>
                        <th>CB2 Opción 3</th>
                        <th>Fecha de creación</th>
                        <th>Fecha de actualización</th>
                      </tr>
                    </thead>
                    <tbody>
                      @if($showRow)
                        <livewire:job-opening-row
                            :objeto="$newJob"
                            :nuevoObjeto="true"
                        />
                      @endif
                      @foreach($jobOpenings as $jobOpening)
                      
                        <livewire:job-opening-row
                          :key="$jobOpening->id"
                          :objeto="$jobOpening"
                        />
                      @endforeach
                    </tbody>
                  </table>  
                  <div>
                    {{$jobOpenings->links()}}
                  </div>
                </div>
              </div>
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
              Estas seguro de que quieres eliminar este registro {{$idToDelete}}? Una vez eliminado se borrará también de la base de datos junto con los candidatos que hayan aplicado a esta búsqueda.
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
    </div>
  </div>                     
  <!--/container-->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
  <script src="https://cdn.jsdelivr.net/npm/pikaday/pikaday.js"></script>
  <!-- <script src='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css'></script> -->
  <script type="text/javascript" src="js/job-openings.js"></script>
</div>