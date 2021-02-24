

<div>
     <div class='justify-center d-flex'>
        <div class='justify-center justify-between d-flex'>
            <button class="focus:outline-none "wire:click='decrement'>
                <i class="fas fa-chevron-left"></i> 
            </button>
            <div class="grid grid-cols-1 gap-2 xl:grid-cols-3 xl:grid-rows-3 lg:grid-cols-3 lg:grid-rows-3 grid-rows-9 md:grid-cols-2 md:grid-rows-5 sm:grid-cols-1 sm:grid-rows-9 jobs-container">
               
                    @foreach ($jobs as $job)
                        <div class="rounded-lg job-card">
                            <div class="job-card-content">
                                <div class="job-card-text-content">
                                    <h5 class="tituloBusqueda">{{$job->job_title}}</h5>
                                    <p class="empresaBusqueda">{{$job->company_type}}</p>
                                    <span class="lugarBusqueda">{{$job->job_location}}</span>
                                    <br>
                                        <small >
                                            @if (($job->updated_at->diffInHours(now()))<24)
                                                @if (($job->updated_at->diffInHours(now()))<1)
                                                    Hace {{$job->updated_at->diffInMinutes(now())}} minutos
                                                @else
                                                    Hace {{$job->updated_at->diffInHours(now())}} horas
                                                @endif
                                            @else
                                                Hace {{$job->updated_at->diffInDays(now())}} días
                                            @endif
                                        </small>
                                    
                                    
                                </div>

                                <div class="job-card-div-btn" >
                                    <button id="{{$job->id}}" class="px-4 py-1 font-bold text-white border border-gray-500 rounded-full btn btnModal modal-open hover:border-indigo-500 hover:text-indigo-500" >
                                        Postularme
                                    </button>
                                </div>
                            </div>
                        </div>
                    @endforeach
                
            </div>
            <button class="focus:outline-none" wire:click='increment'>
                <i class="fas fa-chevron-right"></i> 
            </button>
        </div>
        @foreach ($jobs as $job)
            <div id="granDivModal-{{$job->id}}" class=" granDivModal fixed top-0 left-0 flex items-center justify-center w-full h-full opacity-0 pointer-events-none {{$job->id}} modal">
                <!--Modal Overlay-->
                <div  id='1s' class="absolute w-full h-full bg-gray-900 opacity-50 modal-overlay {{$job->id}}" data-id="{{$job->id}}"></div>
                <!--Cierre Modal Overlay-->
                <!--Contenedor del modal-->
                <div  class="z-50 hidden w-11/12 mx-auto overflow-y-auto bg-white rounded-xl shadow-lg modal-container {{$job->id}} md:max-w-md">
                    <div class="px-6 py-3 text-left modal-content ">
                        <!--Title-->
                        <div >
                            <div class="float-left">
                            <span class="text-xl font-bold">Formulario de Aplicación</span>
                            <p >{{$job->job_title}}</p>
                            </div>
                            <div class="z-50 cursor-pointer float-right modal-close {{$job->id}}" data-id="{{$job->id}}">
                                <svg class="text-black fill-current" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                                    <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
                                </svg>
                            </div>
                        </div>
                        <!--Cierre del Title-->
                        <livewire:formulario :uuid="$job->id" :key="$job->id" :jobToApply="$job->job_title" :job="$job"/>
                    </div>
                </div><!--Cierre del Contenedor del Modal-->
            </div>
        @endforeach
    </div>
</div>