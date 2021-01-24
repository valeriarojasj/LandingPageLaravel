<div class='divmodal'>
  <div>
    <form id="formulario" wire:submit.prevent='save'>
      <!--Body-->
        <div class="px-4 py-5 space-y-6 bg-white sm:p-6">
          @if($step == 0)
            <!-- FULLNAME -->
            <fieldset>
              <div class="divFullName">
                <label for="fullName">Nombre y Apellido</label>
                <input  type="text" class="form-control applyInput" id="fullName" placeholder="" wire:model.defer='fullName'>
                @error('fullName') <span class="error">{{ $message }}</span> @enderror
              </div>
            </fieldset>
            <!-- DNI -->
            <fieldset>
              <div class="divDni">
                <label for="dni">DNI</label>
                <input  type="text" class="form-control applyInput" id="dni" placeholder="" wire:model.defer='dni'>
                @error('dni') <span class="error">{{ $message }}</span> @enderror
              </div>
            </fieldset>
    
            <!--BDAY-->
            <fieldset>
              <div class="divBday">
                <label  for="bday">Fecha de Nacimiento</label>
                <input type="date" class="form-control date" id="bday" wire:model.defer='bday'>
                @error('bday') <span class="error">{{ $message }}</span> @enderror
              </div>
            </fieldset>
    
            <!-- EMAIL -->
            <fieldset>
              <div class="mt-3">
                <label for="email">Correo Electrónico</label>
                <input  type="email" class="form-control applyInput" id="email" placeholder="" wire:model.defer='email'>
                @error('email') <span class="error">{{ $message }}</span> @enderror
              </div>
            </fieldset>

            <!-- LINKEDIN -->
            <fieldset>
              <div class="mt-3">
                <label for="linkedin">LinkedIn</label>
                <input type="text" class="form-control applyInput" id="linkedin" placeholder="" wire:model.defer='linkedin'>
                @error('linkedin') <span class="error">{{ $message }}</span> @enderror
              </div>
            </fieldset>
          @endif

          @if($step == 1)
            <!-- COUNTRY -->
            <fieldset>
              <div class="divCountry">
                <label for="country"></label>
                <select id="country" class="form-control" wire:model.defer='country'>
                  <option selected>Selecciona el país donde vives...</option>
                </select>
                @error('country') <span class="error">{{ $message }}</span> @enderror
              </div>
            </fieldset>

            <!-- PROVINCE -->
            <fieldset>
              <div class="divProvince" style="display:none;">
                <label for="province"></label>
                <select id="province" class="form-control" wire:model.defer='province'>
                  <option value=""> Selecciona la provincia donde vives...</option>
                </select>
                @error('province') <span class="error">{{ $message }}</span> @enderror
              </div>
            </fieldset>
                      
            <!-- CITY -->
            <fieldset>
              <div class="divCity" style="display:none;">
                <label for="city"></label>
                <select id="city" class="form-control" wire:model.defer='city'>
                  <option value="">Selecciona la ciudad donde vives...</option>
                </select>
                @error('city') <span class="error">{{ $message }}</span> @enderror
              </div>
            </fieldset>
            <script>cargarPaises()</script>
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
                <input  type="text" class="form-control applyInput" id="career" placeholder="" wire:model.defer='career'>
                @error('career') <span class="error">{{ $message }}</span> @enderror   
              </div>
            </fieldset>
            <!-- JOBTOAPPLY -->
            <fieldset>
              <div class="mt-3 divJobtoApply">
                <label for="jobToApply"></label>
                <select id="jobToApply" class="form-control" wire:model.defer='jobToApply'>
                  <option selected>Selecciona la búsqueda a la cual deseas postularte...</option>
                  <option>Analista Contable Ssr</option>
                  <option>Ejecutivo Large Corporate</option>
                  <option>Data Hub Jr</option>
                </select>
                @error('jobToApply') <span class="error">{{ $message }}</span> @enderror   
              </div>
            </fieldset>
          @endif
        </div>
      <!--Cierre del Body-->
      <!--Footer-->
      <div class="flex justify-end pt-2">
        <!--BUTTONS (SUBMIT, INCREASE, DECREASE)-->
        @if($step>0 && $step<=2)
          <button id="btnBack" type='button' wire:click="decreaseStep">Atrás</button>
        @endif
        @if($step == 2)
          <button id="btnFormulario"  type='submit' class="p-3 px-4 text-white bg-indigo-500 rounded-lg hover:bg-indigo-400 modal-close" >Enviar</button>
        @endif
        @if($step < 2)
          <button id="btnNext" type='button' wire:click="increaseStep">Siguiente</button>
        @endif
      </div>
      <!--Cierre del Footer-->
    </form>
  </div>
  <!-- Cierre Contenido del modal (Title y Body)-->
  <script type="text/javascript" src="js/applicationForm.js"></script>
</div>

