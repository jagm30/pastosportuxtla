@extends("../layout.plantilla")
@section("bodypage")

<style type="text/css">
    #imgwhatsapp {
        width:400px; height:100px;
    }
    @media only screen and (max-width: 600px) {
        #imgwhatsapp {
            width:200px; height:50px;
        }
    }
</style>
    <!-- Page Header Start -->
    <div class="container-fluid page-header">
        <h1 class="display-3 text-uppercase text-white mb-3">Contacto</h1>
        
    </div>
    <!-- Page Header Start -->


    <!-- Contact Start -->
   
    <!-- Contact End -->
     <div class="container-fluid py-6 px-5">
        <div class="row g-5">
            <div class="col-lg-7 mb-5 mb-lg-0" style="height: 600px;">
                <iframe class="w-100 h-100"
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7639.7038933847!2d-93.11623796817506!3d16.784039977292373!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85ecd9e07c5e90a3%3A0x65b605229ee6c1f2!2sSport%20Tuxtla%20Pasto%20Sint%C3%A9tico!5e0!3m2!1ses-419!2smx!4v1706126722741!5m2!1ses-419!2smx"
                    frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>



            </div>
            <div class="col-lg-5 pb-5" style="min-height: 400px;">
                <h1 class="display-5 text-uppercase mb-4">𝐄𝐦𝐩𝐫𝐞𝐬𝐚 𝟏𝟎𝟎 % 𝐂𝐇𝐈𝐀𝐏𝐀𝐍𝐄𝐂𝐀.<span class="text-primary">¡Dedicada a hacer trabajos de calidad!</span></h1>

                <a href="https://wa.link/1tpdmx" target="_blank"><span> <img id="imgwhatsapp" src="img/cotiza.png" > </span></a>
                <br><br><br>
                <p><i class="fa fa-map-marker-alt me-2"></i>18 de Noviembre LT30 MZ49, Lindavista Shanka, 29016 Tuxtla Gutiérrez, Chiapas.</p>
                <p><i class="fa fa-phone-alt me-2"></i>961 207 4672</p>
                <p><i class="fa fa-envelope me-2"></i>contacto@pastosportuxtla.com</p>

            </div>
        </div>
    </div>
@endsection("bodypage")
@section("scriptpage")
    <script>
        (function ($) {
            $("#menucontact").addClass("nav-item nav-link active");
        })(jQuery);
    </script>
@endsection("scriptpage")