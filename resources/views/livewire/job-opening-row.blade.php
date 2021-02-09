<tr data-id='{{$uuid}}' style="height:auto;">
 <td class='py-4 text-sm font-medium text-right align-middle iconitospx-6 whitespace-nowrap'>
    @if($nuevoObjeto)
    <button  wire:click="store()" class="w-full font-bold text-white bg-green-400 rounded-md button button-small edit">
        Guardar2
    </button>
    <button  wire:click="cancel({{$objeto->id}})" class="w-full font-bold text-white bg-blue-400 rounded-md button button-small edit">
        Cancelar2
    </button>
    @else
    @if(!$editable)
    <button  wire:click="update({{$objeto->id}})" class="w-full font-bold text-white bg-green-400 rounded-md button button-small edit">
        Guardar
    </button>
    <button  wire:click="cancel({{$objeto->id}})" class="w-full font-bold text-white bg-blue-400 rounded-md button button-small edit">
        Cancelar
    </button>
    @else
    <button  wire:click="edit({{$objeto->id}})" class="w-full font-bold text-white bg-blue-400 rounded-md button button-small edit">
        Editar
    </button>
    <button  wire:click="open({{ $objeto->id }})" class="w-full font-bold text-white bg-red-400 rounded-md button button-small edit">
        Eliminar
     </button>
     @endif
     @endif
    </td>
    <td class="px-6 py-4 whitespace-nowrap" style="position:relative;" data-field="id">
      <textarea disabled class='text-xs font-semibold textareatd ' name="textarea" wire:model.defer='uuid' style="position:absolute; top:0; left:0; right:0; bottom:0; resize:none; width:100%; height:100%;"></textarea>
    </td>
    <td class="px-6 py-4 whitespace-nowrap" style="position:relative;" data-field="job_title" >
        <textarea class="inline-flex text-xs font-semibold text-green-800 bg-green-100 textareatd textarea{{$objeto->id}}" name="textarea" wire:model.defer='job_title' style="position:absolute; top:0; left:0; right:0; bottom:0; resize:none; width:100%; height:100%;"></textarea>
    </td>
    <td class="p-0 whitespace-nowrap" style="position:relative;" data-field="company_type" >
        <textarea class="inline-flex text-xs font-semibold text-green-800 bg-green-100 textareatd textarea{{$objeto->id}}" name="textarea" wire:model.defer='company_type' style="position:absolute; top:0; left:0; right:0; bottom:0; resize:none; width:100%; height:100%;"></textarea>
    </td>
    <td class="p-0 whitespace-nowrap" style="position:relative;" data-field="job_location">
        <textarea class="inline-flex text-xs font-semibold text-green-800 bg-green-100 textareatd textarea{{$objeto->id}}" name="textarea" wire:model.defer='job_location' style="position:absolute; top:0; left:0; right:0; bottom:0; resize:none; width:100%; height:100%;"></textarea>
    </td>
    <td class="p-0 whitespace-nowrap" style="position:relative;" data-field="open_question_1">
        <textarea class="inline-flex text-xs font-semibold text-green-800 bg-green-100 textareatd textarea{{$objeto->id}}" name="textarea" wire:model.defer='open_question_1' style="position:absolute; top:0; left:0; right:0; bottom:0; resize:none; width:100%; height:100%;"></textarea>
    </td>
    <td class="p-0 whitespace-nowrap" style="position:relative;" data-field="open_question_2">
        <textarea class="inline-flex text-xs font-semibold text-green-800 bg-green-100 textareatd textarea{{$objeto->id}}" name="textarea" wire:model.defer='open_question_2' style="position:absolute; top:0; left:0; right:0; bottom:0; resize:none; width:100%; height:100%;"></textarea>
    </td>
    <td class="p-0 whitespace-nowrap" style="position:relative;" data-field="multiple_choice_question_1">
        <textarea class="inline-flex text-xs font-semibold text-green-800 bg-green-100 textareatd textarea{{$objeto->id}}" name="textarea" wire:model.defer='multiple_choice_question_1' style="position:absolute; top:0; left:0; right:0; bottom:0; resize:none; width:100%; height:100%;"></textarea>
    </td>
    <td class="p-0 whitespace-nowrap" style="position:relative;" data-field="multiple_choice1_option_1">
        <textarea class="inline-flex text-xs font-semibold text-green-800 bg-green-100 textareatd textarea{{$objeto->id}}" name="textarea" wire:model.defer='multiple_choice1_option_1' style="position:absolute; top:0; left:0; right:0; bottom:0; resize:none; width:100%; height:100%;"></textarea>
    </td>
    <td class="p-0 whitespace-nowrap" style="position:relative;" data-field="multiple_choice1_option_2">
        <textarea class="inline-flex text-xs font-semibold text-green-800 bg-green-100 textareatd textarea{{$objeto->id}}" name="textarea" wire:model.defer='multiple_choice1_option_2' style="position:absolute; top:0; left:0; right:0; bottom:0; resize:none; width:100%; height:100%;"></textarea>
    </td>
    <td class="p-0 whitespace-nowrap" style="position:relative;" data-field="multiple_choice1_option_3">
        <textarea class="inline-flex text-xs font-semibold text-green-800 bg-green-100 textareatd textarea{{$objeto->id}}" name="textarea" wire:model.defer='multiple_choice1_option_3' style="position:absolute; top:0; left:0; right:0; bottom:0; resize:none; width:100%; height:100%;"></textarea>
    </td>
    <td class="p-0 whitespace-nowrap" style="position:relative;" data-field="multiple_choice_question_2">
        <textarea class="inline-flex text-xs font-semibold text-green-800 bg-green-100 textareatd textarea{{$objeto->id}}" name="textarea" wire:model.defer='multiple_choice_question_2' style="position:absolute; top:0; left:0; right:0; bottom:0; resize:none; width:100%; height:100%;"></textarea>
    </td>
    <td class="p-0 whitespace-nowrap" style="position:relative;" data-field="multiple_choice2_option_1">
        <textarea class="inline-flex text-xs font-semibold text-green-800 bg-green-100 textareatd textarea{{$objeto->id}}" name="textarea" wire:model.defer='multiple_choice2_option_1' style="position:absolute; top:0; left:0; right:0; bottom:0; resize:none; width:100%; height:100%;"></textarea>
    </td>
    <td class="p-0 whitespace-nowrap" style="position:relative;" data-field="multiple_choice2_option_2">
        <textarea class="inline-flex text-xs font-semibold text-green-800 bg-green-100 textareatd textarea{{$objeto->id}}" name="textarea" wire:model.defer='multiple_choice2_option_2' style="position:absolute; top:0; left:0; right:0; bottom:0; resize:none; width:100%; height:100%;"></textarea>
    </td>
    <td class="p-0 whitespace-nowrap" style="position:relative;" data-field="multiple_choice2_option_3">
        <textarea class="inline-flex text-xs font-semibold text-green-800 bg-green-100 textareatd textarea{{$objeto->id}}" name="textarea" wire:model.defer='multiple_choice2_option_3' style="position:absolute; top:0; left:0; right:0; bottom:0; resize:none; width:100%; height:100%;"></textarea>
    </td>
    <td class="p-0 whitespace-nowrap" style="position:relative;" data-field="checkbox_question_1">
        <textarea class="inline-flex text-xs font-semibold text-green-800 bg-green-100 textareatd textarea{{$objeto->id}}" name="textarea" wire:model.defer='checkbox_question_1' style="position:absolute; top:0; left:0; right:0; bottom:0; resize:none; width:100%; height:100%;"></textarea>
    </td>
    <td class="p-0 whitespace-nowrap" style="position:relative;" data-field="checkbox1_option_1">
        <textarea class="inline-flex text-xs font-semibold text-green-800 bg-green-100 textareatd textarea{{$objeto->id}}" name="textarea" wire:model.defer='checkbox1_option_1' style="position:absolute; top:0; left:0; right:0; bottom:0; resize:none; width:100%; height:100%;"></textarea>
    </td>
    <td class="p-0 whitespace-nowrap" style="position:relative;" data-field="checkbox1_option_2">
        <textarea class="inline-flex text-xs font-semibold text-green-800 bg-green-100 textareatd textarea{{$objeto->id}}" name="textarea" wire:model.defer='checkbox1_option_2' style="position:absolute; top:0; left:0; right:0; bottom:0; resize:none; width:100%; height:100%;"></textarea>
    </td>
    <td class="p-0 whitespace-nowrap" style="position:relative;" data-field="checkbox1_option_3">
        <textarea class="inline-flex text-xs font-semibold text-green-800 bg-green-100 textareatd textarea{{$objeto->id}}" name="textarea" wire:model.defer='checkbox1_option_3' style="position:absolute; top:0; left:0; right:0; bottom:0; resize:none; width:100%; height:100%;"></textarea>
    </td>
    <td class="p-0 whitespace-nowrap" style="position:relative;" data-field="checkbox_question_2">
        <textarea class="inline-flex text-xs font-semibold text-green-800 bg-green-100 textareatd textarea{{$objeto->id}}" name="textarea" wire:model.defer='checkbox_question_2' style="position:absolute; top:0; left:0; right:0; bottom:0; resize:none; width:100%; height:100%;"></textarea>
    </td>
    <td class="p-0 whitespace-nowrap" style="position:relative;" data-field="checkbox2_option_1">
        <textarea class="inline-flex text-xs font-semibold text-green-800 bg-green-100 textareatd textarea{{$objeto->id}}" name="textarea" wire:model.defer='checkbox2_option_1' style="position:absolute; top:0; left:0; right:0; bottom:0; resize:none; width:100%; height:100%;"></textarea>
    </td>
    <td class="p-0 whitespace-nowrap" style="position:relative;" data-field="checkbox2_option_2">
        <textarea class="inline-flex text-xs font-semibold text-green-800 bg-green-100 textareatd textarea{{$objeto->id}}" name="textarea" wire:model.defer='checkbox2_option_2' style="position:absolute; top:0; left:0; right:0; bottom:0; resize:none; width:100%; height:100%;"></textarea>
    </td>
    <td class="p-0 whitespace-nowrap" style="position:relative;" data-field="checkbox2_option_3">
        <textarea class="inline-flex text-xs font-semibold text-green-800 bg-green-100 textareatd textarea{{$objeto->id}}" name="textarea" wire:model.defer='checkbox2_option_3' style="position:absolute; top:0; left:0; right:0; bottom:0; resize:none; width:100%; height:100%;"></textarea>
    </td>
    <td class='px-6 py-4 whitespace-nowrap'  style="position:relative;" data-field="created_at" >
        <textarea disabled class='textareatd text-xs font-semibold  textarea{{$objeto->id}}' name="textarea" wire:model.defer='created_at' style="position:absolute; top:0; left:0; right:0; bottom:0; resize:none; width:100%; height:100%;" ></textarea>
    </td>
    <td class='px-6 py-4 whitespace-nowrap'  style="position:relative;" data-field="updated_at" >
        <textarea disabled class='textareatd text-xs font-semibold  textarea{{$objeto->id}}' name="textarea" wire:model.defer='updated_at' style="position:absolute; top:0; left:0; right:0; bottom:0; resize:none; width:100%; height:100%;"></textarea>
    </td> 
</tr>
                          