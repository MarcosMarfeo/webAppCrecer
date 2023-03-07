<?php
echo new App\Helper\View(VIEWS_PATH . '/Header.php');
?>

<body id="body-administration">


    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12  w-100 ">

        <div class="col-12 col-sm-12 offset-sm-0 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2" >

			<div class="div-imagen-administracion flex-row  text-center  ">

<!-- 			?php
				print_r($usuarios);
				print_r($guest);
			?> -->
<!--                 <div>
                    <img class="img-superior"  src="?php echo URL_ASSETS; ?>/img/inicio/menuImgBgHeader.jpg" alt=""> 
                </div> -->
                <div class="div-logo-administracion">
                    <img class="img-logo-superior-administracion"  src="<?php echo URL_ASSETS; ?>/img/inicio/logoCrecer.svg" alt="">
                </div>
            </div>

            <section class="callout ">

                <div class="p-3 bg-danger text-white div-danger-vestimenta">
                    <b>Aqui podra visualizar el estado de las personas invitadas</b>
                </div>

                <div class="d-flex px-3 pt-3 mt-0 ">

					<table class="table table-bordered align-middle table-hover">
						<thead>
							<tr >
								<th class="table-danger text-center"  scope="col">Apellido y Nombre</th>
								<th class="table-danger text-center"  scope="col">Presente</th>
								<th class="table-danger text-center"  scope="col">Ausente</th>
							</tr>
						</thead>
						<tbody>
							<tr class="table-primary">
								<td class="bg-light" >Mark</td>
								<td class="bg-light text-center " >Presente</td>
								<td class="bg-danger text-center " >Ausente</td>
							</tr>
							<tr class="table-primary">
								<td class="bg-light" >Jacob</td>
								<td class="bg-success text-center ">Presente</td>
								<td class="bg-light text-center " >Ausente</td>
							</tr>
							<tr class="table-primary">
								<td class="bg-light" >Larry</td>
								<td  class="bg-light text-center " >Presente</td>
								<td class="bg-danger text-center ">Ausente</td>
							</tr>
						</tbody>
					</table>

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