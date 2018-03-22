<?php include "includes/conexion.php"; ?>
<?php include "includes/verificar.php"; ?>
<?php 
$cod_categoria = $_REQUEST['cod_categoria'];
$eliminar = "DELETE FROM categorias WHERE cod_categoria='$cod_categoria'";
$resultado = mysqli_query($enlaces,$eliminar);
header("Location:categorias.php");
?>