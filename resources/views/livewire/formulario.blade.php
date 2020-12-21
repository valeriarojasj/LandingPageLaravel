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
        <div class="col-12 col-md-6 mt-5">
            <label for="email">Correo Electrónico</label>
            <input  type="email" class="form-control applyInput" id="email" placeholder="" wire:model.defer='email'>
        </div>

        <!-- LINKEDIN -->
        <div class="col-12 col-md-6 mt-5">
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
        <div class="divCareer col-12 col-md-6">
            <label for="career"></label>
            <select id="career" class="form-control" wire:model.defer='career'>
                <option selected>Selecciona tu carrera universitaria...</option>
                <option>Abogacía</option>
                <option>Ingeniería Informática</option>
                <option>Diseño Gráfico</option>
                <option>Ingeniería Industrial</option>
            </select>
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
    <!--<button type="button" id="btnFormulario" class="btn applyBtn" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Enviar
    </button>-->
    <button id="btnFormulario" class="btn applyBtn"> Enviar2 </button>


     


</form>
