<?php
$id = $_POST['id'];

$uploadname 	= $_FILES['imagen'] ['name'];
$uploadtempname	= $_FILES['imagen'] ['tmp_name'];

if($id=='IG'){
	$uploaddir = 'images/banners/'.$uploadname;
	if(move_uploaded_file($uploadtempname, $uploaddir)){
		$mensaje = "El archivo subio correctamente";
	}else{
		$mensaje = "El archivo no subio"; 
	}
}
// Imagen subir Fotos
if($id=='FO'){
	$uploaddir = 'images/clientes/'.$uploadname;
	if(move_uploaded_file($uploadtempname, $uploaddir)){
		$mensaje = "El archivo subio correctamente";
	}else{
		$mensaje = "El archivo no subio"; 
	}
}
// Subir Imagen Video
if($id=='IP'){
	$uploaddir = 'images/portafolio/'.$uploadname;
	if(move_uploaded_file($uploadtempname, $uploaddir)){
		$mensaje = "El archivo subio correctamente";
	}else{
		$mensaje = "El archivo no subio"; 
	}
}

// Imagen Categoria productos
if($id=='IC'){
	$uploaddir = 'images/productos/img-categoriaproductos/'.$uploadname;
	if(move_uploaded_file($uploadtempname, $uploaddir)){
		$mensaje = "El archivo subio correctamente";
	}else{
		$mensaje = "El archivo no subio"; 
	}
}

// Imagen sub categoria productos
if($id=='ISC'){
	$uploaddir = 'images/productos/img_subcategoriaproductos/'.$uploadname;
	if(move_uploaded_file($uploadtempname, $uploaddir)){
		$mensaje = "El archivo subio correctamente";
	}else{
		$mensaje = "El archivo no subio"; 
	}
}

// Subir Imagen productos
if($id=='IX'){
	$uploaddir = 'images/productos/img_productos/'.$uploadname;
	if(move_uploaded_file($uploadtempname, $uploaddir)){
		$mensaje = "El archivo subio correctamente";
	}else{
		$mensaje = "El archivo no subio"; 
	}
}

// Subir Icono
if($id=='ICO'){
	$uploaddir = 'images/meta/'.$uploadname;
	if(move_uploaded_file($uploadtempname, $uploaddir)){
		$mensaje = "El archivo subio correctamente";
	}else{
		$mensaje = "El archivo no subio"; 
	}
}

// Subir imagen de Facebook 1
if($id=='FIA'){
	$uploaddir = 'images/meta/'.$uploadname;
	if(move_uploaded_file($uploadtempname, $uploaddir)){
		$mensaje = "El archivo subio correctamente";
	}else{
		$mensaje = "El archivo no subio"; 
	}
}

// Subir imagen de Facebook 2
if($id=='FIB'){
	$uploaddir = 'images/meta/'.$uploadname;
	if(move_uploaded_file($uploadtempname, $uploaddir)){
		$mensaje = "El archivo subio correctamente";
	}else{
		$mensaje = "El archivo no subio"; 
	}
}

// Subir Logotipo exterior
if($id=='LOGO'){
	$uploaddir = 'images/meta/'.$uploadname;
	if(move_uploaded_file($uploadtempname, $uploaddir)){
		$mensaje = "El archivo subio correctamente";
	}else{
		$mensaje = "El archivo no subio"; 
	}
}

if($id=='IGP'){
	$uploaddir = 'images/portafolio/galeria/'.$uploadname;
	if(move_uploaded_file($uploadtempname, $uploaddir)){
		$mensaje = "El archivo subio correctamente";
	}else{
		$mensaje = "El archivo no subio"; 
	}
}

?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Proceso Agregar Fotos</title>
<script>
	function Cerrar(){
		valor = document.imagenes.xid.value;
		tNavegador = navigator.appName;
		/* --- Validar formulario para internet explorer ---*/
		if(tNavegador=="Microsoft Internet Explorer"){
			if(valor=="IG") {
				opener.window.fcms.imagen.value = "<?php echo basename($_FILES['imagen']['name']); ?>";
			}
			if(valor=="FO") {
				opener.window.fcms.imagen.value = "<?php echo basename($_FILES['imagen']['name']); ?>";
			}
			if(valor=="IP") {
				opener.window.fcms.imagen.value = "<?php echo basename($_FILES['imagen']['name']); ?>";
			}
			if(valor=="IC") {
				opener.window.fcms.imagen.value = "<?php echo basename($_FILES['imagen']['name']); ?>";
			}
			if(valor=="ISC") {
				opener.window.fcms.imagen.value = "<?php echo basename($_FILES['imagen']['name']); ?>";
			}
			if(valor=="IX") {
				opener.window.fcms.imagen.value = "<?php echo basename($_FILES['imagen']['name']); ?>";
			}
			if(valor=="ICO") {
				opener.window.fcms.ico.value = "<?php echo basename($_FILES['imagen']['name']); ?>";
			}
			if(valor=="FIA") {
				opener.window.fcms.face1.value = "<?php echo basename($_FILES['imagen']['name']); ?>";
			}
			if(valor=="FIB") {
				opener.window.fcms.face2.value = "<?php echo basename($_FILES['imagen']['name']); ?>";
			}
			if(valor=="LOGO") {
				opener.window.fcms.logo.value = "<?php echo basename($_FILES['imagen']['name']); ?>";
			}
			if(valor=="IGP") {
				opener.window.fcms.imagen.value = "<?php echo basename($_FILES['imagen']['name']); ?>";
			}
		}
		/* --- Validar formulario para chrone, firefox, opera, safari ---*/
		if(tNavegador=="Netscape"){
			if(valor=="IG") {
				window.opener.document.fcms.imagen.value = "<?php echo basename($_FILES['imagen']['name']); ?>";
			}
			if(valor=="FO") {
				window.opener.document.fcms.imagen.value = "<?php echo basename($_FILES['imagen']['name']); ?>";
			}
			if(valor=="IP") {
				window.opener.document.fcms.imagen.value = "<?php echo basename($_FILES['imagen']['name']); ?>";
			}
			if(valor=="IC") {
				window.opener.document.fcms.imagen.value = "<?php echo basename($_FILES['imagen']['name']); ?>";
			}
			if(valor=="ISC") {
				window.opener.document.fcms.imagen.value = "<?php echo basename($_FILES['imagen']['name']); ?>";
			}
			if(valor=="IX") {
				opener.window.fcms.imagen.value = "<?php echo basename($_FILES['imagen']['name']); ?>";
			}
			if(valor=="ICO") {
				opener.window.fcms.ico.value = "<?php echo basename($_FILES['imagen']['name']); ?>";
			}
			if(valor=="FIA") {
				opener.window.fcms.face1.value = "<?php echo basename($_FILES['imagen']['name']); ?>";
			}
			if(valor=="FIB") {
				opener.window.fcms.face2.value = "<?php echo basename($_FILES['imagen']['name']); ?>";
			}
			if(valor=="LOGO") {
				opener.window.fcms.logo.value = "<?php echo basename($_FILES['imagen']['name']); ?>";
			}
			if(valor=="IGP") {
				opener.window.fcms.imagen.value = "<?php echo basename($_FILES['imagen']['name']); ?>";
			}
		}
		window.close();
	}
</script>
<link href="css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
	<div class="widget grid12" style="margin-top:0px;">
        <div class="widget-header">
            <div class="widget-title">
                <i class="fa fa-th"></i> Seleccionar archivo
            </div>
        </div> <!-- /widget-header -->
        <div class="widget-content">
            <div id="cajafoto">
				<form action="" method="post" name="imagenes">
                	<div class="form-int">
                    	<div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    							<label>El archivo se subi&oacute; correctamente</label>
                                <div style="height:10px;"></div>
        						<input name="imagen" type="hidden" value="<?php echo basename($_FILES['imagen']['name']); ?>">
        						<input type="hidden" name="xid" value="<?php echo $id; ?>">
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            	<button class="btn btn-red" type="button" name="boton" onClick="javascript:Cerrar();">Cerrar</button>
                           </div>
                       </div>
                   </div>
			    </form>
            </div>
        </div>
	</div>
</body>
</html>