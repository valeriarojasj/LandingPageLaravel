<x-app-layout>
    <x-slot name="head">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css'>
        
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.min.css'>
        <link rel="stylesheet" href="{{ asset('css/job-openings.css') }}">


        
    </x-slot>
    
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            Editar Carrusel
    </x-slot>

        <div>
            <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
                <!--<x-jet-welcome />-->
                <!--Container-->
                <div class="container w-full px-2 pb-5 mx-auto md:w-4/5 xl:w-3/5">
                <!--Title-->
                    <h1 class="px-2 py-8 text-xl font-bold break-normal md:text-2xl">
                         Editar Carrusel {{$carousel->id}}
                    </h1>

                    {!! Form::model($carousel,['route'=>['internal.carousel.update',$carousel] , 'autocomplete'=>'off', 'files'=>true, 'method'=>'put']) !!}
                            <livewire:internal.search-title :carousel='$carousel'/>
                            <div class="form-group">
                                {!! Form::label('description1', 'Descripción de la búsqueda (Máximo 249 caracteres)') !!}
                                
                                {!! Form::textarea('description1', $carousel->description1, ['class'=>'form-control']) !!}
                                @error('description1') <span class="error">{{ $message }}</span> @enderror
                            </div>
                            <div class="row">
                                <div class="col">

                                    
                                    <div class="img-wrapper" >
                                        <img  id="picture" src="{{ asset('img/imagen-scrum.png') }}" alt="">
                                    </div>
                                    
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        {!! Form::label('file', 'Seleccionar la imagen que se mostrará en el carrusel',['style'=>'font-size:1.2rem; font-weight:500;']) !!}
                                        {!! Form::file('file', ['class'=>'form-control-file', 'accept'=>'image/*']) !!}
                                    </div>
                                    <p style="line-height: 2rem !important; font-size:1rem ! important; font-style: italic;">Los formatos de imagen permitidos son jpg, jpeg o png. Usar preferiblemente una imagen cuadrada para evitar distorsión al publicarla. 
                                    </p>
                                </div>
                            </div>
                            {!! Form::submit('Actualizar Carrusel', ['class'=>' font-bold text-green-700 bg-green-200 rounded-md focus:outline-none saveBtn button px-3 py-1 edit']) !!}
                            <button  wire:click="cancel({{$carousel}})" class="mt-1 font-bold text-white bg-gray-500 rounded-md focus:outline-none cancelBtn button button-small edit">
                                Cancelar
                            </button>
                            {!! Form::close() !!}
                </div>
            </div>
        </div>

        <script src="https://cdn.ckeditor.com/ckeditor5/25.0.0/classic/ckeditor.js"></script>
        <script>
        function searchTitle(id){
            alert
            //const inputTitle = document.getElementById('job_title');
            //
            //inputTitle.value = '';
        }
           ClassicEditor
                .create( document.querySelector( '#description1' ) )
                .catch( error => {
                    console.error( error );
                } );

            //Cambiar imagen
            document.getElementById("file").addEventListener('change', cambiarImagen);

            function cambiarImagen(event){
                var file = event.target.files[0];

                var reader = new FileReader();
                reader.onload = (event) => {
                    document.getElementById("picture").setAttribute('src', event.target.result); 
                };

                reader.readAsDataURL(file);
            }
        </script>


</x-app-layout>