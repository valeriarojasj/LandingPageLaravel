<div class="py-12">
  <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
    <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
      <!--<x-jet-welcome />-->
      <!--Container-->
        <div class="container w-full px-2 mx-auto md:w-4/5 xl:w-3/5">
          <!--Title-->
            <h1 class="px-2 py-8 text-xl font-bold break-normal md:text-2xl">
              Usuarios y Roles
            </h1>
          <!--Card-->
            <div id='users-roles' class="mt-6 bg-white rounded shadow lg:mt-0">
              <div class="overflow-x-auto sm:-mx-6 lg:-mx-8" >  <!--este div hace que haga scroll la tabla -->
                <div class="inline-block min-w-full py-2 space-between sm:px-6 lg:px-8">
                  <div class="mb-3 border-b border-gray-200 shadow align-left sm:rounded-lg">
                    <table class="table mb-0" id="roles-table">
                      <thead class="bg-blue-100">
                        <tr>
                          <th scope="col" class="px-6 py-3 text-xs font-bold tracking-wider text-center text-blue-700 uppercase align-text-top hard_left">
                            Opciones de Edición
                          </th>
                          <th scope="col" class="px-6 py-3 text-xs font-bold tracking-wider text-center text-blue-700 uppercase align-text-top next_left">
                            ID
                          </th>
                          <th scope="col" class="px-6 py-3 text-xs font-bold tracking-wider text-center text-blue-700 uppercase align-text-top">
                            Nombre
                          </th>
                          <th scope="col" class="px-6 py-3 text-xs font-bold tracking-wider text-center text-blue-700 uppercase align-text-top">
                            Email
                          </th>
                          <th scope="col" class="px-6 py-3 text-xs font-bold tracking-wider text-center text-blue-700 uppercase align-text-top">
                            Status
                          </th>
                          <th scope="col" class="px-6 py-3 text-xs font-bold tracking-wider text-center text-blue-700 uppercase align-text-top">
                            Rol
                          </th>
                          <th scope="col" class="px-6 py-3 text-xs font-bold tracking-wider text-center text-blue-700 uppercase align-text-top">
                            Fecha de Creación
                          </th>
                          <th scope="col" class="px-6 py-3 text-xs font-bold tracking-wider text-center text-blue-700 uppercase align-text-top">
                            Fecha de Actualización
                          </th>
                        </tr>
                      </thead>
                      <tbody class="bg-white divide-y divide-gray-200">
                        <!-- ROWS  -->
                        @foreach($users as $user)
                          <tr  style="height:auto;">
                            <td class='px-6 py-4 text-sm font-medium text-right align-middle hard_left iconitos whitespace-nowrap'>
                              @if(!$editable)
                                <div>
                                  <div class="px-2 btnDiv">
                                    <button  wire:click='edit' class="w-full mt-1 font-bold text-pink-700 bg-pink-300 rounded-md deleteBtn button button-small edit focus:outline-none">
                                      Editar
                                    </button>
                                    <button   class="w-full mt-1 font-bold text-pink-700 bg-pink-300 rounded-md deleteBtn button button-small edit focus:outline-none">
                                      Eliminar
                                    </button>
                                  </div>
                              @else
                                  <div >  
                                    <button class="w-full mt-1 font-bold text-pink-700 bg-pink-300 rounded-md deleteBtn button button-small edit focus:outline-none">
                                      Guardar
                                    </button>
                                    <button wire:click='cancel'  class="w-full mt-1 font-bold text-pink-700 bg-pink-300 rounded-md deleteBtn button button-small edit focus:outline-none">
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
                                <select>
                                  <option value="Admin" {{ $user->status == 'activo' ? 'selected' : '' }}>
                                    Activo
                                  </option>
                                  <option value="User" {{ $user->status == 'inactivo' ? 'selected' : '' }}>
                                    Inactivo
                                  </option>
                                </select>
                              @endif
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap" style="position:relative;" data-field="role" >
                              @if(!$editable)
                                {{$user->role_name ? $user->role_name : 'SIN ROL ASIGNADO'}} 
                              @else
                                <select>
                                  <option value="">
                                    Asigná el rol
                                  </option>
                                  <option value="Admin" {{ $user->role_name == 'Admin' ? 'selected' : '' }}>
                                    Administrador
                                  </option>
                                  <option value="User" {{ $user->role_name == 'User' ? 'selected' : '' }}>
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
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          <!--/Card-->
          {{$users->links('pagination::tailwind')}}
        </div>
      <!--/container-->
    </div>
  </div>
</div>
