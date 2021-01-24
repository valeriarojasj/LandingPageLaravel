<div>
<div class="py-12">
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
            <!--<x-jet-welcome />-->
            <!--Container-->
            <div class="container w-full px-2 mx-auto md:w-4/5 xl:w-3/5">
                <!--Title-->
                <h1 class="px-2 py-8 text-xl font-bold break-normal md:text-2xl">
                    Búsquedas laborales
                </h1>
                <!--Card-->
                <div id='recipients' class="mt-6 bg-white rounded shadow lg:mt-0">

<div class="container">

<div class="row">
  <div class="col-md-12">
    <br>
    <button class="btn btn-default pull-right add-row"><i class="fas fa-plus-circle table-icons"></i>&nbsp;&nbsp; Nuevo Registro</button>
  </div>
</div>

<div class="row">
  <div class="col-md-12 table-container">
    <table class="table table-bordered" id="editableTable">
      <thead>
        <tr>
          <th>ID</th>
          <th>Título de la búsqueda</th>
          <th>Tipo de empresa</th>
          <th>Lugar de la búsqueda</th>
          <th>Pregunta Abierta 1</th>
          <th>Pregunta Abierta 2</th>
          <th>Pregunta de Selección Múltiple 1</th>
          <th>SM1 Opción 1</th>
          <th>SM1 Opción 2</th>
          <th>SM1 Opción 3</th>
          <th>Pregunta de Selección Múltiple 2</th>
          <th>SM2 Opción 1</th>
          <th>SM2 Opción 2</th>
          <th>SM2 Opción 3</th>
          <th>Pregunta de Checkbox 1</th>
          <th>CB1 Opción 1</th>
          <th>CB1 Opción 2</th>
          <th>CB1 Opción 3</th>
          <th>Pregunta de Checkbox 2</th>
          <th>CB2 Opción 1</th>
          <th>CB2 Opción 2</th>
          <th>CB2 Opción 3</th>
          <th>Fecha de creación</th>
          <th>Fecha de actualización</th>
          <th>Opciones de edición</th>

        </tr>
      </thead>
      <tbody>
        <tr data-id="1">
          <td data-field="id">1</td>
          <td data-field="job_title">Desarrollador PHP</td>
          <td data-field="company_type">Importante empresa de tecnonogía</td>
          <td data-field="job_location">Ciudad de Buenos Aires</td>
          <td data-field="open_question_1">Cuéntanos por qué crees que eres el candidato ideal para esta posición?</td>
          <td data-field="open_question_2">Cuál es tu expectativa salarial?</td>
          <td data-field="multiple_choice_question_1">Tienes disponibilidad para viajar?</td>
          <td data-field="multiple_choice1_option_1">Si</td>
          <td data-field="multiple_choice1_option_2">No</td>
          <td data-field="multiple_choice1_option_3"></td>
          <td data-field="multiple_choice_question_2">Cuantos años de experiencia laboral tienes?</td>
          <td data-field="multiple_choice2_option_1">Entre 0 y 3 años</td>
          <td data-field="multiple_choice2_option_2">Entre 3 y 7 años</td>
          <td data-field="multiple_choice2_option_3">Más de 7 años</td>
          <td data-field="checkbox_question_1">Cuáles de estos lenguajes/frameworks sabes manejar?</td>
          <td data-field="checkbox1_option_1">PHP</td>
          <td data-field="checkbox1_option_2">Javascript</td>
          <td data-field="checkbox1_option_3">Laravel</td>
          <td data-field="checkbox_question_2">Cuáles de estos idiomas hablas y escribes con fluidez?</td>
          <td data-field="checkbox2_option_1">Español</td>
          <td data-field="checkbox2_option_2">Inglés</td>
          <td data-field="checkbox2_option_3">Portugués</td>
          <td data-field="created_at"></td>
          <td data-field="updated_at"></td>

          
          
          
          
          <td>
            <a class="button button-small edit" title="Edit">
              <i class="fas fa-pencil-alt table-icons"></i>
            </a> <a class="button button-small" title="Delete">
              <i class="fas fa-trash-alt table-icons"></i>
            </a>
          </td>

        </tr>
        <tr data-id="2">
          <td data-field="id">2</td>
          <td data-field="job_title">Auditor Interno</td>
          <td data-field="company_type">Importante empresa automotriz</td>
          <td data-field="job_location">Ciudad de Buenos Aires</td>
          <td data-field="open_question_1">Cuéntanos por qué crees que eres el candidato ideal para esta posición?</td>
          <td data-field="open_question_2">Cuál es tu expectativa salarial?</td>
          <td data-field="multiple_choice_question_1">Tienes disponibilidad para viajar?</td>
          <td data-field="multiple_choice1_option_1">Si</td>
          <td data-field="multiple_choice1_option_2">No</td>
          <td data-field="multiple_choice1_option_3"></td>
          <td data-field="multiple_choice_question_2">Cuantos años de experiencia laboral tienes?</td>
          <td data-field="multiple_choice2_option_1">Entre 0 y 3 años</td>
          <td data-field="multiple_choice2_option_2">Entre 3 y 7 años</td>
          <td data-field="multiple_choice2_option_3">Más de 7 años</td>
          <td data-field="checkbox_question_1">Cuáles de estas certificaciónes tienes?</td>
          <td data-field="checkbox1_option_1">CIA</td>
          <td data-field="checkbox1_option_2">CISA</td>
          <td data-field="checkbox1_option_3">CPA</td>
          <td data-field="checkbox_question_2">Cuáles de estos idiomas hablas y escribes con fluidez?</td>
          <td data-field="checkbox2_option_1">Español</td>
          <td data-field="checkbox2_option_2">Inglés</td>
          <td data-field="checkbox2_option_3">Alemán</td>
          <td data-field="created_at"></td>
          <td data-field="updated_at"></td>

          
          <td>
            <a class="button button-small edit" title="Edit">
              <i class="fas fa-pencil-alt table-icons"></i>
            </a> <a class="button button-small" title="Delete">
              <i class="fas fa-trash-alt table-icons"></i>
            </a>
          </td>

        </tr>
        <tr data-id="3">
          <td data-field="id">3</td>
          <td data-field="job_title">Gerente de Logística</td>
          <td data-field="company_type">Importante empresa de retail</td>
          <td data-field="job_location">Tigre, Buenos Aires</td>
          <td data-field="open_question_1">Cuéntanos por qué crees que eres el candidato ideal para esta posición?</td>
          <td data-field="open_question_2">Cuál es tu expectativa salarial?</td>
          <td data-field="multiple_choice_question_1">Has tenido posiciones gerenciales con personal a cargo?</td>
          <td data-field="multiple_choice1_option_1">Si</td>
          <td data-field="multiple_choice1_option_2">No</td>
          <td data-field="multiple_choice1_option_3"></td>
          <td data-field="multiple_choice_question_2">Cuantos años de experiencia laboral tienes?</td>
          <td data-field="multiple_choice2_option_1">Menos de 7 años</td>
          <td data-field="multiple_choice2_option_2">Entre 7 y 10 años</td>
          <td data-field="multiple_choice2_option_3">Más de 10 años</td>
          <td data-field="checkbox_question_1">Cuáles de estos programas manejas?</td>
          <td data-field="checkbox1_option_1">SAP MM</td>
          <td data-field="checkbox1_option_2">SAP FICO</td>
          <td data-field="checkbox1_option_3">Excel</td>
          <td data-field="checkbox_question_2">Cuáles de estos idiomas hablas y escribes con fluidez?</td>
          <td data-field="checkbox2_option_1">Español</td>
          <td data-field="checkbox2_option_2">Inglés</td>
          <td data-field="checkbox2_option_3">Francés</td>
          <td data-field="created_at"></td>
          <td data-field="updated_at"></td>
          
          <td>
            <a class="button button-small edit" title="Edit">
              <i class="fas fa-pencil-alt table-icons"></i>
            </a> <a class="button button-small" title="Delete">
              <i class="fas fa-trash-alt table-icons"></i>
            </a>
          </td>

        </tr>
      </tbody>
    </table>
  </div>
</div>
</div>
</div>
                <!--/Card-->
            </div>
            <!--/container-->

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
<script src="https://cdn.jsdelivr.net/npm/pikaday/pikaday.js"></script>
<!-- <script src='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css'></script> -->
<script type="text/javascript" src="js/job-openings.js"></script>
</div>