<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>

    <meta charset="utf-8">
    <title>FYG</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/b67648323f.js" crossorigin="anonymous"></script>
    @livewireStyles
  
  </head>
  <body>
    
<header>
    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href=""><img src="img/logo-fyg.png" height="50px" alt=""></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav nav">
          <li class="nav-item">
            <a class="nav-link" href="#home">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#services">Servicios</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about">Nosotros</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#apply">Postúlate</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact">Contáctanos</a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <main>

    <section id="home">
      <div class="text-center">
        <div id="carouselIndicators" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="divImgText">
                <img src="img/contable.png" class="d-block" height="300px;" alt="...">
                <div class="divText d-block">
                  <h2 class="text-left">Analista Contable SSr</h2>
                  <ul class="requirements text-left">
                    <li>Experiencia en Ingreso y análisis de Asientos Contables</li>
                    <li>Normas IFRS</li>
                    <li>CNV y BCRA</li>
                  </ul>
                <div class="text-right">
                  <a class="btn applyBtn" href="#apply" role="button">Postúlate</a>
                </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="divImgText">
                <img src="img/datahub.png" class="d-block" height="300px;" alt="...">
                <div class="divText d-block">
                  <h2 class="text-left">DATA HUB Jr</h2>
                  <ul class="requirements text-left">
                    <li>Experiencia mayor a 6 meses en procesos ETL</li>
                    <li>Conocimientos en Python y Scala</li>
                  </ul>
                  <div class="text-right">
                    <a class="btn applyBtn" href="#apply" role="button">Postúlate</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="divImgText">
                <img src="img/ejecutivo.png" class="d-block" height="300px;" alt="...">
                <div class="divText d-block">
                  <h2 class="text-left">Ejecutivo Large Corporate</h2>
                  <ul class="requirements text-left">
                    <li>Liderar la relación comercial con grandes cuentas</li>
                    <li>Administrar la venta e implementación de productos y servicios de todo el portafolio de la Cía</li>
                  </ul>
                  <div class="text-right">
                    <a class="btn applyBtn" href="#apply" role="button">Postúlate</a>
                  </div>
                </div>
              </div>
            </div>
          </div>


          <ol class="carousel-indicators">
            <li data-target="#carouselIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselIndicators" data-slide-to="1"></li>
            <li data-target="#carouselIndicators" data-slide-to="2"></li>
          </ol>



          
        </div>
      </div>
    </section>
    <section id="services" class="flexbox-container">
      <div class="flexbox-item1">
      <h2 class=text-center>¿Qué hacemos?</h2>
    </div>
      <div class="flexbox-item2">
        <p class="sectionText text-justify"><strong>Reclutamiento, selección, entrenamiento, capacitación de equipos de trabajo</strong>, enfoca el objetivo en aportar herramientas en la formación de las personas haciendo que las cosas sucedan. Nuestros pilares: Profesionales comprometidos Desafiamos el Status-quo</p>
      </div>  
        <div class="iconDiv flexbox-item3">
          <img src="img/lupa-cv.png" width="100px;" alt="">
          <img src="img/plus.png" width="100px;" height="100px;" alt="">
          <img src="img/feedback.png" width="100px;" alt="">
          <img src="img/plus.png" width="100px;" height="100px;" alt="">
          <img src="img/candidato-compu.png" width="100px;" alt="">
        </div>
      
</section>

<section id="about" class = "flexbox-container">
  
    <div class = "flexbox-item1">
    <h2 class="text-center">¿Quiénes somos?</h2>
    </div>
    <div class = "flexbox-item2">
      <p class="sectionText text-justify">Somos un equipo de <strong>profesionales multidisciplinario</strong> especialista en <strong>Reclutamiento y Selección de Talento</strong> donde nuestro objetivo en este proceso no es simplemente de selección sino de mutua elección, cuidando a nuestros candidatos como futuros <strong>CO-CREADORES</strong> de la organización</p>
    </div>
          
      

      <div id="imgTextBtn flexbox-item3">
        <div id="left">

            <img src="img/aplicar.png" class="imgOffers" width="100px" alt="...">
        </div>
        <div id="right"><button class="btn applyBtn">Postúlate</button></div>
        <div id="center"><h5 class="textOffers">Mirá nuestras búsquedas activas</h5></div>
      </div>
        
    </section>  
        
    

    <section id="reviews">  
      <h2 class=text-center>Lo que dicen nuestros candidatos</h2>
        <div class="reviewsDiv">
         
          <div class="review">
            
            
         
            <div class="card card-block d-flex mb-3 justify-content-center align-items-center" >
              <img class ="imgReviewComments" src="img/reviewComments.png" width="120px" alt="">
              <div class="row h-100 no-gutters d-flex align-items-center" >
                <div class="col-md-4 d-flex align-items-center">
                  <img src="img/mujer.png" class="card-img"  style="width: 80%;" alt="...">
                </div>
                <div class="col-md-8 d-flex align-items-center">
                  <div class="card-body d-flex"> 
                    
                    <p class="card-text text-justify">"...Realmente <strong>las felicito por el profesionalismo y humanidad </strong>que le ponen a lo que hacen, uno se siente <strong>persona y no un recurso</strong>"</p>
                  
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
    </div>

  </section>  



<section id="apply">
    <div class="row">
        <div class="col-lg-8 mx-auto">
          <h2 class=text-center>Aplica a nuestras búsquedas activas</h2>
         <br>

          <h4 class=text-center>Ésta puede ser tu oportunidad</h4>
          <br>
          <br>
          </div>
</div>
<livewire:formulario />
<!-- 
<form id="formulario" method="POST" action="">
  @csrf
    <div class="row form-group">
      
        <div class="divFullName col-12 col-md-4">
            <label for="fullName">Nombre y Apellido</label>
            <input  type="text" class="form-control applyInput" id="fullName" placeholder="">
        </div>
        <div class="divDni col-12 col-md-4">
            <label for="dni">DNI</label>
            <input  type="text" class="form-control applyInput" id="dni" placeholder="">
        </div>
        <div class="divBday col-12 col-md-4 ">
          <label  for="bday">Fecha de Nacimiento</label>
          <input type="date" class="form-control" id="bday">
      </div>
    
        <div class="col-12 col-md-6 mt-5">
            <label for="email">Correo Electrónico</label>
            <input  type="email" class="form-control applyInput" id="email" placeholder="">
        </div>
        <div class="col-12 col-md-6 mt-5">
          <label for="linkedin">LinkedIn</label>
          <input type="text" class="form-control applyInput" id="linkedin" placeholder="">
      </div>
        <div class="divCountry col-12 col-md-6">
          <label for="country"></label>
          <select id="country" class="form-control">
            <option selected>Selecciona el país donde vives...</option>
          </select>
        </div>

         {{-- <div class="divOtherCountry col-12 col-md-6">
            <label for="otherCountry"></label>
            <input type="text" class="form-control applyInput" id="otherCountry" placeholder="Indica tu país">
            </div> --}}

          <div class="divProvince col-12 col-md-6" style="display:none;" >
            <label for="province"></label>
            <select id="province" class="form-control" >
              <option value=""> Selecciona la provincia donde vives...</option>
            </select>
            </div>
         
          <div class="divCity col-12 col-md-6" style="display:none;">
              <label for="city"></label>
          <select id="city" class="form-control" >
            <option value="">Selecciona la ciudad donde vives...</option>
          
          </select>
          </div>

          <div class="divEducation col-12 col-md-6">
            <label for="educationLevel"></label>
            <select id="educationLevel" class="form-control">
                <option selected>Selecciona tu nivel de educación...</option>
                <<option>Secundario incompleto</option>
                <option>Secundario Completo</option>
                <option>Universitario en curso</option>
                <option>Universitario Graduado</option>
                <option>Universitario Abandonado</option>
                <option>Posgrado en curso</option>
                <option>Posgrado completo</option>
              </select>
          </div>
          <div class="divCareer col-12 col-md-6">
            <label for="career"></label>
            <select id="career" class="form-control">
                <option selected>Selecciona tu carrera universitaria...</option>
                <<option>Abogacía</option>
                <option>Ingeniería Informática</option>
                <option>Diseño Gráfico</option>
                <option>Ingeniería Industrial</option>
              </select>
          </div>
        
          <div class="divJobtoApply col-12">
            <label for="jobToApply"></label>
            <select id="jobToApply" class="form-control">
                <option selected>Selecciona la búsqueda a la cual deseas postularte...</option>
                <<option>Analista Contable Ssr</option>
                <option>Ejecutivo Large Corporate</option>
                <option>Data Hub Jr</option>
              </select>
          </div>
      </div>
      <button id="btnFormulario" class="btn applyBtn"> Enviar</button>
   </form>
   -->
       {{-- <div class="row">
      <div class="col-lg-8 mx-auto">
        <h2 class=text-center>Postúlate</h2>
        <form enctype="multipart/form-data">
          <div class="form-row">
            <div class="form-group col-md-12 border-b border-teal-500" >
              <label for="fullName"></label>
              <input type="text" class="form-control " id="fullName" placeholder="Nombre y apellido">
            </div>
          </div>
          <div class="form-group">
            <label for="email"></label>
            <input type="text" class="form-control" id="email" placeholder="Correo Electrónico">
          </div>
          <div class="form-group">
            <label for="linkedinProfile"></label>
            <input type="text" class="form-control" id="linkedinProfile" placeholder="Ingresa tu perfil de LinkedIn">
          </div>

          <div class="divEducation mt-3">
            <select id="inputEducation" class="form-control">
                <option selected>Selecciona tu nivel de educación...</option>
                <<option>Secundario incompleto</option>
                <option>Secundario Completo</option>
                <option>Universitario en curso</option>
                <option>Universitario Graduado</option>
                <option>Universitario Abandonado</option>
                <option>Posgrado en curso</option>
                <option>Posgrado completo</option>
              </select>
          </div>

          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputCity">Ciudad</label>
              <select id="inputCity" class="form-control">
                <option selected>Selecciona la ciudad...</option>
                <<option>Buenos Aires</option>
                <option>La Plata</option>
                <option>Bariloche</option>
                <option>Salta</option>
                <option>Mendoza</option>
              </select>
            </div>
            <div class="form-group col-md-6">
              <label for="inputCountry">País</label>
              <select id="inputCountry" class="form-control">
                <option selected>Selecciona el país...</option>
                <option>Argentina</option>
                <option>Uruguay</option>
                <option>Brasil</option>
              </select>
            </div>

            <div class="divEducation mt-3">
                <select id="inputReferral" class="form-control">
                    <option selected>¿Dónde nos conociste?...</option>
                    <option>LinkedIn</option>
                    <option>Facebook</option>
                    <option>Instagram</option>
                    <option>Conocido</option>
                    <option>Universitario Abandonado</option>
                    <option>Posgrado en curso</option>
                    <option>Posgrado completo</option>
                  </select>
              </div>

          </div>
          <div class="row">
        <div class="col">
          <div class="form-check form-check-inline">
            <p>Pregunta</p>
          </div>
          <div class="form-check form-check-inline">
            
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
            <label class="form-check-label" for="inlineRadio1">Si</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
            <label class="form-check-label" for="inlineRadio2">No</label>
          </div>

        </div>
        <div class="col">
          <div class="form-check form-check-inline">
            
            <p>Pregunta</p>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
            <label class="form-check-label" for="inlineRadio1">Si</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
            <label class="form-check-label" for="inlineRadio2">No</label>
          </div>
        </div>
        </div>
        <div class="row">
            <div class="col">
              <div class="form-check form-check-inline">
                <p>Pregunta</p>
              </div>
              <div class="form-check form-check-inline">
                
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                <label class="form-check-label" for="inlineRadio1">Si</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                <label class="form-check-label" for="inlineRadio2">No</label>
              </div>
    
            </div>
            <div class="col">
              <div class="form-check form-check-inline">
                
                <p>Pregunta</p>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                <label class="form-check-label" for="inlineRadio1">Si</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                <label class="form-check-label" for="inlineRadio2">No</label>
              </div>
            </div>
            </div>

         
          <button type="submit" class="btn btn-primary">Aplicar</button>
          <button type="submit" class="btn btn-secondary">Cancelar</button>


      </form>
      </div>
    </div> --}}
     <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

</section>


<section id="contact">
  <div class="sectionText">
        <div class="divImgText">
            <img src="img/logo-fyg.png" height="200px;" alt="">
            <div class="info">
              <div class="divFollowInfo">
                <h4 class=text-left>Seguinos</h4>
                <a class= "link" href=""><i class="fab fa-linkedin-in social" style="color:white;"></i></a>
                <a class ="link" href=""><i class="fab fa-facebook-square social" style="color:white;"></i></a>
                <a class ="link" href=""><i class="fab fa-instagram social" style="color:white;"></i></a>
              </div>
              <div class="divContactInfo">
                <h4 class=text-left>Contactanos</h4>
                <ul class="noBulletsList">
                  <li><b>E-mail: </b>info@fygconsultoria.com.ar</li>
                  <li>Horario de atención</li>
                  <li>Lunes a Viernes de 9 a 18 hs</li>
                </ul>
              </div>
            </div>
        </div>

  </div>


</section>
<section id ="subscribe">
  <form>

    <div class="subscribe-container">
      <div class="subscribe-item1">

        <label for="inputEmail3" >Querés enterarte de nuestras últimas búsquedas y eventos?</label>
      </div>
      <div class="subscribe-item2">
        <input type="email" class="form-control" id="inputEmailSubscribe" placeholder="Escribí tu dirección de email">

      </div>
      <div class="subscribe-item3">

      <button type="submit" class="btn applyBtn">Subscribirme</button>
      </div>



    </div>

     
    
  </form>


</section>
</main>
<!-- Footer -->
<footer class="footer">
  <div class="footerDiv">
    <p class="m-0 footerTxt text-center text-white">FYG Consultoría | Copyright &copy; 2020 - Todos los derechos reservados</p>
  </div>
</footer>

<script type="text/javascript" src="js/applicationForm.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
@livewireScripts
    
  </body>
</html>
