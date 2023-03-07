<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Soriana</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />

    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Simple line icons-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.5.5/css/simple-line-icons.min.css" rel="stylesheet" />
    <!-- Google fonts-->
     <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css" />

    <link href="<?php echo URL_ASSETS; ?>/css/styles.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php
if (!empty($_SESSION['user_id'])) {
    ?>
        <!-- Navigation-->
        <a class="menu-toggle rounded" href="#"><i class="fas fa-bars"></i></a>
        <nav id="sidebar-wrapper">
            <ul class="sidebar-nav">

                <li class="sidebar-brand">
                    <a href="?c=Home" id="a-nav">
                        <img class="logo-menu-emergente" src="<?php echo URL_ASSETS; ?>/img/inicio/logoCrecer.svg" alt="">
                    </a>
                </li>

                <li class="sidebar-brand bg-danger" >
                    <a href="#"  class="text-light" >Hola usuario <?php $_SESSION['user_id'] ?></a> 
                </li>

                <li class="sidebar-nav-item">
                        <a href="?c=Qr" id="a-nav">MI CÓDIGO QR</a>
                </li>

                <hr class="w-75" id="linea">

                <li class="sidebar-nav-item">
                        <a href="?c=Itineraries" id="a-nav">AGENDA</a>
                </li>

                <hr class="w-75" id="linea">

                <li class="sidebar-nav-item">
                        <a href="?c=Addresses" id="a-nav" >DIRECCIÓN</a>
                </li>

                <hr class="w-75" id="linea">

                <li class="sidebar-nav-item">
                        <a href="?c=Protocols" id="a-nav" >PROTOCOLOS</a>
                </li>

                <hr class="w-75" id="linea">

                <li class="sidebar-nav-item">
                        <a href="#" id="a-nav" >SOPORTE</a>
                </li>

                <hr class="w-75" id="linea">

                <li class="sidebar-nav-item">
                        <a href="?c=Administration" id="a-nav" >ADMINISTRACIÓN</a>
                </li>

                <hr class="w-75" id="linea">

                <li class="sidebar-nav-item">
                        <a href="?c=Video" id="a-nav" >VIDEO</a>
                </li>

                <hr class="w-75" id="linea">

                <li class="sidebar-nav-item">
                        <a href="?c=login&a=out" id="a-nav" >CERRAR SESIÓN</a>
                </li>

                <hr class="w-75" id="linea">
            </ul>
        </nav>
    <?php
}
?>
</html>
