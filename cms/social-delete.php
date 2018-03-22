<?php include "includes/conexion.php"; ?>
<?php include "includes/verificar.php"; ?>
<?php 
$cod_link = $_REQUEST['cod_link'];
$eliminar = "DELETE FROM social_links WHERE cod_link='$cod_link'";
$resultado = mysqli_query($enlaces,$eliminar);
header("Location:social.php");
?>