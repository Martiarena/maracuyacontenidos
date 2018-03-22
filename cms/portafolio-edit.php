<?php include "includes/conexion.php"; ?>
<?php include "includes/verificar.php"; ?>
<?php
$cod_categoria = "";
$cod_portafolio = $_REQUEST['cod_portafolio'];
if (isset($_REQUEST['proceso'])) {
	$proceso = $_POST['proceso'];
} else {
	$proceso = "";
}
if($proceso == ""){
	$consultaPor="SELECT * FROM portafolio WHERE cod_portafolio='$cod_portafolio'";
	$resultadoPor=mysqli_query($enlaces,$consultaPor);
	$filaPor = mysqli_fetch_array($resultadoPor);
	$cod_portafolio		= $filaPor['cod_portafolio'];
	$cod_categoria		= $filaPor['cod_categoria'];
	$nom_portafolio		= htmlspecialchars(utf8_encode($filaPor['nom_portafolio']));
	$cliente			= htmlspecialchars(utf8_encode($filaPor['cliente']));
	$formato			= htmlspecialchars(utf8_encode($filaPor['formato']));
	$resumen			= htmlspecialchars(utf8_encode($filaPor['resumen']));
	$type				= $filaPor['type'];
	$video				= $filaPor['video'];
	$imagen				= $filaPor['imagen'];
	$orden				= $filaPor['orden'];
	$estado				= $filaPor['estado'];
}
if($proceso == "Actualizar"){
	$cod_categoria		= $_POST['cod_categoria'];
	$nom_portafolio		= mysqli_real_escape_string($enlaces, utf8_decode($_POST['nom_portafolio']));
	$cliente			= mysqli_real_escape_string($enlaces, utf8_decode($_POST['cliente']));
	$formato			= mysqli_real_escape_string($enlaces, utf8_decode($_POST['formato']));
	$resumen			= mysqli_real_escape_string($enlaces, utf8_decode($_POST['resumen']));
	$type				= $_POST['type'];
	$video				= $_POST['video'];
	$imagen				= $_POST['imagen'];
	$orden				= $_POST['orden'];
	$estado				= $_POST['estado'];
	
	//Validar si el registro existe
	$actualizarPortafolio = "UPDATE portafolio SET
		cod_portafolio='$cod_portafolio', 
		cod_categoria='$cod_categoria', 
		nom_portafolio='$nom_portafolio', 
		cliente='$cliente', 
		formato='$formato', 
		resumen='$resumen', 
		type='$type', 
		video='$video', 
		imagen='$imagen', 
		orden='$orden', 
		estado='$estado' 
		WHERE cod_portafolio='$cod_portafolio'";
	
	$resultadoActualizar = mysqli_query($enlaces,$actualizarPortafolio);
	header("Location:portafolio.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php include("includes/head.php") ?>
    <script type="text/javascript" src="js/rutinas.js"></script>
	<script>
		function Validar(){
			if(document.fcms.nom_portafolio.value==""){
				alert("Debe escribir un título");
				document.fcms.nom_portafolio.focus();
				return;	
			}
			if(document.fcms.imagen.value==""){
				alert("Debe subir una imagen");
				document.fcms.imagen.focus();
				return;	
			}
			if(document.fcms.orden.value==""){
				alert("Debe asignar un orden");
				document.fcms.orden.focus();
				return;	
			}
			
			document.fcms.action = "portafolio-edit.php";
			document.fcms.proceso.value="Actualizar";
			document.fcms.submit();
		}
		function Imagen(codigo){
			url = "agregar-foto.php?id=" + codigo;
			AbrirCentro(url,'Agregar', 475, 180, 'no', 'no');
		}
		function soloNumeros(e) 
		{ 
			var key = window.Event ? e.which : e.keyCode 
			return ((key >= 48 && key <= 57) || (key==8)) 
		}
	</script>
    <link href="jackbox/css/jackbox.css" rel="stylesheet" type="text/css" />
	<link href="jackbox/css/jackbox_hovers.css" rel="stylesheet" type="text/css" />
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
				<h1 class="page-title">Portafolio</h1>
			</div> <!-- /header -->
			<div class="breadcrumbs">
				<i class="fa fa-home"></i> Portafolio <i class="fa fa-caret-right"></i> Trabajos <i class="fa fa-caret-right"></i> Editar trabajo
			</div>
			<div class="wrp clearfix">
            	<?php $page = "trabajos"; include("includes/menu-portafolio.php"); ?>
                <div class="fluid">
					<div class="widget grid12">
						<div class="widget-header">
							<div class="widget-title">
								<i class="fa fa-th"></i> <strong>Editar Trabajo</strong>
							</div>
						</div> <!-- /widget-header -->
						<div class="widget-content">
                            <form class="fcms" name="fcms" method="post" action="">
                            	<div class="form-int">
                                	<div class="row">
                                    	<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                            <label>Nombre: *</label>
                                        </div>
                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                        	<input name="nom_portafolio" type="text" value="<?php echo $nom_portafolio; ?>" />
                                        </div>
									</div>
                                    <div class="row">
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                            <label>Categor&iacute;a:</label>
                                        </div>
                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                        	<div class="dropdown">
                                                <select name="cod_categoria" class="dropdown-select">
                                                    <?php 
                                                        //Al cargar la pagina debe listar todas las categorias existentes
                                                        if($cod_categoria == ""){
                                                            $consultaCat = "SELECT * FROM categorias WHERE estado='A'";
                                                            $resultaCat = mysqli_query($enlaces,$consultaCat);
                                                            while($filaCat = mysqli_fetch_array($resultaCat)){
                                                                $xcodCat = $filaCat['cod_categoria'];
                                                                $xnomCat = utf8_encode($filaCat['categoria']);
                                                                echo '<option value='.$xcodCat.'>'.$xnomCat.'</option>';
                                                            }
                                                        }else{
                                                            // Al recargar la pagina que seleccione el elemento escogido
                                                            $consultaCat = "SELECT * FROM categorias WHERE cod_categoria='$cod_categoria'";
                                                            $resultaCat = mysqli_query($enlaces,$consultaCat);
                                                            while($filaCat = mysqli_fetch_array($resultaCat)){
                                                                $xcodCat = $filaCat['cod_categoria'];
                                                                $xnomCat = utf8_encode($filaCat['categoria']);
                                                                echo '<option value='.$xcodCat.' selected="selected">'.$xnomCat.'</option>';
                                                            }
                                                            //Cargar todas las categorias menos la escogida
                                                            $consultaCat = "SELECT * FROM categorias WHERE cod_categoria!='$cod_categoria'";
                                                            $resultaCat = mysqli_query($enlaces,$consultaCat);
                                                            while($filaCat = mysqli_fetch_array($resultaCat)){
                                                                $xcodCat = $filaCat['cod_categoria'];
                                                                $xnomCat = utf8_encode($filaCat['categoria']);
                                                                echo '<option value='.$xcodCat.'>'.$xnomCat.'</option>';
                                                            }
                                                        }
                                                    ?>
                                            	</select>
											</div>
                                        </div>
									</div>
                                    <div class="separador-20"></div>
                                    <div class="row">
                                    	<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        	<label>Cliente:</label>
                                        </div>
                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                        	<input name="cliente" type="text" id="cliente" value="<?php echo $cliente; ?>" />
                                        </div>
                                    </div>
                                    <div class="row">
                                    	<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        	<label>Formato:</label>
                                        </div>
                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                        	<input name="formato" type="text" id="formato" value="<?php echo $formato; ?>" />
                                        </div>
                                    </div>
                                    <div class="row">
                                    	<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        	<label>Resumen:</label>
                                        </div>
                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
	                                        <textarea name="resumen" cols="55" rows="15"><?php echo $resumen ?></textarea>
                                        </div>
                                    </div>
                                    <div class="row">
                                    	<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        	<label>Tipo:</label>
                                        </div>
                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                        	<div class="custom-input">
				            	            	<input <?php if (!(strcmp($type,"I"))) {echo "checked=\"checked\"";} ?> name="type" type="radio" value="I" id="img" checked><label for="img">Imagen</label>
	            				            	<input <?php if (!(strcmp($type,"V"))) {echo "checked=\"checked\"";} ?> name="type" type="radio" value="V" id="video"><label for="video">Vídeo</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="separador-15"></div>
                                    <div class="row">
                                    	<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        	<label>Video:</label>
                                        </div>
                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                        	<input name="video" type="text" value="<?php echo $video; ?>" />
                                        </div>
                                    </div>
                                    <?php if($video!=""){ ?>
                                    <div class="row">
	                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        	<label>Vista previa del v&iacute;deo:</label>
                                        </div>
                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
											<a class="jackbox" data-group="video" href="<?php echo $video; ?>">
												<i class="fa fa-play-circle" aria-hidden="true"></i> Reproducir
											</a>
                                        </div>
                                    </div>
                                    <div class="separador-20"></div>
                                    <?php }else{ ?>
                                    <?php } ?>
									<div class="row">
                                    	<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        	<label>Imagen: *<br><span>(1200px x 738px)</span></label>
                                        </div>
                                        <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                                        	<input name="imagen" type="text" id="imagen" value="<?php echo $imagen; ?>" />
                                        </div>
                                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                            <button class="btn btn-red" type="button" name="boton2" onClick="javascript:Imagen('IP');" /><i class="fa fa-save"></i> Examinar</button>
                                        </div>
                                    </div>
									<div class="row">
                                    	<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        	<label>Orden: *</label>
                                        </div>
                                        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">
                                        	<input name="orden" type="text" onKeyPress="return soloNumeros(event)" value="<?php echo $orden; ?>" />
                                        </div>
                                    </div>
                                    <div class="row">
                                    	<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        	<label>Estado:</label>
                                        </div>
                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                            <div class="custom-input">
                                            	<input <?php if (!(strcmp($estado,"A"))) {echo "checked=\"checked\"";} ?> type="radio" id="activo" name="estado" value="A" checked="checked"><label for="activo">Activo</label>
                        						<input <?php if (!(strcmp($estado,"I"))) {echo "checked=\"checked\"";} ?> type="radio" id="inactivo" name="estado" value="I"><label for="inactivo">Inactivo</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="separador-20"></div>
                                    <div class="row">
                                    	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="btn-group">
                                            	<a href="portafolio.php" class="btn btn-pink"><i class="fa fa-times"></i> Cancelar</a>
                                                <button class="btn btn-green" type="button" name="boton" onClick="javascript:Validar();" /><i class="fa fa-refresh"></i> Editar Trabajo</button>
											</div>
					                        <input type="hidden" name="proceso">
                                            <input type="hidden" name="cod_portafolio" value="<?php echo $cod_portafolio; ?>">
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
        <script type="text/javascript" src="jackbox/js/libs/jquery.address-1.5.min.js"></script>
		<script type="text/javascript" src="jackbox/js/libs/Jacked.js"></script>
		<script type="text/javascript" src="jackbox/js/jackbox-swipe.js"></script>
		<script type="text/javascript" src="jackbox/js/jackbox.js"></script>
		<script type="text/javascript" src="jackbox/js/libs/StackBlur.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function() {
//				jQuery(".jackbox[data-group]").jackBox("init");
				jQuery(".jackbox[data-group]").jackBox("init", {
					deepLinking: false,
					showInfoByDefault: false,       // show item info automatically when content loads, true/false
					preloadGraphics: true,          // preload the jackbox graphics for a faster jackbox
					fullscreenScalesContent: false,  // choose to always scale content up in fullscreen mode, true/false
 
					autoPlayVideo: false,           // video autoplay default, this can also be set per video in the data-attributes, true/false
					flashVideoFirst: false,         // choose which technology has first priority for video, HTML5 or Flash, true/false
     
					useThumbs: false,                // choose to use thumbnails, true/false
					thumbsStartHidden: false,       // choose to initially hide the thumbnail strip, true/false
					useThumbTooltips: false
				});
			});
		</script>
	</div> <!-- /wrapper -->
</body>
</html>