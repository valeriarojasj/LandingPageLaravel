
<div>
  <div class="py-12">
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
      <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
        <!--<x-jet-welcome />-->
        <!--Container-->
        <div class="container w-full px-2 mx-auto md:w-4/5 xl:w-3/5">
          <!--Title-->
          <h1 class="px-2 py-8 text-xl font-bold break-normal md:text-2xl" hidden>
            Búsquedas laborales
          </h1>
          <!--Card-->
          <div class="row">
            <h2 style="font-size:1.2rem !important;" class="mt-5">
              Carrusel
            </h2>
            <div class="inline-block min-w-full py-2 space-between sm:px-6 lg:px-8">
              <div class="mb-3 overflow-hidden border-b border-gray-200 rounded-lg shadow align-left sm:rounded-lg">
                <table id="carousel-table" class="table" style="margin-bottom:0 !important;">
                  <thead>
                    <tr>
                      <th scope="col" class="px-6 py-3 text-xs font-bold tracking-wider text-center text-blue-700 uppercase align-text-top" style="width:10px;">
                        Opciones de Edición
                      </th>
                      <th scope="col" class="px-6 py-3 text-xs font-bold tracking-wider text-center text-blue-700 uppercase align-text-top">
                        ID 
                      </th>
                      <th scope="col" class="px-6 py-3 text-xs font-bold tracking-wider text-center text-blue-700 uppercase align-text-top ">
                        Título 
                      </th>
                      <th scope="col" class="px-6 py-3 text-xs font-bold tracking-wider text-center text-blue-700 uppercase align-text-top">
                        Ruta de imagen
                      </th>
                      <th scope="col" class="px-6 py-3 text-xs font-bold tracking-wider text-center text-blue-700 uppercase align-text-top">
                        Imagen
                      </th>
                      <th scope="col" class="px-6 py-3 text-xs font-bold tracking-wider text-center text-blue-700 uppercase align-text-top">
                        Descripción
                      </th>
                      <th scope="col" class="px-6 py-3 text-xs font-bold tracking-wider text-center text-blue-700 uppercase align-text-top">
                        Actualizado por
                      </th>
                      <th scope="col" class="px-6 py-3 text-xs font-bold tracking-wider text-center text-blue-700 uppercase align-text-top ">
                        Fecha de actualización
                      </th>
                    </tr>
                  </thead>
                  <tbody class="bg-white divide-y divide-gray-200">
                    @foreach($carousels as $carousel)
                      <tr  style="height:auto;">
                        <td class='px-6 py-4 text-sm font-medium text-right align-middle hard_left iconitos whitespace-nowrap' style="width:10px;">
                          <a class="w-full py-2 font-bold text-blue-700 bg-blue-200 rounded-md focus:outline-none editBtn button button-small edit" style="text-decoration:none;" href="{{route('internal.carousel.edit',$carousel)}}">
                            Editar
                          </a>
                        </td>
                        <td class="px-6 py-4 next_left place-content-center whitespace-nowrap" style="position:relative;">
                          <textarea disabled class='text-xs font-semibold text-center textareatd' name="textarea" style="position:absolute; top:0; left:0; resize:none; width:100%; height:100%;">
                            {{$carousel->job_opening_id}}
                          </textarea>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap" style="position:relative;" >
                          <textarea class="inline-flex text-xs font-semibold textareatd" name="textarea"  style="position:absolute; top:0; left:0; right:0; bottom:0; resize:none; width:100%; height:100%;">
                            {{$carousel->job_title}}
                          </textarea> 
                        </td>
                        <td class="p-0 whitespace-nowrap" style="position:relative;"  >
                            <textarea class="inline-flex text-xs font-semibold textareatd " name="textarea"  style="position:absolute; top:0; left:0; right:0; bottom:0; resize:none; width:100%; height:100%;">
                              {{$carousel->image_url}}
                            </textarea> 
                        </td>
                        <td class="p-0 whitespace-nowrap" style="position:relative; vertical-align:middle">
                          <img src="{{asset($carousel->image_url)}}" style="height:50px;   margin-left: auto; margin-right: auto; display: block;" alt="">
                        </td>
                        <td class="p-0 whitespace-nowrap " style="position:relative; ">
                          <textarea class="inline-flex text-xs font-semibold textareatd"  name="textarea" style="position:absolute; top:0; left:0; right:0; bottom:0; resize:none; width:100%; height:100%;">
                            {{$carousel->description1}}
                          </textarea>
                        </td>
                        <td class="p-0 whitespace-nowrap" style="position:relative; ">
                          <textarea class="inline-flex text-xs font-semibold text-center textareatd"  name="textarea" style="position:absolute; top:0; left:0; right:0; bottom:0; resize:none; width:100%; height:100%;">
                            {{$carousel->updatedBy ? $carousel->updatedBy->email : ''}}
                          </textarea>
                        </td>
                        <td class="p-0 whitespace-nowrap" style="position:relative;">
                            <textarea class="inline-flex text-xs font-semibold text-center textareatd"  name="textarea" style="position:absolute; top:0; left:0; right:0; bottom:0; resize:none; width:100%; height:100%;">
                              {{$carousel->updated_at}}
                            </textarea>
                        </td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <div class="py-12">
      <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
          <!--<x-jet-welcome />-->
          <!--Container-->
          <div class="container w-full px-2 mx-auto md:w-4/5 xl:w-3/5">
            <div class="mt-5 row">
              <h2 style="font-size:1.2rem !important;" class="mb-4">
                Listado de Búsquedas Laborales con Preguntas del Formulario
              </h2>
              <div class="col-md-4">
                <div class="form-inline">
                  <label for="searchJob" class="mr-2">
                    Buscar: 
                  </label>
                  <input id="searchJob" wire:model='filter' type="text" class="form-control col-md-8" placeholder=" ID, título, lugar o empresa">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-inline">  
                  <label for="statusFilter" class="mr-2">
                    Filtrar por Status: 
                  </label>
                  <select wire:model='statusFilter' class="form-control col-md-6" name="statusFilter" id="statusFilter">
                    <option value="">Todas</option>
                    <option value="Borrador">Borrador</option>
                    <option value="Publicada">Publicada</option>
                    <option value="Cerrada">Cerrada</option>
                  </select>
                </div>
              </div>
              <div class="col-md-4 ">
                <button type="button" wire:click='newRow' class="btn btn-default pull-right add-row">
                  <i class="fas fa-plus-circle table-icons" style="font-family: 'Font Awesome 5 Free' !important;">
                  </i>
                  &nbsp;&nbsp; 
                  Nuevo Registro
                </button>
              </div>
            </div>
              <!--este div hace que haga scroll la tabla -->
            <div class="min-w-full py-2 space-between ">
              <div class="mb-3 overflow-hidden border-b border-gray-200 rounded-lg shadow align-left sm:rounded-lg">
                @if($jobOpenings->count())
                  <div class="table-container">
                    <table class="table mb-0" id="editableTable">
                      <thead class="bg-blue-100">
                        <tr>
                          <th scope="col" class="px-6 py-3 text-xs font-bold tracking-wider text-center text-blue-700 uppercase align-text-top bg-blue first-fixed-col hard_left">
                            Opciones de Edición
                          </th>
                          <th scope="col" class="px-6 py-3 text-xs font-bold tracking-wider text-center text-blue-700 uppercase align-text-top next_left">
                            Status de la búsqueda
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
                            Link de la búsqueda
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
                            Opción 1 Pregunta Selección Multiple 1
                          </th>
                          <th scope="col" class="px-6 py-3 text-xs font-bold tracking-wider text-center text-blue-700 uppercase align-text-top">
                            Opción 2 Pregunta Selección Multiple 1
                          </th>
                          <th scope="col" class="px-6 py-3 text-xs font-bold tracking-wider text-center text-blue-700 uppercase align-text-top">
                            Opción 3 Pregunta Selección Multiple 1
                          </th>
                          <th scope="col" class="px-6 py-3 text-xs font-bold tracking-wider text-center text-blue-700 uppercase align-text-top">
                            Pregunta de Selección Múltiple 2
                          </th>
                          <th scope="col" class="px-6 py-3 text-xs font-bold tracking-wider text-center text-blue-700 uppercase align-text-top">
                            Opción 1 Pregunta Selección Multiple 2
                          </th>
                          <th scope="col" class="px-6 py-3 text-xs font-bold tracking-wider text-center text-blue-700 uppercase align-text-top">
                            Opción 2 Pregunta Selección Multiple 2
                          </th>
                          <th scope="col" class="px-6 py-3 text-xs font-bold tracking-wider text-center text-blue-700 uppercase align-text-top">
                            Opción 3 Pregunta Selección Multiple 2
                          </th>
                          <th scope="col" class="px-6 py-3 text-xs font-bold tracking-wider text-center text-blue-700 uppercase align-text-top">
                            Pregunta Checkbox 1
                          </th>
                          <th scope="col" class="px-6 py-3 text-xs font-bold tracking-wider text-center text-blue-700 uppercase align-text-top">
                            Opción 1 Pregunta Checkbox 1
                          </th>
                          <th scope="col" class="px-6 py-3 text-xs font-bold tracking-wider text-center text-blue-700 uppercase align-text-top">
                            Opción 2 Pregunta Checkbox 1
                          </th>
                          <th scope="col" class="px-6 py-3 text-xs font-bold tracking-wider text-center text-blue-700 uppercase align-text-top">
                            Opción 3 Pregunta Checkbox 1
                          </th>
                          <th scope="col" class="px-6 py-3 text-xs font-bold tracking-wider text-center text-blue-700 uppercase align-text-top">
                            Pregunta de Checkbox 2
                          </th>
                          <th scope="col" class="px-6 py-3 text-xs font-bold tracking-wider text-center text-blue-700 uppercase align-text-top">
                            Opción 1 Pregunta Checkbox 2
                          </th>
                          <th scope="col" class="px-6 py-3 text-xs font-bold tracking-wider text-center text-blue-700 uppercase align-text-top">
                            Opción 2 Pregunta Checkbox 2
                          </th>
                          <th scope="col" class="px-6 py-3 text-xs font-bold tracking-wider text-center text-blue-700 uppercase align-text-top">
                            Opción 3 Pregunta Checkbox 3
                          </th>
                          <th scope="col" class="px-6 py-3 text-xs font-bold tracking-wider text-center text-blue-700 uppercase align-text-top">
                            Creado por
                          </th>
                          <th scope="col" class="px-6 py-3 text-xs font-bold tracking-wider text-center text-blue-700 uppercase align-text-top">
                            Actualizado por
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
                          <livewire:internal.job-opening-row :objeto="$newJob" :nuevoObjeto='true' />
                        @endif
                        @foreach($jobOpenings as $jobOpening)
                          <livewire:internal.job-opening-row :key="$jobOpening->id" :objeto="$jobOpening"/>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                @else
                  <div class="card">
                    <strong>No hay registros</strong>
                  </div>
                @endif
              </div>
            </div>
            <div class="mb-4">
              {{$jobOpenings->links()}}
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
    <script src="https://kit.fontawesome.com/dd0322cf66.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="{{ asset('js/job-openings.js') }}"></script>
    <script>
      const slider = document.querySelector('.table-container');
      let isDown = false;
      let startX;
      let scrollLeft;
      let shouldMove=true;
      
      slider.addEventListener('mousedown', (e) => {
        e = e || window.event;
        var target = e.target || e.srcElement;
        shouldMove=target.nodeName=='TEXTAREA' && target.disabled;
        if(!shouldMove) return;
        isDown = true;
        startX = e.pageX - slider.offsetLeft;
        scrollLeft = slider.scrollLeft;
      });
      
      slider.addEventListener('mouseleave', () => {
        isDown = false;
      });
      
      slider.addEventListener('mouseup', () => {
        isDown = false;
      });
      
      slider.addEventListener('mousemove', (e) => {  
        if(!isDown) return;
        if(!shouldMove) return;
        $(document).click(function(event) {
          var text = $(event);
        });
        e.preventDefault();
        const x = e.pageX - slider.offsetLeft;
        const walk = x - startX;
        // const walk = (x - startX) * 2; esto es para q se mueva el doble  
        slider.scrollLeft = scrollLeft - walk;
      });
    </script>
  </div>
</div>
                   
 
