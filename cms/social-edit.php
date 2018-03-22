<?php include "includes/conexion.php"; ?>
<?php include "includes/verificar.php"; ?>
<?php
$cod_link		= $_REQUEST['cod_link'];
if (isset($_REQUEST['proceso'])) {
	$proceso 	= $_POST['proceso'];
} else {
	$proceso 	= "";
}
if($proceso == ""){
	$consultaSocial = "SELECT * FROM social_links WHERE cod_link='$cod_link'";
	$ejecutarSocial = mysqli_query($enlaces,$consultaSocial) or die('Consulta fallida: ' . mysqli_error($enlaces));
	$filaSol = mysqli_fetch_array($ejecutarSocial);
	$cod_link = $filaSol['cod_link'];
	$type 	 = $filaSol['type'];
	$links 	 = $filaSol['links'];
	$orden	 = $filaSol['orden'];
	$estado  = $filaSol['estado'];
}
if($proceso=="Actualizar"){	
	$cod_link			= $_POST['cod_link'];
	$type				= $_POST['type'];
	$links				= $_POST['links'];
	$orden				= $_POST['orden'];
	$estado				= $_POST['estado'];
	$actualizarSocial	= "UPDATE social_links SET cod_link='$cod_link', type='$type', links='$links', orden='$orden', estado='$estado' WHERE cod_link='$cod_link'";
	$resultadoActualizar = mysqli_query($enlaces,$actualizarSocial) or die('Consulta fallida: ' . mysqli_error($enlaces));
	
	header("Location:social.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php include("includes/head.php") ?>
    <script type="text/javascript" src="js/rutinas.js"></script>
	<script>
		function Validar(){
			if(document.fcms.links.value==""){
				alert("Debe colocar el enlace de su cuenta");
				document.fcms.links.focus();
				return;	
			}
			if(document.fcms.orden.value==""){
				alert("Debes especificar un número de orden");
				document.fcms.orden.focus();
				return;	
			}
			document.fcms.action = "social-edit.php";
			document.fcms.proceso.value="Actualizar";
			document.fcms.submit();
		}
		function soloNumeros(e) 
		{ 
			var key = window.Event ? e.which : e.keyCode 
			return ((key >= 48 && key <= 57) || (key==8)) 
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
        <?php include("includes/header.php") ?>
		<div id="content" class="clearfix">
	        <div class="header">
				<h1 class="page-title">Redes Sociales</h1>
			</div> <!-- /header -->
			<div class="breadcrumbs">
				<i class="fa fa-home"></i> Redes Sociales <i class="fa fa-caret-right"></i> Editar Red Social
			</div>
			<div class="wrp clearfix">
                <div class="fluid">
					<div class="widget grid12">
						<div class="widget-header">
							<div class="widget-title">
								<i class="fa fa-th"></i> <strong>Editar Red Social</strong>
							</div>
						</div> <!-- /widget-header -->
						<div class="widget-content">
                            <form class="fcms" name="fcms" method="post" action="">
                            	<div class="form-int">
    								<div class="row">
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                            <label>Bot&oacute;n de Red Social:</label>
                                        </div>
                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                        	<div class="dropdown">
                                                <select name="type" id="type" class="dropdown-select">
                                                	<option value="<?php echo $type; ?>"><?php echo $type; ?> (Actual)</option>
                                                    <option value="fa-facebook-square">Facebook</option>
                                                    <option value="fa-twitter-square">Twitter</option>
                                                    <option value="fa-google-plus-official">Google+</option>
                                                    <option value="fa-linkedin">Linkedin</option>
                                                    <option value="fa-blogger">Blogger</option>
                                                    <option value="fa-behance">Behance</option>
                                                    <option value="fa-youtube-play">Youtube</option>
                                                    <option value="fa-vimeo">Vimeo</option>
                                                    <option value="fa-wordpress">Wordpress</option>
                                                    <option value="fa-tumblr-square">Tumblr</option>
                                                    <option value="fa-pinterest">Pinterest</option>
                                                    <option value="fa-instagram">Instagram</option>
                                                    <option value="fa-flickr">Flickr</option>
                                            	</select>
											</div>
                                        </div>
                                    </div>
                                    <div style="height:15px;"></div>
                                    <div class="row">
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                            <label>Enlace: *</label>
                                        </div>
                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                            <input name="links" type="text" id="links" value="<?php echo $links; ?>" />
                                        </div>
                                    </div>
									<div class="row">
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        	<label>Orden: *</label>
                                        </div>
                                        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">
                                            <input name="orden" type="text" id="orden" value="<?php echo $orden; ?>" onKeyPress="return soloNumeros(event)" />
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        	<label>Estado:</label>
                                        </div>
                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                        	<div class="custom-input">
												<input <?php if (!(strcmp($estado,"A"))) {echo "checked=\"checked\"";} ?> type="radio" name="estado" id="activo" value="A" checked="checked"><label for="activo">Activo</label>
												<input <?php if (!(strcmp($estado,"I"))) {echo "checked=\"checked\"";} ?> type="radio" name="estado" id="inactivo" value="I"><label for="inactivo">Inactivo</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div style="height:20px;"></div>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        	<div class="btn-group">
                                            	<a href="social.php" class="btn btn-pink"><i class="fa fa-times"></i> Cancelar</a>
                                                <button class="btn btn-green" type="button" name="boton" onClick="javascript:Validar();" /><i class="fa fa-refresh"></i> Editar Enlace</button>
											</div>
							                <input type="hidden" name="proceso">
							                <input type="hidden" name="cod_link" value="<?php echo $cod_link; ?>">
                                        </div>
                                    </div>
								</div>
							</form>
                            <label><span>Los campos con ( <strong>*</strong> ) son obligatorios.</span></label>
						</div>
                    </div>
				</div>
			</div> <!-- /wrp -->
		</div> <!-- /content -->
		<?php include("includes/footer.php") ?>
	</div> <!-- /wrapper -->
</body>
</html>