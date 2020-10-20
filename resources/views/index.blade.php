<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>

    <meta charset="utf-8">
    <title>FYG</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/b67648323f.js" crossorigin="anonymous"></script>
  </head>
  <body>

<header>
    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href=""><img src="img/logo1.png" height="50px" alt=""></a>
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
          <ol class="carousel-indicators">
            <li data-target="#carouselIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselIndicators" data-slide-to="1"></li>
            <li data-target="#carouselIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="divImgText">
                <img src="img/imagen3.png" class="d-block" height="300px;" alt="...">
                <div class="divText d-block">
                  <h2 class="text-left">Analista Contable SSr</h2>
                  <ul class="requirements text-left">
                    <li>Experiencia en Ingreso y análisis de Asientos Contables</li>
                    <li>Normas IFRS</li>
                    <li>CNV y BCRA</li>
                  </ul>
                <div class="text-right">
                  <button class= "btn applyBtn" type="button" name="button">Postúlate</button>
                </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="divImgText">
                <img src="img/imagen1.png" class="d-block" height="300px;" alt="...">
                <div class="divText d-block">
                  <h2 class="text-left">DATA HUB Jr</h2>
                  <ul class="requirements text-left">
                    <li>Experiencia mayor a 6 meses en procesos ETL</li>
                    <li>Conocimientos en Python y Scala</li>
                  </ul>
                  <div class="text-right">
                    <button class= "btn applyBtn" type="button" name="button">Postúlate</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="divImgText">
                <img src="img/imagen2.png" class="d-block" height="300px;" alt="...">
                <div class="divText d-block">
                  <h2 class="text-left">Ejecutivo Large Corporate</h2>
                  <ul class="requirements text-left">
                    <li>Liderar la relación comercial con grandes cuentas</li>
                    <li>Administrar la venta e implementación de productos y servicios de todo el portafolio de la Cía</li>
                  </ul>
                  <div class="text-right">
                    <button class= "btn applyBtn" type="button" name="button">Postúlate</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="services">
      <div class="sectionText">
      <h2 class=text-center>¿Qué hacemos?</h2>

        <p class="lead"><strong>Reclutamiento, selección, entrenamiento, capacitación de equipos de trabajo</strong>, enfoca el objetivo en aportar herramientas en la formación de las personas haciendo que las cosas sucedan. Nuestros pilares: Profesionales comprometidos Desafiamos el Status-quo</p>

        <div class="iconDiv">
          <img src="img/iconoTransparente.png" width="100px;" alt="">
          <img src="img/plus.png" width="100px;" height="100px;" alt="">
          <img src="img/iconoTransparente.png" width="100px;" alt="">
          <img src="img/plus.png" width="100px;" height="100px;" alt="">
          <img src="img/iconoTransparente.png" width="100px;" alt="">
        </div>
      </div>
</section>

<section id="about">
  <div class="sectionText">
    <h2 class=text-center>¿Quiénes somos?</h2>
      <p class="lead">Somos un equipo de <strong>profesionales multidisciplinario</strong> especialista en <strong>Reclutamiento y Selección de Talento</strong> donde nuestro objetivo en este proceso no es simplemente de selección sino de mutua elección, cuidando a nuestros candidatos como futuros <strong>CO-CREADORES</strong> de la organización</p>
        <ul>
          <li>Mirá nuestras búsquedas activas</li>
        </ul>
        <div class="reviewsDiv">


          <h2 class=text-center>Lo que dicen nuestros candidatos</h2>
          <div class="review">

          </div>
        </div>
  </div>


</section>

<section id="apply">
    <div class="row">
      <div class="col-lg-8 mx-auto">
        <h2 class=text-center>Postúlate</h2>
        <form enctype="multipart/form-data">
          <div class="form-row">
            <div class="form-group col-md-12">
              <label for="fullName">Nombre y apellido</label>
              <input type="text" class="form-control" id="fullName">
            </div>
          </div>
          <div class="form-group">
            <label for="email">Correo electrónico</label>
            <input type="text" class="form-control" id="email" placeholder="usuario@email.com">
          </div>
          <div class="form-group">
            <label for="linkedinProfile">Ingresa tu perfil de LinkedIn</label>
            <input type="text" class="form-control" id="linkedinProfile" placeholder="Perfil de LinkedIn">
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

          </div>

          <div class="form-group">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="gridCheck">
              <label class="form-check-label" for="gridCheck">
                Check me out
              </label>
            </div>
          </div>
          <button type="submit" class="btn btn-primary">Sign in</button>


      </form>
      </div>
    </div>
</section>


<section id="contact">
  <div class="sectionText">
        <div class="divImgText">
            <img src="img/logo2.png" height="200px;" alt="">
            <div class="info">
              <div class="divFollowInfo">
                <h4 class=text-left>Seguinos</h4>
                <i class="fab fa-linkedin-in social"></i>
                <i class="fab fa-facebook-square social"></i>
                <i class="fab fa-instagram social"></i>
              </div>
              <div class="divContactInfo">
                <h4 class=text-left>Contactanos</h4>
                <ul class="noBulletsList">
                  <li><b>E-mail:</b>info@fygconsultoria.com.ar</li>
                  <li>Horario de atención</li>
                  <li>Lunes a Viernes de 9 a 18 hs</li>
                </ul>
              </div>
            </div>
        </div>

  </div>

</section>

</main>
<!-- Footer -->
<footer class="py-5">
  <div class="">
    <p class="m-0 text-center text-white">FYG Consultoría | Copyright &copy; 2020 - Todos los derechos reservados</p>
  </div>
</footer>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
  </body>
</html>
