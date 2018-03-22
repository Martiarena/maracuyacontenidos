<?php include "includes/conexion.php"; ?>
<?php include "includes/verificar.php"; ?>
<?php 
$cod_banner = $_REQUEST['cod_banner'];
$eliminar = "DELETE FROM banners WHERE cod_banner='$cod_banner'";
$resultado = mysqli_query($enlaces,$eliminar);
header("Location:banners.php");
?>