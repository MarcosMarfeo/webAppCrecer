<!-- Head-->
<?php
echo new App\Helper\View(VIEWS_PATH . '/Header.php');
?>
<!-- Head-->

<!-- <link href="<php echo URL_ASSETS; ?>/css/home.css" rel="stylesheet" type="text/css"> -->


<body class="w-100">

    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12  w-100">
        
        <div class="col-12 col-sm-6 offset-sm-3 col-md-4 offset-md-4 col-lg-4 offset-lg-4 col-xl-4 offset-xl-4 " >
        

            <div class="div-imagen-inicio flex-row  text-center  ">
                <div>
                    <img class="img-superior"  src="<?php echo URL_ASSETS; ?>/img/inicio/menuImgBgHeader.jpg" alt=""> 
                </div>
                <div class="div-logo-inicio">
                    <img class="img-logo-superior"  src="<?php echo URL_ASSETS; ?>/img/inicio/logoCrecer.svg" alt=""> 
                </div>
            </div>

            <div class="d-flex flex-wrap">
    
                <div class="mt-0 mb-0 links-inicio order-0">
                    <a class="a-links-inicio"  href="?c=qr">
                        <img class="img-links-inicio" src="<?php echo URL_ASSETS; ?>/img/inicio/botonQr.jpg" alt=""> 
                    </a>
                </div>

                <div class="mt-0 mb-0 links-inicio order-2">
                    <a class="a-links-inicio"  href="?c=itineraries">
                        <img class="img-links-inicio" src="<?php echo URL_ASSETS; ?>/img/inicio/botonAgenda.jpg" alt="">
                    </a>
                </div>

                <div class="mt-0 mb-0 links-inicio order-3">
                    <a class="a-links-inicio"  href="?c=addresses">
                        <img class="img-links-inicio" src="<?php echo URL_ASSETS; ?>/img/inicio/botonDireccion.jpg" alt="">
                    </a>
                </div>

                <div class="mt-0 mb-0 links-inicio order-4">
                    <a class="a-links-inicio"  href="?c=protocols">
                        <img class="img-links-inicio" src="<?php echo URL_ASSETS; ?>/img/inicio/botonProtocolos.jpg" alt="">
                    </a>
                </div>
                    
            </div>
       <!--  </section> -->

       <?php
            echo new App\Helper\View(VIEWS_PATH . '/FooterHome.php');
        ?>
       </div>
                    
    </div>  



        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="<?php echo URL_ASSETS; ?>/js/scripts.js"></script>
</body>
