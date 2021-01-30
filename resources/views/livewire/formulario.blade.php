<div class='divmodal'>
      <!--Body-->
        <div class="px-4 py-5 space-y-4 bg-white sm:p-6">
          @if($step == 0)
             <!-- FULLNAME -->
             <fieldset>
              <div class="divFullName">
                <label for="fullName">Nombre y Apellido</label>
                <input  type="text" class="form-control applyInput" id="fullName-{{$uuid}}" placeholder="" wire:model.defer='fullName'>
                @error('fullName') <span class="error">{{ $message }}</span> @enderror
              </div>
            </fieldset>
            <!-- DNI -->
            <fieldset>
              <div class="divDni">
                <label for="dni">DNI</label>
                <input  type="text" class="form-control applyInput" id="dni-{{$uuid}}" placeholder="" wire:model.defer='dni'>
                @error('dni') <span class="error">{{ $message }}</span> @enderror
              </div>
            </fieldset>
    
            <!--BDAY-->
            <fieldset>
              <div class="divBday">
                <label  for="bday">Fecha de Nacimiento</label>
                <input type="date" class="form-control date" id="bday-{{$uuid}}" wire:model.defer='bday'>
                @error('bday') <span class="error">{{ $message }}</span> @enderror
              </div>
            </fieldset>
    
            <!-- EMAIL -->
            <fieldset>
              <div class="mt-3">
                <label for="email">Correo Electrónico</label>
                <input  type="email" class="form-control applyInput" id="email-{{$uuid}}" placeholder="" wire:model.defer='email'>
                @error('email') <span class="error">{{ $message }}</span> @enderror
              </div>
            </fieldset>

            <!-- LINKEDIN -->
            <fieldset>
              <div class="mt-3">
                <label for="linkedin">LinkedIn</label>
                <input type="text" class="form-control applyInput" id="linkedin-{{$uuid}}" placeholder="" wire:model.defer='linkedin'>
                @error('linkedin') <span class="error">{{ $message }}</span> @enderror
              </div>
            </fieldset>
          @endif

          @if($step == 1)
            <!-- COUNTRY -->
            <fieldset>
              <div class="divCountry">
                <label for="country">Pais</label>
                <select id="country-{{$uuid}}" class="form-control" wire:model.defer='country' data-country="{{$country}}">
                  <option value=''>Selecciona el país donde vives...</option>
                </select>
                @error('country') <span class="error">{{ $message }}</span> @enderror
              </div>
            </fieldset>

            <!-- PROVINCE -->
            <fieldset>
              <div id="divProvince-{{$uuid}}" class="divProvince-{{$uuid}}" style="display:none;">
                <label for="province">Provincia</label>
                <select id="province-{{$uuid}}" class="form-control" wire:model.defer='province' data-provincia="{{$province}}">
                  <option value=""> Selecciona la provincia donde vives...</option>
                </select>
                @error('province') <span class="error">{{ $message }}</span> @enderror
              </div>
            </fieldset>
                      
            <!-- CITY -->
            <fieldset>
              <div id="divCity-{{$uuid}}"  class="divCity-{{$uuid}}" style="display:none;">
                <label for="city">Localidad</label>
                <select id="city-{{$uuid}}" class="form-control" wire:model.defer='city' data-ciudad="{{$city}}">
                  <option selected="{{false}}" value="">Selecciona la ciudad donde vives...</option>
                </select>
                @error('city') <span class="error">{{ $message }}</span> @enderror
              </div>
            </fieldset>
            <script>
              cargarPaises({!! $uuid !!})
            </script>
          @endif
          @if($step == 2)
            <!-- EDUCATIONLEVEL -->
            <fieldset>
              <div class="divEducation">
                <label for="educationLevel">Nivel de educación</label>
                <select id="educationLevel-{{$uuid}}" class="form-control" wire:model.defer='educationLevel'>
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
                <label for="educationStatus">Status de Estudios</label>
                <select id="educationStatus-{{$uuid}}" class="form-control" wire:model.defer='educationStatus'>
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
                <input  type="text" class="rounded-md form-control applyInput" id="career-{{$uuid}}" placeholder="" wire:model.defer='career'>
                @error('career') <span class="error">{{ $message }}</span> @enderror   
              </div>
            </fieldset>
            <!-- JOBTOAPPLY -->
            <fieldset>
              <div class="mt-3 divJobtoApply">
                <label for="jobToApply">Postularme para la posición</label>
                <select id="jobToApply-{{$uuid}}" class="rounded-md form-control" wire:model.defer='jobToApply'>
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
          <button id="btnBack" class="rounded-md btn applyBtn"  wire:click="decreaseStep">Atrás</button>
        @endif
        @if($step == 2)
          <button id="btnFormulario" wire:click="save" class="p-3 px-4 text-white bg-indigo-500 rounded-md rounded-lg btn applyBtn modal-close hover:bg-indigo-400" >Enviar</button>
        @endif
        @if($step < 2)
          <button id="btnNext" class="rounded-md btn applyBtn"  wire:click="increaseStep">Siguiente</button>
        @endif
      </div>

      <!--Cierre del Footer-->
   
  <!-- Cierre Contenido del modal (Title y Body)-->
  <script type="text/javascript" src="js/applicationForm.js"></script>
  
</div>

