<?php include "cms/includes/conexion.php"; ?>
<!doctype html>
<html>
<head>
<?php include "includes/head.php"; ?>
</head>
<body class="fondo-blanco">
<?php $page = "contacto"; ?>
<div>
	<div id="loader-wrapper">
		<div id="loader"></div>
		<div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
	</div>
	<?php include "includes/header.php"; ?>
	<section class="seccion-interna camera_banner">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 wow animated fadeIn" data-wow-duration="0.5s" data-wow-delay="0.8s">
					<h2>Contáctenos</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 contacto-seccion wow animated bounceInLeft" data-wow-duration="0.75s" data-wow-delay="1.2s">
                	<div class="well text-center">
						<i class="fa fa-envelope" style="font-size:100px; margin-bottom:10px;" aria-hidden="true"></i>
						<p>Su mensaje se envi&oacute; exitosamente, estaremos contestanto a la brevedad.</p>
						<a class="btn btn-primary" style="font-family:'Arial';" href="index.php">Volver al Index</a> <a class="btn btn btn-info" style="font-family:'Arial';" href="contacto.php">Enviar otro mensaje</a>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 wow animated contacto-seccion bounceInRight" data-wow-duration="0.75s" data-wow-delay="1.2s">
                	<?php
						$consultarCot = 'SELECT * FROM contact';
						$resultadoCot = mysqli_query($enlaces,$consultarCot) or die('Consulta fallida: ' . mysqli_error($enlaces));
						while($filaCot = mysqli_fetch_array($resultadoCot)){
							$xCodigo		= $filaCot['cod_contact'];
							$xDirection		= $filaCot['direction'];
							$xPhone			= $filaCot['phone'];
							$xMobile		= $filaCot['mobile'];
							$xEmail			= $filaCot['email'];
							$xMap			= $filaCot['map'];
					?>
                	<ul class="lista-cont">
                    	<li><strong>MARACUYÁ CONTENIDOS AUDIOVISUALES S.A.C.</strong></li>
                        <li><i class="fa fa-map-marker" aria-hidden="true"></i> <?php echo $xDirection; ?></li>
                        <li><i class="fa fa-mobile" aria-hidden="true"></i> <?php echo $xPhone; ?> | <?php echo $xMobile; ?></li>
                        <li><i class="fa fa-envelope" aria-hidden="true"></i> <?php echo $xEmail; ?></li>
                    </ul>
                    <iframe class="wow animated fadeIn" data-wow-duration="0.75s" data-wow-delay="1s" src="<?php echo $xMap; ?>" width="100%" frameborder="0" height="250"></iframe>
                    <?php
						}
						mysqli_free_result($resultadoCot);
					?>
				</div>
			</div>
		</div>
	</section>
  	<?php include "includes/footer.php"; ?>
</div>
</body>
</html>