<?php include "includes/conexion.php"; ?>
<?php include "includes/verificar.php"; ?>
<?php 
$cod_cliente = $_REQUEST['cod_cliente'];
$eliminar = "DELETE FROM clientes WHERE cod_cliente='$cod_cliente'";
$resultado = mysqli_query($enlaces,$eliminar);
header("Location:clientes.php");
?>