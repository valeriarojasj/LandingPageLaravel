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

                    {!! Form::open(['route'=>'internal.carousel.store', 'autocomplete'=>'off']) !!}
                            <div class="form-group">
                                {!! Form::label('carousel-job-id', 'ID de la búsqueda') !!}
                                {!! Form::number('carousel-job-id', $jobOpenings->find($carousel->job_opening_id)->id, ['class'=>'form-control', 'placeholder'=>'Ingresa el ID de la búsqueda para incluir en el carrusel']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('carousel-job-title', 'Título de la búsqueda') !!}
                                {!! Form::text('carousel-job-title', $jobOpenings->find($carousel->job_opening_id)->job_title, ['class'=>'form-control', 'placeholder'=>'Título de la búsqueda','readonly']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('carousel-description1', 'Descripción de la búsqueda') !!}
                                {!! Form::textarea('carousel-description1', $carousel->description1, ['class'=>'form-control']) !!}
                            </div>
                            {!! Form::submit('Actualizar', ['class'=>' font-bold text-green-700 bg-green-200 rounded-md focus:outline-none saveBtn button px-3 py-1 edit']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>

        <script src="https://cdn.ckeditor.com/ckeditor5/25.0.0/classic/ckeditor.js"></script>
        <script>
           ClassicEditor
        .create( document.querySelector( '#carousel-description1' ) )
        .catch( error => {
            console.error( error );
        } );
        </script>


</x-app-layout>