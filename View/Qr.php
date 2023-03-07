<!-- Head-->
<?php
    echo new App\Helper\View(VIEWS_PATH . '/Header.php');
?>
<!-- Head-->

<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12  w-100">
    <div class="col-12 col-sm-12 offset-sm-0 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2" >


        <div class="d-flex flex-column">
            <img class="img-superior"  src="<?php echo URL_ASSETS; ?>/img/qr/qrHeader.jpg" alt=""> 
        </div>

            <div class="px-3  align-center">
                <p id="p-direccion" class="text-center pt-4">   En caso que olvides tu gafete, puedes escanear este código QR, para tu acceso.</p>

                <br>

            </div>

            <div>
                <img class="img-superior px-3 w-100 h-100"  src="<?php echo URL_ASSETS; ?>/img/qr/miQr.png" alt=""> 
            </div>
        


    </div>
</div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="<?php echo URL_ASSETS; ?>/js/scripts.js"></script>

        <?php
echo new App\Helper\View(VIEWS_PATH . '/footer.php');
