@extends("../layout.plantilla")
@section("bodypage")

    <!-- Page Header Start -->
    <div class="container-fluid page-header">

    </div>
    <!-- Page Header Start -->

    <!-- Blog Start -->
    <div class="container-fluid py-6 px-5">
        <div class="row g-5">
            <div class="col-lg-8">
                <!-- Blog Detail Start -->
                <div class="mb-5">
                    <div class="row">
                        <div class="col-lg-5 pb-5" style="min-height: 300px;">
                            <div class="position-relative bg-dark-radial h-100 ms-5">
                                <img class="position-absolute w-100 h-100 mt-5 ms-n5" src="img/galeria/residencial/IMG_2.jpg" style="object-fit: cover; width: 150px; height: 150px;">
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <h1 class="text-uppercase mb-4">PASTO SINTETICO RESIDENCIAL</h1>
                            <p>El pasto residencial cuenta con una fibra texturizada que le brinda seguridad a toda la familia gracias a su composición, su apariencia es similar al del pasto natural y está desarrollado para promover la permeabilidad del agua. No necesita de un sistema de riego, por lo que contribuye considerablemente el ahorro del agua.
                            </p>
                            <p>Beneficios que aportan las canchas de pasto sintético para los jugadores son: <br>

                            <div class="col-sm-12 mb-2">
                                <p class="fw-bold mb-2"><i class="fa fa-check text-primary me-3"></i>Material HDEP y Latex</p>
                                <p class="fw-bold mb-2"><i class="fa fa-check text-primary me-3"></i>Retardante al fuego</p>
                                <p class="fw-bold mb-2"><i class="fa fa-check text-primary me-3"></i>Filtro UV</p>
                                <p class="fw-bold mb-2"><i class="fa fa-check text-primary me-3"></i>Alta durabilidad</p>
                                <p class="fw-bold mb-2"><i class="fa fa-check text-primary me-3"></i>Filtro de agua</p>
                            </div>
                        
                            </p>

                            <p>Nuestros pastos sintéticos tienen resistencia a los rayos UV, no contienen elementos tóxicos, es suave al roce para evitar quemaduras y resistencia al desgaste de acuerdo con la intensidad de uso requerida ya que contamos con una doble base.</p>
                        </div>
                    </div>
                </div>
                <!-- Blog Detail End -->
                <!-- Comment Form End -->
            </div>

            <!-- Sidebar Start -->
            <div class="col-lg-4">
            <style type="text/css">
                    #contfacebook {
                        max-width:600px !important; height:500px; text-align: center;
                    }
                    .col-lg-4 {text-align: center;}
                    @media only screen and (max-width: 400px) {
                        #contfacebook {
                            max-width:380px !important; height:500px; text-align: center;
                        }
                        .mb-5 {text-align: center;}
                    }
                </style>
                    <!-- Category Start -->
                    <div class="mb-5" style="text-align: center !important;">
                        
                            <iframe id="contfacebook" src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FPastoSinteticoST%2F&tabs=timeline&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                        
                    </div>-->

                <!-- Recent Post Start -->
                <div class="mb-5">
                    <h3 class="text-uppercase mb-4">Servicios</h3>
                    <div class="bg-light p-4">
                        <div class="d-flex mb-3">
                            <img class="img-fluid" src="img/blog-1.jpg" style="width: 100px; height: 100px; object-fit: cover;" alt="">
                            <a href="/servicio-sintetico" class="h6 d-flex align-items-center bg-white text-uppercase px-3 mb-0">Pasto sintético deportivo
                            </a>
                        </div>
                        <div class="d-flex mb-3">
                            <img class="img-fluid" src="img/blog-2.jpg" style="width: 100px; height: 100px; object-fit: cover;" alt="">
                            <a href="/servicio-residencial" class="h6 d-flex align-items-center bg-white text-uppercase px-3 mb-0">Pasto sintético residencial
                            </a>
                        </div>
                        <div class="d-flex mb-3">
                            <img class="img-fluid" src="img/blog-3.jpg" style="width: 100px; height: 100px; object-fit: cover;" alt="">
                            <a href="/servicio-sonnoflex" class="h6 d-flex align-items-center bg-white text-uppercase px-3 mb-0">Pintura antiderrapante sonnoflex 
                            </a>
                        </div>                       
                    </div>
                </div>
                <!-- Recent Post End -->

                <!-- Image Start -->
                <div class="mb-5">
                    <img src="img/blog-1.jpg" alt="" class="img-fluid rounded">
                </div>
                <!-- Image End -->
            
            </div>
            <!-- Sidebar End -->
        </div>
    </div>
    <!-- Blog End -->

@endsection("bodypage")
@section("scriptpage")
    <script>
        (function ($) {
            $("#menuservice").addClass("nav-item nav-link active");
        })(jQuery);
    </script>
@endsection("scriptpage")