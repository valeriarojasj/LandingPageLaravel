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
    <!-- <fieldset>
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
    </fieldset> -->
    @endif

    @if($step == 3)
    <!-- PREGUNTA ABIERTA 1 -->
    <fieldset>
      <div class="mt-3 divOpenQ1">
        <div class="mt-1">
       
          <legend id="openQuestion1-{{$uuid}}" class="text-base font-medium text-gray-900">{{$job->open_question_1}}</legend>
        </div>
          <textarea id="openAnswer1-{{$uuid}}" placeholder="" wire:model.defer='openAnswer1' class="w-full px-3 py-2 text-gray-700 border rounded-lg focus:outline-none" rows="4"></textarea>
      </div>
    </fieldset>
    <!-- PREGUNTA ABIERTA 2 -->
    <fieldset>
      <div class="mt-1 divOpenQ1">
        <div class="mt-1">
          <legend id="openQuestion2-{{$uuid}}"  class="text-base font-medium text-gray-900">{{$job->open_question_2}}</legend>
        </div>
          <textarea id="openAnswer2-{{$uuid}}" placeholder="" wire:model.defer='openAnswer2'  class="w-full px-3 py-2 text-gray-700 border rounded-lg focus:outline-none" rows="4"></textarea>
      </div>
    </fieldset>
    @endif
    
    @if($step == 4)
    <!-- MULTIPLE CHOICE QUESTION 1 -->
    <fieldset>
      <div class="block divMCQ1">
        <span id="multiple_choice_question_1-{{$uuid}}" class="text-gray-700">{{$job->multiple_choice_question_1}}</span>
        <div class="mt-2">
          <label class="inline-flex items-center">
            <input id="multiple_choice1_option_1-{{$uuid}}" wire:model.defer='multipleChoice1A'  name="multipleChoice1A-{{$uuid}}" type="radio" class="form-radio" value="{{$job->multiple_choice1_option_1}}">
            <span id="span_multiple_choice1_option_1-{{$uuid}}" class="ml-2">{{$job->multiple_choice1_option_1}}</span>
          </label>
        </div>
        <div>
          <label class="inline-flex items-center">
            <input id="multiple_choice1_option_2-{{$uuid}}" wire:model.defer='multipleChoice1A'  name="multipleChoice1A-{{$uuid}}" type="radio" class="form-radio" value="{{$job->multiple_choice1_option_2}}" >
            <span id="span_multiple_choice1_option_2-{{$uuid}}" class="ml-2">{{$job->multiple_choice1_option_2}}</span>
          </label>
        </div>
        <div>
          <label class="inline-flex items-center">
            <input id="multiple_choice1_option_3-{{$uuid}}" wire:model.defer='multipleChoice1A'  name="multipleChoice1A-{{$uuid}}" type="radio" class="form-radio" value="{{$job->multiple_choice1_option_3}}">
            <span id="span_multiple_choice1_option_3-{{$uuid}}" class="ml-2">{{$job->multiple_choice1_option_3}}</span>
          </label>
        </div>
      </div>
    </fieldset>
    <!-- MULTIPLE CHOICE QUESTION 2 -->
    <fieldset>
      <div class="block divMCQ2">
        <span id="multiple_choice_question_2-{{$uuid}}" class="text-gray-700">{{$job->multiple_choice_question_2}}</span>
        <div class="mt-2">
          <label class="inline-flex items-center">
            <input id="multiple_choice2_option_1-{{$uuid}}" wire:model.defer='multipleChoice2A'  name="multipleChoice2A-{{$uuid}}" type="radio" class="form-radio" value="{{$job->multiple_choice2_option_1}}">
            <span id="span_multiple_choice2_option_1-{{$uuid}}" class="ml-2">{{$job->multiple_choice2_option_1}}</span>
          </label>
        </div>
        <div>
          <label class="inline-flex items-center">
            <input id="multiple_choice2_option_2-{{$uuid}}" wire:model.defer='multipleChoice2A'  name="multipleChoice2A-{{$uuid}}" type="radio" class="form-radio" value="{{$job->multiple_choice2_option_2}}" >
            <span id="span_multiple_choice2_option_2-{{$uuid}}" class="ml-2">{{$job->multiple_choice2_option_2}}</span>
          </label>
        </div>
        <div>
          <label class="inline-flex items-center">
            <input id="multiple_choice2_option_3-{{$uuid}}" wire:model.defer='multipleChoice2A'  name="multipleChoice2A-{{$uuid}}" type="radio" class="form-radio" value="{{$job->multiple_choice2_option_3}}">
            <span id="span_multiple_choice2_option_3-{{$uuid}}" class="ml-2">{{$job->multiple_choice2_option_3}}</span>
          </label>
        </div>
      </div>
    </fieldset>
    @endif
    
    @if($step == 5)
    <!-- PREGUNTA DE CHECKBOX 1 -->
    <fieldset>
      <legend id="checkbox_question_1-{{$uuid}}"  class="text-base font-medium text-gray-900">{{$job->checkbox_question_1}}</legend>
       <div class="mt-4 space-y-4">
         <div class="flex items-start">
            <div class="flex items-center h-5"> 
              <input id="checkBox1AOp1-{{$uuid}}" wire:model.defer='checkBox1AOp1' name="checkBox1AOp1-{{$uuid}}" type="checkbox" class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500" value="{{$job->checkbox1_option_1}}">
            </div>
            <div class="ml-3 text-sm">
              <label for="checkbox1_option_1-{{$uuid}}"    class="font-medium text-gray-700">{{$job->checkbox1_option_1}}</label>
            </div>
         </div>
         <div class="flex items-start">
            <div class="flex items-center h-5">
              <input id="checkBox1AOp2-{{$uuid}}" name="checkBox1AOp2-{{$uuid}}"  wire:model.defer='checkBox1AOp2' type="checkbox" class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500" value="{{$job->checkbox1_option_2}}">
            </div>
            <div class="ml-3 text-sm">
              <label for="checkBox1AOp2-{{$uuid}}" class="font-medium text-gray-700">{{$job->checkbox1_option_2}}</label>
            </div>
         </div>
         <div class="flex items-start">
           <div class="flex items-center h-5">
             <input id="checkBox1AOp3-{{$uuid}}" name="checkBox1AOp3-{{$uuid}}" wire:model.defer='checkBox1AOp3' type="checkbox" class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500" value="{{$job->checkbox1_option_3}}">
           </div>
           <div class="ml-3 text-sm">
             <label for="checkBox1AOp3-{{$uuid}}" class="font-medium text-gray-700">{{$job->checkbox1_option_3}}</label>
           </div>
         </div>
        </div>
    </fieldset>
    <!-- PREGUNTA DE CHECKBOX 2 -->
    <fieldset>
      <legend id="checkbox_question_2-{{$uuid}}"  class="text-base font-medium text-gray-900">Pregunta Checkbox2</legend>
        <div class="mt-4 space-y-4">
          <div class="flex items-start">
            <div class="flex items-center h-5">
              <input id="checkBox2AOp1-{{$uuid}}" wire:model.defer='checkBox2AOp1' name="checkBox2AOp1-{{$uuid}}" type="checkbox" class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500" value="{{$job->checkbox2_option_1}}">
            </div>
            <div class="ml-3 text-sm">
              <label for="checkBox2AOp1-{{$uuid}}"    class="font-medium text-gray-700">{{$job->checkbox2_option_1}}</label>
            </div>
          </div>
          <div class="flex items-start">
            <div class="flex items-center h-5">
              <input id="checkBox2AOp2-{{$uuid}}" name="checkBox2AOp2-{{$uuid}}"  wire:model.defer='checkBox2AOp2'type="checkbox" class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500" value="{{$job->checkbox2_option_2}}">
            </div>
            <div class="ml-3 text-sm">
              <label for="checkBox2AOp2-{{$uuid}}" class="font-medium text-gray-700">{{$job->checkbox2_option_2}}</label>
            </div>
          </div>
          <div class="flex items-start">
            <div class="flex items-center h-5">
              <input id="checkBox2AOp3-{{$uuid}}" name="checkBox2AOp3-{{$uuid}}" wire:model.defer='checkBox2AOp3' type="checkbox" class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500" value="{{$job->checkbox2_option_3}}">
            </div>
            <div class="ml-3 text-sm">
              <label for="checkBox2AOp3-{{$uuid}}" class="font-medium text-gray-700">{{$job->checkbox2_option_3}}</label>
            </div>
          </div>
        </div>
    </fieldset>
    @endif
  </div>

      <!--Cierre del Body-->
      <!--Footer-->
      <div class="flex justify-end pt-2">
        <!--BUTTONS (SUBMIT, INCREASE, DECREASE)-->
        {{$this->step}}
    
        @if($step>0 && $step<=5)
          <button id="btnBack" class="mr-2 rounded-md btn applyBtn" style="background-color:#A9CCEE;"  wire:click="decreaseStep">Atrás</button>
        @endif
        @if($step == 5)
          <button id="btnFormulario" wire:click="save" class="p-3 px-4 text-white bg-indigo-500 rounded-md rounded-lg btn applyBtn modal-close hover:bg-indigo-400" >Enviar</button>
        @endif
        @if($step < 5)
          <button id="btnNext" class="rounded-md btn applyBtn"  wire:click="increaseStep">Siguiente</button>
        @endif
      </div>

      <!--Cierre del Footer-->
  <!-- Cierre Contenido del modal (Title y Body)-->
  <script type="text/javascript" src="js/applicationForm.js"></script>
  
</div>

