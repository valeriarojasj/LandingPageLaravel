<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    

    <meta charset="utf-8">
    <title>FYG</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    {{-- Tailwind modal head --}}

    <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet">  
    <style>
      .modal {
        transition: opacity 0.25s ease;
      }
      body.modal-active {
        overflow-x: hidden;
        overflow-y: visible !important;
      }
    </style>
 {{-- end of Tailwind modal head --}}
    <script src="https://kit.fontawesome.com/b67648323f.js" crossorigin="anonymous"></script>
    @livewireStyles
  
  </head>
  <body>
    
<header>
    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="/"><img src="img/logo-fyg.png" style="
        height: 50px;" alt=""></a>
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
                  <ul class="text-left requirements">
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
                  <ul class="text-left requirements">
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
                  <ul class="text-left requirements">
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
        <p class="text-justify sectionText"><strong>Reclutamiento, selección, entrenamiento, capacitación de equipos de trabajo</strong>, enfoca el objetivo en aportar herramientas en la formación de las personas haciendo que las cosas sucedan. Nuestros pilares: Profesionales comprometidos Desafiamos el Status-quo</p>
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
      <p class="text-justify sectionText">Somos un equipo de <strong>profesionales multidisciplinario</strong> especialista en <strong>Reclutamiento y Selección de Talento</strong> donde nuestro objetivo en este proceso no es simplemente de selección sino de mutua elección, cuidando a nuestros candidatos como futuros <strong>CO-CREADORES</strong> de la organización</p>
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
            
            
         
            <div class="mb-3 card card-block d-flex justify-content-center align-items-center" >
              <img class ="imgReviewComments" src="img/reviewComments.png" width="120px" alt="">
              <div class="row h-100 no-gutters d-flex align-items-center" >
                <div class="col-md-4 d-flex align-items-center">
                  <img src="img/mujer.png" class="card-img"  style="width: 80%;" alt="...">
                </div>
                <div class="col-md-8 d-flex align-items-center">
                  <div class="card-body d-flex"> 
                    
                    <p class="text-justify card-text">"...Realmente <strong>las felicito por el profesionalismo y humanidad </strong>que le ponen a lo que hacen, uno se siente <strong>persona y no un recurso</strong>"</p>
                  
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
        <div class="mx-auto col-lg-8">
          <h2 class=text-center>Aplica a nuestras búsquedas activas</h2>
         <br>

          <h4 class=text-center>Ésta puede ser tu oportunidad</h4>
          <br>
          <br>
          </div>
</div>
<button class="px-4 py-2 font-bold text-white bg-pink-700 border border-gray-500 rounded-full modal-open hover:border-indigo-500 hover:text-indigo-500">Postularme</button>



<div class="fixed top-0 left-0 flex items-center justify-center w-full h-full opacity-0 pointer-events-none modal">
  <!--Modal Overlay-->
  <div class="absolute w-full h-full bg-gray-900 opacity-50 modal-overlay"></div>
  <!--Cierre Modal Overlay-->
  <!--Contenedor del modal-->
  <div class="z-50 w-11/12 mx-auto overflow-y-auto bg-white rounded shadow-lg modal-container md:max-w-md">
    <div class="absolute top-0 right-0 z-50 flex flex-col items-center mt-4 mr-4 text-sm text-white cursor-pointer modal-close">
      <svg class="text-white fill-current" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
        <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
      </svg>
      <span class="text-sm"></span>
    </div>

    <!-- Contenido del modal (Title y Body)-->
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
      <!--Cierre del Title-->


<livewire:formulario />



      </div>
  </div>
  <!--Cierre del Contenedor del Modal-->
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
    <p class="m-0 text-center text-white footerTxt">FYG Consultoría | Copyright &copy; 2020 - Todos los derechos reservados</p>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<script type="text/javascript" src="js/applicationForm.js"></script>

{{-- modal script --}}
<script>
  var openmodal = document.querySelectorAll('.modal-open')
  for (var i = 0; i < openmodal.length; i++) {
    openmodal[i].addEventListener('click', function(event){
    event.preventDefault()
    toggleModal()
    })
  }
  
  const overlay = document.querySelector('.modal-overlay')
  overlay.addEventListener('click', toggleModal)
  
  var closemodal = document.querySelectorAll('.modal-close')
  for (var i = 0; i < closemodal.length; i++) {
    closemodal[i].addEventListener('click', toggleModal)
  }
  
  document.onkeydown = function(evt) {
    evt = evt || window.event
    var isEscape = false
    if ("key" in evt) {
    isEscape = (evt.key === "Escape" || evt.key === "Esc")
    } else {
    isEscape = (evt.keyCode === 27)
    }
    if (isEscape && document.body.classList.contains('modal-active')) {
    toggleModal()
    }
  };
  
  
  function toggleModal () {
    const body = document.querySelector('body')
    const modal = document.querySelector('.modal')
    modal.classList.toggle('opacity-0')
    modal.classList.toggle('pointer-events-none')
    body.classList.toggle('modal-active')
  }
  
   
</script>
{{-- end of Modal script --}}

@livewireScripts

    
  </body>
</html>
