<tr  style="height:auto;">
        <td class='px-6 py-4 text-sm font-medium text-right align-middle hard_left iconitos whitespace-nowrap'>
            @if(!$editable)
            <div>
                <div class="px-2 btnDiv">
                    <button  wire:click='edit' class="w-full font-bold text-blue-700 bg-blue-200 rounded-md focus:outline-none editBtn button button-small edit">
                        Editar
                    </button>
                </div>
            @else
                <div >  
                <button wire:click='update' class="w-full font-bold text-green-700 bg-green-200 rounded-md saveBtn button button-small edit focus:outline-none">
                    Guardar
                </button>
                <button wire:click='cancel'  class="w-full mt-1 font-bold text-white bg-gray-500 rounded-md focus:outline-none cancelBtn button button-small edit">
                    Cancelar
                </button>
                </div>
            </div>
            @endif
        </td>
        <td class="px-6 py-4 next_left place-content-center whitespace-nowrap" style="position:relative;" data-field="id">
            {{$user->id}}   
        </td>
        <td class="px-6 py-4 whitespace-nowrap" style="position:relative;" data-field="name" >  
            {{$user->name}} 
        </td>
        <td class="px-6 py-4 whitespace-nowrap" style="position:relative;" data-field="email" >
            {{$user->email}}
        </td>
        <td class="px-6 py-4 whitespace-nowrap" style="position:relative;" data-field="status" >
            @if(!$editable)
                {{$status}} 
            @else
                <select wire:model='status'>
                    <option value="activo">
                        activo
                    </option>
                    <option value="inactivo">
                        inactivo
                    </option>
                </select>
            @endif
        </td>
        <td class="px-6 py-4 whitespace-nowrap" style="position:relative;" data-field="role" >
            @if(!$editable)
                {{$role}}
            @else
                <select wire:model='role'>
                    <option value="Admin">
                        Admin
                    </option>
                    <option value="User">
                        User
                    </option>
                </select>
            @endif
        </td>
        <td class='px-6 py-4 whitespace-nowrap'  style="position:relative;" data-field="created_at" >
            {{$user->created_at}}
        </td>
        <td class='px-6 py-4 whitespace-nowrap'  style="position:relative;" data-field="updated_at" >
            {{$user->updated_at}}
        </td> 
</tr>
