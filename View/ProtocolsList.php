<!-- Head-->
<?php
echo new App\Helper\View(VIEWS_PATH . '/Header.php');
?>
<!-- Head-->

<!-- <link href="<php echo URL_ASSETS; ?>/css/home.css" rel="stylesheet" type="text/css"> -->


<body class="w-100">

    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12  w-100">
        <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-6 offset-xl-3 " >
        
            <div class="div-imagen-superior-protocolo  text-center  ">
                <!--    <div> -->
                    <img class="img-superior-protocolo"  src="<?php echo URL_ASSETS; ?>/img/protocolos/06_Protocolos.jpg" alt=""> 
                <!--  </div> -->
            </div>

            <div class="div-p-protocolos p-2 align-center">
                <p id="p-protocolos" class="text-center">
                    Conoce los protocolos definidos para vivir una gran experiencia en la Convención Crecer 2023.
                </p>
            </div>

            <div class="div-contenedor-links-protocolo">

                <div class="mt-2 div-imagen-links-protocolo">
                    <a class=""  href="?c=security">
                        <img class="img-links-protocolo" src="<?php echo URL_ASSETS; ?>/img/protocolos/06_ProtocolosBannerSeguridad.jpg" alt=""> 
                    </a>
                </div>

                <div class="mt-2 div-imagen-links-protocolo">
                    <a class=""  href="?c=outfit">
                        <img class="img-links-protocolo" src="<?php echo URL_ASSETS; ?>/img/protocolos/06_ProtocolosBannerVestimenta.jpg" alt="">
                    </a>
                </div>

                <div class="mt-2 div-imagen-links-protocolo">
                    <a class=""  href="?c=communication">
                        <img class="img-links-protocolo" src="<?php echo URL_ASSETS; ?>/img/protocolos/06_ProtocolosBannerComunicacion.jpg" alt="">
                    </a>
                </div>

                <div class="mt-2 div-imagen-links-protocolo">
                    <a class=""  href="?c=behavior">
                        <img class="img-links-protocolo" src="<?php echo URL_ASSETS; ?>/img/protocolos/06_ProtocolosBannerSeguridad.jpg" alt="">
                    </a>
                </div>
                    
            </div>

            <?php
                echo new App\Helper\View(VIEWS_PATH . '/Footer.php');
            ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="<?php echo URL_ASSETS; ?>/js/scripts.js"></script>
</body>
