<?php include "includes/conexion.php"; ?>
<?php include "includes/verificar.php"; ?>
<?php
$cod_cliente		= $_REQUEST['cod_cliente'];
if (isset($_REQUEST['proceso'])) {
	$proceso 	= $_POST['proceso'];
} else {
	$proceso 	= "";
}
if($proceso == ""){
	$consultaCliente = "SELECT * FROM clientes WHERE cod_cliente='$cod_cliente'";
	$ejecutarCliente = mysqli_query($enlaces,$consultaCliente) or die('Consulta fallida: ' . mysqli_error($enlaces));
	$filaCli = mysqli_fetch_array($ejecutarCliente);
	$cod_cliente = $filaCli['cod_cliente'];
	$imagen = $filaCli['imagen'];
	$orden	 = $filaCli['orden'];
	$estado = $filaCli['estado'];
}
if($proceso=="Actualizar"){	
	$cod_cliente		= $_POST['cod_cliente'];
	$imagen				= $_POST['imagen'];
	$orden				= $_POST['orden'];
	$estado				= $_POST['estado'];
	$actualizarCliente	= "UPDATE clientes SET cod_cliente='$cod_cliente', imagen='$imagen', orden='$orden', estado='$estado' WHERE cod_cliente='$cod_cliente'";
	$resultadoActualizar = mysqli_query($enlaces,$actualizarCliente) or die('Consulta fallida: ' . mysqli_error($enlaces));

	header("Location:clientes.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php include("includes/head.php") ?>
    <script type="text/javascript" src="js/rutinas.js"></script>
	<script>
		function Validar(){
			if(document.fcms.imagen.value==""){
				alert("Debe subir una imagen");
				return;	
			}
			if(document.fcms.orden.value==""){
				alert("Debes especificar un número de orden");
				document.fcms.orden.focus();
				return;	
			}
			
			document.fcms.action = "cliente-edit.php";
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
				<h1 class="page-title">Página de Inicio</h1>
			</div> <!-- /header -->
			<div class="breadcrumbs">
				<i class="fa fa-home"></i> Inicio <i class="fa fa-caret-right"></i> Clientes <i class="fa fa-caret-right"></i> Editar cliente
			</div>
			<div class="wrp clearfix">
            	<?php $page="carrusel"; include("includes/menu-inicio.php"); ?>
                <div class="fluid">
					<div class="widget grid12">
						<div class="widget-header">
							<div class="widget-title">
								<i class="fa fa-th"></i> <strong>Editar cliente</strong>
							</div>
						</div> <!-- /widget-header -->
						<div class="widget-content">
                            <form class="fcms" name="fcms" method="post" action="">
								<div class="form-int">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        	<label>Clientes: *<br><span>(310px x 210px)</span></label>
                                        </div>
                                        <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                                        	<input name="imagen" type="text" id="imagen" value="<?php echo $imagen; ?>" />
                                        </div>
                                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                        	<button class="btn btn-red" type="button" name="boton2" value="Examinar" onClick="javascript:Imagen('FO');" /><i class="fa fa-save"></i> Examinar</button>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        	<label>Orden: *</label>
										</div>
                                        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">
                                         	<input name="orden" type="text" id="orden" value="<?php echo $orden; ?>" onKeyPress="return soloNumeros(event)" /></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        	<label>Estado:</label>
                                        </div>
                                    	<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                        	<div class="custom-input">
                                            	<input <?php if (!(strcmp($estado,"A"))) {echo "checked=\"checked\"";} ?> type="radio" name="estado" value="A" id="activo" checked="checked"><label for="activo">Activo</label>
                                                <input <?php if (!(strcmp($estado,"I"))) {echo "checked=\"checked\"";} ?> type="radio" name="estado" value="I" id="inactivo"><label for="inactivo">Inactivo</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div style="height:20px;"></div>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        	<div class="btn-group">
                                            	<a href="clientes.php" class="btn btn-pink"><i class="fa fa-times"></i> Cancelar</a>
                                                <button class="btn btn-green" type="button" name="boton" onClick="javascript:Validar();" /><i class="fa fa-refresh"></i> Editar Cliente</button>
											</div>
							                <input type="hidden" name="proceso">
                                            <input type="hidden" name="cod_cliente" value="<?php echo $cod_cliente; ?>">
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
	</div> <!-- /wrapper -->
	<?php include("includes/footer.php") ?>
</body>
</html>