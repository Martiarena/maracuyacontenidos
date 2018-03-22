<?php include "includes/conexion.php"; ?>
<?php include "includes/verificar.php"; ?>
<?php 
$cod_portafolio = $_REQUEST['cod_portafolio'];
$eliminar = "DELETE FROM portafolio WHERE cod_portafolio='$cod_portafolio'";
$resultado = mysqli_query($enlaces,$eliminar);
header("Location:portafolio.php");
?>