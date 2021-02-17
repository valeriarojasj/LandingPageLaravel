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
                  <div class="col-md-12">
                    <br>
                    <button type="button" wire:click='newRow' class="btn btn-default pull-right add-row">
                    <i class="fas fa-plus-circle table-icons" style="font-family: 'Font Awesome 5 Free' !important;"></i>&nbsp;&nbsp; 
                      Nuevo Registro
                    </button>
                  </div>
                </div>
              
                  <div class="overflow-x-auto sm:-mx-6 lg:-mx-8" >  <!--este div hace que haga scroll la tabla -->
                    <div class="inline-block min-w-full py-2 space-between sm:px-6 lg:px-8">
                      <div class="mb-3 border-b border-gray-200 shadow align-left sm:rounded-lg">
                        <table class="table mb-0" id="editableTable">
                          <thead class="bg-blue-100">
                            <tr>
                              <th scope="col" class="px-6 py-3 text-xs font-bold tracking-wider text-center text-blue-700 uppercase align-text-top hard_left">
                                Opciones de Edición
                              </th>
                              <th scope="col" class="px-6 py-3 text-xs font-bold tracking-wider text-center text-blue-700 uppercase align-text-top next_left">
                                ID
                              </th>
                              <th scope="col" class="px-6 py-3 text-xs font-bold tracking-wider text-center text-blue-700 uppercase align-text-top">
                                Título de la búsqueda
                              </th>
                              <th scope="col" class="px-6 py-3 text-xs font-bold tracking-wider text-center text-blue-700 uppercase align-text-top">
                                Tipo de empresa
                              </th>
                              <th scope="col" class="px-6 py-3 text-xs font-bold tracking-wider text-center text-blue-700 uppercase align-text-top">
                                Lugar de la búsqueda
                              </th>
                              <th scope="col" class="px-6 py-3 text-xs font-bold tracking-wider text-center text-blue-700 uppercase align-text-top">
                                Pregunta Abierta 1
                              </th>
                              <th scope="col" class="px-6 py-3 text-xs font-bold tracking-wider text-center text-blue-700 uppercase align-text-top">
                                Pregunta Abierta 2
                              </th>
                              <th scope="col" class="px-6 py-3 text-xs font-bold tracking-wider text-center text-blue-700 uppercase align-text-top">
                                Pregunta de Selección Múltiple 1
                              </th>
                              <th scope="col" class="px-6 py-3 text-xs font-bold tracking-wider text-center text-blue-700 uppercase align-text-top">
                                SM1 Opción 1
                              </th>
                              <th scope="col" class="px-6 py-3 text-xs font-bold tracking-wider text-center text-blue-700 uppercase align-text-top">
                                SM1 Opción 2
                              </th>
                              <th scope="col" class="px-6 py-3 text-xs font-bold tracking-wider text-center text-blue-700 uppercase align-text-top">
                                SM1 Opción 3
                              </th>
                              <th scope="col" class="px-6 py-3 text-xs font-bold tracking-wider text-center text-blue-700 uppercase align-text-top">
                                Pregunta de Selección Múltiple 2
                              </th>
                              <th scope="col" class="px-6 py-3 text-xs font-bold tracking-wider text-center text-blue-700 uppercase align-text-top">
                                SM2 Opción 1
                              </th>
                              <th scope="col" class="px-6 py-3 text-xs font-bold tracking-wider text-center text-blue-700 uppercase align-text-top">
                                SM2 Opción 2
                              </th>
                              <th scope="col" class="px-6 py-3 text-xs font-bold tracking-wider text-center text-blue-700 uppercase align-text-top">
                                SM2 Opción 3
                              </th>
                              <th scope="col" class="px-6 py-3 text-xs font-bold tracking-wider text-center text-blue-700 uppercase align-text-top">
                                Pregunta de Checkbox 1
                              </th>
                              <th scope="col" class="px-6 py-3 text-xs font-bold tracking-wider text-center text-blue-700 uppercase align-text-top">
                                CB1 Opción 1
                              </th>
                              <th scope="col" class="px-6 py-3 text-xs font-bold tracking-wider text-center text-blue-700 uppercase align-text-top">
                                CB1 Opción 2
                              </th>
                              <th scope="col" class="px-6 py-3 text-xs font-bold tracking-wider text-center text-blue-700 uppercase align-text-top">
                                cb1 Opción 3
                              </th>
                              <th scope="col" class="px-6 py-3 text-xs font-bold tracking-wider text-center text-blue-700 uppercase align-text-top">
                                Pregunta de Checkbox 2
                              </th>
                              <th scope="col" class="px-6 py-3 text-xs font-bold tracking-wider text-center text-blue-700 uppercase align-text-top">
                                CB2 Opción 1
                              </th>
                              <th scope="col" class="px-6 py-3 text-xs font-bold tracking-wider text-center text-blue-700 uppercase align-text-top">
                                CB2 Opción 2
                              </th>
                              <th scope="col" class="px-6 py-3 text-xs font-bold tracking-wider text-center text-blue-700 uppercase align-text-top">
                                CB2 Opción 3
                              </th>
                              <th scope="col" class="px-6 py-3 text-xs font-bold tracking-wider text-center text-blue-700 uppercase align-text-top">
                                Fecha de Creación
                              </th>
                              <th scope="col" class="px-6 py-3 text-xs font-bold tracking-wider text-center text-blue-700 uppercase align-text-top">
                                Fecha de Actualización
                              </th>
                            </tr>
                          </thead>
                          <tbody class="bg-white divide-y divide-gray-200">
                             @if($showRow)
                             <livewire:job-opening-row :objeto="$newJob" :nuevoObjeto="true"/>
                             @endif
                             @foreach($jobOpenings as $jobOpening)
                             <livewire:job-opening-row :key="$jobOpening->id" :objeto="$jobOpening"/>
                             @endforeach
                          </tbody>
                        </table>
                        
                      </div>
                      
                    </div>
                   
                  </div>
                  
               
            
          
        
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
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
  <!-- <script src="https://cdn.jsdelivr.net/npm/pikaday/pikaday.js"></script> -->
  <script src="https://kit.fontawesome.com/dd0322cf66.js" crossorigin="anonymous"></script>
  <script type="text/javascript" src="js/job-openings.js"></script>

</div>
                   
 
