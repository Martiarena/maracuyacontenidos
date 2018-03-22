<?php include("includes/conexion.php"); ?>
<?php include("includes/verificar.php"); ?>
<?php
$cod_meta	= $_REQUEST['cod_meta'];
if (isset($_REQUEST['proceso'])) {
	$proceso 	= $_POST['proceso'];
} else {
	$proceso 	= "";
}
if($proceso==""){
	$consultaMet = "SELECT * FROM metatags WHERE cod_meta='$cod_meta'";
	$ejecutarMet = mysqli_query($enlaces,$consultaMet) or die('Consulta fallida: ' . mysqli_error($enlaces));
	$filaMet = mysqli_fetch_array($ejecutarMet);
	$xCodigo 	= $filaMet['cod_meta'];
	$xTitulo 	= htmlspecialchars(utf8_encode($filaMet['title']));
	$xLogo 		= $filaMet['logo'];
	$xDes 		= htmlspecialchars(utf8_encode($filaMet['description']));
	$xKey 		= htmlspecialchars(utf8_encode($filaMet['keywords']));
	$xUrl 		= $filaMet['url'];
	$xFace1 	= $filaMet['face1'];
	$xFace2 	= $filaMet['face2'];
	$xIco 		= $filaMet['ico'];
}

if($proceso == "Actualizar"){
	$cod_meta		= $_POST['cod_meta'];
	$title			= mysqli_real_escape_string($enlaces, utf8_decode($_POST['title']));
	$logo			= $_POST['logo'];
	$description	= mysqli_real_escape_string($enlaces, utf8_decode($_POST['description']));
	$keywords		= mysqli_real_escape_string($enlaces, utf8_decode($_POST['keywords']));
	$url			= $_POST['url'];
	$face1			= $_POST['face1'];
	$face2			= $_POST['face2'];
	$ico			= $_POST['ico'];

	$ActualizarMeta = "UPDATE metatags SET cod_meta='$cod_meta', title='$title', logo='$logo', description='$description', keywords='$keywords', url='$url', face1='$face1', face2='$face2', ico='$ico' WHERE cod_meta='$cod_meta'";
	$resultadoActualizar = mysqli_query($enlaces,$ActualizarMeta) or die('Consulta fallida: ' . mysqli_error($enlaces));
	$mensaje = "<div class='alert alert-danger' role='alert'>
		<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
		<p><strong>Nota:</strong> Metatags actualizados con &eacute;xito.</p>
	</div>";
	header("Location:inicio.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php include("includes/head.php"); ?>
    <script type="text/javascript" src="js/rutinas.js"></script>
    <script>
		function Validar(){
			if(document.fcms.title.value==""){
				alert("Debes ingresar un título para la web");
				document.fcms.title.focus();
				return;	
			}
			if(document.fcms.logo.value==""){
				alert("Debes subir un logotipo");
				document.fcms.logo.focus();
				return;	
			}
			if(document.fcms.description.value==""){
				alert("Debes ingresar una descripción");
				document.fcms.description.focus();
				return;	
			}
			if(document.fcms.keywords.value==""){
				alert("Debes ingresar al menos una palabra clave");
				document.fcms.keywords.focus();
				return;
			}
			if(document.fcms.url.value==""){
				alert("¡La Url es obligatoria!");
				document.fcms.url.focus();
				return;	
			}
			
			document.fcms.action = "metatags-edit.php";
			document.fcms.proceso.value="Actualizar";
			document.fcms.submit();
		}
		function Imagen(codigo){
			url = "agregar-foto.php?id=" + codigo;
			AbrirCentro(url,'Agregar', 475, 180, 'no', 'no');
		}
	</script>
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
        <?php include("includes/header.php"); ?>
		<div id="content" class="clearfix">
			<div class="header">
				<h1 class="page-title">P&aacute;gina de Inicio</h1>
			</div> <!-- /header -->
			<div class="breadcrumbs">
				<i class="fa fa-home"></i> Inicio <i class="fa fa-caret-right"></i> Metatags <i class="fa fa-caret-right"></i> Editar Metatags
			</div>
			<div class="wrp clearfix">
            	<?php $page="metatags"; include("includes/menu-inicio.php"); ?>
                <div class="fluid">
					<div class="widget grid12">
						<div class="widget-header">
							<div class="widget-title">
								<i class="fa fa-th"></i> <strong>Editar Metatags</strong>
							</div>
						</div> <!-- /widget-header -->
						<div class="widget-content">
                        	<div class="alert alert-info alert-dismissible" role="alert">
                            	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                Metatags son los nombres, descripci&oacute;n y palabras clave con las que apareceran su web para los buscadores y redes sociales.
							</div>
                        	<form class="fcms" name="fcms" method="post" action="">
                            	<div class="form-int">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                            <label>T&iacute;tulo de la web: *</label>
                                        </div>
                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                            <input type="text" name="title" value="<?php echo $xTitulo; ?>" />
                                        </div>
                                   	</div>
                                    <div class="row">
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        	<label>Logotipo (Exterior): *<br><span>(318px x 70px)</span></label>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        	<input name="logo" type="text" value="<?php echo $xLogo; ?>" />
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                            <button class="btn btn-red" type="button" name="boton4" onClick="javascript:Imagen('LOGO');" /><i class="fa fa-save"></i> Examinar</button>
                                        </div>
                                   	</div>
                                    <div class="row">
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                            <label>Descripci&oacute;n: </label>
                                        </div>
										<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                            <textarea name="description" id="description" placeholder="Descripción de la web"><?php echo $xDes; ?></textarea>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        	<label>Palabras clave <br>(sep&aacute;relas con una coma):</label>
                                        </div>
										<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                        	<input name="keywords" id="keywords" type="text" value="<?php echo $xKey; ?>">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        	<label>Url (ejem: www.susitio.com):</label>
                                        </div>
										<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                        	<input name="url" id="url" type="text" value="<?php echo $xUrl; ?>">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        	<label>Imagenes para redes sociales: <br><span>(470px x 246px)</span></label>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <input name="face1" type="text" value="<?php echo $xFace1; ?>" />
                                        </div>
                                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                            <button class="btn btn-red" type="button" name="boton4" onClick="javascript:Imagen('FIA');" /><i class="fa fa-save"></i> Examinar</button>

                                        </div>
									</div>
                                    <div style="height:12px;"></div>
                                    <div class="row">
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <input name="face2" type="text" value="<?php echo $xFace2; ?>" />
										</div>
                                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                            <button class="btn btn-red" type="button" name="boton4" onClick="javascript:Imagen('FIB');" /><i class="fa fa-save"></i> Examinar</button>
                                        </div>
                                    </div>
                                    <div class="separador-15"></div>
                                    <div class="row">
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        	<label>Favicon:</label>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        	<input name="ico" type="text" value="<?php echo $xIco; ?>" />
                                        </div>
                                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                            <button class="btn btn-red" type="button" name="boton4" onClick="javascript:Imagen('ICO');" /><i class="fa fa-save"></i> Examinar</button>
                                        </div>
                                    </div>
                                    <div class="separador-20"></div>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        	<div class="btn-group">
                                            	<a href="inicio.php" class="btn btn-pink"><i class="fa fa-times"></i> Cancelar</a>
                                                <button class="btn btn-green" type="button" name="boton" onClick="javascript:Validar();" /><i class="fa fa-refresh"></i> Editar Metatags</button>
                                                <input type="hidden" name="proceso">
	            			    				<input type="hidden" name="cod_meta" value="<?php echo $xCodigo; ?>">
											</div>
                                        </div>
                                    </div>
								</div>
    	                    </form>
                            <label><span>Los campos con ( <strong>*</strong> ) son obligatorios.</span></label>
						</div>
					</div> <!-- /widget -->
				</div> <!-- /fluid -->	
			</div> <!-- /wrp -->
		</div> <!-- /content -->
		<?php include("includes/footer.php") ?>
	</div> <!-- /wrapper -->
</body>
</html>