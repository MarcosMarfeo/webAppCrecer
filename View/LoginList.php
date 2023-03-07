<?php
echo new App\Helper\View(VIEWS_PATH . '/Header.php');
?>
<body class="">
    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12  w-100 ">
        <div class="col-12 col-sm-6 offset-sm-3 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-6 offset-xl-3" >

            <div id="login">
                <!-- <h1 class="text-center">Login</h1> -->
                <?php
                if (!empty($login_error)) {
                    ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>No se pudo ingresar</strong>. Verifique los datos de acceso.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <?php
                }
                ?>

                <?php
                if (!empty($register_error)) {
                    ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>No se pudo generar el registro</strong>. Verifique los datos con un administrador.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <?php
                }
                ?>

                <?php
                if (!empty($register)) {
                    ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Registro completo</strong>. Ya puede ingresar con los datos ingresados.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <?php
                }
                ?>


                <div class="login-logo d-flex flex-column">

                    <div class="div-logo-login">
                        <img class="img-logo-login"  src="<?php echo URL_ASSETS; ?>/img/inicio/logoCrecer.svg" alt=""> 
                    </div>

                    <div class="div-login-form">

                        <form method="POST" action="?c=login&a=in">
                            <div class="col-auto mt-2 ">
                                <!-- <label class="tex" for="admin_uniq_id">Legajo</label> -->
                                <span class="i-pass" ><img src="<?php echo URL_ASSETS; ?>/img/login/iconUser.svg" alt=""></span>
                                <input type="text" class="login-input" id="admin_uniq_id" name="admin_uniq_id" placeholder="Usuario">
                            </div>
                            <div class="col-auto mt-4 ">
                                <!-- <label for="admin_password">Password</label> -->
                                <span class="i-pass" ><img src="<?php echo URL_ASSETS; ?>/img/login/iconPassword.svg" alt=""></span>
                                <input type="password" class="login-input" id="admin_password" name="admin_password" placeholder="Contraseña">
                            </div>



                            <div class="d-grid mt-4">
                            <label class="checkbox">
                                <input type="checkbox" checked>
                                <span class="checkmark"></span>
                                <span class="text-recordar">Recordar</span>
                                <span class="text-olvide">Olvidé mi contraseña</span>
                            </label>
                        </div>

                        <br><br>


                            <div class="d-grid mt-4">
                                <button type="submit" class="btn btn-light text-danger"> <b>Entrar</b></button>
                            </div>
                        </form>

   
            
<!-- 
                        <div class="d-grid mt-4">
                            <button type="button" onclick="showRegister()" class="btn btn-primary mb-3">
                                Registrarme
                            </button>
                        </div> -->
            

                        <!-- <div id="check_in" class="row visually-hidden">

                            <form method="POST" action="?c=login&a=register">
                                <div class="col-auto">

                                    <input type="text" class="form-control" id="check_in_uniq_id" name="check_in_uniq_id" placeholder="Usuario">
                                </div>
                                <div class="col-auto">

                                    <input type="password" class="form-control" id="check_in_password" name="check_in_password" placeholder="Contraseña">
                                </div>
                                <div class="d-grid mt-2">
                                    <button type="submit" class="btn btn-success mb-3">Registrarme</button>
                                </div>
                            </form>
                        </div>

                        <div class="d-grid mt-4">
                            <button type="button" onclick="showLogin()" class="btn btn-primary mb-3">Volver al ingreso</button>
                        </div> -->

                    </div>
                </div>

            </div>

        </div>
    </div>

    <script type="application/javascript">

        let login, check_in;
        let hidden = 'visually-hidden';

        $(function() {
            login = $('#login');
            check_in = $('#check_in');
        });


        function showRegister() {
            login.addClass(hidden);
            check_in.removeClass(hidden);
        }

        function showLogin() {
            check_in.addClass(hidden);
            login.removeClass(hidden);
        }

    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
   <!--  <script src="../../js/scripts.js"></script> -->
</body>
