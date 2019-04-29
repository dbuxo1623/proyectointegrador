<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dande Lion - Home</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Rancho" rel="stylesheet">
    <style>@import url('https://fonts.googleapis.com/css?family=Rancho');</style>
    <link rel="stylesheet" href="styles.css">
    <style>
    .carousel{
        background: #2f4357;
        margin-top: 20px;
    }
    .carousel-item{
        text-align: center;
        min-height: 140px; /* Prevent carousel from being distorted if for some reason image doesn't load */
    }
    .bs-example{
    	margin: 20px;
    }
    </style>
  </head>

  <body>
      <!-- acá arranca el header -->

        <div class="container-fluid">
          <header class="row main-header align-items-center">
            <!-- logo: buscar imagen para logo -->
            <div class="col-1">
              	<img src="images/logo.jpg" alt="logotipo" class="logo" width="60px" height="80px">
            </div>
            <div class="col-2">
              <h1 class="titulo-del-logo">Dandelion</h1>
            </div>
            <div class="col-5">
              <a href="#" class="toggle-nav">
                <span class="ion-navicon-round"></span>
              </a>
              <nav class="main-nav">
                <ul>
                  <li><a href="about.php">Sobre Nosotros</a></li>
                  <li><a href="faqs.php">Preguntas Frecuentes</a></li>
                </ul>
              </nav>
            </div>

                <!-- formularios para login -->
              <div class="col-4 login">
                <button type="button" class="btn btn-light btn btn-lg">Mi Cuenta</button>
                <button type="button" class="btn btn-light btn btn-lg">Registrarse</button>
                <button type="button" class="btn btn-light btn btn-lg">Iniciar Sesión</button>
              </div>

          </header>
            <!-- acá arranca el banner con carrousel -->
            <div class="bs-example">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Carousel indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>
                    <!-- Wrapper for carousel items -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="images/foto1.jpg" alt="First Slide">
                        </div>
                        <div class="carousel-item">
                            <img src="images/foto2.jpg" alt="Second Slide">
                        </div>
                        <div class="carousel-item">
                            <img src="images/foto3.jpg" alt="Third Slide">
                        </div>
                    </div>
                    <!-- Carousel controls -->
                    <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a class="carousel-control-next" href="#myCarousel" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </a>
                </div>
            </div>


            <!-- footer -->
              <div class="card text-center">
              <div class="card-body">
                <h5 class="card-title">Contacto: <br> <img src="images/envelope.png" alt="e-mail"> dandelion@gmail.com <br> <img src="images/phone-call.png" alt="telefono"> (011) 4456-8756 <br> <img src="images/placeholder.png" alt="ubicacion"> Armenia 2387, Palermo </h5>
                <p class="card-text">Somos una empresa que busca ayudar a regalar. Confia en nosotros!</p>
                <a href="#" class="btn btn-light"> Mirá los intereses!</a>
              </div>
              <div class="card-footer text-muted">
              </div>
              </div>

      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

  </body>


</html>
