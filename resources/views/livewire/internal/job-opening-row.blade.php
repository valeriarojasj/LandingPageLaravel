<tr id="{{$uuid}}" data-id='{{$uuid}}' style="height:auto;">
    <td class='px-6 py-4 text-sm font-medium text-right align-middle bg-white first-fixed-col hard_left iconitos whitespace-nowrap'>
        <div class="px-2 btnDiv">
            @if($nuevoObjeto)
                <button  wire:click="store()" class="w-full font-bold text-green-700 bg-green-200 rounded-md focus:outline-none saveBtn button button-small edit">
                    Guardar
                </button>
                <button  wire:click="$emitUp('hideNewRow')" class="w-full mt-1 font-bold text-white bg-gray-500 rounded-md focus:outline-none cancelBtn button button-small edit">
                    Cancelar
                </button>
            @else
                @if($editable)
                    <button  wire:click="update({{$objeto->id}})" class="w-full font-bold text-green-700 bg-green-200 rounded-md saveBtn button button-small edit focus:outline-none">
                        Actualizar
                    </button>
                    <button  wire:click="cancel({{$objeto->id}})" class="w-full mt-1 font-bold text-white bg-gray-500 rounded-md focus:outline-none cancelBtn button button-small edit">
                        Cancelar
                    </button>
                @else
                    <button  wire:click="edit()" class="w-full font-bold text-blue-700 bg-blue-200 rounded-md focus:outline-none editBtn button button-small edit">
                        Editar
                    </button>
                    @if($isAdmin)
                        <button  wire:click="open({{ $objeto->id }})" class="w-full mt-1 font-bold text-pink-700 bg-pink-300 rounded-md deleteBtn button button-small edit focus:outline-none">
                            Eliminar
                        </button>
                    @endif
                @endif
            @endif
        </div>
    </td>
    <td class="px-6 py-4 whitespace-nowrap" style="position:relative; vertical-align:middle;" data-field="job_status" >
        @if(!$editable)
            <span class = "inline-flex px-2 text-xs font-semibold leading-5 rounded-full @if($job_status=='Borrador') text-blue-800 bg-blue-100 @elseif($job_status=='Publicada') text-green-800 bg-green-100 @else text-gray-800 bg-gray-100 @endif">
                {{$job_status}}
            </span>
        @else
            <select wire:model='job_status'>
                <option value="Borrador">
                    Borrador
                </option>
                <option value="Publicada">
                    Publicada
                </option>
                <option value="Cerrada">
                    Cerrada
                </option>
            </select>
        @endif
    </td>
    <td class="px-6 py-4 text-center next_left place-content-center whitespace-nowrap" style="position:relative; vertical-align: middle;" data-field="id">
        {{$candidates}}
    </td>
    <td class="px-6 py-4 text-center next_left place-content-center whitespace-nowrap" style="position:relative;" data-field="id">
        <textarea disabled class="text-xs font-semibold text-center textareatd" name="textarea" wire:model.defer='uuid' style="position:absolute; top:0; left:0; resize:none; width:100%; height:100%;">
        </textarea>
    </td>
    <td  class="px-6 py-4 text-center whitespace-nowrap" style="position:relative; vertical-align:middle;" data-field="job_title" >
        <textarea  {{ $nuevoObjeto||$editable? '' : 'disabled' }} class="inline-flex text-center text-xs font-semibold textareatd  {{ ($nuevoObjeto||$editable) ? 'bg-green-100 text-green-800' : '' }}" placeholder="@error('job_title'){{ $message }}@enderror"name="textarea" wire:model.defer='job_title' style="position:absolute; top:0; left:0; right:0; bottom:0; resize:none; width:100%; height:100%; vertical-align:middle; ">
        </textarea> 
    </td>
    <td class="p-0 text-center whitespace-nowrap" style="position:relative; vertical-align:middle;" data-field="company_type" >
        <textarea {{ $nuevoObjeto||$editable? '' : 'disabled' }}  class="inline-flex  text-center text-xs font-semibold textareatd  {{ ($nuevoObjeto||$editable) ? 'bg-green-100 text-green-800' : '' }}" name="textarea" placeholder="@error('company_type'){{ $message }}@enderror" wire:model.defer='company_type' style="position:absolute; top:0; left:0; right:0; bottom:0; resize:none; width:100%; height:100%; vertical-align:middle;">
        </textarea> 
    </td>
    <td class="p-0 text-center whitespace-nowrap" style="position:relative; vertical-align:middle;" data-field="job_location">
        <textarea {{ $nuevoObjeto||$editable? '' : 'disabled' }}  class="inline-flex  text-center text-xs font-semibold textareatd  {{ ($nuevoObjeto||$editable) ? 'bg-green-100 text-green-800' : '' }}"  placeholder="@error('job_location'){{ $message }}@enderror" name="textarea" wire:model.defer='job_location' style="position:absolute; top:0; left:0; right:0; bottom:0; resize:none; width:100%; height:100%; vertical-align:middle;">
        </textarea>
    </td>
    <td class="p-0 text-center whitespace-nowrap" style="position:relative; vertical-align:middle;" data-field="job_link">
        <textarea {{ $nuevoObjeto||$editable? '' : 'disabled' }}  class="inline-flex  text-center text-xs font-semibold textareatd  {{ ($nuevoObjeto||$editable) ? 'bg-green-100 text-green-800' : '' }}"  placeholder="@error('job_link'){{ $message }}@enderror" name="textarea" wire:model.defer='job_link' style="position:absolute; top:0; left:0; right:0; bottom:0; resize:none; width:100%; height:100%; vertical-align:middle;">
        </textarea>
    </td>
    <td class="p-0 text-center whitespace-nowrap" style="position:relative; vertical-align:middle;" data-field="open_question_1">
        <textarea {{ $nuevoObjeto||$editable? '' : 'disabled' }}  class="inline-flex text-center text-xs font-semibold textareatd  {{ ($nuevoObjeto||$editable) ? 'bg-green-100 text-green-800' : '' }}"  name="textarea" wire:model.defer='open_question_1' style="position:absolute; top:0; left:0; right:0; bottom:0; resize:none; width:100%; height:100%;">
        </textarea>
    </td>
    <td class="p-0 text-center whitespace-nowrap" style="position:relative; vertical-align:middle;" data-field="open_question_2">
        <textarea {{ $nuevoObjeto||$editable? '' : 'disabled' }}  class="inline-flex  text-center text-xs font-semibold textareatd  {{ ($nuevoObjeto||$editable) ? 'bg-green-100 text-green-800' : '' }}" name="textarea" wire:model.defer='open_question_2' style="position:absolute; top:0; left:0; right:0; bottom:0; resize:none; width:100%; height:100%;">
        </textarea>
    </td>
    <td class="p-0 text-center whitespace-nowrap" style="position:relative; vertical-align:middle;" data-field="multiple_choice_question_1">
        <textarea  {{ $nuevoObjeto||$editable? '' : 'disabled' }} class="inline-flex  text-center text-xs font-semibold textareatd  {{ ($nuevoObjeto||$editable) ? 'bg-green-100 text-green-800' : '' }}" name="textarea" wire:model.defer='multiple_choice_question_1' style="position:absolute; top:0; left:0; right:0; bottom:0; resize:none; width:100%; height:100%;">
        </textarea>
    </td>
    <td class="p-0 text-center whitespace-nowrap" style="position:relative; vertical-align:middle;" data-field="multiple_choice1_option_1">
        <textarea  {{ $nuevoObjeto||$editable? '' : 'disabled' }}  class="inline-flex  text-center text-xs font-semibold textareatd  {{ ($nuevoObjeto||$editable) ? 'bg-green-100 text-green-800' : '' }}" name="textarea" wire:model.defer='multiple_choice1_option_1' style="position:absolute; top:0; left:0; right:0; bottom:0; resize:none; width:100%; height:100%;">
        </textarea>
    </td>
    <td class="p-0 text-center whitespace-nowrap" style="position:relative; vertical-align:middle;" data-field="multiple_choice1_option_2">
        <textarea  {{ $nuevoObjeto||$editable? '' : 'disabled' }}  class="inline-flex  text-center text-xs font-semibold textareatd  {{ ($nuevoObjeto||$editable) ? 'bg-green-100 text-green-800' : '' }}" name="textarea" wire:model.defer='multiple_choice1_option_2' style="position:absolute; top:0; left:0; right:0; bottom:0; resize:none; width:100%; height:100%;">
        </textarea>
    </td>
    <td class="p-0 text-center whitespace-nowrap" style="position:relative; vertical-align:middle;" data-field="multiple_choice1_option_3">
        <textarea  {{ $nuevoObjeto||$editable? '' : 'disabled' }}  class="inline-flex text-center text-xs font-semibold textareatd  {{ ($nuevoObjeto||$editable) ? 'bg-green-100 text-green-800' : '' }}" name="textarea" wire:model.defer='multiple_choice1_option_3' style="position:absolute; top:0; left:0; right:0; bottom:0; resize:none; width:100%; height:100%;">
        </textarea>
    </td>
    <td class="p-0 text-center whitespace-nowrap" style="position:relative; vertical-align:middle;" data-field="multiple_choice_question_2">
        <textarea  {{ $nuevoObjeto||$editable? '' : 'disabled' }}  class="inline-flex text-center text-xs font-semibold textareatd  {{ ($nuevoObjeto||$editable) ? 'bg-green-100 text-green-800' : '' }}" name="textarea" wire:model.defer='multiple_choice_question_2' style="position:absolute; top:0; left:0; right:0; bottom:0; resize:none; width:100%; height:100%;">
        </textarea>
    </td>
    <td class="p-0 text-center whitespace-nowrap" style="position:relative; vertical-align:middle;" data-field="multiple_choice2_option_1">
        <textarea  {{ $nuevoObjeto||$editable? '' : 'disabled' }}  class="inline-flex  text-center text-xs font-semibold textareatd  {{ ($nuevoObjeto||$editable) ? 'bg-green-100 text-green-800' : '' }}" name="textarea" wire:model.defer='multiple_choice2_option_1' style="position:absolute; top:0; left:0; right:0; bottom:0; resize:none; width:100%; height:100%;">
        </textarea>
    </td>
    <td class="p-0 text-center whitespace-nowrap" style="position:relative; vertical-align:middle;" data-field="multiple_choice2_option_2">
        <textarea  {{ $nuevoObjeto||$editable? '' : 'disabled' }}  class="inline-flex text-center text-xs font-semibold textareatd  {{ ($nuevoObjeto||$editable) ? 'bg-green-100 text-green-800' : '' }}" name="textarea" wire:model.defer='multiple_choice2_option_2' style="position:absolute; top:0; left:0; right:0; bottom:0; resize:none; width:100%; height:100%;">
        </textarea>
    </td>
    <td class="p-0 text-center whitespace-nowrap" style="position:relative; vertical-align:middle;" data-field="multiple_choice2_option_3">
        <textarea  {{ $nuevoObjeto||$editable? '' : 'disabled' }} class="inline-flex text-center text-xs font-semibold textareatd  {{ ($nuevoObjeto||$editable) ? 'bg-green-100 text-green-800' : '' }}" name="textarea" wire:model.defer='multiple_choice2_option_3' style="position:absolute; top:0; left:0; right:0; bottom:0; resize:none; width:100%; height:100%;">
        </textarea>
    </td>
    <td class="p-0 text-center whitespace-nowrap" style="position:relative; vertical-align:middle;" data-field="checkbox_question_1">
        <textarea  {{ $nuevoObjeto||$editable? '' : 'disabled' }}  class="inline-flex text-center text-xs font-semibold textareatd  {{ ($nuevoObjeto||$editable) ? 'bg-green-100 text-green-800' : '' }}" name="textarea" wire:model.defer='checkbox_question_1' style="position:absolute; top:0; left:0; right:0; bottom:0; resize:none; width:100%; height:100%;">
        </textarea>
    </td>
    <td class="p-0 text-center whitespace-nowrap" style="position:relative; vertical-align:middle;" data-field="checkbox1_option_1">
        <textarea  {{ $nuevoObjeto||$editable? '' : 'disabled' }}  class="inline-flex  text-center text-xs font-semibold textareatd  {{ ($nuevoObjeto||$editable) ? 'bg-green-100 text-green-800' : '' }}" name="textarea" wire:model.defer='checkbox1_option_1' style="position:absolute; top:0; left:0; right:0; bottom:0; resize:none; width:100%; height:100%;">
        </textarea>
    </td>
    <td class="p-0 text-center whitespace-nowrap" style="position:relative; vertical-align:middle;" data-field="checkbox1_option_2">
        <textarea  {{ $nuevoObjeto||$editable? '' : 'disabled' }}  class="inline-flex text-center text-xs font-semibold textareatd  {{ ($nuevoObjeto||$editable) ? 'bg-green-100 text-green-800' : '' }}" name="textarea" wire:model.defer='checkbox1_option_2' style="position:absolute; top:0; left:0; right:0; bottom:0; resize:none; width:100%; height:100%;">
        </textarea>
    </td>
    <td class="p-0 text-center whitespace-nowrap" style="position:relative; vertical-align:middle;" data-field="checkbox1_option_3">
        <textarea  {{ $nuevoObjeto||$editable? '' : 'disabled' }}  class="inline-flex text-center text-xs font-semibold textareatd  {{ ($nuevoObjeto||$editable) ? 'bg-green-100 text-green-800' : '' }}" name="textarea" wire:model.defer='checkbox1_option_3' style="position:absolute; top:0; left:0; right:0; bottom:0; resize:none; width:100%; height:100%;">
        </textarea>
    </td>
    <td class="p-0 text-center whitespace-nowrap" style="position:relative; vertical-align:middle;" data-field="checkbox_question_2">
        <textarea  {{ $nuevoObjeto||$editable? '' : 'disabled' }}  class="inline-flex  text-center text-xs font-semibold textareatd  {{ ($nuevoObjeto||$editable) ? 'bg-green-100 text-green-800' : '' }}" name="textarea" wire:model.defer='checkbox_question_2' style="position:absolute; top:0; left:0; right:0; bottom:0; resize:none; width:100%; height:100%;">
        </textarea>
    </td>
    <td class="p-0 text-center whitespace-nowrap" style="position:relative; vertical-align:middle;" data-field="checkbox2_option_1">
        <textarea {{ $nuevoObjeto||$editable? '' : 'disabled' }}  class="inline-flex  text-center text-xs font-semibold textareatd  {{ ($nuevoObjeto||$editable) ? 'bg-green-100 text-green-800' : '' }}" name="textarea" wire:model.defer='checkbox2_option_1' style="position:absolute; top:0; left:0; right:0; bottom:0; resize:none; width:100%; height:100%;">
        </textarea>
    </td>
    <td class="p-0 text-center whitespace-nowrap" style="position:relative; vertical-align:middle;" data-field="checkbox2_option_2">
        <textarea  {{ $nuevoObjeto||$editable? '' : 'disabled' }}  class="inline-flex text-center text-xs font-semibold textareatd {{ ($nuevoObjeto||$editable) ? 'bg-green-100 text-green-800' : '' }}" name="textarea" wire:model.defer='checkbox2_option_2' style="position:absolute; top:0; left:0; right:0; bottom:0; resize:none; width:100%; height:100%;">
        </textarea>
    </td>
    <td class="p-0 text-center whitespace-nowrap" style="position:relative; vertical-align:middle;" data-field="checkbox2_option_3">
        <textarea  {{ $nuevoObjeto||$editable? '' : 'disabled' }}  class="inline-flex text-center text-xs font-semibold textareatd  {{ ($nuevoObjeto||$editable) ? 'bg-green-100 text-green-800' : '' }}" name="textarea" wire:model.defer='checkbox2_option_3' style="position:absolute; top:0; left:0; right:0; bottom:0; resize:none; width:100%; height:100%;">
        </textarea>
    </td>
    <td class='px-6 py-4 text-center whitespace-nowrap'  style="position:relative; vertical-align:middle;" data-field="created_by" >
        <textarea disabled class='text-xs font-semibold text-center textareatd ' name="textarea" wire:model.defer='created_by' style="position:absolute; top:0; left:0; right:0; bottom:0; resize:none; width:100%; height:100%;" >
        </textarea>
    </td>
    <td class='px-6 py-4 text-center whitespace-nowrap'  style="position:relative; vertical-align:middle;" data-field="updated_by" >
        <textarea disabled class='text-xs font-semibold text-center textareatd ' name="textarea" wire:model.defer='updated_by' style="position:absolute; top:0; left:0; right:0; bottom:0; resize:none; width:100%; height:100%;">
        </textarea>
    </td> 
    <td class='px-6 py-4 text-center whitespace-nowrap'  style="position:relative; vertical-align:middle;" data-field="created_at" >
        <textarea disabled class='text-xs font-semibold text-center textareatd ' name="textarea" wire:model.defer='created_at' style="position:absolute; top:0; left:0; right:0; bottom:0; resize:none; width:100%; height:100%;" >
        </textarea>
    </td>
    <td class='px-6 py-4 text-center whitespace-nowrap'  style="position:relative; vertical-align:middle;" data-field="updated_at" >
        <textarea disabled class='text-xs font-semibold text-center textareatd ' name="textarea" wire:model.defer='updated_at' style="position:absolute; top:0; left:0; right:0; bottom:0; resize:none; width:100%; height:100%;">
        </textarea>
    </td> 
</tr>
                          