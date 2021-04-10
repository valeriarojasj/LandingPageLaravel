<div class="py-12">
  <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
    <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
      <!--<x-jet-welcome />-->
      <!--Container-->
      <div class="container w-full px-2 mx-auto rounded md:w-4/5 xl:w-3/5">
        <!--Title-->
        <h1 class="px-2 py-8 text-xl font-bold break-normal md:text-2xl">
          Lista de Subscriptores
        </h1>
        <div class="row">
        <div class="col-md-2">
        <button wire:click='getAllSubscription' class="mt-1 mb-4 font-bold text-gray-700 bg-gray-300 rounded-md deleteBtn button button-small edit focus:outline-none">
          Excel
        </button>
      </div>
        <div class="col-md-5">
          <div class="form-inline">  
            <label for="downloadedFilter" class="mr-2">
              Filtrar por Descargado: 
            </label>
            <select wire:model='downloadedFilter' class="form-control col-md-6" name="downloadedFilter" id="downloadedFilter">
              <option value=''>
                Todo
              </option>
              <option value='SI'>
                Si
              </option>
              <option value='NO'>
                No
              </option>
            </select>
          </div>
        </div>
      </div>

        <!--Card-->
        <div id='users-roles' class="mt-6 bg-white lg:mt-0">
          <div class="overflow-x-auto sm:-mx-6 lg:-mx-8" >
            <div class="inline-block min-w-full pt-0 space-between sm:px-6 lg:px-8">
              <div class="mb-3 overflow-hidden border-b border-gray-200 rounded-lg shadow align-left sm:rounded-lg">
                @if(!$subscriptions->isEmpty())
                  <table class="table mb-0" id="subscriptionTable">
                    <thead class="bg-blue-100">
                      <tr>
                        <th scope="col" class="px-6 py-3 text-xs font-bold tracking-wider text-center text-blue-700 uppercase align-text-top hard_left">
                          Opciones de Edición
                        </th>
                        <th scope="col" class="px-6 py-3 text-xs font-bold tracking-wider text-center text-blue-700 uppercase align-text-top next_left">
                          ID
                        </th>
                        <th scope="col" class="px-6 py-3 text-xs font-bold tracking-wider text-center text-blue-700 uppercase align-text-top">
                          Email
                        </th>
                        <th scope="col" class="px-6 py-3 text-xs font-bold tracking-wider text-center text-blue-700 uppercase align-text-top">
                          Fecha de Creación
                        </th>
                        <th scope="col" class="px-6 py-3 text-xs font-bold tracking-wider text-center text-blue-700 uppercase align-text-top">
                          Fecha de Actualización
                        </th>
                        <th scope="col" class="px-6 py-3 text-xs font-bold tracking-wider text-center text-blue-700 uppercase align-text-top">
                          Descargado
                        </th>
                        <th scope="col" class="px-6 py-3 text-xs font-bold tracking-wider text-center text-blue-700 uppercase align-text-top">
                          Descargado por
                        </th>
                        <th scope="col" class="px-6 py-3 text-xs font-bold tracking-wider text-center text-blue-700 uppercase align-text-top">
                          Fecha de Descarga
                        </th>
                      </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                      @foreach($subscriptions as $subscription)
                        <tr  style="height:auto;">
                          <td class='px-6 py-4 text-sm font-medium text-center align-middle iconitos whitespace-nowrap' style="width:20px;">
                            <div class="px-2 btnDiv">
                              <button  wire:click="destroy({{ $subscription->id }})" class="w-full mt-1 font-bold text-pink-700 bg-pink-300 rounded-md deleteBtn button button-small edit focus:outline-none">
                                Eliminar
                              </button>
                            </div>
                          </td>
                          <td class="px-6 py-4 text-sm text-center place-content-center whitespace-nowrap" style="position:relative; vertical-align:middle;" data-field="id">
                            {{$subscription->id}}
                          </td>
                          <td class="px-6 py-4 text-center whitespace-nowrap" style="position:relative; vertical-align:middle;" data-field="email" >
                            {{$subscription->email}}
                          </td>
                          <td class='px-6 py-4 text-sm text-center whitespace-nowrap'  style="position:relative; vertical-align:middle;" data-field="created_at" >
                            {{$subscription->created_at->format('d-m-Y H:i:s')}}
                          </td>
                          <td class='px-6 py-4 text-sm text-center whitespace-nowrap'  style="position:relative; vertical-align:middle; " data-field="updated_at" >
                            {{$subscription->updated_at->format('d-m-Y H:i:s')}}
                          </td> 
                          <td class='px-6 py-4 text-sm text-center whitespace-nowrap'  style="position:relative; vertical-align:middle; " data-field="updated_at" >
                            {{$subscription->download_status==1 ? 'SI' : 'NO'}}
                          </td> 
                          <td class='px-6 py-4 text-sm text-center whitespace-nowrap'  style="position:relative; vertical-align:middle; " data-field="updated_at" >
                            {{$subscription->downloadedBy ? $subscription->downloadedBy->email : ''}}
                          </td> 
                          <td class='px-6 py-4 text-sm text-center whitespace-nowrap'  style="position:relative; vertical-align:middle; " data-field="updated_at" >
                            {{$subscription->downloaded_at ? date( 'd-m-Y H:i:s', strtotime( $subscription->downloaded_at)) : ''}}
                          </td>
                        </tr>
                      @endforeach
                    </tbody>
                  </table>
                @else
                  <div>No hay registros</div>
                @endif
              </div>
              <div class="mb-4">
                {{$subscriptions->links()}}    
              </div>
            </div>
          </div>
        </div>
        <!--/Card-->
      </div>
      <!--/container-->
    </div>
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.16.9/xlsx.full.min.js"></script>
  <script type="text/javascript" src="{{asset('js/fileSaver.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/excel.js')}}"></script>
  <script>
    window.addEventListener('downloadSubscriptions', event => {
      downloadAsExcel(event.detail.subscriptions);
    });
  </script>
</div>
