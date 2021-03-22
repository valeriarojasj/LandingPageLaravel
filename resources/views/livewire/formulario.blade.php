<div class='divmodal'>
  <form wire:submit.prevent="save">
    <!--Body-->
      <div class="px-4 py-2 space-y-3 bg-white sm:p-6">
        @if($step == 0)
          <div>
            <!-- FULLNAME -->
            <fieldset>
              <div class="mt-3 divFullName">
                <label for="fullName">Nombre y Apellido</label>
                <input  type="text" class="form-control applyInput" placeholder="" wire:model.defer='fullName'>
                @error('fullName') <span class="error">{{ $message }}</span> @enderror
              </div>
            </fieldset>
            <!-- DNI -->
            <fieldset>
              <div class="mt-3 divDni">
                <label for="dni">DNI</label>
                <input  type="text" class="form-control applyInput"placeholder="" wire:model.defer='dni'>
                @error('dni') <span class="error">{{ $message }}</span> @enderror
                @if($messageExist) <span class="error">{{ $messageExist }}</span> @endif
              </div>
            </fieldset>
            <!--BDAY-->
            <fieldset>
              <div class="mt-3 divBday">
                <label  for="bday">Fecha de Nacimiento</label>
                <input type="date" class="form-control date"  wire:model.defer='bday'>
                @error('bday') <span class="error">{{ $message }}</span> @enderror
              </div>
            </fieldset>
            <!-- EMAIL -->
            <fieldset>
              <div class="mt-3">
                <label for="email">Correo Electrónico</label>
                <input  type="email" class="form-control applyInput" placeholder="" wire:model.defer='email'>
                @error('email') <span class="error">{{ $message }}</span> @enderror
                @if($messageExist) <span class="error">{{ $messageExist }}</span> @endif
              </div>
            </fieldset>
            <!-- LINKEDIN -->
            <fieldset>
              <div class="mt-3">
                <label for="linkedin">LinkedIn</label>
                <input type="text" class="form-control applyInput" placeholder="" wire:model.defer='linkedin'>
                @error('linkedin') <span class="error">{{ $message }}</span> @enderror
              </div>
            </fieldset>
          </div>
        @endif
       

        @if($step == 1)
      
          <div>
            <!-- COUNTRY -->
            <fieldset>
              <div class="divCountry">
                <label for="country">Pais</label>
                <select id="country" class="form-control" wire:model.defer='country' data-country="{{$country}}">
                  <option value=''>Selecciona el país donde vives...</option>
                  <option value='Argentina'>Argentina</option>
                  <option value='Bolivia'>Bolivia</option>
                  <option value='Brasil'>Brasil</option>
                  <option value='Chile'>Chile</option>
                  <option value='Colombia'>Colombia</option>
                  <option value='Ecuador'>Ecuador</option>
                  <option value='Mexico'>México</option>
                  <option value='Paraguay'>Paraguay</option>
                  <option value='Peru'>Perú</option>
                  <option value='Uruguay'>Uruguay</option>
                  <option value='Venezuela'>Venezuela</option>       
                  <option value='Panama'>Panama</option>      
                  <option value='Otro'>Otro</option>
                </select>
                @error('country') <span class="error">{{ $message }}</span> @enderror
              </div>
            </fieldset>

            <!-- PROVINCE -->
            <fieldset>
              <div id="divProvince" class="mt-3 divProvince" style="display:none;">
                <label for="province">Provincia</label>
                <select  id="province" class="form-control" wire:model.defer='province' data-provincia="{{$province}}">
                  <option value=""> Selecciona la provincia donde vives...</option>
                </select>
                @error('province') <span class="error">{{ $message }}</span> @enderror
              </div>
            </fieldset> 
            <!-- CITY -->
            <fieldset>
              <div id="divCity" class="mt-3 divCity" style="display:none;">
                <label for="city">Localidad</label>
                <select id="city" class="form-control" wire:model.defer='city' data-ciudad="{{$city}}">
                  <option selected="{{false}}" value="">Selecciona la ciudad donde vives...</option>
                </select>
                @error('city') <span class="error">{{ $message }}</span> @enderror
              </div>
            </fieldset>
            <script>
              cargarPaises();
            </script>
            
          </div>
         
        
        @endif
      
        @if($step == 2)
          <div>
            <!-- EDUCATIONLEVEL -->
            <fieldset>
              <div class="divEducation">
                <label for="educationLevel">Nivel de educación</label>
                <select class="form-control" wire:model.defer='educationLevel'>
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
                <select class="form-control" wire:model.defer='educationStatus'>
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
                <input  type="text" class="rounded-md form-control applyInput" placeholder="" wire:model.defer='career'>
                @error('career') <span class="error">{{ $message }}</span> @enderror   
              </div>
            </fieldset>
            <!-- JOBTOAPPLY -->
            <!-- 
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
            -->
          </div>
        @endif

        @if($step == 3)
          <div>
            <!-- PREGUNTA ABIERTA 1 -->
            <fieldset>
              @if($job->open_question_1)
                <div class="mt-3 divOpenQ1">
                  <div class="mt-1">
                    <legend class="text-base font-medium" style="color:#7c7c7c;">
                      {{$job->open_question_1}}
                    </legend>
                  </div>
                  <textarea  placeholder="" wire:model.defer='openAnswer1' class="w-full px-3 py-2 text-gray-700 border rounded-lg focus:outline-none" rows="4">
                  </textarea>
                </div>
              @endif
            </fieldset>
            <!-- PREGUNTA ABIERTA 2 -->
            <fieldset>
              @if($job->open_question_2)
                <div class="mt-1 divOpenQ1">
                  <div class="mt-1">
                    <legend id="openQuestion2"  class="text-base font-medium" style="color:#7c7c7c;">
                      {{$job->open_question_2}}
                    </legend>
                  </div>
                  <textarea id="openAnswer2" placeholder="" wire:model.defer='openAnswer2'  class="w-full px-3 py-2 text-gray-700 border rounded-lg focus:outline-none" rows="4">
                  </textarea>
                </div>
              @endif
            </fieldset>
          </div>
        @endif
      
        @if($step == 4)
          <div>
            <!-- MULTIPLE CHOICE QUESTION 1 -->
            <fieldset>
              @if($job->multiple_choice_question_1)
                <div class="block divMCQ1">
                  <span id="multiple_choice_question_1"  style="color:#7c7c7c;">
                    {{$job->multiple_choice_question_1}}
                  </span>
                  @if($job->multiple_choice1_option_1)
                    <div class="mt-2">
                      <label class="inline-flex items-center">
                        <input id="multiple_choice1_option_1" wire:model.defer='multipleChoice1A'  name="multipleChoice1A" type="radio" class="form-radio" value="{{$job->multiple_choice1_option_1}}">
                        <span id="span_multiple_choice1_option_1" class="ml-2">
                          {{$job->multiple_choice1_option_1}}
                        </span>
                      </label>
                    </div>
                  @endif
                  @if($job->multiple_choice1_option_2)
                    <div>
                      <label class="inline-flex items-center">
                        <input id="multiple_choice1_option_2" wire:model.defer='multipleChoice1A'  name="multipleChoice1A" type="radio" class="form-radio" value="{{$job->multiple_choice1_option_2}}" >
                        <span id="span_multiple_choice1_option_2" class="ml-2">
                          {{$job->multiple_choice1_option_2}}
                        </span>
                      </label>
                    </div>
                  @endif
                  @if($job->multiple_choice1_option_3)
                    <div>
                      <label class="inline-flex items-center">
                        <input id="multiple_choice1_option_3" wire:model.defer='multipleChoice1A'  name="multipleChoice1A" type="radio" class="form-radio" value="{{$job->multiple_choice1_option_3}}">
                        <span id="span_multiple_choice1_option_3" class="ml-2">
                          {{$job->multiple_choice1_option_3}}
                        </span>
                      </label>
                    </div>
                  @endif
                </div>
              @endif
            </fieldset>
            <!-- MULTIPLE CHOICE QUESTION 2 -->
            <fieldset>
              @if($job->multiple_choice_question_2)
                <div class="block mt-2 mt-4 divMCQ2">
                  <span id="multiple_choice_question_2"  style="color:#7c7c7c;">
                    {{$job->multiple_choice_question_2}}
                  </span>
                  @if($job->multiple_choice2_option_1)
                    <div class="mt-2">
                      <label class="inline-flex items-center">
                        <input id="multiple_choice2_option_1" wire:model.defer='multipleChoice2A'  name="multipleChoice2A" type="radio" class="form-radio" value="{{$job->multiple_choice2_option_1}}">
                        <span id="span_multiple_choice2_option_1" class="ml-2">
                          {{$job->multiple_choice2_option_1}}
                        </span>
                      </label>
                    </div>
                  @endif
                  @if($job->multiple_choice2_option_2)
                    <div>
                      <label class="inline-flex items-center">
                        <input id="multiple_choice2_option_2" wire:model.defer='multipleChoice2A'  name="multipleChoice2A" type="radio" class="form-radio" value="{{$job->multiple_choice2_option_2}}" >
                        <span id="span_multiple_choice2_option_2" class="ml-2">
                          {{$job->multiple_choice2_option_2}}
                        </span>
                      </label>
                    </div>
                  @endif
                  @if($job->multiple_choice2_option_3)
                    <div>
                      <label class="inline-flex items-center">
                        <input id="multiple_choice2_option_3" wire:model.defer='multipleChoice2A'  name="multipleChoice2A" type="radio" class="form-radio" value="{{$job->multiple_choice2_option_3}}">
                        <span id="span_multiple_choice2_option_3" class="ml-2">
                          {{$job->multiple_choice2_option_3}}
                        </span>
                      </label>
                    </div>
                  @endif  
                </div>
              @endif
            </fieldset>
          </div>
        @endif
        @if($step == 5)
          <div>
            <!-- PREGUNTA DE CHECKBOX 1 -->
            <fieldset>
              @if($job->checkbox_question_1)
                <legend id="checkbox_question_1"  class="text-base font-medium" style="color:#7c7c7c;">
                  {{$job->checkbox_question_1}}
                </legend>
                <div class="mt-4 space-y-4">
                  @if($job->checkbox1_option_1)
                    <div class="flex items-start">
                      <div class="flex items-center h-5"> 
                        <input id="checkBox1AOp1" wire:model.defer='checkBox1AOp1' name="checkBox1AOp1" type="checkbox" class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500" value="{{$job->checkbox1_option_1}}">
                      </div>
                      <div class="ml-3 text-sm">
                        <label for="checkbox1_option_1" class="font-medium" style="color:#7c7c7c;">
                          {{$job->checkbox1_option_1}}
                        </label>
                      </div>
                    </div>
                  @endif
                  @if($job->checkbox1_option_2)
                    <div class="flex items-start">
                      <div class="flex items-center h-5">
                        <input id="checkBox1AOp2" name="checkBox1AOp2"  wire:model.defer='checkBox1AOp2' type="checkbox" class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500" value="{{$job->checkbox1_option_2}}">
                      </div>
                      <div class="ml-3 text-sm">
                        <label for="checkBox1AOp2" class="font-medium" style="color:#7c7c7c;">
                          {{$job->checkbox1_option_2}}
                        </label>
                      </div>
                    </div>
                  @endif
                  @if($job->checkbox1_option_3)
                    <div class="flex items-start">
                      <div class="flex items-center h-5">
                        <input id="checkBox1AOp3" name="checkBox1AOp3" wire:model.defer='checkBox1AOp3' type="checkbox" class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500" value="{{$job->checkbox1_option_3}}">
                      </div>
                      <div class="ml-3 text-sm">
                        <label for="checkBox1AOp3" class="font-medium " style="color:#7c7c7c;">
                          {{$job->checkbox1_option_3}}
                        </label>
                      </div>
                    </div>
                  @endif  
                </div>
              @endif
            </fieldset>
            <!-- PREGUNTA DE CHECKBOX 2 -->
            <fieldset>
              @if($job->checkbox_question_2)
                <legend id="checkbox_question_2"  class="mt-4 text-base font-medium" style="color:#7c7c7c;">
                  {{$job->checkbox_question_2}}
                </legend>
                <div class="mt-4 space-y-4">
                  @if($job->checkbox2_option_1)
                    <div class="flex items-start">
                      <div class="flex items-center h-5">
                        <input id="checkBox2AOp1" wire:model.defer='checkBox2AOp1' name="checkBox2AOp1" type="checkbox" class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500" value="{{$job->checkbox2_option_1}}">
                      </div>
                      <div class="ml-3 text-sm">
                        <label for="checkBox2AOp1" class="font-medium" style="color:#7c7c7c;">
                          {{$job->checkbox2_option_1}}
                        </label>
                      </div>
                    </div>
                  @endif
                  @if($job->checkbox2_option_2)  
                    <div class="flex items-start">
                      <div class="flex items-center h-5">
                        <input id="checkBox2AOp2" name="checkBox2AOp2"  wire:model.defer='checkBox2AOp2'type="checkbox" class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500" value="{{$job->checkbox2_option_2}}">
                      </div>
                      <div class="ml-3 text-sm">
                        <label for="checkBox2AOp2" class="font-medium" style="color:#7c7c7c;">
                          {{$job->checkbox2_option_2}}
                        </label>
                      </div>
                    </div>
                  @endif 
                  @if($job->checkbox2_option_3)
                    <div class="flex items-start">
                      <div class="flex items-center h-5">
                        <input id="checkBox2AOp3" name="checkBox2AOp3" wire:model.defer='checkBox2AOp3' type="checkbox" class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500" value="{{$job->checkbox2_option_3}}">
                      </div>
                      <div class="ml-3 text-sm">
                        <label for="checkBox2AOp3" class="font-medium" style="color:#7c7c7c;">
                          {{$job->checkbox2_option_3}}
                        </label>
                      </div>
                    </div>
                  @endif  
                </div>
              @endif
            </fieldset>
          </div>
        @endif
      </div>
    <!--Cierre del Body-->
    <!--Footer-->
      <div class="flex justify-end pt-2">
        <!--BUTTONS (SUBMIT, INCREASE, DECREASE)-->
        @if($step>0 && $step<=5)
          <button type='button' id="btnBack" class="mr-2 rounded-md btn applyBtn" style="background-color:#A9CCEE;"  wire:click="decreaseStep">
            Atrás
          </button>
        @endif
        @if($step == 5)
          <button id="btnFormulario" type='submit' class="p-3 px-4 text-white bg-indigo-500 rounded-md rounded-lg btn applyBtn modal-close hover:bg-indigo-400" >
            Enviar
          </button>
        @endif
        @if($step < 5)
          <button type='button' id="btnNext" class="rounded-md btn applyBtn"  wire:click="increaseStep">
            Siguiente
          </button>
        @endif
      </div>
    <!--Cierre del Footer-->
  </form>

  <script type="text/javascript" src="js/applicationForm.js"></script>
</div>