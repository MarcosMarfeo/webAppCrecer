<?php
echo new App\Helper\View(VIEWS_PATH . '/Header.php');
?>

<body>

    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12  w-100">

        <div class="col-12 col-sm-12 offset-sm-0 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2" >

            <div class="d-flex flex-column">
                <img class="img-superior-direccion"  src="<?php echo URL_ASSETS; ?>/img/protocolos/ProtocolosVestimenta.jpg" alt=""> 
            </div>


            <section class="callout">
              
                <div class="pb-3 pt-3">
                    <p id="p-direccion" >
                        Nuestra imagen nos identifica y nos distingue, es por eso que debemos seguir ciertas normas de vestimenta establecidas para generar un clima de cordialidad entre todos.
                    </p>
                </div>

                <div class="p-3 bg-danger text-white div-danger-vestimenta">
                    <b>Este evento es muy importante. Te invitamos a vestir business casual, EXCLUYENDO:</b>
                </div>

                <div class="d-flex w-rap p-3 mt-0 div-img-circulo">
                    <ul class="ul-circulo" >
                        <li>Jeans o pantalones de mezclilla que estén rotos.</li>
                        <li>Bermudas o short.</li>
                        <li>Vestidos muy cortos.</li>
                        <li>Playeras sin cuello.</li>
                        <li>Blusas escotadas, transparentes o sin tirantes.</li>
                        <li>Minifaldas.</li>
                        <li>Sandalias.</li>
                        <li>Ropa deportiva.</li>
                    </ul>
                    <img class="img-circulo"  src="<?php echo URL_ASSETS; ?>/img/protocolos/ProtocolosVestimentaImg.png" alt="">
                </div>

            </section>

            <?php
                echo new App\Helper\View(VIEWS_PATH . '/Footer.php');
            ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="<?php echo URL_ASSETS; ?>/js/scripts.js"></script>


</body>
</html>