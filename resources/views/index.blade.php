<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>FYG</title>
    {{-- <link rel="preconnect" href="https://fonts.gstatic.com"> --}}
    {{-- <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"> --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
    </style>
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
    <script src="https://kit.fontawesome.com/dd0322cf66.js" crossorigin="anonymous"></script>
    {{-- <script src="https://kit.fontawesome.com/b67648323f.js" crossorigin="anonymous"></script> --}}
    @livewireStyles
  </head>

  <body>
    <header>
      <nav class="shadow navbar fixed-top navbar-expand-lg navbar-light bg-light" style="border-bottom: solid #bbb 2px;">
        <a class="ml-5 navbar-brand" href="/login">
          <img src="img/logo.png" style="height: 50px;" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon">
          </span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
          <ul class="navbar-nav nav">
            <li class="nav-item">
              <a class="nav-link" href="#home">
                Home
                <span class="sr-only">
                  (current)
                </span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#services">
                Servicios
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">
                Nosotros
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#apply">
                Postúlate
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">
                Contáctanos
              </a>
            </li>
          </ul>
        </div>
      </nav>
    </header>

    <main>
      <section id="home">
        <livewire:carousel />
      </section>

      <div>
        <div>
          <hr class="solid">
        </div>
      </div>

      <section id="services" class="flexbox-container">
        <div class="flexbox-item1">
          <h2 class=text-center>
            ¿Qué hacemos?
          </h2>
        </div>
        <div class="flexbox-item2">
          <p class="text-justify sectionText">
            <strong>Reclutamiento, selección, entrenamiento, capacitación de equipos de trabajo</strong>, enfoca el objetivo en aportar herramientas en la formación de las personas haciendo que las cosas sucedan. Nuestros pilares: Profesionales comprometidos. Desafiamos el Status-quo
          </p>
        </div>  
        <div class="iconDiv flexbox-item3">
          <img src="img/iconos.png" height="100px;" alt="">
        </div>
      </section>

      <div>
        <hr class="solid">
      </div>

      <section id="about" class = "flexbox-container">
        <div class = "flexbox-item1">
          <h2 class="text-center">
            ¿Quiénes somos?
          </h2>
        </div>
        <div class = "flexbox-item2">
          <p class="text-justify sectionText">
            Somos un equipo de <strong>profesionales multidisciplinario</strong> especialista en 
            <strong>Reclutamiento y Selección de Talento </strong>
            donde nuestro objetivo en este proceso no es simplemente de 
            selección sino de mutua elección, cuidando a nuestros candidatos como futuros 
            <strong>CO-CREADORES</strong> de la organización
          </p>
        </div>
        <div id="imgTextBtn flexbox-item3" style="display: flex; justify-content: space-evenly;">
          <div style="text-align: center;">
            <a href="https://www.linkedin.com/in/eliana-garzia-b34a9116" style="display: block;position: relative;top: 0;left: 0;width: 100%;">
              <img src="img/elianafoto.png" alt="">
              <span class="index">
                <i class="fab fa-linkedin">
                </i>
                Eliana Garzia
              </span>
            </a>
          </div>
          <div style="text-align: center;">
            <a href="https://www.linkedin.com/in/jesica-fichera-b2a30013" style="display: block;position: relative;top: 0;left: 0;width: 100%;">
              <img src="img/jesicafoto.png" alt="">
              <span class="index">
                <i class="fab fa-linkedin">
                </i>
                Jesica Fichera
              </span>
            </a>
          </div>
        </div>
      </section>  

      <div>
        <hr class="solid">
      </div>

      <section id="reviews">  
        <h2 class=text-center>
          Lo que dicen nuestros candidatos
        </h2>
        <div class="reviewsDiv">
          <div class="review">
            <div class="mb-3 card card-block d-flex justify-content-center align-items-center" >
              <img class ="imgReviewComments" src="img/icono-comentario.png" width="120px" alt="">
              <div class="mt-5 row h-100 no-gutters d-flex align-items-center" > 
                <div class="col-md-12 d-flex align-items-center">
                  <div id="carouselComments" class="mt-3 carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <p>
                          "Comenzando nuevos desafíos gracias a las chicas de <strong>FYG Consultoría.</strong> 
                          Este post es simplemente para eso, darles las gracias por estar al pie del cañón, ser super 
                          profesionales, estar atentas y entender que del otro lado de la búsqueda... hay alguien que 
                          espera. <strong>#graciastotales</strong>"
                        </p>
                      </div>
                      <div class="carousel-item">
                        <p>
                          "...Realmente <strong>las felicito por el profesionalismo y humanidad</strong> que le 
                          ponen a lo que hacen, uno se siente <strong>persona</strong> y <strong>no un recurso</strong>".
                        </p>
                      </div>
                      <div class="carousel-item">
                        <p>
                          "<strong>Muchas gracias</strong> por el aviso. Solo me queda remarcar lo que 
                          mencioné antes: <strong>Muy profesional tu gestión dando feedback en todo 
                          momento</strong> y dejando todo muy claro"
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section> 

      <div>
        <hr class="solid">
      </div>

      <br>

      <section id="apply">
        <div class="mb-3 row">
          <div class="mx-auto ">
            <h2 class="text-center">
              Aplica a nuestras búsquedas activas
            </h2>
            <h4 style="font-size: 1.6rem !important;"class="mt-2 text-center">
              Ésta puede ser tu oportunidad
            </h4>
          </div>
        </div>
        <div class="mt-3 row"  >
          <livewire:active-jobs />  
        </div>
      </section>

      <br>
      <br>
      <br>

      <div>
        <hr class=" solid contact-hr">
      </div>

      <section id="contact">
        <div class="sectionText">
          <div class="divImgText">
            <img src="{{asset('img/logo-fyg.png')}}" height="150px;" alt="">
            <div class="info">     
              <div class="divContactInfo">
                <h3 class="mb-4 text-left" >
                  Contactanos
                </h3>
                <a href="https://www.linkedin.com/company/fyg-consultoria">
                  <i class="fab fa-linkedin" >
                  </i>
                </a>
                <a href="https://www.facebook.com/FyGConsul" >
                  <i class="fab fa-facebook-square" >
                  </i>
                </a>
                <a href="https://instagram.com/fygconsultoria?igshid=1qj5nmr67z1f1">
                  <i class="fab fa-instagram">
                  </i>
                </a>
                <ul class="noBulletsList">
                  <li style="font-size:1.3rem !important;" class ="contactLi">
                    Horario de atención
                  </li>
                  <li style="font-size:1.3rem !important;" class ="contactLi">
                    Lunes a Viernes de 9 a 18 hs
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>

      <div>
        <hr class="solid ">
      </div>

      <section id ="subscribe">
        <livewire:subscription-component />
      </section>
    </main>

    <footer class="footer">
      <div class="footerDiv">
        <p  style="font-size:1rem !important;" class="m-0 text-center footerTxt">
          FYG Consultoría | Copyright &copy; 2020 - Todos los derechos reservados
        </p>
      </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    {{-- modal script --}}
    <script>
      window.addEventListener('toggle-modal', event => {
        toggleModal();
      })
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
        const modalContainer =document.getElementById('divHidden');
        let result = modalContainer.classList.contains('hidden')
        modal.classList.toggle('opacity-0')
        modal.classList.toggle('pointer-events-none')
        body.classList.toggle('modal-active')
        modalContainer.classList.toggle('hidden')
      }
      window.addEventListener('showSuccessMessage', event=>{
        const div = document.getElementById('success');
        div.innerHTML=`
          <div class="alert alert-success alert-dismissible" role="alert">
            Gracias por postularte!
            <button type="button" class="float-right close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        `
      })
    </script>
    {{-- end of Modal script --}}
    @livewireScripts  
  </body>
</html>
