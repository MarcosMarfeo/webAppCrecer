<?php
echo new App\Helper\View(VIEWS_PATH . '/Header.php');
?>

<body>

    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12  w-100">

        <div class="col-12 col-sm-12 offset-sm-0 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2" >

            <div class="d-flex flex-column">
                <img class="img-superior-direccion"  src="<?php echo URL_ASSETS; ?>/img/protocolos/ProtocolosComunicacion.jpg" alt=""> 
            </div>


            <section class="callout">
              
                <div class="p-3 div-comunicacion">
                   <!--  <p id="p-direccion-communication " > -->
                        El protocolo de comunicación durante el evento nos ayudará a salvaguardar la información presentada en el mismo y a garantizar una gran experiencia para todas las personas invitadas.
                   <!--  </p> -->
                </div>

                <div class="p-3 bg-danger text-white div-danger-vestimenta">
                    <b>Contamos con tu apoyo para seguir estas indicaciones:</b>
                </div>

                <div class="d-flex w-rap px-3 pt-3 mt-0 div-ul-circulo-protocolos">

                    <ul class="ul-circulo-protocolos p-2" >
                        <li class="mt-2">
                            Toda la información presentada durante las sesiones de la convención es  <b>estrictamente confidencial y exclusiva </b>para los participantes de la sesión.
                        </li>
                        <li class="mt-2"> <b>
                            Por ningún motivo se permite la toma de fotografías </b>dentro de las sesiones plenarias y de formato.
                        </li>
                        <li class="mt-2">
                            La información presentada durante el evento <b>no deberá ser compartida o difundida </b>por ninguna red social: Facebook, LinkedIn, Twitter, Youtube, Whatsapp, Tiktok, etc.
                        </li>   
                    </ul>
                </div>

                <div class="d-flex w-rap p-0 mt-0 div-ul-circulo-protocolos">

                    <img class="img-circulo-comunicacion"  src="<?php echo URL_ASSETS; ?>/img/protocolos/ProtocolosComunicacionImg.png" alt="">

                    <ul class="ul-circulo-protocolos" >
                        <li class="mt-2 px-3">
                            Las personas que asistan al evento podrán tomarse fotografías en el photobooth oficial con el logotipo de Organización Soriana que estará en los pasillos principales del recinto, así como en los distintos momentos de convivencia (cena o concierto). Compártelas con el hashtag  <b>#CrecerSoriana2023 </b>
                        </li>
                    </ul>
                </div>

                <div class="d-flex w-rap px-3 pt-3 mt-0 div-ul-circulo-protocolos">
                    <ul class="ul-circulo-protocolos p-2" >
                        <li class="mt-2">
                        Posterior al evento, se enviará un kit de materiales digitales con la información presentada en la convención para que <b>cada Gerente la comparta con su equipo y pueda transmitir la estrategia de la Compañía, </b>siguiendo el protocolo que compartiremos en su momento.
                        </li> 
                    </ul>
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