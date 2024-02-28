@extends("../layout.plantilla")
@section("bodypage")


    <!-- Page Header Start -->
    <div class="container-fluid page-header">
        <h1 class="display-3 text-uppercase text-white mb-3">Nosotros</h1>        
    </div>
    <!-- Page Header Start -->


    <!-- About Start -->
    <div class="container-fluid py-6 px-5">
        <div class="row g-5">
            <div class="col-lg-7">
                <h1 class="display-5 text-uppercase mb-4">𝐄𝐦𝐩𝐫𝐞𝐬𝐚 𝟏𝟎𝟎 % 𝐂𝐇𝐈𝐀𝐏𝐀𝐍𝐄𝐂𝐀.<span class="text-primary">¡Dedicada a hacer trabajos de calidad!</span></h1>
                <!--<h4 class="text-uppercase mb-3 text-body">Tempor erat elitr at rebum at at clita. Diam dolor diam ipsum tempor sit diam amet diam et eos labore</h4>-->
                <p style="text-align: justify;">SPORT TUXTLA es una empresa 100% Chiapaneca contamos con 7 años en el mercado con experiencia en el suministro, instalación y mantenimiento de pasto sintético en canchas deportivas como futbol 7, futbol Soccer, futbol americano, futbol rápido, tenis, etc.</p>
                <p style="text-align: justify;">Contamos con pasto sintético para uso deportivo, áreas recreativas y residencial, de igual forma nos especializamos en pintura antiderrapante sonnoflex para canchas, pistas de tartán, pádel, follaje, duelas de caucho. </p>
                <p style="text-align: justify;">Podemos garantizar a nuestros clientes que nuestros productos tienen la más alta calidad, asegurando la durabilidad de nuestro pasto sintético, ya que nuestro fabricante ha realizado diferentes pruebas de laboratorio en Estados Unidos con relación al desgaste y el uso de nuestro pasto, obteniendo como resultados más de 20,000 ciclos o 2,000 horas anuales y 8 años de uso, logrando daños leves en nuestras fibras. </p>
                <p style="text-align: justify;">Es para nosotros gratificante y a la vez retador ver como ya somos lideres de pasto sintético en Chiapas, trabajamos todos, día a día para mantener nuestra reputación satisfaciendo siempre las expectativas de cada uno de nuestros clientes.</p>
                <br>
                <h4>Historia de la empresa</h4>
                <p style="text-align: justify;">
                    Sport Tuxtla inicio un 17 de diciembre del 2016 en el cual el fundador Bersain Israel Álvarez Abarca cumplido su sueño de tener su propio negocio de pasto sintético, en ese entonces el fundador era arbitro y le encanta todo lo relacionado con el futbol, las canchas deportivas entonces nació el nombre de sport Tuxtla pasto sintético.                </p>
                
            </div>
            <div class="col-lg-5 pb-5" style="min-height: 400px;">
                <div class="position-relative bg-dark-radial h-100 ms-5">
                    <img class="position-absolute w-100 h-100 mt-5 ms-n5" src="img/about.jpg" style="object-fit: cover;">
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Appointment Start -->
    <div class="container-fluid bg-light py-6 px-5">
            <div class="row gx-5">
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <div class="mb-4">
                        <h1 class="display-5 text-uppercase mb-4">Misión</h1>
                    </div>
                    <p style="text-align: justify;">Brindar servicios de calidad y excelencia con materiales de alta gama y con garantía. Dar a nuestros clientes un trato cordial, oportuno y personalizado con personal altamente capacitado.</p>
                    
                </div>

                <div class="col-lg-4 mb-5 mb-lg-0">
                    <div class="mb-4">
                        <h1 class="display-5 text-uppercase mb-4">Visión</h1>
                    </div>
                    <p style="text-align: justify;">Ser la empresa líder en el mercado de fabricación, distribución e instalación de pasto sintético, así como de los diversos servicios que ofrecemos.</p>
                    
                </div>

                <div class="col-lg-4 mb-5 mb-lg-0">
                    <div class="mb-4">
                        <h1 class="display-5 text-uppercase mb-4">Valores</h1>
                    </div>
                <div class="row gx-5 py-2">
                    <div class="col-sm-6 mb-2">
                        <p class="fw-bold mb-2"><i class="fa fa-check text-primary me-3"></i>Excelencia</p>
                        <p class="fw-bold mb-2"><i class="fa fa-check text-primary me-3"></i>Lealtad</p>
                        <p class="fw-bold mb-2"><i class="fa fa-check text-primary me-3"></i>Integridad</p>
                    </div>
                    <div class="col-sm-6 mb-2">
                        <p class="fw-bold mb-2"><i class="fa fa-check text-primary me-3"></i>Honestidad</p>
                        <p class="fw-bold mb-2"><i class="fa fa-check text-primary me-3"></i>Respeto</p>
                    </div>
                </div>
                    
                </div>

            </div>
    </div>
    <!-- Appointment End -->
@endsection("bodypage")
@section("scriptpage")
    <script>
        (function ($) {
            $("#menuabout").addClass("nav-item nav-link active");
        })(jQuery);
    </script>
@endsection("scriptpage")