
  
    


{{-- modal button--}}
<button class="px-4 py-2 font-bold text-white bg-pink-700 border border-gray-500 rounded-full modal-open hover:border-pink-900 hover:text-pink-900">Postularme</button>
  
  <!--Modal-->
  <div class="fixed top-0 left-0 flex items-center justify-center w-full h-full opacity-0 pointer-events-none modal">
    <div class="absolute w-full h-full bg-gray-900 opacity-50 modal-overlay"></div>
    
    <div class="z-50 w-11/12 mx-auto overflow-y-auto bg-white rounded shadow-lg modal-container md:max-w-md">
      
      <div class="absolute top-0 right-0 z-50 flex flex-col items-center mt-4 mr-4 text-sm text-white cursor-pointer modal-close">
        <svg class="text-white fill-current" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
          <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
        </svg>
        <span class="text-sm"></span>
      </div>

      <!-- Add margin if you want to see some of the overlay behind the modal-->
      <div class="px-6 py-4 text-left modal-content">
        <!--Title-->
        <div class="flex items-center justify-between pb-3">
        <h1 class="text-2xl font-bold">{{$step}}</h1>
          <div class="z-50 cursor-pointer modal-close">
            <svg class="text-black fill-current" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
              <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
            </svg>
          </div>
        </div>

        <!--Body-->

        <form id="formulario" wire:submit.prevent='submit'  >  
       
          <div class="px-4 py-5 space-y-6 bg-white sm:p-6">

            @if($step == 0)

            <div class="row form-group">
              <!-- FULLNAME -->
              <fieldset>
              <div class="divFullName">
                  <label for="fullName">Nombre y Apellido</label>
                  <input  type="text" class="form-control applyInput" id="fullName" placeholder="" wire:model.lazy='fullName'>
                  @error('fullName') <span class="error">{{ $message }}</span> @enderror
              </div>
            </fieldset>
      
              <!-- DNI -->
            <fieldset>
              <div class="divDni">
                  <label for="dni">DNI</label>
                  <input  type="text" class="form-control applyInput" id="dni" placeholder="" wire:model.lazy='dni'>
                  @error('dni') <span class="error">{{ $message }}</span> @enderror
              </div>
            </fieldset>
      
              <!-- BDAY -->
            <fieldset>
              <div class="divBday">
                  <label  for="bday">Fecha de Nacimiento</label>
                  <input type="date" class="form-control date" id="bday" wire:model.lazy='bday'>
                  @error('bday') <span class="error">{{ $message }}</span> @enderror
              </div>
            </fieldset>
      
              <!-- EMAIL -->
            <fieldset>
              <div class="mt-3">
                  <label for="email">Correo Electrónico</label>
                  <input  type="email" class="form-control applyInput" id="email" placeholder="" wire:model.lazy='email'>
                  @error('email') <span class="error">{{ $message }}</span> @enderror
              </div>
            </fieldset>
      
              <!-- LINKEDIN -->
            <fieldset>
              <div class="mt-3">
                  <label for="linkedin">LinkedIn</label>
                  <input type="text" class="form-control applyInput" id="linkedin" placeholder="" wire:model.lazy='linkedin'>
                  @error('linkedin') <span class="error">{{ $message }}</span> @enderror
              </div>
            </fieldset>

              @endif



              @if($step == 1)
      
              <!-- COUNTRY -->
            <fieldset>
              <div class="divCountry">
                  <label for="country"></label>
                  <select id="country" class="form-control" wire:model.lazy='country'>
                      <option selected>Selecciona el país donde vives...</option>
                  </select>
                  @error('country') <span class="error">{{ $message }}</span> @enderror
              </div>
            </fieldset>
      
              <!-- PROVINCE -->
              <fieldset>
                  <div class="divProvince" style="display:none;">
                      <label for="province"></label>
                      <select id="province" class="form-control" wire:model.lazy='province'>
                          <option value=""> Selecciona la provincia donde vives...</option>
                      </select>
                      @error('province') <span class="error">{{ $message }}</span> @enderror
                  </div>
                </fieldset>
                  
                  <!-- CITY -->
                <fieldset>
                  <div class="divCity" style="display:none;">
                      <label for="city"></label>
                      <select id="city" class="form-control" wire:model.lazy='city'>
                          <option value="">Selecciona la ciudad donde vives...</option>
                      </select>
                      @error('city') <span class="error">{{ $message }}</span> @enderror
                  </div>
                </fieldset>

                  @endif
                  @if($step == 2)
      
              <!-- EDUCATIONLEVEL -->
            <fieldset>
              <div class="divEducation">
                  <label for="educationLevel"></label>
                  <select id="educationLevel" class="form-control" wire:model.defer='educationLevel'>
                      <option selected>Selecciona tu nivel de educación...</option>
                      <option>Secundario</option>
                      <option>Universitario</option>
                      <option>Posgrado</option>
                      <option>Doctorado</option>
                  </select>
                  @error('educationLevel') <span class="error">{{ $message }}</span> @enderror   
              </div>
            </fieldset>
          <!-- EDUCATIONSTATUS -->
          <fieldset>
          <div class="mt-3 divEducation">
            <label for="educationStatus"></label>
            <select id="educationStatus" class="form-control" wire:model.defer='educationStatus'>
                <option selected>Selecciona tu status de estudios...</option>
                <option>En curso</option>
                <option>Graduado</option>
                <option>Abandonado</option>
            </select>
            @error('educationStatus') <span class="error">{{ $message }}</span> @enderror   
        </div>
      </fieldset>
      
              <!-- CAREER -->
            <fieldset>
              <div class="mt-3 divCareer">
                  
                      <label for="career">Título universitario</label>
                      <input  type="text" class="form-control applyInput" id="career" placeholder="" wire:model.lazy='career'>
                      @error('career') <span class="error">{{ $message }}</span> @enderror   
              </div>
            </fieldset>
              
              <!-- JOBTOAPPLY -->
            <fieldset>
              <div class="mt-3 divJobtoApply">
                  <label for="jobToApply"></label>
                  <select id="jobToApply" class="form-control" wire:model.defer='jobToApply'>
                      <option selected>Selecciona la búsqueda a la cual deseas postularte...</option>
                      <<option>Analista Contable Ssr</option>
                      <option>Ejecutivo Large Corporate</option>
                      <option>Data Hub Jr</option>
                  </select>
                  @error('jobToApply') <span class="error">{{ $message }}</span> @enderror   
              </div>
            </div>
          </fieldset>
            <br>

            @endif
            @if($step == 3)

            
            <fieldset>
              <legend class="text-base font-medium text-gray-900">Seleccion Multiple</legend>
              <div class="mt-4 space-y-4">
                <div class="flex items-start">
                  <div class="flex items-center h-5">
                    <input id="checkbox1" name="checkbox1" type="checkbox" class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500" wire:model.lazy='checkbox1'>
                  </div>
                  <div class="ml-3 text-sm">
                    <label for="checkbox1" class="font-medium text-gray-700">Checkbox 1</label>
                   
                  </div>
                </div>
                <div class="flex items-start">
                  <div class="flex items-center h-5">
                    <input id="checkbox2" name="checkbox2" type="checkbox" class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500" wire:model.lazy='checkbox2'>
                  </div>
                  <div class="ml-3 text-sm">
                    <label for="checkbox2" class="font-medium text-gray-700">Checkbox 2</label>
                   
                  </div>
                </div>
                <div class="flex items-start">
                  <div class="flex items-center h-5">
                    <input id="checkbox3" name="checkbox3" type="checkbox" class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500" wire:model.lazy='checkbox3'>
                  </div>
                  <div class="ml-3 text-sm">
                    <label for="checkbox3" class="font-medium text-gray-700">Checkbox 3</label>
                   
                  </div>
                </div>
              </div>
            </fieldset>
            <fieldset>
              <div>
                <legend class="text-base font-medium text-gray-900">Opciones única respuesta</legend>
                <p class="text-sm text-gray-500">Solo se puede elegir una respuesta.</p>
              </div>
              <div class="mt-4 space-y-4">
                <div class="flex items-center">
                  <input id="option1" name="options1" type="radio" class="w-4 h-4 text-indigo-600 border-gray-300 focus:ring-indigo-500" wire:model.lazy='option1'>
                  <label for="option1" class="block ml-3 text-sm font-medium text-gray-700">
                    Opción 1
                  </label>
                </div>
                <div class="flex items-center">
                  <input id="option2" name="options1" type="radio" class="w-4 h-4 text-indigo-600 border-gray-300 focus:ring-indigo-500" wire:model.lazy='option2'>
                  <label for="option2" class="block ml-3 text-sm font-medium text-gray-700">
                    Opción 2
                  </label>
                </div>
                <div class="flex items-center">
                  <input id="option3" name="options1" type="radio" class="w-4 h-4 text-indigo-600 border-gray-300 focus:ring-indigo-500" wire:model.lazy='option3'>
                  <label for="option3" class="block ml-3 text-sm font-medium text-gray-700">
                    Opción 3
                  </label>
                </div>
              </div>
            </fieldset>
            <div>
              @endif
              @if($step == 4)

              <fieldset>
                <div>
                  <legend class="text-base font-medium text-gray-900">Opciones única respuesta</legend>
                  <p class="text-sm text-gray-500">Solo se puede elegir una respuesta.</p>
                </div>
                <div class="mt-4 space-y-4">
                  <div class="flex items-center">
                    <input id="option4" name="options2" type="radio" class="w-4 h-4 text-indigo-600 border-gray-300 focus:ring-indigo-500" wire:model.lazy='option4'>
                    <label for="option4" class="block ml-3 text-sm font-medium text-gray-700">
                      Opción 1
                    </label>
                  </div>
                  <div class="flex items-center">
                    <input id="option5" name="options2" type="radio" class="w-4 h-4 text-indigo-600 border-gray-300 focus:ring-indigo-500" wire:model.lazy='option5'>
                    <label for="option5" class="block ml-3 text-sm font-medium text-gray-700">
                      Opción 2
                    </label>
                  </div>
                  <div class="flex items-center">
                    <input id="option6" name="options2" type="radio" class="w-4 h-4 text-indigo-600 border-gray-300 focus:ring-indigo-500" wire:model.lazy='option6'>
                    <label for="option6" class="block ml-3 text-sm font-medium text-gray-700">
                      Opción 3
                    </label>
                  </div>
                </div>
              </fieldset>
              <fieldset>
              <div class="mt-1">
                <legend class="text-base font-medium text-gray-900">Pregunta abierta</legend>
              </div>
              <div class="mt-1">
              <textarea  id="textArea1" class="w-full px-3 py-2 text-gray-700 border rounded-lg focus:outline-none" rows="4" wire:model.lazy='textArea1'></textarea>
            </div>
          </fieldset>
          @endif
          </div>
          </div>
        </div>



        <!--Footer-->
        @if($step>0 && $step<=4)
        <div class="flex justify-end pt-2">
          <button id="btnBack"  type="button" wire:click="decreaseStep" class="p-3 px-4 text-white bg-indigo-500 rounded-lg hover:bg-indigo-400" >Atrás</button>
        </div>
        @endif

        @if($step<4)
        <div class="flex justify-end pt-2">
          <button id="btnNext"  type="submit" class="p-3 px-4 text-white bg-indigo-500 rounded-lg hover:bg-indigo-400" >Siguiente</button>
        </div>
        @endif


        @if($step==4)
        <div class="flex justify-end pt-2">
          <button id="btnFormulario"  type="submit"  class="p-3 px-4 text-white bg-indigo-500 rounded-lg hover:bg-indigo-400 modal-close" >Enviar</button>
        </div>
        @endif

      </div>
    </div>
     
  </form>


@if($step>4)
<div class="flex items-center justify-between p-10 bg-white rounded-lg shadow">
  <div>
    <svg class="w-20 h-20 mx-auto mb-4 text-green-500" viewBox="0 0 20 20" fill="currentColor">  <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>

    <h2 class="mb-4 text-2xl font-bold text-center text-gray-800">Postulación Exitosa</h2>

    <div class="mb-8 text-gray-600">
      Gracias por aplicar. En menos de 10 días recibiras una respuesta.
    </div>

    <button
    
    class="block w-40 px-5 py-2 mx-auto font-medium text-center text-gray-600 bg-white border rounded-lg shadow-sm focus:outline-none hover:bg-gray-100"
    >Cerrar</button>
  </div>
</div>
@endif