<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Pasto Sport Tuxtla</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="{{ asset("css/all.min.css") }}" rel="stylesheet">
    <link href="{{ asset("css/bootstrap-icons.css") }}" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset("lib/owlcarousel/assets/owl.carousel.min.css") }}" rel="stylesheet">
    <link href="{{ asset("lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css") }}" rel="stylesheet" />
    <link href="{{ asset("lib/lightbox/css/lightbox.min.css") }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid px-5 d-none d-lg-block">
        <div class="row gx-5">
            <div class="col-lg-4 text-center py-3">
                <div class="d-inline-flex align-items-center">
                    <i class="bi bi-geo-alt fs-1 text-primary me-3" style="color: green !important"></i>
                    <div class="text-start">
                        <h6 class="text-uppercase fw-bold">Ubicación</h6>
                        <span>Av. 15 Noviembre, mz 44 lte. Linda vista Shanka.</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 text-center border-start border-end py-3">
                <a href="https://wa.link/1tpdmx" target="_blank">
                <div class="d-inline-flex align-items-center">
                    <i class="bi bi-whatsapp fs-1 text-primary me-3" style="color: green !important"></i>
                    <div class="text-start">
                        <h6 class="text-uppercase fw-bold" style="color: green !important">Contacto</h6>
                        <span style="color: green !important">9612074672</span>
                    </div>
                </div>
                </a>
            </div>
            <div class="col-lg-4 text-center py-3">
                <div class="d-inline-flex align-items-center">
                    <i class="bi bi-phone-vibrate fs-1 text-primary me-3" style="color: green !important"></i>
                    <div class="text-start">
                        <h6 class="text-uppercase fw-bold">Teléfono</h6>
                        <span>9612074672</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid sticky-top bg-dark bg-light-radial shadow-sm px-5 pe-lg-0">
        <nav class="navbar navbar-expand-lg bg-dark bg-light-radial navbar-dark py-3 py-lg-0">
            <a href="/" class="navbar-brand">
                <h1 class="m-0 display-4 text-uppercase text-white"><i class="bi bi-futbol text-primary me-2"></i>Sport Tuxtla</h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="/" class="nav-item nav-link" id="menuinicio">Inicio</a>
                    <a href="/nosotros" class="nav-item nav-link" id="menuabout">Nosotros</a>
                    <a href="/servicios" class="nav-item nav-link" id="menuservice">Servicios</a>
                    <a href="/contacto" class="nav-item nav-link" id="menucontact">Contacto</a>
                    <a href="https://wa.link/1tpdmx" target="_blank" class="nav-item nav-link bg-primary text-white px-5 ms-3 d-none d-lg-block">Cotizar<i class="bi bi-arrow-right"></i></a>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->
@yield("bodypage")
    


    <!-- Footer Start -->
    <div class="footer container-fluid position-relative bg-dark bg-light-radial text-white-50 py-6 px-5">
        <div class="row g-5">
            <div class="col-lg-6 pe-lg-5">
                <a href="/" class="navbar-brand">
                    <h1 class="m-0 display-4 text-uppercase text-white"><i class="bi bi-building text-primary me-2"></i>Sport Tuxtla</h1>
                </a>
                <p>Contamos con pasto sintético para uso deportivo, áreas recreativas y residencial, de igual forma nos especializamos en pintura antiderrapante sonnoflex para canchas, pistas de tartán, pádel, follaje, duelas de caucho. </p>
                <p><i class="fa fa-map-marker-alt me-2"></i>Av.15 Noviembre, mz 44 lte. Linda vista Shanka.</p>
                <p><i class="fa fa-phone-alt me-2"></i>961 207 4672</p>
                <a href="mailto:contacto@pastosportuxtla.com"><p><i class="fa fa-envelope me-2"></i>contacto@pastosportuxtla.com</p></a>

                <div class="d-flex justify-content-start mt-4">
                    <a class="btn btn-lg btn-primary btn-lg-square rounded-0 me-2" target="_blank" href="https://www.facebook.com/PastoSinteticoST/?locale=es_LA"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-lg btn-primary btn-lg-square rounded-0 me-2" target="_blank" href="https://wa.link/1tpdmx"><i class="fab fa-whatsapp"></i></a>
                    <a class="btn btn-lg btn-primary btn-lg-square rounded-0 me-2" href="mailto:contacto@pastosportuxtla.com"><i class="fas fa-envelope"></i></a>
                    <a class="btn btn-lg btn-primary btn-lg-square rounded-0 me-2" href="https://youtube.com/@SportTuxtlaPastoSintetico?si=IDHzZTtqPRx3FWem" target="_blank"><i class="fab fa-youtube"></i></a>
                </div>

            </div>
            <div class="col-lg-6 ps-lg-5">
                <div class="row g-5">
                    <div class="col-sm-6">
                        <h4 class="text-white text-uppercase mb-4">Links</h4>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-white-50 mb-2" href="/"><i class="fa fa-angle-right me-2"></i>Inicio</a>
                            <a class="text-white-50 mb-2" href="/nosotros"><i class="fa fa-angle-right me-2"></i>Nosotros</a>
                            <a class="text-white-50 mb-2" href="/servicios"><i class="fa fa-angle-right me-2"></i>Servicios</a>
                            <a class="text-white-50" href="/contacto"><i class="fa fa-angle-right me-2"></i>Contacto</a>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <h4 class="text-white text-uppercase mb-4">Servicios</h4>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-white-50 mb-2" href="/servicio-sintetico"><i class="fa fa-angle-right me-2"></i>Pasto sintético Deportivo</a>
                            <a class="text-white-50 mb-2" href="/servicio-sonnoflex"><i class="fa fa-angle-right me-2"></i>Pintura antiderrapante sonnoflex</a>
                            <!--<a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right me-2"></i>Pasto sintético residencial</a>
                            <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right me-2"></i>Follajes artificiales</a>
                            <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right me-2"></i>Pista de tartán</a>-->
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <h4 class="text-white text-uppercase mb-4">Solicita tu cotización</h4>
                        <div class="w-100">
                            <div class="input-group">
                                <a href="https://wa.link/1tpdmx" target="_blank"><button class="btn btn-primary px-4">Vía Whatsapp</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark bg-light-radial text-white border-top border-primary px-0">
        <div class="d-flex flex-column flex-md-row justify-content-between">
            <div class="py-4 px-5 text-center text-md-start">
                <p class="mb-0">&copy; <a class="text-primary" href="#">Pasto Sport Tuxtla</a>. All Rights Reserved.</p>
            </div>
            <div class="py-4 px-5 bg-primary footer-shape position-relative text-center text-md-end">
                <p class="mb-0"> <a class="text-dark" href="https://htmlcodex.com"></a></p>
                <p class="mb-0"> <a class="text-dark" href="https://themewagon.com"></a></p>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

<script type="text/javascript">
        lightbox.option({
          'resizeDuration': 500,
          'wrapAround': true,
          'maxWidth': 800,
          'maxHeight':600
        })
    </script>
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset("lib/easing/easing.min.js") }}"></script>
    <script src="{{ asset("lib/waypoints/waypoints.min.js") }}{{ asset("lib/waypoints/waypoints.min.js") }}"></script>
    <script src="{{ asset("lib/owlcarousel/owl.carousel.min.js") }}"></script>
    <script src="{{ asset("lib/tempusdominus/js/moment.min.js") }}"></script>
    <script src="{{ asset("lib/tempusdominus/js/moment-timezone.min.js") }}"></script>
    <script src="{{ asset("lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js") }}"></script>
    <script src="{{ asset("lib/isotope/isotope.pkgd.min.js") }}"></script>
    <script src="{{ asset("lib/lightbox/js/lightbox.min.js") }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset("js/main.js") }}"></script>
    @yield("scriptpage")
    
</body>

</html>