<tr data-id='{{$uuid}}'>
    <td class='align-middle iconitos'>
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
    
    <td class='tdParentInput px-0 py-0' data-field="id">
        <textarea
            disabled
            class='textareatd'
            name="textarea"
            wire:model.defer='uuid'>
        </textarea>
    </td>
    <td class='tdParentInput px-0 py-0' data-field="job_title">
        <textarea
            class='textareatd textarea{{$objeto->id}}'
            name="textarea"
            wire:model.defer='job_title'>
        </textarea>
    </td>
    <td class='tdParentInput px-0 py-0' data-field="company_type">
        <textarea
            class='textareatd textarea{{$objeto->id}}'
            name="textarea"
            wire:model.defer='company_type'>
        </textarea>
    </td>
    <td class='tdParentInput px-0 py-0' data-field="job_location">
        <textarea
            class='textareatd textarea{{$objeto->id}}'
            name="textarea"
            wire:model.defer='job_location'>
        </textarea>
    </td>
    <td class='tdParentInput px-0 py-0' data-field="open_question_1">
        <textarea
            class='textareatd textarea{{$objeto->id}}'
            name="textarea"
            wire:model.defer='open_question_1'>
        </textarea>
    </td>
    <td class='tdParentInput px-0 py-0' data-field="open_question_2">
        <textarea
            class='textareatd textarea{{$objeto->id}}'
            name="textarea"
            wire:model.defer='open_question_2'>
        </textarea>
    </td>
    <td class='tdParentInput px-0 py-0' data-field="multiple_choice_question_1">
        <textarea
            class='textareatd textarea{{$objeto->id}}'
            name="textarea"
            wire:model.defer='multiple_choice_question_1'>
        </textarea>
    </td>
    <td class='tdParentInput px-0 py-0' data-field="multiple_choice1_option_1">
        <textarea
            class='textareatd textarea{{$objeto->id}}'
            name="textarea"
            wire:model.defer='multiple_choice1_option_1'>
        </textarea>
    </td>
    <td class='tdParentInput px-0 py-0' data-field="multiple_choice1_option_2">
        <textarea
            class='textareatd textarea{{$objeto->id}}'
            name="textarea"
            wire:model.defer='multiple_choice1_option_2'>
        </textarea>
    </td>
    <td class='tdParentInput px-0 py-0' data-field="multiple_choice1_option_3">
        <textarea
            class='textareatd textarea{{$objeto->id}}'
            name="textarea"
            wire:model.defer='multiple_choice1_option_3'>
        </textarea>
    <td class='tdParentInput px-0 py-0' data-field="multiple_choice_question_2">
        <textarea
            class='textareatd textarea{{$objeto->id}}'
            name="textarea"
            wire:model.defer='multiple_choice_question_2'>
        </textarea>
    </td>
    <td class='tdParentInput px-0 py-0' data-field="multiple_choice2_option_1">
        <textarea
            class='textareatd textarea{{$objeto->id}}'
            name="textarea"
            wire:model.defer='multiple_choice2_option_1'>
        </textarea>
    </td>
    <td class='tdParentInput px-0 py-0' data-field="multiple_choice2_option_2">
        <textarea
            class='textareatd textarea{{$objeto->id}}'
            name="textarea"
            wire:model.defer='multiple_choice2_option_2'>
        </textarea>
    </td>
    <td class='tdParentInput px-0 py-0' data-field="multiple_choice2_option_3">
        <textarea
            class='textareatd textarea{{$objeto->id}}'
            name="textarea"
            wire:model.defer='multiple_choice2_option_3'>
        </textarea>
    </td>
    <td class='tdParentInput px-0 py-0' data-field="checkbox_question_1">
        <textarea
            class='textareatd textarea{{$objeto->id}}'
            name="textarea"
            wire:model.defer='checkbox_question_1'>
        </textarea>
    </td>
    <td class='tdParentInput px-0 py-0' data-field="checkbox1_option_1">
        <textarea
            class='textareatd textarea{{$objeto->id}}'
            name="textarea"
            wire:model.defer='checkbox1_option_1'>
        </textarea>
    </td>
    <td class='tdParentInput px-0 py-0' data-field="checkbox1_option_2">
        <textarea
            class='textareatd textarea{{$objeto->id}}'
            name="textarea"
            wire:model.defer='checkbox1_option_2'>
        </textarea>
    </td>
    <td class='tdParentInput px-0 py-0' data-field="checkbox1_option_3">
        <textarea
            class='textareatd textarea{{$objeto->id}}'
            name="textarea"
            wire:model.defer='checkbox1_option_3'>
        </textarea>
    </td>
    <td class='tdParentInput px-0 py-0' data-field="checkbox_question_2">
        <textarea
            class='textareatd textarea{{$objeto->id}}'
            name="textarea"
            wire:model.defer='checkbox_question_2'>
        </textarea>
    </td>
    <td class='tdParentInput px-0 py-0' data-field="checkbox2_option_1">
        <textarea
            class='textareatd textarea{{$objeto->id}}'
            name="textarea"
            wire:model.defer='checkbox2_option_1'>
        </textarea>
    </td>
    <td class='tdParentInput px-0 py-0' data-field="checkbox2_option_2">
        <textarea
            class='textareatd textarea{{$objeto->id}}'
            name="textarea"
            wire:model.defer='checkbox2_option_2'>
        </textarea>
    </td>
    <td class='tdParentInput px-0 py-0 tdParentInput{{$objeto->id}}' data-field="checkbox2_option_3">
        <textarea
            class='textareatd textarea{{$objeto->id}}'
            name="textarea"
            wire:model.defer='checkbox2_option_3'>
        </textarea>
    </td>
    <td class='tdParentInput px-0 py-0' data-field="created_at" >
        <textarea
            disabled
            class='textareatd'
            name="textarea"
            wire:model.defer='created_at'>
        </textarea>
    </td>
    <td class='tdParentInput px-0 py-0' data-field="updated_at" >
        <textarea
            disabled
            class='textareatd'
            name="textarea"
            wire:model.defer='updated_at'>
        </textarea>
    </td>
</tr>
