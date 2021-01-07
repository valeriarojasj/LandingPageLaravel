<form id="formulario" wire:submit.prevent='save'>
  
    <div class="row form-group">
        <!-- FULLNAME -->
        <div class="divFullName col-12 col-md-4">
            <label for="fullName">Nombre y Apellido</label>
            <input  type="text" class="form-control applyInput" id="fullName" placeholder="" wire:model.defer='fullName'>
        </div>

        <!-- DNI -->
        <div class="divDni col-12 col-md-4">
            <label for="dni">DNI</label>
            <input  type="text" class="form-control applyInput" id="dni" placeholder="" wire:model.defer='dni'>
        </div>

        <!-- BDAY -->
        <div class="divBday col-12 col-md-4 ">
            <label  for="bday">Fecha de Nacimiento</label>
            <input type="date" class="form-control date" id="bday" wire:model.defer='bday'>
        </div>

        <!-- EMAIL -->
        <div class="mt-5 col-12 col-md-6">
            <label for="email">Correo Electrónico</label>
            <input  type="email" class="form-control applyInput" id="email" placeholder="" wire:model.defer='email'>
        </div>

        <!-- LINKEDIN -->
        <div class="mt-5 col-12 col-md-6">
            <label for="linkedin">LinkedIn</label>
            <input type="text" class="form-control applyInput" id="linkedin" placeholder="" wire:model.defer='linkedin'>
        </div>

        <!-- COUNTRY -->
        <div class="divCountry col-12 col-md-6">
            <label for="country"></label>
            <select id="country" class="form-control" wire:model.defer='country'>
                <option selected>Selecciona el país donde vives...</option>
            </select>
        </div>

        <!-- PROVINCE -->
            <div class="divProvince col-12 col-md-6" style="display:none;">
                <label for="province"></label>
                <select id="province" class="form-control" wire:model.defer='province'>
                    <option value=""> Selecciona la provincia donde vives...</option>
                </select>
            </div>
            
            <!-- CITY -->
            <div class="divCity col-12 col-md-6" style="display:none;">
                <label for="city"></label>
                <select id="city" class="form-control" wire:model.defer='city'>
                    <option value="">Selecciona la ciudad donde vives...</option>
                </select>
            </div>

        <!-- EDUCATIONLEVEL -->
        <div class="divEducation col-12 col-md-6">
            <label for="educationLevel"></label>
            <select id="educationLevel" class="form-control" wire:model.defer='educationLevel'>
                <option selected>Selecciona tu nivel de educación...</option>
                <option>Secundario incompleto</option>
                <option>Secundario Completo</option>
                <option>Universitario en curso</option>
                <option>Universitario Graduado</option>
                <option>Universitario Abandonado</option>
                <option>Posgrado en curso</option>
                <option>Posgrado completo</option>
            </select>
        </div>

        <!-- CAREER -->
        <div class="mt-5 divCareer col-12 col-md-6">
            
                <label for="career">Título universitario</label>
                <input  type="text" class="form-control applyInput" id="career" placeholder="" wire:model.defer='career'>
           
        </div>
        
        <!-- JOBTOAPPLY -->
        <div class="divJobtoApply col-12">
            <label for="jobToApply"></label>
            <select id="jobToApply" class="form-control" wire:model.defer='jobToApply'>
                <option selected>Selecciona la búsqueda a la cual deseas postularte...</option>
                <<option>Analista Contable Ssr</option>
                <option>Ejecutivo Large Corporate</option>
                <option>Data Hub Jr</option>
            </select>
        </div>
      </div>
      <br>


{{-- modal button--}}
<button class="px-4 py-2 font-bold text-gray-500 bg-transparent border border-gray-500 rounded-full modal-open hover:border-indigo-500 hover:text-indigo-500">Postularme</button>
  
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
          <p class="text-2xl font-bold">Preguntas</p>
          <div class="z-50 cursor-pointer modal-close">
            <svg class="text-black fill-current" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
              <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
            </svg>
          </div>
        </div>

        <!--Body-->
       
          <div class="px-4 py-5 space-y-6 bg-white sm:p-6">
            
            <fieldset>
              <legend class="text-base font-medium text-gray-900">Seleccion Multiple</legend>
              <div class="mt-4 space-y-4">
                <div class="flex items-start">
                  <div class="flex items-center h-5">
                    <input id="checkbox1" name="checkbox1" type="checkbox" class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
                  </div>
                  <div class="ml-3 text-sm">
                    <label for="checkbox1" class="font-medium text-gray-700">Checkbox 1</label>
                   
                  </div>
                </div>
                <div class="flex items-start">
                  <div class="flex items-center h-5">
                    <input id="checkbox2" name="checkbox2" type="checkbox" class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
                  </div>
                  <div class="ml-3 text-sm">
                    <label for="checkbox2" class="font-medium text-gray-700">Checkbox 2</label>
                   
                  </div>
                </div>
                <div class="flex items-start">
                  <div class="flex items-center h-5">
                    <input id="checkbox3" name="checkbox3" type="checkbox" class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
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
                  <input id="option1" name="option" type="radio" class="w-4 h-4 text-indigo-600 border-gray-300 focus:ring-indigo-500">
                  <label for="option1" class="block ml-3 text-sm font-medium text-gray-700">
                    Opción 1
                  </label>
                </div>
                <div class="flex items-center">
                  <input id="option2" name="option" type="radio" class="w-4 h-4 text-indigo-600 border-gray-300 focus:ring-indigo-500">
                  <label for="option2" class="block ml-3 text-sm font-medium text-gray-700">
                    Opción 2
                  </label>
                </div>
                <div class="flex items-center">
                  <input id="option3" name="option" type="radio" class="w-4 h-4 text-indigo-600 border-gray-300 focus:ring-indigo-500">
                  <label for="option3" class="block ml-3 text-sm font-medium text-gray-700">
                    Opción 3
                  </label>
                </div>
              </div>
            </fieldset>
            <div>

           
            <div class="mt-1">
              <div class="mt-1">
                <legend class="text-base font-medium text-gray-900">Pregunta abierta</legend>
              </div>
              <textarea class="w-full px-3 py-2 text-gray-700 border rounded-lg focus:outline-none" rows="4"></textarea>
            </div>
          </div>
          </div>
        </div>

        <!--Footer-->
        <div class="flex justify-end pt-2">
          <button type="button" class="p-3 px-4 mr-2 text-indigo-500 bg-transparent rounded-lg hover:bg-gray-100 hover:text-indigo-400">Enviar</button>
          <button id="btnFormulario"class="p-3 px-4 text-white bg-indigo-500 rounded-lg modal-close hover:bg-indigo-400">Cerrar</button>
        </div>
      </div>
    </div>
     


</form>
