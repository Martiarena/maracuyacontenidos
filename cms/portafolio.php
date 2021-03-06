<?php include "includes/conexion.php"; ?>
<?php include "includes/verificar.php"; ?>
<?php include "includes/clean.php"; ?>
<?php
$num = ""; 
if (isset($_REQUEST['eliminar'])) {
	$eliminar = $_POST['eliminar'];
} else {
	$eliminar = "";
}
if ($eliminar == "true") {
	$sqlEliminar = "SELECT cod_portafolio FROM portafolio ORDER BY orden";
	$sqlResultado = mysqli_query($enlaces,$sqlEliminar) or die('Consulta fallida: ' . mysqli_error($enlaces));
	$x = 0;
	while($filaElim = mysqli_fetch_array($sqlResultado)){
		$id_portafolio = $filaElim["cod_portafolio"];
		if ($_REQUEST["chk" . $id_portafolio] == "on") {
			$x++;
			if ($x == 1) {
					$sql = "DELETE FROM portafolio WHERE cod_portafolio=$id_portafolio";
				} else { 
					$sql = $sql . " OR cod_portafolio=$id_portafolio";
				}
		}
	}
	mysqli_free_result($sqlResultado);
	if ($x > 0) { 
		$rs = mysqli_query($enlaces,$sql);
	}
	header ("Location:portafolio.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php include("includes/head.php") ?>
    <style>
		@media only screen and (max-width: 760px), (min-device-width: 768px) and (max-device-width: 1024px)  {
			td:nth-of-type(1):before { content: "Nombre"; }
			td:nth-of-type(2):before { content: "Categoría"; }
			td:nth-of-type(3):before { content: "Cliente"; }
			td:nth-of-type(4):before { content: "Imagen"; }
			td:nth-of-type(5):before { content: "Orden"; }
			td:nth-of-type(6):before { content: "Estado"; }
			td:nth-of-type(7):before { content: ""; }
			td:nth-of-type(8):before { content: ""; }
			td:nth-of-type(9):before { content: ""; }
		}
	</style>
    <script>
	function Procedimiento(proceso,seccion){
		document.fcms.proceso.value = "";
		estado = 0;
		for (i = 0; i < document.fcms.length; i++)
		if(document.fcms.elements[i].name.substring(0,3) == "chk"){
			if(document.fcms.elements[i].checked == true){
				estado = 1
			}
		}
		if (estado == 0) {
			if (seccion == "N"){
				alert("Debes de seleccionar un portafolio.")
			}
			return
		}	
		procedimiento = "document.fcms." + proceso + ".value = true"
		eval(procedimiento)
		document.fcms.submit()
	}
	</script>
	<style>
        @import "media/css/demo_page.css";
        @import "media/css/demo_table.css";
        @import "media/css/TableTools.css";
    </style>
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
				<i class="fa fa-home"></i> Portafolio <i class="fa fa-caret-right"></i> Trabajos
			</div>
			<div class="wrp clearfix">
            	<?php $page = "trabajos"; include("includes/menu-portafolio.php"); ?>
                <div class="fluid">
					<div class="widget grid12">
						<div class="widget-header">
							<div class="widget-title">
								<i class="fa fa-th"></i> <strong>Lista de trabajos</strong>
							</div>
						</div> <!-- /widget-header -->
						<div class="widget-content">
                        	<a class="btn btn-blue" href="portafolio-nuevo.php"><i class="fa fa-plus" aria-hidden="true"></i> Añadir nuevo</a>
                            <hr>
							<form name="fcms" method="post" action="">
                                <table id="portafolio" class="text-center" width="100%" border="1">
                                	<thead>
                                        <tr>
                                            <th width="15%" scope="col">Nombre
                                                <input type="hidden" name="proceso">
                                                <input type="hidden" name="eliminar" value="false">
                                            </th>
                                            <th width="10%" scope="col">Categoría</th>
                                            <th width="10%" scope="col">Cliente</th>
                                            <th width="30%" scope="col">Imagen</th>
                                            <th width="10%" scope="col">Orden</th>
                                            <th width="10%" scope="col">Estado</th>
                                            <th width="5%" scope="col">&nbsp;</th>
                                            <th width="5%" scope="col">&nbsp;</th>
                                            <th width="5%" scope="col"><a href="javascript:Procedimiento('eliminar','N');"><img src="images/borrar.png" width="18" height="25" alt="Borrar"></a></th>
                                        </tr>
                                    </thead>
                                    <?php
                       		 			$consultarPor = "SELECT cp.cod_categoria, cp.categoria, p.* FROM categorias as cp, portafolio as p WHERE p.cod_categoria=cp.cod_categoria ORDER BY orden";
										$resultadoPor = mysqli_query($enlaces,$consultarPor) or die('Consulta fallida: ' . mysqli_error($enlaces));
										while($filaPor = mysqli_fetch_array($resultadoPor)){
											$xCodigo		= $filaPor['cod_portafolio'];
											$xCategoria		= utf8_encode($filaPor['categoria']);
											$xNomPorta		= utf8_encode($filaPor['nom_portafolio']);
											$xCliente		= utf8_encode($filaPor['cliente']);
											$xImagen		= $filaPor['imagen'];
											$xOrden			= $filaPor['orden'];
											$xEstado		= $filaPor['estado'];
											$num++;
									?>
                                    <tr>
                                        <td><?php echo $xNomPorta; ?></td>
                                        <td><?php echo $xCategoria; ?></td>
                                        <td><?php echo $xCliente; ?></td>
                                        <td><img class="banner-int" src="images/portafolio/<?php echo $xImagen; ?>" ></td>
                                        <td><?php echo $xOrden; ?></td>
                                        <td><strong>[<?php if($xEstado=="A"){ echo "Activo"; }elseif($xEstado=="I"){ echo "Inactivo"; } ?>]</strong></td>
                                        <td><a class="boton-eliminar" href="portafolio-delete.php?cod_portafolio=<?php echo $xCodigo; ?>"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                                        <td><a class="boton-editar" href="portafolio-edit.php?cod_portafolio=<?php echo $xCodigo; ?>"><i class="fa fa-pencil-square" aria-hidden="true"></i></a></td>
                                        <td>
                                        	<div class="custom-input">
		                                        <input type="checkbox" class="hidden-xs" id="chkbx-<?php echo $xCodigo; ?>" name="chk<?php echo $xCodigo; ?>" /><label for="chkbx-<?php echo $xCodigo; ?>"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php
                                        }
                                        mysqli_free_result($resultadoPor);
                                    ?>
                                </table>
                            </form>
						</div>
                    </div>
				</div>
			</div> <!-- /wrp -->
		</div> <!-- /content -->
		<?php include("includes/footer.php") ?>
		<script src="media/js/jquery.js"></script>
    	<script src="media/js/jquery.dataTables.js"></script>
    	<script src="media/ZeroClipboard/ZeroClipboard.js"></script>
    	<script src="media/js/TableTools.js"></script>
    	<script>
    		$(document).ready(function(){
    		    $("#portafolio").dataTable({
            		"sDom": 'T<"nada">lftrip',
		            "sPaginationType": "full_numbers"
		        });
		    });
	    </script>
	</div> <!-- /wrapper -->
</body>
</html>