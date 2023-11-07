<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link href="main.css" rel="stylesheet">
    <title>Yahisa Industrial</title>
</head>

<body>

    <!--Encabezado-->
    <header class="container-fluid bg-primary
    d-flex justify-content-center">
         <!-- <p class="text-light mb-0 p-2 fs-6">Contáctanos 8134422014</p> -->
         
    </header>

    <nav class="navbar navbar-expand-lg navbar-light bg-light p-3">
        <div class="container-fluid">
            <a class="navbar-brand" href="./index.php">
                <img src="./img/logo.png" alt="logotipo" >
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">

                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Incio</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#equipo">Equipo</a>
                    </li>

                 

                    
                </ul>
    <!--

                <div class="container-fluid">
                    <form class="d-flex">
                        <input class="form-control me-2" type="email" placeholder="Correo Electrónico" aria-label="email">
                        <button class="btn btn-primary btn-primary-outline-success" type="button">Suscribete</button>
                    </form>
                </div> Encabezado-->



            </div>
        </div>
    </nav>

    <!--Slideer de img-->

    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">

            <div class="carousel-item active" data-bs-interval="1500">
                <img src="./img/slide1.jpg" class="d-block w-100" alt="slide1">
            </div>

            <div class="carousel-item" data-bs-interval="1500">
                <img src="./img/slide2.jpg" class="d-block w-100" alt="slide2">
            </div>

            <div class="carousel-item" data-bs-interval="1500">
                <img src="./img/slide3.jpg" class="d-block w-100" alt="slide3">
            </div>

        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
    </div>

    <!--INTRO-->

    <section class="w-50 mx-auto text-center pt-5" id="intro">
        <h1 class="p-3 fs-2 border-top border-3"> La mejor opción para la fabricación de piezas según especifiación del cliente con<span class="text-primary"> corte láser de gran precisión.</span> </h1>
        <p class="p-3 fs-4"><span class="text-primary">Yahisa Industrial</span> es una gran empresa con excelente calidad para fabricar todo tipo de piezas en el entorno del corte láser cnc.</p>
    </section>

    <!--SERVICIOS-->
    <section class="conteiner-fluid">
        <div class="row w-75 mx-auto servicio-fila">
            <div class="col-lg-6 col-md-12 col-sm-12 d-flex my-5 icono-wrap">
                <img src="./img/equipo.jpg" alt="equipo" width="180" height="160" id="equipo" > 
                <div>
                    <h3 class="fs-5 mt-4 px-4 pb-1">Equipo</h3>
                    <p class="px-4">Nuestras mejores máquinas para brindar excelente servicio.</p>
                </div>
            </div>

            <div class="col-lg-6 col-md-12 col-sm-12 d-flex my-5 icono-wrap">
                <img src="./img/productos.jpg" alt="productos" width="180" height="160" id="producto" >
                <div>
                    <h3 class="fs-5 mt-4 px-4 pb-1">Productos</h3>
                    <p class="px-4">Los productos y piezas en las mejores manos.</p>
                </div>
            </div>

            <div class="col-lg-6 col-md-12 col-sm-12 d-flex my-5 icono-wrap">
                <img src="./img/certificacion.jpeg" alt="productos" width="180" height="160" id="certificacion" >
                <div>
                    <h3 class="fs-5 mt-4 px-4 pb-1">Certificación</h3>
                    <p class="px-4">Tenemos todas las certificaciones necesarias para fabricar todo tipo de piezas.</p>
                </div>
            </div>
        </div>
    </section>

    <!--ACERCA DE NOSOTROS-->

    <section>
        <div class="w-75 m-auto text-center" id="equipo">
            <h1 mb-5 fs-2>Equipo pequeño con <span class="text-primary">Resultados grandes</span> </h1>
            <p class="fs-4">Nuestro personal está enfocado en principalmente siempre ofrecer un gran servicio en cuanto a productos y un gran trato a clientes nuevos. </p>
        </div>
        <div class="mt-5 text-center">
            <img class="img-fluid" src="./img/personal.jpg" alt="personal" id="personal" >

        </div>

        

    </section>
    

    <!--Pie de pagina-->
    <footer class="w-100 d-flex align-items-center justify-content-center flex-wrap">

<div class="container text-center">
<div class="row">
<div class="col">
<img src="./img/logo.png" alt="logotipo" class="position-relative">
<ul class="list-unstyled fs-5 px-3 pt-3 text-light">
   <li>Yahisa Industrial es una gran</li>
   <li>empresa con excelente calidad</li>
   <li>para fabricar todo tipo de</li>
   <li>piezas en el entorno del</li>
   <li>corte láser cnc.</li>
</ul>
</div>
<div class="col">
<p class="fs-5 px-3 pt-5"><i class="bi bi-geo-alt"> Ayuntamiento 160, Los Elizondo, 66050 Cd Gral Escobedo, N.L.</i></p>
              <p class="fs-5 px-3 pt-5"> <i class="bi bi-telephone"> +52 (81) 34 42 20 14</i> </p>
</div>
</div>
</div>
   <p class="fs-5 px-3 pt-3">Yahisa Industrial. &copy; Todos Los Derechos Reservados 2022</p>
   <div class="" id="iconos">
   <a href="https://www.facebook.com/profile.php?id=100007346568689&fref=ts"><i class="bi bi-facebook"></i></a>
       <a href="#"><i class="bi bi-twitter"></i></a>
       <a href="#"><i class="bi bi-instagram"></i></a>
   </div>
</footer>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>
    <script src="main.js">
    </script>

</body>

<script type="text/javascript">
    const img1 = document.querySelector("#equipo");
    const img2 = document.querySelector("#producto");
    const img3 = document.querySelector("#certificacion");
    const img4 = document.querySelector("#personal");


    img1.addEventListener("mouseover", function() {
        animarOpacidad(img1);
    })

    img2.addEventListener("mouseover", function() {
        animarOpacidad(img2);
    })

    img3.addEventListener("mouseover", function() {
        animarOpacidad(img3);
    })

    img4.addEventListener("mouseover", function() {
        animarOpacidad(img4);
    })

    

    function animarOpacidad(img) {
        var animacion = img.animate({
            opacity: [0, 1]
        }, 2000);
    }



    </script>


</html>