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
        <?php $page = "metatags"; include("includes/header.php") ?>
		<div id="content" class="clearfix">
	        <div class="header">
				<h1 class="page-title">P&aacute;gina de Inicio</h1>
			</div> <!-- /header -->
			<div class="breadcrumbs">
				<i class="fa fa-home"></i> Inicio <i class="fa fa-caret-right"></i> Metatags
			</div>
			<div class="wrp clearfix">
            	<?php include("includes/menu-inicio.php"); ?>
                <div class="fluid">
					<div class="widget grid12">
						<div class="widget-header">
							<div class="widget-title">
								<i class="fa fa-th"></i> <strong>Metatags</strong>
							</div>
						</div> <!-- /widget-header -->
						<div class="widget-content">
                            <div class="alert alert-info alert-dismissible" role="alert">
                            	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                Metatags son los nombres, descripci&oacute;n y palabras clave con las que apareceran su web para los buscadores y redes sociales.
							</div>
                            <?php
								$consultarMet = 'SELECT * FROM metatags';
								$resultadoMet = mysqli_query($enlaces,$consultarMet) or die('Consulta fallida: ' . mysqli_error($enlaces));
								while($filaMet = mysqli_fetch_array($resultadoMet)){
									$xCodigo		= $filaMet['cod_meta'];
									$xTitulo		= utf8_encode($filaMet['title']);
									$xLogo			= $filaMet['logo'];
									$xDes			= utf8_encode($filaMet['description']);
									$xKey			= utf8_encode($filaMet['keywords']);
									$xUrl			= $filaMet['url'];
									$xFace1			= $filaMet['face1'];
									$xFace2			= $filaMet['face2'];
									$xIco			= $filaMet['ico'];
							?>
							<ul class="list-group">
                               	<li class="list-group-item">
                                    <p><strong>Título de la web:</strong></p>
                                    <p><?php echo $xTitulo; ?></p>
								</li>
                               	<li class="list-group-item">
                                    <p><strong>Logo exterior de la web:</strong></p>
                                    <p><img class="thumbnail" src="http://<?php echo $xUrl; ?>/cms/images/meta/<?php echo $xLogo; ?>" /></p>
								</li>
                                <li class="list-group-item">
                                    <p><strong>Descripci&oacute;n:</strong></p>
                                    <p><?php echo $xDes; ?></p>
								</li>
								<li class="list-group-item">
									<p><strong>Palabras Clave:</strong></p>
									<p><?php echo $xKey; ?></p>
								</li>
								<li class="list-group-item">
									<p><strong>Url:</strong></p>
									<p><?php echo $xUrl; ?></p>
								</li>
								<li class="list-group-item">
									<p><strong>Im&aacute;genes para redes sociales:</strong></p>
									<p><img class="thumbnail" src="http://<?php echo $xUrl; ?>/cms/images/meta/<?php echo $xFace1; ?>" /> <img class="thumbnail" src="images/meta/<?php echo $xFace2; ?>" /></p>
								</li>
								<li class="list-group-item">
									<p><strong>Favicon:</strong></p>
									<p><img src="http://<?php echo $xUrl; ?>/cms/images/meta/<?php echo $xIco; ?>" /></p>
								</li>
							</ul>
                            <a href="metatags-edit.php?cod_meta=<?php echo $xCodigo; ?>" class="btn btn-green"><i class="fa fa-refresh"></i> Editar Metatags</a>
							<?php
								}
								mysqli_free_result($resultadoMet);
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