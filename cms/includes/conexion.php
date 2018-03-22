<?php 
$enlaces = mysqli_connect('localhost', 'root', '','maracuyacontenidos') or die('No se pudo conectar: ' . mysqli_error($enlaces));
mysqli_select_db($enlaces,'maracuyacontenidos') or die('No se pudo seleccionar la base de datos');

/*$enlaces = mysqli_connect('localhost', 'maracuya_crimson', 'J[(N7Snsbty7','maracuya_web2017') or die('No se pudo conectar: ' . mysqli_error($enlaces));
mysqli_select_db($enlaces,'maracuya_web2017') or die('No se pudo seleccionar la base de datos');*/
?>