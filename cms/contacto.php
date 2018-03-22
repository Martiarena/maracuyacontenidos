<?php include("includes/conexion.php"); ?>
<?php include("includes/verificar.php"); ?>
<?php include("includes/clean.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php include("includes/head.php"); ?>
</head>
<body>
	<div id="loading">
		<div>
			<div></div>
		    <div></div>
		    <div></div>
		</div>
	</div>
	<div id="wrapper">
        <?php include("includes/header.php") ?>
		<div id="content" class="clearfix">
	        <div class="header">
				<h1 class="page-title">Contacto</h1>
			</div> <!-- /header -->
			<div class="breadcrumbs">
				<i class="fa fa-home"></i> Contacto
			</div>
			<div class="wrp clearfix">
                <div class="fluid">
					<div class="widget grid12">
						<div class="widget-header">
							<div class="widget-title">
								<i class="fa fa-th"></i> <strong>Datos de Contacto</strong>
							</div>
						</div> <!-- /widget-header -->
						<div class="widget-content">
                            <?php
								$consultarCot = 'SELECT * FROM contact';
								$resultadoCot = mysqli_query($enlaces,$consultarCot) or die('Consulta fallida: ' . mysqli_error($enlaces));
								while($filaCot = mysqli_fetch_array($resultadoCot)){
									$xCodigo		= $filaCot['cod_contact'];
									$xDirection		= utf8_encode($filaCot['direction']);
									$xPhone			= utf8_encode($filaCot['phone']);
									$xMobile		= utf8_encode($filaCot['mobile']);
									$xEmail			= utf8_encode($filaCot['email']);
									$xMap			= $filaCot['map'];
									$xFormem		= utf8_encode($filaCot['form_mail']);
							?>
							<ul class="list-group">
                               	<li class="list-group-item">
                                    <p><strong>Dirección:</strong></p>
                                    <p><?php echo $xDirection; ?></p>
								</li>
                                <li class="list-group-item">
                                    <p><strong>Teléfono:</strong></p>
                                    <p><?php echo $xPhone; ?></p>
								</li>
								<li class="list-group-item">
									<p><strong>Mobil:</strong></p>
									<p><?php echo $xMobile; ?></p>
								</li>
								<li class="list-group-item">
									<p><strong>Email:</strong></p>
									<p><?php echo $xEmail; ?></p>
								</li>
                                <li class="list-group-item">
									<p><strong>Mapa:</strong></p>
									<p><?php echo $xMap; ?></p>
                                    <iframe src="<?php echo $xMap; ?>" width="100%" frameborder="1" height="250"></iframe>
								</li>
                                <hr>
								<li class="list-group-item">
									<p><strong>Correo que recibe los mensajes del formulario:</strong></p>
									<p><?php echo $xFormem; ?></p>
								</li>
							</ul>
                            <a href="contacto-edit.php?cod_contact=<?php echo $xCodigo; ?>" class="btn btn-green"><i class="fa fa-refresh"></i> Editar Contacto</a>
							<?php
								}
								mysqli_free_result($resultadoCot);
							?>
						</div>
                    </div>
				</div>
			</div> <!-- /wrp -->
		</div> <!-- /content -->
		<?php include("includes/footer.php") ?>
	</div> <!-- /wrapper -->
</body>
</html>