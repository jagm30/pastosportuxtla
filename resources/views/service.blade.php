@extends("../layout.plantilla")
@section("bodypage")

    <!-- Page Header Start -->
    <div class="container-fluid page-header">
        <h1 class="display-3 text-uppercase text-white mb-3">Servicios</h1>
    </div>
    <!-- Page Header Start -->

    <!-- Services Start -->
    <div class="container-fluid bg-light py-6 px-5">
        <div class="text-center mx-auto mb-5" style="max-width: 600px;">
            <h1 class="display-5 text-uppercase mb-4">Suministro e instalación <span class="text-primary">de pasto sintético</span></h1>
        </div>
        <div class="row g-5">
            <div class="col-lg-4 col-md-6">
                <div class="service-item bg-white d-flex flex-column align-items-center text-center">
                    <img class="img-fluid" src="img/service-1.jpg" alt="">
                    <div class="service-icon bg-white">
                        <i class="fa fa-3x fa-building text-primary"></i>
                    </div>
                    <div class="px-4 pb-4">
                        <h4 class="text-uppercase mb-3">PASTO SINTETICO DEPORTIVO</h4>
                        <p>Nuestro pasto sintético para uso deportivo ofrece confort, seguridad y confianza. Todo lo que los deportistas de alto rendimiento</p>
                        <a class="btn text-primary" href="/servicio-sintetico">Leer más<i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-item bg-white rounded d-flex flex-column align-items-center text-center">
                    <img class="img-fluid" src="img/service-2.jpg" alt="">
                    <div class="service-icon bg-white">
                        <i class="fa fa-3x fa-home text-primary"></i>
                    </div>
                    <div class="px-4 pb-4">
                        <h4 class="text-uppercase mb-3">PASTO SINTETICO RESIDENCIAL</h4>
                        <p>El pasto residencial cuenta con una fibra texturizada que le brinda seguridad a toda la familia gracias a su composición</p>
                        <a class="btn text-primary" href="#">Leer más<i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-item bg-white rounded d-flex flex-column align-items-center text-center">
                    <img class="img-fluid" src="img/service-3.jpg" alt="">
                    <div class="service-icon bg-white">
                        <i class="fa fa-3x fa-drafting-compass text-primary"></i>
                    </div>
                    <div class="px-4 pb-4">
                        <h4 class="text-uppercase mb-3">PINTURA ANTIDERRAPANTE SONNOFLEX</h4>
                        <p>La seguridad es fundamental en cualquier entorno, ya sea en áreas residenciales, comerciales o industriales.</p>
                        <a class="btn text-primary" href="/servicio-sonnoflex">Leer más<i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection("bodypage")
@section("scriptpage")
    <script>
        (function ($) {
            $("#menuservice").addClass("nav-item nav-link active");
        })(jQuery);
    </script>
@endsection("scriptpage")