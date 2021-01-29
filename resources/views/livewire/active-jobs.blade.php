
<div>
    
    <div class='content-center justify-between d-flex'>
        <button wire:click='decrement'>
            <i class="fas fa-chevron-left"></i> 
        </button>
        <div class="grid max-w-screen-xl grid-cols-1 px-4 mx-auto gap-y-4 lg:grid-cols-3 lg:gap-4">
        @foreach ($jobs as $job)
                <div class="px-4 py-3 rounded-xl d-flex flex-column tarjetaBusqueda">
                    <h5 class="tituloBusqueda">{{$job->job_title}}</h5>
                    <p class="empresaBusqueda">{{$job->company_type}}</p>
                    <span class="mb-1 lugarBusqueda">{{$job->job_location}}</span>
                    <div class="mt-auto text-right">
                        <button  id="{{$job->id}}" data-myindex="{{$job->id}}" class="px-4 py-1 font-bold text-white border border-gray-500 rounded-full btn btnModal modal-open hover:border-indigo-500 hover:text-indigo-500" >
                        Postularme {{$job->id}}
                        </button>
                    </div>
                </div>
         @endforeach
        </div>

        <button wire:click='increment'>
            <i class="fas fa-chevron-right"></i> 
        </button>
    </div>
         
        <div class="fixed top-0 left-0 flex items-center justify-center w-full h-full opacity-0 pointer-events-none modal">
            <!--Modal Overlay-->
            <div class="absolute w-full h-full bg-gray-900 opacity-50 modal-overlay"></div>
            <!--Cierre Modal Overlay-->
            <!--Contenedor del modal-->

   
            <div class= "z-50 w-11/12 mx-auto overflow-y-auto bg-white rounded shadow-lg modal-container md:max-w-md">

                <div class="absolute top-0 right-0 z-50 flex flex-col items-center mt-4 mr-4 text-sm text-white cursor-pointer modal-close">

                <svg class="text-white fill-current" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                    <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
                </svg>
                <span class="text-sm"></span>
                </div>
            
                <div  class="hidden px-6 py-4 text-left modal-content ">
                <!--Title-->
           
                    <div class="flex items-center justify-between pb-3">

                    <p class="text-2xl font-bold">Formulario de Aplicación</p>
                    <div class="z-50 cursor-pointer modal-close">
                        <svg class="text-black fill-current" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                        <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
                        </svg>
                    </div>
                    </div>
                <!--Cierre del Title-->
                <div>
                
              
                   
                
                        <livewire:formulario />
                    
        
                
                
                  </div>

                </div>
           
            </div>
            <!--Cierre del Contenedor del Modal-->
        </div>

</div>

