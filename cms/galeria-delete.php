<?php include "includes/conexion.php"; ?>
<?php include "includes/verificar.php"; ?>
<?php 
$cod_galeria_portafolio = $_REQUEST['cod_galeria_portafolio'];
$cod_portafolio = $_REQUEST['cod_portafolio'];

$eliminar = "DELETE FROM galeria_portafolio WHERE cod_galeria_portafolio='$cod_galeria_portafolio'";
$resultado = mysqli_query($enlaces,$eliminar);
header("Location:galerias-nuevo.php?cod_portafolio=$cod_portafolio");
?>