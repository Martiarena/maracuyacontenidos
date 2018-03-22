<?php include "cms/includes/conexion.php"; ?>
<?php
if (isset($_REQUEST['proceso'])) {
	$proceso 	= $_POST['proceso'];
} else {
	$proceso 	= "";
}
if($proceso=="Registrar"){
	$nombre			= $_POST['nombre'];
	$email			= $_POST['email'];
	$telefono		= $_POST['telefono'];
	$comentario		= $_POST['comentario'];
	$fecha_ingreso	= $_POST['fecha_ingreso'];
	$estado			= $_POST['estado'];
	
	$contacto = "INSERT INTO formulario(nombre, email, telefono, comentario, fecha_ingreso, estado)VALUES('$nombres', '$email', '$telefono', '$comentario', '$fecha_ingreso', '$estado')";
	$result=mysqli_query($enlaces, $contacto);
	
	/*--- enviar datos al email ----*/

	$consultarCot = 'SELECT * FROM contact';
	$resultadoCot = mysqli_query($enlaces,$consultarCot) or die('Consulta fallida: ' . mysqli_error($enlaces));
		while($filaCot = mysqli_fetch_array($resultadoCot)){
			$xDesemail		= $filaCot['form_mail'];
		}
	$emailDestino = $xDesemail;
	$encabezado = "Contacto desde su Web";
	$mensaje .= "Informacion del Contacto\n";
	$mensaje .= "------------------------\n";
	$mensaje .= "Nombres		:".$nombre."\n";
	$mensaje .= "Email			:".$email."\n";
	$mensaje .= "Telefono		:".$telefono."\n";
	$mensaje .= "Fecha			:".$fecha_ingreso."\n";
	$mensaje .= "Comentario		:".$comentario."\n";
	
	$mailcabecera = "Desde: ".$email." <". $nombres. "> \n";
	$mailcabecera .= "Responder a: ".$email."\n\n";
	mail($emailDestino,$encabezado, $mensaje, $mailcabecera);
	header("Location:gracias.php");
}
?>
<!doctype html>
<html>
<head>
<?php include "includes/head.php"; ?>
<script>
	function Validar(){
		document.contacto.action="contacto.php";
		if(document.contacto.nombre.value==""){
			alert("Debes ingresar tus nombres");
			document.contacto.nombre.focus();
			return;	
		}
		if(document.contacto.email.value==""){
			alert("Debes ingresar tus email");
			document.contacto.email.focus();
			return;	
		}
		if(document.contacto.telefono.value==""){
			alert("Debes ingresar tu telefono");
			document.contacto.telefono.focus();
			return;	
		}
		if(document.contacto.comentario.value==""){
			alert("Debes ingresar su mensaje");
			document.contacto.comentario.focus();
			return;	
		}
		document.contacto.proceso.value="Registrar";
		document.contacto.submit();
	}
</script>
</head>
<body class="fondo-blanco">
<?php $page = "contacto"; ?>
<div>
	<div id="loader-wrapper">
		<div id="loader"></div>
		<div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
	</div>
	<?php include "includes/header.php"; ?>
	<section class="seccion-interna camera_banner">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 wow animated fadeIn" data-wow-duration="0.5s" data-wow-delay="0.8s">
					<h2>Contáctenos</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 form-seccion wow animated bounceInLeft" data-wow-duration="0.75s" data-wow-delay="1.2s">
                	<form id="contact-form" name="contacto" method="post" action="">
                    	<ul class="formulario">
                        	<li>
                            	<label>Nombre:</label>
                                <input type="text" name="nombre" id="nombre" class="validate[required]">
                            </li>
                            <li>
                            	<label>E-mail:</label>
                                <input type="text" name="email" id="email" class="validate[required,custom[email]">
							</li>
                            <li>
                            	<label>Teléfono:</label>
                                <input type="text" name="telefono" id="telefono" class="validate[required,custom[onlyNumberSp]">
                            </li>                                        
                            <li>
                            	<label>Comentario:</label>
                                <textarea name="comentario" id="comentario" class="validate[required] "></textarea>
                            </li>
                            <li>
                            	<button type="button" onClick="javascript:Validar();" class="button button--rayen button--border-thin button--text-thick button--text-upper button--size-s" data-text="Enviar"><span>Enviar</span></button>
                                <button type="reset" class="button button--rayen button--border-thin button--text-thick button--text-upper button--size-s" data-text="Borrar" value="Borrar" /><span>Borrar</span></button>
                                <input type="hidden" name="proceso">
			                    <input type="hidden" name="estado" value="A">
            			        <?php
									$fecha = date("Y-m-d");
								?>
            			        <input type="hidden" name="fecha_ingreso" value="<?php echo $fecha ?>">
                            </li>
                        </ul>
                    </form>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 wow animated contacto-seccion bounceInRight" data-wow-duration="0.75s" data-wow-delay="1.2s">
                	<?php
						$consultarCot = 'SELECT * FROM contact';
						$resultadoCot = mysqli_query($enlaces,$consultarCot) or die('Consulta fallida: ' . mysqli_error($enlaces));
						while($filaCot = mysqli_fetch_array($resultadoCot)){
							$xCodigo		= $filaCot['cod_contact'];
							$xDirection		= $filaCot['direction'];
							$xPhone			= $filaCot['phone'];
							$xMobile		= $filaCot['mobile'];
							$xEmail			= $filaCot['email'];
							$xMap			= $filaCot['map'];
					?>
                	<ul class="lista-cont">
                    	<li><strong>MARACUYÁ CONTENIDOS AUDIOVISUALES S.A.C.</strong></li>
                        <li><i class="fa fa-map-marker" aria-hidden="true"></i> <?php echo $xDirection; ?></li>
                        <li><i class="fa fa-mobile" aria-hidden="true"></i> <?php echo $xPhone; ?> | <?php echo $xMobile; ?></li>
                        <li><i class="fa fa-envelope" aria-hidden="true"></i> <?php echo $xEmail; ?></li>
                    </ul>
                    <iframe class="wow animated fadeIn" data-wow-duration="0.75s" data-wow-delay="1s" src="<?php echo $xMap; ?>" width="100%" frameborder="0" height="250"></iframe>
                    <?php
						}
						mysqli_free_result($resultadoCot);
					?>
				</div>
			</div>
		</div>
	</section>
  	<?php include "includes/footer.php"; ?>
</div>
</body>
</html>