<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    

    <meta charset="utf-8">
    <title>FYG</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
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
      <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light" style="border-bottom: solid #bbb 2px;">
        <a class="ml-5 navbar-brand" href="/"><img src="img/logo.png" style="height: 50px;" alt=""></a>
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


      
      <div id="carouselIndicators" class="carousel slide" data-bs-ride="carousel">
  <ol class="carousel-indicators">
    <li data-bs-target="#carouselIndicators" data-bs-slide-to="0" class="active"></li>
    <li data-bs-target="#carouselIndicators" data-bs-slide-to="1"></li>
    <li data-bs-target="#carouselIndicators" data-bs-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="divImgText">
        <img src="img/imagen-scrum.png" class="d-block" height="300px;" alt="...">
        <div class="divText d-block">
          <h3 class="text-left">Scrum Master</h3>
          <ul class="text-left requirements">
            <li>Para el <strong>equipo de IT </strong>en importante <strong>fintech</strong>.</li>
            <li>Experiencia de más de 2 años</li>
          </ul>
          <div class="mt-3 text-right">
            <a class="rounded-full btn applyBtn" href="#apply" role="button">Postúlate</a>
          </div>
        </div>
      </div>
    </div>

    <div class="carousel-item">

    <div class="divImgText">
        <img src="img/imagen-scrum.png" class="d-block" height="300px;" alt="...">
        <div class="divText d-block">
          <h3 class="text-left">Data Analyst</h3>
          <ul class="text-left requirements">
            <li>Experiencia en manejo de base de datos</li>
            <li>Para importante banco</li>
          </ul>
          <div class="mt-3 text-right">
            <a class="rounded-full btn applyBtn" href="#apply" role="button">Postúlate</a>
          </div>
        </div>
      </div>
  
    </div>
    <div class="carousel-item">

    <div class="divImgText">
        <img src="img/imagen-scrum.png" class="d-block" height="300px;" alt="...">
        <div class="divText d-block">
          <h3 class="text-left">Consultor</h3>
          <ul class="text-left requirements">
            <li>Disponibilidad para viajar</li>
          </ul>
          <div class="mt-3 text-right">
            <a class="rounded-full btn applyBtn" href="#apply" role="button">Postúlate</a>
          </div>
        </div>
      </div>
    </div>

  </div>

</div>




        
    </section>

    <hr class="solid">

    <section id="services" class="flexbox-container">
      <div class="flexbox-item1">
      <h2 class=text-center>¿Qué hacemos?</h2>
    </div>
      <div class="flexbox-item2">
        <p class="text-justify sectionText"><strong>Reclutamiento, selección, entrenamiento, capacitación de equipos de trabajo</strong>, enfoca el objetivo en aportar herramientas en la formación de las personas haciendo que las cosas sucedan. Nuestros pilares: Profesionales comprometidos. Desafiamos el Status-quo</p>
      </div>  
        <div class="iconDiv flexbox-item3">
          <img src="img/iconos.png" height="100px;" alt="">
          {{-- <img src="img/lupa-cv.png" width="100px;" alt="">
          <img src="img/plus.png" width="100px;" height="100px;" alt="">
          <img src="img/feedback.png" width="100px;" alt="">
          <img src="img/plus.png" width="100px;" height="100px;" alt="">
          <img src="img/candidato-compu.png" width="100px;" alt=""> --}}
        </div>
      
</section>

<hr class="solid">

<section id="about" class = "flexbox-container">

  <div class = "flexbox-item1">
    <h2 class="text-center">¿Quiénes somos?</h2>
  </div>

  <div class = "flexbox-item2">
    <p class="text-justify sectionText">Somos un equipo de 
      <strong>profesionales multidisciplinario</strong>
      especialista en 
      <strong>Reclutamiento y Selección de Talento </strong>
      donde nuestro objetivo en este proceso no es simplemente de selección sino de mutua elección, cuidando a nuestros candidatos como futuros 
      <strong>CO-CREADORES</strong> de la organización
    </p>
  </div>

  <div id="imgTextBtn flexbox-item3" style="display: flex; justify-content: space-evenly;">
    <div style="text-align: center;">
      <a href="https://www.linkedin.com/in/eliana-garzia-b34a9116" style="display: block;position: relative;top: 0;left: 0;width: 100%;">
        <img src="img/elianafoto.png" alt="">
        <span><i class="fab fa-linkedin"></i>  Eliana Garzia</span>
      </a>
    </div>
    
    <div style="text-align: center;">
      <a href="https://www.linkedin.com/in/jesica-fichera-b2a30013" style="display: block;position: relative;top: 0;left: 0;width: 100%;">
        <img src="img/jesicafoto.png" alt="">
        <span><i class="fab fa-linkedin"></i>  Jesica Fichera</span>
      </a>
    </div>
          
    </section>  

    <hr class="solid">
    
    <section id="reviews">  
      
    <h2 class=text-center>Lo que dicen nuestros candidatos</h2>
    
    <div class="reviewsDiv">
      <div class="review">
        <div class="mb-3 card card-block d-flex justify-content-center align-items-center" >
          <img class ="imgReviewComments" src="img/icono-comentario.png" width="120px" alt="">
          <div class="row h-100 no-gutters d-flex align-items-center" >
            <div class="col-md-4 d-flex align-items-center">
              <img src="img/mujer.png" class="card-img"  style="width: 80%;" alt="...">
            </div>
            <div class="col-md-8 d-flex align-items-center">
              <div class="card-body d-flex"> 
                <p class="text-justify card-text">"...Realmente <strong>las felicito por el profesionalismo y humanidad </strong>
                que le ponen a lo que hacen, uno se siente <strong>persona y no un recurso</strong>"
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section> 

<hr class="solid">

<section id="apply">
  
  <div class="row">
    <div class="mx-auto">
      <h2 class=text-center>Aplica a nuestras búsquedas activas</h2>
      <br>
      <h4 class=text-center>Ésta puede ser tu oportunidad</h4>
      <br>
    </div>

     <div class="grid max-w-screen-xl grid-cols-1 px-4 mx-auto gap-y-4 lg:grid-cols-3 lg:gap-4">
       <div class="px-4 py-3 rounded-xl d-flex flex-column tarjetaBusqueda">
         <h5 class="tituloBusqueda">Programador PHP</h5>
         <p class="empresaBusqueda">Empresa Farmacéutica</p>
         <span class="mb-1 lugarBusqueda">Ciudad de Buenos Aires</span>
         <div class="mt-auto text-right">
           <button class="px-4 py-1 font-bold text-white border border-gray-500 rounded-full btn btnModal modal-open hover:border-indigo-500 hover:text-indigo-500" >Postularme</button>
         </div>
       </div>
       
       <div class="px-4 py-3 rounded-xl tarjetaBusqueda d-flex flex-column">
         <h5 class="tituloBusqueda">Asesores Financieros Idóneos CNV</h5>
         <p class="empresaBusqueda">Importante banco</p>
         <span class="mb-1 lugarBusqueda">Ciudad de Buenos Aires</span>
         <div class="mt-auto text-right ">
           <button class="px-4 py-1 font-bold text-white border border-gray-500 rounded-full btn btnModal modal-open hover:border-indigo-500 hover:text-indigo-500" >Postularme</button>
         </div>
       </div>

       <div class="px-4 py-3 rounded-xl tarjetaBusqueda d-flex flex-column">
         <h5 class="tituloBusqueda">Analista Contable</h5>
         <p class="empresaBusqueda">Importante banco</p>
         <span class="mb-1 lugarBusqueda">La Plata</span>
         <div class="mt-auto text-right ">
           <button class="px-4 py-1 font-bold text-white border border-gray-500 rounded-full btn btnModal modal-open hover:border-indigo-500 hover:text-indigo-500" >Postularme</button>
         </div>
       </div>

       <div class="px-4 py-3 rounded-xl tarjetaBusqueda d-flex flex-column">
         <h5 class="tituloBusqueda">Gerente de Proyecto</h5>
         <p class="empresaBusqueda">Importante empresa de retail</p>
         <span class="mb-1 lugarBusqueda">Ciudad de Buenos Aires</span>
         <div class="mt-auto text-right ">
           <button class="px-4 py-1 font-bold text-white border border-gray-500 rounded-full btn btnModal modal-open hover:border-indigo-500 hover:text-indigo-500" >Postularme</button>
         </div>
       </div>

       <div class="px-4 py-3 rounded-xl tarjetaBusqueda d-flex flex-column">
         <h5 class="tituloBusqueda">Gerente de Producto</h5>
         <p class="empresaBusqueda">Empresa de Tecnología</p>
         <span class="mb-1 lugarBusqueda">Ciudad de Buenos Aires</span>
         <div class="mt-auto text-right ">
           <button class="px-4 py-1 font-bold text-white border border-gray-500 rounded-full btn btnModal modal-open hover:border-indigo-500 hover:text-indigo-500" >Postularme</button>
         </div>
       </div>

       <div class="px-4 py-3 rounded-xl tarjetaBusqueda d-flex flex-column">
         <h5 class="tituloBusqueda">Auditor de procesos</h5>
         <p class="empresaBusqueda">Empresa automotriz</p>
         <span class="mb-1 lugarBusqueda">Provincia de Buenos Aires</span>
         <div class="mt-auto text-right ">
           <button class="px-4 py-1 font-bold text-white border border-gray-500 rounded-full btn btnModal modal-open hover:border-indigo-500 hover:text-indigo-500" >Postularme</button>
         </div>
       </div>

       <div class="px-4 py-3 rounded-xl tarjetaBusqueda d-flex flex-column">
         <h5 class="tituloBusqueda">Programador JAVA Senior</h5>
         <p class="empresaBusqueda">Start up</p>
         <span class="mb-1 lugarBusqueda">Mendoza</span>
         <div class="mt-auto text-right ">
           <button class="px-4 py-1 font-bold text-white border border-gray-500 rounded-full btn btnModal modal-open hover:border-indigo-500 hover:text-indigo-500" >Postularme</button>
         </div>
       </div>

       <div class="px-4 py-3 rounded-xl tarjetaBusqueda d-flex flex-column">
         <h5 class="tituloBusqueda">Asesores Financieros Idóneos CNV</h5>
         <p class="empresaBusqueda">Importante banco</p>
         <span class="mb-1 lugarBusqueda">Ciudad de Buenos Aires</span>
         <div class="mt-auto text-right ">
           <button class="px-4 py-1 font-bold text-white border border-gray-500 rounded-full btn btnModal modal-open hover:border-indigo-500 hover:text-indigo-500" >Postularme</button>
         </div>
       </div>

       <div class="px-4 py-3 rounded-xl tarjetaBusqueda d-flex flex-column">
         <h5 class="tituloBusqueda">Asesores Financieros Idóneos CNV</h5>
         <p class="empresaBusqueda">Importante banco</p>
         <span class="mb-1 lugarBusqueda">Ciudad de Buenos Aires</span>
         <div class="mt-auto text-right ">
           <button class="px-4 py-1 font-bold text-white border border-gray-500 rounded-full btn btnModal modal-open hover:border-indigo-500 hover:text-indigo-500" >Postularme</button>
         </div>
       </div>
            




<div class="fixed top-0 left-0 flex items-center justify-center w-full h-full opacity-0 pointer-events-none modal">
  <!--Modal Overlay-->
  <div class="absolute w-full h-full bg-gray-900 opacity-50 modal-overlay"></div>
  <!--Cierre Modal Overlay-->
  <!--Contenedor del modal-->
  <div class="z-50 hidden w-11/12 mx-auto overflow-y-auto bg-white rounded shadow-lg modal-container md:max-w-md">
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

<hr class="solid contact-hr">

<section id="contact">
  <div class="sectionText">
        <div class="divImgText">
            <img src="img/logo-fyg.png" height="150px;" alt="">
            <div class="info">
              
              <div class="divContactInfo">

                <h3 class="mb-4 text-left" >Contactanos</h3>
                <a  href="https://www.linkedin.com/company/fyg-consultoria"><i class="fab fa-linkedin" ></i></a>
                <a  href="https://www.facebook.com/FyGConsul" ><i class="fab fa-facebook-square" ></i></a>
                <a   href="https://instagram.com/fygconsultoria?igshid=1qj5nmr67z1f1"><i class="fab fa-instagram"></i></a>
                <ul class="noBulletsList">
                  <li class ="contactLi">Horario de atención</li>
                  <li class ="contactLi">Lunes a Viernes de 9 a 18 hs</li>
                </ul>
              </div>
            </div>
        </div>

  </div>


</section>

<hr class="solid">

<section id ="subscribe">
  <form>

    <div class="subscribe-container">
      <div class="subscribe-item1">

        <label id="labelSubscribe" for="inputEmail3" >Querés enterarte de nuestras últimas búsquedas y eventos?</label>
      </div>
      <div class="subscribe-item2">
        <input type="email" class="form-control" id="inputEmailSubscribe" placeholder="Escribí tu dirección de email">

      </div>
      <div class="subscribe-item3">

      <button type="submit" class="rounded-full btn applyBtn">Subscribirme</button>
      </div>



    </div>

     
    
  </form>


</section>

</main>
<!-- Footer -->
<footer class="footer">
  <div class="footerDiv">
    <p class="m-0 text-center footerTxt">FYG Consultoría | Copyright &copy; 2020 - Todos los derechos reservados</p>
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
    const modalContainer = document.querySelector('.modal-container')
    modal.classList.toggle('opacity-0')
    modal.classList.toggle('pointer-events-none')
    body.classList.toggle('modal-active')
    modalContainer.classList.toggle('hidden')
    
  }
  
   
</script>
{{-- end of Modal script --}}

@livewireScripts

    
  </body>
</html>
