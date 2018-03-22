<?php
$result = mysqli_query($enlaces,"SELECT logo FROM metatags") or die('Consulta fallida: ' . mysqli_error($enlaces));
while($row = mysqli_fetch_assoc($result)) {
   $do_not_delete[] = "images/meta/".$row['logo'];
}

$result = mysqli_query($enlaces,"SELECT face1 FROM metatags") or die('Consulta fallida: ' . mysqli_error($enlaces));
while($row = mysqli_fetch_assoc($result)) {
   $do_not_delete[] = "images/meta/".$row['face1'];
}

$result = mysqli_query($enlaces,"SELECT face2 FROM metatags") or die('Consulta fallida: ' . mysqli_error($enlaces));
while($row = mysqli_fetch_assoc($result)) {
   $do_not_delete[] = "images/meta/".$row['face2'];
}

$result = mysqli_query($enlaces,"SELECT ico FROM metatags") or die('Consulta fallida: ' . mysqli_error($enlaces));
while($row = mysqli_fetch_assoc($result)) {
   $do_not_delete[] = "images/meta/".$row['ico'];
}

$directory = "images/meta/";
$Meta = glob($directory."*");
foreach($Meta as $filename) {
    if (!in_array($filename, $do_not_delete)){
		if (strpos($filename,".")){
			unlink($filename);
		}
	}
}

$result = mysqli_query($enlaces,"SELECT imagen FROM banners") or die('Consulta fallida: ' . mysqli_error($enlaces));
while($row = mysqli_fetch_assoc($result)) {
   $do_not_delete[] = "images/banners/".$row['imagen'];
}

$directory = "images/banners/";
$Banners = glob($directory."*");
foreach($Banners as $filename) {
    if (!in_array($filename, $do_not_delete)){
		if (strpos($filename,".")){
			unlink($filename);
		}
	}
}

$result = mysqli_query($enlaces,"SELECT imagen FROM clientes") or die('Consulta fallida: ' . mysqli_error($enlaces));
while($row = mysqli_fetch_assoc($result)) {
   $do_not_delete[] = "images/clientes/".$row['imagen'];
}

$directory = "images/clientes/";
$Carrusel = glob($directory."*");
foreach($Carrusel as $filename) {
    if (!in_array($filename, $do_not_delete)){
		if (strpos($filename,".")){
			unlink($filename);
		}
	}
}

$result = mysqli_query($enlaces,"SELECT imagen FROM portafolio") or die('Consulta fallida: ' . mysqli_error($enlaces));
while($row = mysqli_fetch_assoc($result)) {
   $do_not_delete[] = "images/portafolio/".$row['imagen'];
}

$directory = "images/portafolio/";
$Portafolio = glob($directory."*");
foreach($Portafolio as $filename) {
    if (!in_array($filename, $do_not_delete)){
		if (strpos($filename,".")){
			unlink($filename);
		}
	}
}

$result = mysqli_query($enlaces,"SELECT imagen FROM galeria_portafolio") or die('Consulta fallida: ' . mysqli_error($enlaces));
while($row = mysqli_fetch_assoc($result)) {
   $do_not_delete[] = "images/portafolio/galeria/".$row['imagen'];
}

$directory = "images/portafolio/galeria/";
$PortafolioGaleria = glob($directory."*");
foreach($PortafolioGaleria as $filename) {
    if (!in_array($filename, $do_not_delete)){
		if (strpos($filename,".")){
			unlink($filename);
		}
	}
}

?>