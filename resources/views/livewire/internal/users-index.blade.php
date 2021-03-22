<div class="py-12">
  <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
    <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
      <!--<x-jet-welcome />-->
      <!--Container-->
      <div class="container w-full px-2 mx-auto md:w-4/5 xl:w-3/5">
        <h1 class="px-2 py-8 text-xl font-bold break-normal md:text-2xl" hidden>
          Roles y Permisos
        </h1>
        <h2 style="font-size:1.5rem !important;" class="mt-5 mb-2 ">
          Permisos
        </h2>




      </div>
    </div>
  </div>
</div>


<div class="py-12">
  <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
    <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
      <!--<x-jet-welcome />-->
      <!--Container-->
        <div class="container w-full px-2 mx-auto md:w-4/5 xl:w-3/5">
          <!--Title-->
            <h2 style="font-size:1.5rem !important;" class="mt-5 mb-4">
              Usuarios y Roles
            </h2>
          <!--Card-->
            <div id='users-roles' class="mt-6 bg-white rounded lg:mt-0">
              <div class="overflow-x-auto sm:-mx-6 lg:-mx-8" >  <!--este div hace que haga scroll la tabla -->
                <div class="inline-block min-w-full pt-0 space-between sm:px-6 lg:px-8">
                  <div class="mb-3 overflow-hidden border-b border-gray-200 rounded-lg shadow align-left sm:rounded-lg">
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
                          <livewire:internal.user-row :key="$user->id" :user="$user"/>
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
