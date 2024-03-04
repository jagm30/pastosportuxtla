@extends("../layout.plantilla")
@section("bodypage")
    <!-- Carousel Start -->
    <div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/slide/carousel-1.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <i class="fa fa-home fa-4x text-primary mb-4 d-none d-sm-block"></i>
                            <h1 class="display-2 text-uppercase text-white mb-md-4">Tu mejor opción</h1>
                            <a href="" class="btn btn-primary py-md-3 px-md-5 mt-2">Pastos Sintéticos</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/slide/carousel-2.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <i class="fa fa-tools fa-4x text-primary mb-4 d-none d-sm-block"></i>
                            <h1 class="display-2 text-uppercase text-white mb-md-4">Lo mejor en suministros e Instalación</h1>
                            <a href="" class="btn btn-primary py-md-3 px-md-5 mt-2">Contactanos</a>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- About Start -->
    <div class="container-fluid py-6 px-5">
        <div class="row g-5">
            <div class="col-lg-4">
                <h1 class="display-5 text-uppercase mb-4"> <span class="text-primary">SPORT TUXTLA</span></h1>
                <!--<h4 class="text-uppercase mb-3 text-body">Tempor erat elitr at rebum at at clita. Diam dolor diam ipsum tempor sit diam amet diam et eos labore</h4>-->
                <p style="text-align: justify;">Es una empresa 100% Chiapaneca contamos con 7 años en el mercado con experiencia en el suministro, instalación y mantenimiento de pasto sintético en canchas deportivas como futbol 7, futbol Soccer, futbol americano, futbol rápido, tenis, etc.
                Contamos con pasto sintético para uso deportivo, áreas recreativas y residencial, de igual forma nos especializamos en pintura antiderrapante sonnoflex para canchas, pistas de tartán, pádel, follaje, duelas de caucho. 
                </p>
                <p style="text-align: justify;">Podemos garantizar a nuestros clientes que nuestros productos tienen la más alta calidad, asegurando la durabilidad de nuestro pasto sintético, ya que nuestro fabricante ha realizado diferentes pruebas de laboratorio en Estados Unidos con relación al desgaste y el uso de nuestro pasto, obteniendo como resultados más de 20,000 ciclos o 2,000 horas anuales y 8 años de uso, logrando daños leves en nuestras fibras. 
                </p>
                <p class="mb-4" style="text-align: justify;">Es para nosotros gratificante y a la vez retador ver como ya somos lideres de pasto sintético en Chiapas, trabajamos todos, día a día para mantener nuestra reputación satisfaciendo siempre las expectativas de cada uno de nuestros clientes.</p>
            </div>
            <div class="col-lg-4 pb-5" style="min-height: 400px;">
                <div class="position-relative bg-dark-radial h-100 ms-5">
                    <img class="img-fluid" src="img/about.jpg" style="object-fit: cover;">
                </div>
            </div>
            <style type="text/css">
                #contfacebook {
                    max-width:600px !important; height:500px; text-align: center;
                }
                .col-lg-4 {text-align: center;}
                @media only screen and (max-width: 400px) {
                    #contfacebook {
                        max-width:380px !important; height:500px; text-align: center;
                    }
                    .col-lg-4 {text-align: center;}
                }
            </style>
            <div class="col-lg-4 pb-4" style="min-height: 280px;">

                <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FPastoSinteticoST&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="340" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                
                <!--  <iframe id="contfacebook" src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FPastoSinteticoST%2F&tabs=timeline&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" style="border:none;overflow:hidden" scrolling="true" frameborder="1" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>-->
                
            </div>
        </div>
    </div>
    <!-- About End -->    

    <!-- Services Start -->
    <div class="container-fluid bg-light py-6 px-5">
        <div class="text-center mx-auto mb-5" style="max-width: 600px;">
            <h1 class="display-5 text-uppercase mb-4"> <span class="text-primary">Nuestros</span> Servicios</h1>
        </div>
        <div class="row g-5">
            <div class="col-lg-4 col-md-6">                
                <a  href="img/galeria/sintetico/IMG_6.jpg" data-lightbox="sintetico">
                <div class="service-item bg-white d-flex flex-column align-items-center text-center">
                    <img class="img-fluid" src="img/pastos/servicio1.png" alt="" width="600" height="400">
                    <div class="service-icon bg-white">
                        <i class="fa fa-3x fa-building text-primary"></i>
                    </div>
                    <div class="px-4 pb-4">
                        
                            <h4 class="text-uppercase mb-3">Instalación de pasto sintético en canchas deportivas</h4>
                        
                        <p></p>
                        <!--<a class="btn text-primary" href="">Read More <i class="bi bi-arrow-right"></i></a>-->
                    </div>
                </div>
                </a>
                <?php
                    for($i=1; $i<6;  $i++){
                    ?>
                    <a  href="img/galeria/sintetico/IMG_<?php echo $i;?>.jpg" data-lightbox="sintetico">
                    </a>
                <?php
                }
                ?>
            </div>
            <div class="col-lg-4 col-md-6">                
                <a  href="img/galeria/residencial/IMG_5.jpg" data-lightbox="residencial">
                <div class="service-item bg-white rounded d-flex flex-column align-items-center text-center">
                    <img class="img-fluid" src="img/pastos/servicio2.png" alt="">
                    <div class="service-icon bg-white">
                        <i class="fa fa-3x fa-home text-primary"></i>
                    </div>
                    <div class="px-4 pb-4">
                        <h4 class="text-uppercase mb-3">Instalación de pasto sintético en residencias</h4>                        
                    </div>
                </div>
                </a>
                <?php
                    for($i=1; $i<5;  $i++){
                    ?>
                    <a  href="img/galeria/residencial/IMG_<?php echo $i;?>.jpg" data-lightbox="residencial">
                    </a>
                <?php
                }
                ?>
            </div>
            <div class="col-lg-4 col-md-6">
                
                <a  href="img/galeria/follaje/IMG_1.jpg" data-lightbox="follaje">
                <div class="service-item bg-white rounded d-flex flex-column align-items-center text-center">
                    <img class="img-fluid" src="img/galeria/follaje/vista.jpg" alt="">
                    <div class="service-icon bg-white">
                        <i class="fa fa-3x fa-drafting-compass text-primary"></i>
                    </div>
                    <div class="px-4 pb-4">
                        <h4 class="text-uppercase mb-3">Instalación de follaje artificial</h4>
                    </div>
                </div>
                </a>
                <?php
                    for($i=1; $i<6;  $i++){
                    ?>
                    <a  href="img/galeria/follaje/IMG_<?php echo $i;?>.jpg" data-lightbox="follaje">
                    </a>
                <?php
                }
                ?>
            </div>
            <div class="col-lg-4 col-md-6">
                <a  href="img/galeria/tartan/IMG_1.jpg" data-lightbox="tartan">
                <div class="service-item bg-white rounded d-flex flex-column align-items-center text-center">
                    <img class="img-fluid" src="img/pastos/servicio4.png" alt="">
                    <div class="service-icon bg-white">
                        <i class="fa fa-3x fa-palette text-primary"></i>
                    </div>
                    <div class="px-4 pb-4">
                        <h4 class="text-uppercase mb-3">Instalación de pista de tartán</h4>
                    </div>
                </div>
                </a>
                <?php
                    for($i=1; $i<6;  $i++){
                    ?>
                    <a  href="img/galeria/tartan/IMG_<?php echo $i;?>.jpg" data-lightbox="tartan">
                    </a>
                <?php
                }
                ?>
            </div>
            <div class="col-lg-4 col-md-6">
                <a  href="img/galeria/loseta/IMG_6.jpg" data-lightbox="loseta">
                <div class="service-item bg-white rounded d-flex flex-column align-items-center text-center">
                    <img class="img-fluid" src="img/pastos/servicio5.png" alt="">
                    <div class="service-icon bg-white">
                        <i class="fa fa-3x fa-tools text-primary"></i>
                    </div>
                    <div class="px-4 pb-4">
                        <h4 class="text-uppercase mb-3">Instalación de loseta de caucho</h4>
                    </div>
                </div>
                </a>
                <?php
                    for($i=2; $i<5;  $i++){
                    ?>
                    <a  href="img/galeria/loseta/IMG_<?php echo $i;?>.jpg" data-lightbox="loseta">
                    </a>
                <?php
                }
                ?>
            </div>
            <div class="col-lg-4 col-md-6">                
                <a  href="img/galeria/sonoflex/IMG_7812.jpg" data-lightbox="sonoflex">
                <div class="service-item bg-white rounded d-flex flex-column align-items-center text-center">
                    <img class="img-fluid" src="img/pastos/servicio6.png" alt="">
                    <div class="service-icon bg-white">
                        <i class="fa fa-3x fa-paint-brush text-primary"></i>
                    </div>
                    <div class="px-4 pb-4">
                        <h4 class="text-uppercase mb-3">Aplicación de pintura antiderrapante sonnoflex para canchas deportivas</h4>
                    </div>
                </div>
                </a>
                <?php
                    for($i=1; $i<12;  $i++){
                    ?>
                    <a  href="img/galeria/sonoflex/IMG_<?php echo $i;?>.jpg" data-lightbox="sonoflex">
                    </a>
                <?php
                }
                ?>
            </div>
            <div class="col-lg-4 col-md-6">
                <a  href="img/galeria/mantenimiento/IMG_6.jpg" data-lightbox="mantenimiento">
                <div class="service-item bg-white rounded d-flex flex-column align-items-center text-center">
                    <img class="img-fluid" src="img/pastos/servicio7.png" alt="">
                    <div class="service-icon bg-white">
                        <i class="fa fa-3x fa-tools text-primary"></i>
                    </div>
                    <div class="px-4 pb-4">
                        <h4 class="text-uppercase mb-3">Mantenimiento de canchas deportivas</h4>
                    </div>
                </div>
                </a>
                <?php
                    for($i=1; $i<12;  $i++){
                    ?>
                    <a  href="img/galeria/mantenimiento/IMG_<?php echo $i;?>.jpg" data-lightbox="mantenimiento">
                    </a>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
    <!-- Services End -->
@endsection("bodypage")
@section("scriptpage")
    <script>
        (function ($) {
            $("#menuinicio").addClass("nav-item nav-link active");
        })(jQuery);
    </script>
@endsection("scriptpage")