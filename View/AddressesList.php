<?php
echo new App\Helper\View(VIEWS_PATH . '/Header.php');
?>

<body>

    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12  w-100">

        <div class="col-12 col-sm-12 offset-sm-0 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2" >

            <!-- Header-->
            <!-- <header class=" mb-0 d-flex flex-column  align-items-center">

                <div class="div-imagen-direccion flex-row  text-center">
                    <div>
                        <img class="img-superior-direccion"  src="?php echo URL_ASSETS; ?>/img/direccion/04_DireccionHeader.jpg" alt=""> 
                    </div>
                </div>

            </header>
            -->
            <div class="d-flex flex-column">
                <img class="img-superior-direccion"  src="<?php echo URL_ASSETS; ?>/img/direccion/04_DireccionHeader.jpg" alt=""> 
            </div>


            <section class="callout">

                <div class="d-flex flex-column">
                    <img class=""  src="<?php echo URL_ASSETS; ?>/img/direccion/04_DireccionRecinto.jpg" alt=""> 
                </div>

                <div class="pb-3 pt-3">
                    <p id="p-direccion" >CINTERMEX</p>
                    <p id="p-direccion" >Av. Fundidora No. 504, Col. Obrera</p>
                    <p id="p-direccion" >Monterrey, Nuevo León, México, C.P. 64010</p>
                    <p id="p-direccion" >Tel. +52 (81) 8369 6969</p>
                </div>

                <div class="">
                    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3" aria-label="Slide 4"></button>
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="4" aria-label="Slide 5"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="10000">
                            <img src="<?php echo URL_ASSETS; ?>/img/direccion/Cintermex4.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5></h5>
                                <p></p>
                            </div>
                            </div>
                            <div class="carousel-item" data-bs-interval="2000">
                            <img src="<?php echo URL_ASSETS; ?>/img/direccion/Cintermex0.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5></h5>
                                <p></p>
                            </div>
                            </div>
                            <div class="carousel-item">
                            <img src="<?php echo URL_ASSETS; ?>/img/direccion/Cintermex1.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5></h5>
                                <p></p>
                            </div>
                            </div>

                            <div class="carousel-item">
                            <img src="<?php echo URL_ASSETS; ?>/img/direccion/Cintermex2.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5></h5>
                                <p></p>
                            </div>
                            </div>

                            <div class="carousel-item">
                            <img src="<?php echo URL_ASSETS; ?>/img/direccion/Cintermex3.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5></h5>
                                <p></p>
                            </div >
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>

                <div class="d-flex flex-column">
                    
                </div>

                        <!-- Portfolio Item 1-->
                <div class="">
                    <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal1">
                        <img class="img-fluid" src="<?php echo URL_ASSETS; ?>/img/direccion/04_DireccionMapa.jpg" alt="..." />
                    </div>
                </div>




                <!-- Portfolio Modals-->
                <!-- Portfolio Modal 1-->
                <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" aria-labelledby="portfolioModal1" aria-hidden="true">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                            <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                            <div class="modal-body text-center pb-0">
                                <div class="vw-75 vh-100" >
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d14383.132751871466!2d-100.3016121269347!3d25.678480935669775!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m1!1m0!5e0!3m2!1ses-419!2sar!4v1676862465723!5m2!1ses-419!2sar" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                                        </iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="d-flex flex-column">
                    <img class=""  src="<?php echo URL_ASSETS; ?>/img/direccion/04_DireccionFecha.jpg" alt=""> 
                </div>

                <div class="pb-3 pt-3">
                    <p id="p-direccion" >Día: Martes 28 de marzo, 2023</p>
                    <p id="p-direccion" >A partir de las 6:45 a.m. se estará recibiendo al personal invitado para el registro y acceso.</p>
                </div>

                <div class="d-flex flex-column">
                    <img class=""  src="<?php echo URL_ASSETS; ?>/img/direccion/04_DireccionTransporte.jpg" alt=""> 
                </div>

                <div class="pb-3 pt-3">
                    <h3 id="h3-rojo"><img class="img-flecha" src="<?php echo URL_ASSETS; ?>/img/direccion/flecha.svg" alt="">PERSONAL FORÁNEO</h3>
                    <p id="p-direccion" >Se contará con autobuses privados a partir del día 27 de marzo, <b>los cuales podrás utilizar en el aeropuert en tu arribo a la Ciudad de Monterrey. </b> Estos autobuseste trasladarán al hotel asignado de acuerdo a tu formato.</p>

                    <br>

                    <p id="p-direccion" >El día del evento estos mismos autobuses te llevarán de tu hotel hacia Cintermex y, al término del evento, de vuelta a tu hotel asignado. <b>Por tu seguridad, se utiliza estos autobuses como único medio de transporte.</b></p>

                    <br>

                    <h3 id="h3-rojo"><img class="img-flecha" src="<?php echo URL_ASSETS; ?>/img/direccion/flecha.svg" alt="">PERSONAL LOCAL</h3>

                    <div class="d-flex w-rap mt-3 mb-1 div-img-circulo">

                        <div class="d-flex w-rap ">
                            <p id="p-circulo" >El día del evento estarán disponibels autobuses privados para transportar al personal de Oficinas al recinto de la convención y estarán <b>ubicados en la bahía del estacionamiento de Edificio Oriente, a partir de las 6:00 a.m.</b> Al término del evento, estos autobuses te trasladarán de regreso a Oficinas.

                            <br>
                            <br>
<!-- 
                            <b>Si decides llevar tu automóvil,</b> Al momento de tu llegada a Cintermex, se te proporcionará una cortesía de estacionamiento, la cual podrás solicitar en los módulos ubicados en el vestíbulo del recinto. Procura <b>obtener la cortesiía antes del mediodía </b> para evitar contratiempos.
                            
                            <br>
                            <br>
                    
                            <b>Te recomendamos fomentar el CarPool.</b> -->

                            </p>

                            <img class="img-circulo"  src="<?php echo URL_ASSETS; ?>/img/direccion/04_DireccionImgCorpo.png" alt="">
                        </div>
                    </div>

                    <div>

                        <p id="p-direccion" >
                                <b>Si decides llevar tu automóvil,</b> Al momento de tu llegada a Cintermex, se te proporcionará una cortesía de estacionamiento, la cual podrás solicitar en los módulos ubicados en el vestíbulo del recinto. Procura <b>obtener la cortesiía antes del mediodía </b> para evitar contratiempos.
                    
                                <br>
                                <br>
                        
                                <b>Te recomendamos fomentar el CarPool.</b> 
                        </p>

                    </div>

                    <br>

                    <div class="d-flex flex-column">
                        <img class=""  src="<?php echo URL_ASSETS; ?>/img/direccion/04_DireccionHospedaje.jpg" alt=""> 
                    </div>

                    <br>

                    <p id="p-direccion" >Conoce los hoteles autorizados para tu hospedaje durante el evento. Cada uno está seleccionado por su excelente servicio y cercanía con el recinto.</p>

                    <br>

                    <p id="p-direccion" >Alguno de los hoteles en los que te hospedarás:</p>

                    <div class="d-flex justify-content-between p-2">

                        <div class="mt-0 mb-0 img-hospedaje order-0">
                            <img class="img-hotel-gral" src="<?php echo URL_ASSETS; ?>/img/direccion/logoKrystal.png" alt=""> 
                        </div>

                        <div class="mt-0 mb-0 img-hospedaje order-2">
                            <img class="img-hotel-gral" src="<?php echo URL_ASSETS; ?>/img/direccion/logoSafi.png" alt="">
                        </div>

                        <div class="mt-0 mb-0 img-hospedaje order-3">
                            <img class="img-hotel-gral" src="<?php echo URL_ASSETS; ?>/img/direccion/logoHolidayinn.png" alt="">
                        </div>

                        <div class="mt-0 mb-0 img-hospedaje order-4">
                            <img class="img-hotel-gral" src="<?php echo URL_ASSETS; ?>/img/direccion/logoFiesta.png" alt="">
                        </div>

                    </div>

                </div>

                <!-- Aca se incluyen los hoteles segun su rol -->

            <!--         $rol = $_SESSION['rol'];
                    
            FALTA EL MENOR EN CADA FILA DE PHP, LO PUSE PARA PODER COMENTAR LAS FILAS
                    switch ($rol) {
                        case '1':
                            ?php
                                echo new App\Helper\View(VIEWS_PATH . 'Hotel/HotelFiestaInnFundidora.php');
                            ?>
                            break;
                        case '2':
                            ?php
                                echo new App\Helper\View(VIEWS_PATH . 'Hotel/HotelFiestaInnTecnologico.php');
                            ?>
                            break;
                        case '3':
                            ?php
                                echo new App\Helper\View(VIEWS_PATH . 'Hotel/HotelFiestaInnValle.php');
                            ?>
                            break;
                        case '4':
                            ?php
                                echo new App\Helper\View(VIEWS_PATH . 'Hotel/HotelHolidayInnExpressFundidora.php');
                            ?>
                        break;
                        case '5':
                            ?php
                                echo new App\Helper\View(VIEWS_PATH . 'Hotel/HotelKrystal.php');
                            ?>
                            break;
                        case '6':
                            ?php
                                echo new App\Helper\View(VIEWS_PATH . 'Hotel/HotelSafiCentro.php');
                            ?>
                            break;
                        case '7':
                            ?php
                                echo new App\Helper\View(VIEWS_PATH . 'Hotel/HotelSafiValle.php');
                            ?>
                            break;
                        default:
                            echo 'Usted no tiene hotel asignado.';
                    } -->


                <!-- Aca finaliza la insersión de hoteles según su rol -->

                <div class="d-flex flex-column mt-2">
                    <p id="p-direccion" > <b>  Alimentos incluidos en el hotel:  </b></p>
                    <div class="mt-2" id="div-ul">
                        <ul>
                            <li>Cena 27 de marzo (18:00 a 20:00 horas) </li>
                            <li>Desayuno 28 de marzo (5:00 a 6:00 horas)</li>
                            <li>Desayuno 29 de marzo (06:00 a 11:00 horas)</li>
                        </ul>
                    </div>
                </div>

                <div class="d-flex flex-column">
                    <p id="p-direccion" > 
                        <b>  Te recordamos que el servicio de hospedaje NO incluye servicios adicionales como:  </b>
                    </p>
                    <div class="mt-2" id="div-ul">
                        <ul>
                            <li>Servicio de alimentos al cuarto</li>
                            <li>Servicio de lavandería</li>
                            <li>Llamadas personales desde la habitación</li>
                            <li>Otros servicios (películas, minibar, etc.)</li>
                        </ul>
                    </div>
                </div>

                <div class="d-flex flex-column">
                    <img class=""  src="<?php echo URL_ASSETS; ?>/img/direccion/04_DireccionRecomendaciones.jpg" alt=""> 
                </div>

                <br>

                <p id="p-direccion" >
                    Durante el evento, los participantes foráneos que se hospedarán en los hoteles sede deben considerar lo siguiente:
                </p>
                        

                <div>
                    <ul class="ul-parrafo-circulo mt-3" >
                        <li>Todos los invitados que se hospeden en hoteles compartirán una habitación doble.</li>
                    </ul>
                </div>

                <div class="d-flex w-rap mt-3 mb-4 div-img-circulo">



                    <img class="img-circulo"  src="<?php echo URL_ASSETS; ?>/img/direccion/04_DireccionImgCaja.png" alt="">
                    <ul class="ul-circulo" >
                        <!-- <li>Todos los invitados que se hospeden en hoteles compartirán una habitación doble.</li> -->
                        <li>La asignación de cuartos se hará de manera aleatoria y por ningún motivo se podrá solicitar cambio de habitación o asignaciones especiales.</li>
                        <!-- <li>Por seguridad, el hotel contará con servicio gratuito de custodia de valores y caja de seguridad, ya que ni el hotel ni Organización Soriana se hacen responsables por pérdida de objetos de valor. Te recomendamos que, en caso de requerirlo, se haga uso de este servicio.</li> -->
                    </ul>
                </div>

                <div>
                <ul class="ul-parrafo-circulo" >
                        <!-- <li>Todos los invitados que se hospeden en hoteles compartirán una habitación doble.</li> -->
                        <!-- <li>La asignación de cuartos se hará de manera aleatoria y por ningún motivo se podrá solicitar cambio de habitación o asignaciones especiales.</li> -->
                        <li>Por seguridad, el hotel contará con servicio gratuito de custodia de valores y caja de seguridad, ya que ni el hotel ni Organización Soriana se hacen responsables por pérdida de objetos de valor. Te recomendamos que, en caso de requerirlo, se haga uso de este servicio.</li>
                    </ul>
                </div>

                <br>
                <br>

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