<!-- Head-->
<?php
echo new App\Helper\View(VIEWS_PATH . '/Header.php');
?>
<!-- Head-->

<!-- <link href="<php echo URL_ASSETS; ?>/css/home.css" rel="stylesheet" type="text/css"> -->


<body class="w-100">

    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12  w-100">
        <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-6 offset-xl-3 " >
        
            <div class="div-imagen-superior-seguridad  text-center  ">
                <!--    <div> -->
                    <img class="img-superior-seguridad"  src="<?php echo URL_ASSETS; ?>/img/protocolos/ProtocolosSeguridad.jpg" alt=""> 
                <!--  </div> -->
            </div>

            <div class="div-p-seguridad p-2 align-center mt-4">
                <p id="p-protocolos">
                    Tu seguridad es lo más importante. Estas recomendaciones te permitirán sentirte seguro o segura, además de brindarte las herramientas necesarias en caso de alguna situación de emergencia.
                </p>
            </div>


            <div class=" p-2 align-center mt-0">
                <p id="p-protocolos">
                    <b class="mt-2">
                        Selecciona las recomendaciones que deseas consultar.
                    </b>
                </p>
            </div>

            <!-- <div class="div-contenedor-links-protocolo">

                <div class="mt-2 div-imagen-links-protocolo">
                    <a class="" data-bs-toggle="collapse" href="#" role="button" aria-expanded="false" aria-controls="collapseExample" onclick="agregarClasecollapseUno()">
                        <img class="img-links-protocolo" src="?php echo URL_ASSETS; ?>/img/protocolos/06_ProtocolosBannerSeguridad.jpg" alt=""> 
                    </a>
                    <div class="collapse" id="collapseUno">
                        <div class="card card-body">
                            Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
                        </div>
                    </div>
                </div>

                <div class="mt-2 div-imagen-links-protocolo">
                    <a class="" data-bs-toggle="collapse" href="#" role="button" aria-expanded="false" aria-controls="collapseExample" onclick="agregarClasecollapseDos()">
                        <img class="img-links-protocolo" src="?php echo URL_ASSETS; ?>/img/protocolos/06_ProtocolosBannerVestimenta.jpg" alt="">
                    </a>
                    <div class="collapse" id="collapseDos">
                        <div class="card card-body">
                            222222222222222222222222222222222222222222
                        </div>
                    </div>
                </div>

                <div class="mt-2 div-imagen-links-protocolo">
                    <a class="" data-bs-toggle="collapse" href="#" role="button" aria-expanded="false" aria-controls="collapseExample" onclick="agregarClasecollapseTres()">
                        <img class="img-links-protocolo" src="?php echo URL_ASSETS; ?>/img/protocolos/06_ProtocolosBannerVestimenta.jpg" alt="">
                    </a>
                    <div class="collapse" id="collapseTres">
                        <div class="card card-body">
                            333333333333333333fsdafdasfsafafsdsf
                        </div>
                    </div>
                </div>

                <div class="mt-2 div-imagen-links-protocolo">
                    <a class="" data-bs-toggle="collapse" href="#" role="button" aria-expanded="false" aria-controls="collapseExample" onclick="agregarClasecollapseCuatro()">
                        <img class="img-links-protocolo" src="?php echo URL_ASSETS; ?>/img/protocolos/06_ProtocolosBannerVestimenta.jpg" alt="">
                    </a>
                    <div class="collapse" id="collapseCuatro">
                        <div class="card card-body">
                            444444444444444sdfsa46fsa46sad46as4f6fs6as4f6a4f6a4fa
                        </div>
                    </div>
                </div>
                    
            </div> -->


            <div class="accordion mt-2 " id="accordionExample">
                <div class="accordion-item mb-2">
                    <button class="btn-acordeon-seguridad" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" >
                         <img class="img-links-protocolo" src="<?php echo URL_ASSETS; ?>/img/protocolos/06_ProtocolosBannerSeguridad.jpg" alt=""> 
                    </button>

                    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <div class="div-ul-circulo-protocolos p-2">
                            <ul class="ul-circulo-protocolos" >
                                <li class="mt-2">Asegura que tu vehículo se encuentre en <b>buenas condiciones mecánicas.</b></li>
                                <li class="mt-2"> Garantiza que tu coche cuenta con <b> póliza de seguro vigente.</b></li>
                                <li class="mt-2"> Lleva una llanta de <b>refacción y sus accesorios para cambio de llanta,</b> señal de emergencia y herramientas básicas.</li>
                                <li class="mt-2"><b>Abastece completamente</b> de combustible el vehículo para evitar detenerse en carretera o estas sean las mínimas.</li>
                                <li class="mt-2">Viaja <b>únicamente de día.</b></li>
                                <li class="mt-2">Utiliza las <b>autopistas.</b></li>
                                <li class="mt-2">Viaja con <b> perfil bajo </b> (no llames la atención).</li>
                                <li class="mt-2">Porta tu <b> identificación de la empresa</b> a la vista.</li>
                                <li class="mt-2">Asegura que un familiar <b> monitoree tu trayecto.</b></li>
                                <li class="mt-2">Evita en todo momento dejar objetos de valor o personales <b>a la vista.</b></li>
                            </ul>
                        </div>
                    </div>
                    </div>
                </div>

                <div class="accordion-item mb-2">

                    <button class="btn-acordeon-seguridad" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        <img class="img-links-protocolo" src="<?php echo URL_ASSETS; ?>/img/protocolos/06_ProtocolosBannerSeguridad.jpg" alt=""> 
                    </button>
              
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <div class="div-ul-circulo-protocolos p-2">
                                <ul class="ul-circulo-protocolos" >
                                    <li class="mt-2">Mantén <b>siempre a la vista</b> tus pertenencias.</li>
                                    <li class="mt-2">No dejes objetos de valor en el hotel. En caso de ser necesario, resguárdalos en la <b>caja de seguridad.</b></li>
                                    <li class="mt-2"><b>No olvides objetos </b> o pertenencias en el autobús.</li>
                                    <li class="mt-2">Realiza con <b>orden y precaución </b> el ascenso y descenso de los autobuses.</li>
                                    <li class="mt-2">Conoce y aplica las  <b>recomendaciones para prevenir ser víctima de extorsión o secuestro virtual </b>que se realizan a huéspedes de hoteles.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="accordion-item mb-2">
                    <button class="btn-acordeon-seguridad" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        <img class="img-links-protocolo" src="<?php echo URL_ASSETS; ?>/img/protocolos/06_ProtocolosBannerSeguridad.jpg" alt=""> 
                    </button>
                
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <div class="div-ul-circulo-protocolos p-2">
                                <ul class="ul-circulo-protocolos" >
                                    <li class="mt-2">Para ingresar y permanecer en la convención, <b>porta de forma visible tu gafete distintivo</b> de participante.</li>
                                    <li class="mt-2">Evita llevar objetos o dispositivos <b>no indispensables.</b></li>
                                    <li class="mt-2">Mantén <b>siempre a la vista</b> tus pertenencias.</li>
                                    <li class="mt-2"><b>Guarda el orden  </b> al ascenso y descenso de los autobuses.</li>
                                    <li class="mt-2"><b>Sigue las indicaciones </b>de los guías, staff y del personal de seguridad.</li>
                                    <li class="mt-2">Ingresa a cualquier sala o evento con <b>calma y orden, </b>siguiendo siempre las instrucciones de personal staff. </li>
                                    <li class="mt-2">Lleva una <b>batería de respaldo </b>para su celular.</li>
                                    <li class="mt-2">Se contará con <b>Servicio Médico </b>(Dr. OAT, ambulancia con paramédicos y consultorio CINTERMEX) para la atención de algún problema de salud.</li>
                                    <li class="mt-2">En caso de <b>alguna emergencia durante la Convención, </b>sigue las indicaciones del personal de Seguridad del recinto:
                                    </li>
                                </ul>
                                <ul class="ul-sin-estilo">
                                    <li class="mt-1">o	Conserva la calma</li>
                                    <li class="mt-1">o	No grites, corras, empujes o utilices elevadores.</li>
                                    <li class="mt-1">o	Identifica las salidas de emergencia.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="accordion-item mb-2">
                    <button class="btn-acordeon-seguridad" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        <img class="img-links-protocolo" src="<?php echo URL_ASSETS; ?>/img/protocolos/06_ProtocolosBannerSeguridad.jpg" alt=""> 
                    </button>
                
                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <div class="div-ul-circulo-protocolos p-2">
                            <p id="p-protocolos">
                                Un secuestro virtual es una modalidad de extorsión telefónica, en la que se simula el secuestro de un familiar o conocido de la persona que atiende el teléfono, con la finalidad de forzar la entrega de dinero u otros objetos de valor como “rescate”.
                            </p>

                            <h6>
                                Modalidad secuestro en hoteles:
                            </h6>

                            <ul class="ul-circulo-protocolos" >

                                <li class="mt-2">
                                    El extorsionador realiza una llamada a la habitación y se presenta como miembro de alguna institución de seguridad pública o algún grupo delictivo.
                                </li>
                                <li class="mt-2">
                                    Le solicitan a la persona abandonar la habitación por razones como operativo en el lugar, incendio, activación de explosivos, ataque armado en el hotel, entre otros.
                                </li>
                                <li class="mt-2">
                                    Después le solicitan a la víctima que se hospede en otro hotel y que apague su teléfono celular o no permiten que cuelgue la llamada por tiempo indefinido, esto con el objetivo de hacer creer a sus familiares que la víctima se encuentra en situación de riesgo, mientras los contactan para negociar un “rescate”.
                                </li>
                            </ul>

                            <h6>
                                Acciones preventivas:
                            </h6>

                            <ul class="ul-circulo-protocolos" >

                                <li class="mt-2">
                                    Desconecta el teléfono de la habitación; de no poder hacerlo, NO contestes llamadas de dicho teléfono.
                                </li>
                                <li class="mt-2">
                                	En tu celular NO contestes número desconocidos.
                                </li>
                                <li class="mt-2">
                                    A excepción de los datos mínimos necesarios para el registro de hospedaje, durante tu estancia en el Hotel/Ciudad NO proporciones datos personales ni de familiares.
                                </li>
                                <li class="mt-2">
                                    Preferentemente siempre informa a tu Jefe o algún compañero cuando salgas del Hotel.
                                </li>
                            </ul>

                    </div>
                    </div>
                    </div>
                </div>
            </div>

            <div class="div-imagen-inferior-seguridad  text-center  ">
                <!--    <div> -->
                    <img class="img-inferior"  src="<?php echo URL_ASSETS; ?>/img/protocolos/06_ProtocolosSeguridadImg.png" alt=""> 
                <!--  </div> -->
            </div>

            <?php
                echo new App\Helper\View(VIEWS_PATH . '/Footer.php');
            ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Core theme JS-->
    <script src="<?php echo URL_ASSETS; ?>/js/scripts.js"></script>
    
<!--     <script>

        function agregarClasecollapseUno() {

            const elemento = document.getElementById("collapseUno");


            if (elemento.classList.contains("show")) {

            elemento.classList.remove("show");

            } else {

            elemento.classList.add("show");
            }
        }


        function agregarClasecollapseDos() {

        const elemento = document.getElementById("collapseDos");


            if (elemento.classList.contains("show")) {

            elemento.classList.remove("show");

            } else {

            elemento.classList.add("show");
            }
        }


        function agregarClasecollapseTres() {

        const elemento = document.getElementById("collapseTres");


            if (elemento.classList.contains("show")) {

            elemento.classList.remove("show");

            } else {
 
            elemento.classList.add("show");
            }
        }


        function agregarClasecollapseCuatro() {

        const elemento = document.getElementById("collapseCuatro");


            if (elemento.classList.contains("show")) {

            elemento.classList.remove("show");

            } else {

            elemento.classList.add("show");
            }
        }

    </script> -->
</body>
<!-- var collapseTwo = document.getElementById("collapseTwo");
collapseTwo.classList.add("show"); -->