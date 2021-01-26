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
  <div class="col-md-12 table-container">
  
  <div class="row">
    <div class="col-md-12">
      <br>
      <button class="btn btn-default pull-right add-row"><i class="fas fa-plus-circle table-icons"></i>&nbsp;&nbsp; Nuevo Registro</button>
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

      @foreach($jobOpenings as $jobOpening)
        <tr data-id='{{$jobOpening->id}}'>
          <td class='iconitos'>
            <button class="text-white bg-blue-400 button button-small edit">
              Editar
            </button>
            <button class="text-white bg-green-400 button button-small edit">
              Guardar
            </button>
            <button  wire:click="$toggle('confirmingDestroy')" class="text-white bg-red-400 button button-small edit">
              Eliminar
            </button>
            <!--<a class="button button-small edit" title="Edit">
              <i class="fas fa-pencil-alt table-icons"></i>
            </a> 
            <a class="button button-small" title="Delete"  >
              <i class="fas fa-trash-alt table-icons" ></i>
            </a>-->
          </td>
          <td data-field="id" >{{$jobOpening->id}}</td>
          <td data-field="job_title" wire:model="job_title" >{{$jobOpening->job_title}}</td>
          <td data-field="company_type" wire:model="company_type">{{$jobOpening->company_type}}</td>
          <td data-field="job_location" wire:model="job_location">{{$jobOpening->job_location}}</td>
          <td data-field="open_question_1" wire:model="open_question_1" >{{$jobOpening->open_question_1}}</td>
          <td data-field="open_question_2" wire:model="open_question_2">{{$jobOpening->open_question_2}}</td>
          <td data-field="multiple_choice_question_1" wire:model="multiple_choice_question_1">{{$jobOpening->multiple_choice_question_1}}</td>
          <td data-field="multiple_choice1_option_1" wire:model="multiple_choice1_option_1">{{$jobOpening->multiple_choice1_option_1}}</td>
          <td data-field="multiple_choice1_option_2" wire:model="multiple_choice1_option_2">{{$jobOpening->multiple_choice1_option_2}}</td>
          <td data-field="multiple_choice1_option_3" wire:model="multiple_choice1_option_3">{{$jobOpening->multiple_choice1_option_3}}</td>
          <td data-field="multiple_choice_question_2" wire:model="multiple_choice_question_2">{{$jobOpening->multiple_choice_question_2}}</td>
          <td data-field="multiple_choice2_option_1"wire:model="multiple_choice2_option_1">{{$jobOpening->multiple_choice2_option_1}}</td>
          <td data-field="multiple_choice2_option_2" wire:model="multiple_choice2_option_2">{{$jobOpening->multiple_choice1_option_2}}</td>
          <td data-field="multiple_choice2_option_3" wire:model="multiple_choice2_option_3">{{$jobOpening->multiple_choice1_option_3}}</td>
          <td data-field="checkbox_question_1" wire:model="checkbox_question_1">{{$jobOpening->checkbox_question_1}}</td>
          <td data-field="checkbox1_option_1" wire:model="checkbox1_option_1">{{$jobOpening->checkbox1_option_1}}</td>
          <td data-field="checkbox1_option_2" wire:model="checkbox1_option_2">{{$jobOpening->checkbox1_option_2}}</td>
          <td data-field="checkbox1_option_3" wire:model="checkbox1_option_3">{{$jobOpening->checkbox1_option_3}}</td>
          <td data-field="checkbox_question_2" wire:model="checkbox_question_2">{{$jobOpening->checkbox_question_2}}</td>
          <td data-field="checkbox2_option_1" wire:model="checkbox2_option_1">{{$jobOpening->checkbox2_option_1}}</td>
          <td data-field="checkbox2_option_2" wire:model="checkbox2_option_2">{{$jobOpening->checkbox2_option_2}}</td>
          <td data-field="checkbox2_option_3" wire:model="checkbox2_option_3">{{$jobOpening->checkbox2_option_3}}</td>
          <td data-field="created_at" >{{$jobOpening->created_at}}</td>
          <td data-field="updated_at" >{{$jobOpening->updated_at}}</td>
        </tr>
        @endforeach

        <x-jet-confirmation-modal wire:model="confirmingDestroy">
    <x-slot name="title">
        Eliminar Registro
    </x-slot>

    <x-slot name="content" >
      <div class="text-xs">
        Estas segura de que quieres eliminar este registro {{$jobOpening}}? Una vez eliminado se borrará también de la base de datos junto con los candidatos que hayan aplicado a esta búsqueda.
        </div>
    </x-slot>
   
    <x-slot name="footer">
        <x-jet-secondary-button wire:click="$toggle('confirmingDestroy')" wire:loading.attr="disabled">
           Cancelar
        </x-jet-secondary-button>

        <x-jet-danger-button class="ml-2" wire:click="destroy({{$jobOpening}})" wire:loading.attr="disabled">
            Eliminar Registro
        </x-jet-danger-button>
    </x-slot>
</x-jet-confirmation-modal>
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
            <!--/container-->

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
<script src="https://cdn.jsdelivr.net/npm/pikaday/pikaday.js"></script>
<!-- <script src='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css'></script> -->
<script type="text/javascript" src="js/job-openings.js"></script>
</div>