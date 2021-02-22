<tr  style="height:auto;">
        <td class='px-6 py-4 text-sm font-medium text-right align-middle hard_left iconitos whitespace-nowrap'>
            @if(!$editable)
            <div>
                <div class="px-2 btnDiv">
                <button  wire:click='edit' class="w-full font-bold text-blue-700 bg-blue-200 rounded-md focus:outline-none editBtn button button-small edit">
                    Editar
                </button>
                <button   class="w-full mt-1 font-bold text-pink-700 bg-pink-300 rounded-md deleteBtn button button-small edit focus:outline-none">
                    Eliminar
                </button>
                </div>
            @else
                <div >  
                <button class="w-full font-bold text-green-700 bg-green-200 rounded-md saveBtn button button-small edit focus:outline-none">
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
            {{$user->status}} 
            @else
            <select wire:model.defer='user.status'>
                <option value="activo">
                Activo
                </option>
                <option value="inactivo">
                Inactivo
                </option>
            </select>
            @endif
        </td>
        <td class="px-6 py-4 whitespace-nowrap" style="position:relative;" data-field="role" >
            @if(!$editable)
            {{$user->role_name ? $user->role_name : 'SIN ROL ASIGNADO'}} 
            @else
            <x-select
                wire:model='user.role_name'
                id="tab-{{ $user->id }}"
                :options="$tabOptions->toArray()"
                selected="tabs.{{ $activeTab }}.option"
            />
            <select wire:model.defer='user.role_name'>
                <option value="">
                Asigná el rol
                </option>
                <option value="Admin">
                Administrador
                </option>
                <option value="User">
                Usuario
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
