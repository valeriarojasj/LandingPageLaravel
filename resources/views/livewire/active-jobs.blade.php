<div> 
    <style>
        /* Chrome, Safari, Edge, Opera */
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
          -webkit-appearance: none;
          margin: 0;
        }
        
        /* Firefox */
        input[type=number] {
          -moz-appearance: textfield;
        }
        </style>

    <div id='success'>
        
    </div>
    <div class="px-1 mx-5 mb-4 searchDiv">
        <div class="md:flex md:items-center">
            <div class="md:w-1/6">
                <label for="searchJobToApply" class="ml-auto">Buscar por ID: </label>
            </div>
            <div class="mr-2 md:w-3/6">
                <input id="searchJobToApply" wire:model='job_opening_id' type="number" min="1" class="mr-auto form-control" placeholder=" Ingresa el ID de la búsqueda laboral">
            <span class="error" >{{$mensajeErrorBusqueda}}</span>
            </div>
            <div class="md:w-2/6">
                <button  wire:click="search()" class="px-4 py-1 font-bold text-white bg-blue-300 border border-gray-500 btn hover:border-indigo-500 hover:text-indigo-500" >
                    Buscar
                </button>

            </div>
            <div>
                @error('job_opening_id') <span class="error">{{ $message }}</span> @enderror
            </div>
        </div>
       


    </div>
    <div class='flex justify-content-around'>
        <div class="flex content-center">
            <button class="focus:outline-none "wire:click='decrement'>
                <i class="fas fa-chevron-left" @if($page==0) style="cursor:default;  filter: brightness(1.8);" @endif></i> 
            </button>
        </div>
        <div class='flex justify-center '>
            <div class="job-wrapper">
                @foreach ($jobs as $job)
                    <div class="job-card">
                        <div class="px-4 py-3 rounded-xl job-card-content d-flex flex-column">
                            <div class="job-card-text-content">
                                <h5 class="tituloBusqueda">{{$job->job_title}}</h5>
                                <p class="mt-2 mb-1 leading-tight empresaBusqueda">{{$job->company_type}}</p>
                                <span class="lugarBusqueda">{{$job->job_location}}</span>
                                <br>
                                @if (($job->job_link))
                                <a href={{$job->job_link}} class="text-sm"><b> ...Ver más</b></a>
                                <br>
                                @endif
                                <small>
                                    @if (($job->updated_at->diffInHours(now()))<24)
                                        @if (($job->updated_at->diffInHours(now()))<=1)
                                            Hace {{$job->updated_at->diffInMinutes(now())}} minutos
                                        @else
                                            Hace {{$job->updated_at->diffInHours(now())}} horas
                                        @endif
                                    @else
                                        Hace {{$job->updated_at->diffInDays(now())}} días
                                    @endif
                                </small>
                                
                              
                            </div>
                            <div class="job-card-div-btn">
                                <button wire:key="button-{{ $job->id }}" wire:click.stop="setSelectedJob({{$job->id}})" class="px-4 py-1 font-bold text-white border border-gray-500 rounded-full btn btnModal hover:border-indigo-500 hover:text-indigo-500" >
                                    Postularme
                                </button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="flex content-center ">
           
            <button class="focus:outline-none" wire:click='increment'>
 
                <i class="fas fa-chevron-right " @if($page==$maxPages) style="cursor:default;  filter: brightness(1.8);" @endif></i> 
            </button>
        </div>
    </div>
    
    <div  class="fixed top-0 left-0 flex items-center justify-center w-full h-full opacity-0 pointer-events-none modal">
        <div class="absolute w-full h-full bg-gray-900 opacity-50 modal-overlay">
        </div>
        <div id='divHidden' class="z-50 hidden w-11/12 mx-auto overflow-y-auto bg-white shadow-lg rounded-xl modal-container md:max-w-md">
            <div class="absolute top-0 right-0 z-50 flex flex-col items-center mt-4 mr-4 text-sm text-white cursor-pointer modal-close">
                <svg class="text-white fill-current" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                    <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z">
                    </path>
                </svg>
                <span class="text-sm"></span>
            </div>
            <!-- Add margin if you want to see some of the overlay behind the modal-->
            <div  class="px-6 py-3 text-left modal-content">
                <!--Title-->
                <div>
                    <div class="float-left">
                        <span class="text-xl font-bold">Formulario de Aplicación</span>
                        <p>{{$title}}</p>
                    </div>
                    <div class="z-50 float-right cursor-pointer modal-close">
                        <svg class="text-black fill-current" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                            <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
                        </svg>
                    </div>
                </div>
                <!--Cierre del Title-->
                <livewire:formulario :key="time()"/>
            </div>

        </div>
    </div>
    
</div>