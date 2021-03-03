<tr data-id='{{$uuid}}' style="height:auto;">
 <td class='px-6 py-4 text-sm font-medium text-right align-middle hard_left iconitos whitespace-nowrap'>
     <div class="px-2 btnDiv">
    
    @if($nuevoObjeto)
 
    <button  wire:click="store()" class="w-full font-bold text-green-700 bg-green-200 rounded-md focus:outline-none saveBtn button button-small edit">
        Guardar
    </button>
    <button  wire:click="$emitUp('hideNewRow')" class="w-full mt-1 font-bold text-white bg-gray-500 rounded-md focus:outline-none cancelBtn button button-small edit">
        Cancelar
    </button>
    @else
    @if(!$editable)
    <button  wire:click="update({{$objeto->id}})" class="w-full font-bold text-green-700 bg-green-200 rounded-md saveBtn button button-small edit focus:outline-none">
        Actualizar
    </button>
    <button  wire:click="cancel({{$objeto->id}})" class="w-full mt-1 font-bold text-white bg-gray-500 rounded-md focus:outline-none cancelBtn button button-small edit">
        Cancelar
    </button>
    @else
    <button  wire:click="edit({{$objeto->id}})" class="w-full font-bold text-blue-700 bg-blue-200 rounded-md focus:outline-none editBtn button button-small edit">
        Editar
    </button>
    <button  wire:click="open({{ $objeto->id }})" class="w-full mt-1 font-bold text-pink-700 bg-pink-300 rounded-md deleteBtn button button-small edit focus:outline-none">
        Eliminar
     </button>
     @endif
     @endif
     </div>

    </td>
    <td class="px-6 py-4 next_left place-content-center whitespace-nowrap" style="position:relative;" data-field="id">
      <textarea disabled class='text-xs font-semibold text-center textareatd' name="textarea" wire:model.defer='uuid' style="position:absolute; top:0; left:0; resize:none; width:100%; height:100%;"></textarea>
    </td>
    <td class="px-6 py-4 whitespace-nowrap" style="position:relative;" data-field="job_title" >
        <textarea class="inline-flex text-xs font-semibold textareatd textarea{{$objeto->id}}" placeholder="@error('job_title'){{ $message }}@enderror"name="textarea" wire:model.defer='job_title' style="position:absolute; top:0; left:0; right:0; bottom:0; resize:none; width:100%; height:100%;"></textarea> 
    </td>
    <td class="p-0 whitespace-nowrap" style="position:relative;" data-field="company_type" >
        <textarea class="inline-flex text-xs font-semibold textareatd textarea{{$objeto->id}}" name="textarea" placeholder="@error('company_type'){{ $message }}@enderror" wire:model.defer='company_type' style="position:absolute; top:0; left:0; right:0; bottom:0; resize:none; width:100%; height:100%;"></textarea> 
    </td>
    <td class="p-0 whitespace-nowrap" style="position:relative;" data-field="job_location">
        <textarea class="inline-flex text-xs font-semibold textareatd textarea{{$objeto->id}}" placeholder="@error('job_location'){{ $message }}@enderror" name="textarea" wire:model.defer='job_location' style="position:absolute; top:0; left:0; right:0; bottom:0; resize:none; width:100%; height:100%;"></textarea>
    </td>
    <td class="p-0 whitespace-nowrap" style="position:relative;" data-field="open_question_1">
        <textarea class="inline-flex text-xs font-semibold textareatd textarea{{$objeto->id}}" name="textarea" wire:model.defer='open_question_1' style="position:absolute; top:0; left:0; right:0; bottom:0; resize:none; width:100%; height:100%;"></textarea>
    </td>
    <td class="p-0 whitespace-nowrap" style="position:relative;" data-field="open_question_2">
        <textarea class="inline-flex text-xs font-semibold  textareatd textarea{{$objeto->id}}" name="textarea" wire:model.defer='open_question_2' style="position:absolute; top:0; left:0; right:0; bottom:0; resize:none; width:100%; height:100%;"></textarea>
    </td>
    <td class="p-0 whitespace-nowrap" style="position:relative;" data-field="multiple_choice_question_1">
        <textarea class="inline-flex text-xs font-semibold textareatd textarea{{$objeto->id}}" name="textarea" wire:model.defer='multiple_choice_question_1' style="position:absolute; top:0; left:0; right:0; bottom:0; resize:none; width:100%; height:100%;"></textarea>
    </td>
    <td class="p-0 whitespace-nowrap" style="position:relative;" data-field="multiple_choice1_option_1">
        <textarea class="inline-flex text-xs font-semibold  textareatd textarea{{$objeto->id}}" name="textarea" wire:model.defer='multiple_choice1_option_1' style="position:absolute; top:0; left:0; right:0; bottom:0; resize:none; width:100%; height:100%;"></textarea>
    </td>
    <td class="p-0 whitespace-nowrap" style="position:relative;" data-field="multiple_choice1_option_2">
        <textarea class="inline-flex text-xs font-semibold textareatd textarea{{$objeto->id}}" name="textarea" wire:model.defer='multiple_choice1_option_2' style="position:absolute; top:0; left:0; right:0; bottom:0; resize:none; width:100%; height:100%;"></textarea>
    </td>
    <td class="p-0 whitespace-nowrap" style="position:relative;" data-field="multiple_choice1_option_3">
        <textarea class="inline-flex text-xs font-semibold  textareatd textarea{{$objeto->id}}" name="textarea" wire:model.defer='multiple_choice1_option_3' style="position:absolute; top:0; left:0; right:0; bottom:0; resize:none; width:100%; height:100%;"></textarea>
    </td>
    <td class="p-0 whitespace-nowrap" style="position:relative;" data-field="multiple_choice_question_2">
        <textarea class="inline-flex text-xs font-semibold textareatd textarea{{$objeto->id}}" name="textarea" wire:model.defer='multiple_choice_question_2' style="position:absolute; top:0; left:0; right:0; bottom:0; resize:none; width:100%; height:100%;"></textarea>
    </td>
    <td class="p-0 whitespace-nowrap" style="position:relative;" data-field="multiple_choice2_option_1">
        <textarea class="inline-flex text-xs font-semibold textareatd textarea{{$objeto->id}}" name="textarea" wire:model.defer='multiple_choice2_option_1' style="position:absolute; top:0; left:0; right:0; bottom:0; resize:none; width:100%; height:100%;"></textarea>
    </td>
    <td class="p-0 whitespace-nowrap" style="position:relative;" data-field="multiple_choice2_option_2">
        <textarea class="inline-flex text-xs font-semibold  textareatd textarea{{$objeto->id}}" name="textarea" wire:model.defer='multiple_choice2_option_2' style="position:absolute; top:0; left:0; right:0; bottom:0; resize:none; width:100%; height:100%;"></textarea>
    </td>
    <td class="p-0 whitespace-nowrap" style="position:relative;" data-field="multiple_choice2_option_3">
        <textarea class="inline-flex text-xs font-semibold textareatd textarea{{$objeto->id}}" name="textarea" wire:model.defer='multiple_choice2_option_3' style="position:absolute; top:0; left:0; right:0; bottom:0; resize:none; width:100%; height:100%;"></textarea>
    </td>
    <td class="p-0 whitespace-nowrap" style="position:relative;" data-field="checkbox_question_1">
        <textarea class="inline-flex text-xs font-semibold  textareatd textarea{{$objeto->id}}" name="textarea" wire:model.defer='checkbox_question_1' style="position:absolute; top:0; left:0; right:0; bottom:0; resize:none; width:100%; height:100%;"></textarea>
    </td>
    <td class="p-0 whitespace-nowrap" style="position:relative;" data-field="checkbox1_option_1">
        <textarea class="inline-flex text-xs font-semibold textareatd textarea{{$objeto->id}}" name="textarea" wire:model.defer='checkbox1_option_1' style="position:absolute; top:0; left:0; right:0; bottom:0; resize:none; width:100%; height:100%;"></textarea>
    </td>
    <td class="p-0 whitespace-nowrap" style="position:relative;" data-field="checkbox1_option_2">
        <textarea class="inline-flex text-xs font-semibold  textareatd textarea{{$objeto->id}}" name="textarea" wire:model.defer='checkbox1_option_2' style="position:absolute; top:0; left:0; right:0; bottom:0; resize:none; width:100%; height:100%;"></textarea>
    </td>
    <td class="p-0 whitespace-nowrap" style="position:relative;" data-field="checkbox1_option_3">
        <textarea class="inline-flex text-xs font-semibold  textareatd textarea{{$objeto->id}}" name="textarea" wire:model.defer='checkbox1_option_3' style="position:absolute; top:0; left:0; right:0; bottom:0; resize:none; width:100%; height:100%;"></textarea>
    </td>
    <td class="p-0 whitespace-nowrap" style="position:relative;" data-field="checkbox_question_2">
        <textarea class="inline-flex text-xs font-semibold  textareatd textarea{{$objeto->id}}" name="textarea" wire:model.defer='checkbox_question_2' style="position:absolute; top:0; left:0; right:0; bottom:0; resize:none; width:100%; height:100%;"></textarea>
    </td>
    <td class="p-0 whitespace-nowrap" style="position:relative;" data-field="checkbox2_option_1">
        <textarea class="inline-flex text-xs font-semibold  textareatd textarea{{$objeto->id}}" name="textarea" wire:model.defer='checkbox2_option_1' style="position:absolute; top:0; left:0; right:0; bottom:0; resize:none; width:100%; height:100%;"></textarea>
    </td>
    <td class="p-0 whitespace-nowrap" style="position:relative;" data-field="checkbox2_option_2">
        <textarea class="inline-flex text-xs font-semibold  textareatd textarea{{$objeto->id}}" name="textarea" wire:model.defer='checkbox2_option_2' style="position:absolute; top:0; left:0; right:0; bottom:0; resize:none; width:100%; height:100%;"></textarea>
    </td>
    <td class="p-0 whitespace-nowrap" style="position:relative;" data-field="checkbox2_option_3">
        <textarea class="inline-flex text-xs font-semibold  textareatd textarea{{$objeto->id}}" name="textarea" wire:model.defer='checkbox2_option_3' style="position:absolute; top:0; left:0; right:0; bottom:0; resize:none; width:100%; height:100%;"></textarea>
    </td>
    <td class='px-6 py-4 whitespace-nowrap'  style="position:relative;" data-field="created_at" >
        <textarea disabled class='textareatd text-xs font-semibold  textarea{{$objeto->id}}' name="textarea" wire:model.defer='created_at' style="position:absolute; top:0; left:0; right:0; bottom:0; resize:none; width:100%; height:100%;" ></textarea>
    </td>
    <td class='px-6 py-4 whitespace-nowrap'  style="position:relative;" data-field="updated_at" >
        <textarea disabled class='textareatd text-xs font-semibold  textarea{{$objeto->id}}' name="textarea" wire:model.defer='updated_at' style="position:absolute; top:0; left:0; right:0; bottom:0; resize:none; width:100%; height:100%;"></textarea>
    </td> 
</tr>
                          