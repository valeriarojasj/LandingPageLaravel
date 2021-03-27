<div>
        <div class="form-group">
            
            {!! Form::label('job_opening_id', 'ID de la búsqueda') !!}
            
            {!! Form::number('job_opening_id', $carousel->job_opening_id, ['wire:model'=>'job_opening_id', 'wire:keyup'=>'search', 'class'=>'form-control', 'placeholder'=>'Ingresa el ID de la búsqueda para incluir en el carrusel']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('job_title', 'Título de la búsqueda') !!}
            {!! Form::text('job_title', $title, ['class'=>'form-control', 'placeholder'=>'Título de la búsqueda','readonly']) !!}
        <span class="error">{{$mensajeErrorJobID}}</span>
        </div>
</div>
