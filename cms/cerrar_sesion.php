<?php include "includes/conexion.php"; ?>
<?php include "includes/verificar.php"; ?>
<?php 
session_start();
session_destroy();
header("Location:index.php");
?>