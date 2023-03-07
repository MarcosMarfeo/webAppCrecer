<!-- Head-->
<?php
    echo new App\Helper\View(VIEWS_PATH . '/HeaderSinNav.php');
?>

    <div class="col-12 col-sm-12 col-md-8 col-lg-6 w-100 h-100">
        
        <iframe class="video" src="<?php echo URL_ASSETS; ?>/video/videoInicio.mp4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen>
        </iframe>

        <span class="close-button">
                <a class="a-links-inicio"  href="?c=home">
                    &times;
                </a>
            </span>

        <!-- <div class="h-100">
            <video class="video" src="?php echo URL_ASSETS; ?>/video/videoInicio.mp4" autoplay controls></video>

            <span class="close-button">
                <a class="a-links-inicio"  href="?c=home">
                    &times;
                </a>
            </span>
        </div> -->
    </div>



<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="<?php echo URL_ASSETS; ?>/js/scripts.js"></script>