<?php
echo new App\Helper\View(VIEWS_PATH . '/Header.php');
?>

<body>

    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12  w-100">

        <div class="col-12 col-sm-12 offset-sm-0 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2" >

            <div class="d-flex flex-column">
                <img class="img-superior-direccion"  src="<?php echo URL_ASSETS; ?>/img/protocolos/ProtocolosComportamiento.jpg" alt=""> 
            </div>


            <section class="callout">
              
                <div class="p-3 div-danger-comunicacion">
                    Todo el personal de Organización Soriana se distingue por vivir los valores cada de la Compañía día a día.
                </div>

                <div class="p-3 bg-danger text-white div-danger-vestimenta">
                    <b>Contamos con tu apoyo para seguir estas indicaciones:</b>
                </div>

                <div class="d-flex w-rap px-3 pt-3 mt-0 div-img-circulo">

                    <ul class="ul-circulo-comunicacion" >
                        <li class="mt-2">
                            Sé <b>puntual y respeta los horarios </b>marcados en tu agenda.
                        </li>
                        <li class="mt-2"> 
                            Mantén tu celular en <b>modo silencioso.</b>
                        </li>
                        <li class="mt-2">
                            En los salones <b>no dejes lugares vacíos </b>para que tus compañeros y compañeras puedan sentarse.
                        </li>
                        <li>
                            No permanezcas de pie en los pasillos: <b>siempre ocupa un lugar.</b>
                        </li>
                        <li>
                            Coloca <b>tus pertenencias debajo del asiento </b>para no obstruir los pasillos y rutas de evacuación.
                        </li>
                        <li>
                            Fomenta la <b>colaboración</b> entre tus colegas.
                        </li>
                        <li>
                            Una vez concluidas las sesiones plenarias, <b>sé ejemplo de los valores de Soriana.</b>
                        </li>
                        <li>
                           <b>No abandones las instalaciones</b>  de Cintermex durante las sesiones, salvo algún caso de emergencia.
                        </li>
                        <li>
                            Solo está permitido fumar en las <b>áreas autorizadas y al aire libre.</b>
                        </li>
                    </ul>
                </div>

                <div class="div-imagen-inferior-seguridad  text-center  ">
                    <img class="img-inferior"  src="<?php echo URL_ASSETS; ?>/img/protocolos/ProtocolosComportamientoImg.png" alt=""> 
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