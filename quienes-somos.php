<?php include "cms/includes/conexion.php"; ?>
<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<?php include "includes/head.php"; ?>
</head>
<body>
<?php $page = "nosotros"; ?>
<div>
	<div id="loader-wrapper">
		<div id="loader"></div>
		<div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
	</div>
	<?php include "includes/header.php"; ?>
	<section class="seccion-estilo seccion-nosotros camera_banner parallax-window" data-parallax="scroll" data-image-src="img/somos-un-equipo_1.jpg">
		<div class="text-slider fadeFromBottom">
            <div class="row">
            	<div class="container-fluid">
                    <h2>Somos un equipo</h2>
                    <div class="wow animated fadeInUp" data-wow-duration="1s" data-wow-delay="1s">
                        <p>Con la capacidad logística y administrativa para afrontar proyectos de comunicación para empresas e instituciones.</p>
                        <p>Nuestra oficina posee la infraestructura para producción, realización y post-producción de audiovisuales.</p>
                    </div>
				</div>
			</div>
            <div class="clearfix"></div>
		</div>
	</section>
    <section class="seccion-estilo seccion-nosotros parallax-window" data-parallax="scroll" data-image-src="img/porque-elegirnos_1.jpg">
		<div class="text-slider fadeFromBottom">
            <div class="row">
	            <div class="container-fluid">
    	            <h2>¡Así trabajamos!</h2>
        	        <div class="wow animated fadeInRight" data-wow-duration="1s" data-wow-delay="0s">
                        <p>Revisa nuestro flujo de trabajo</p>
                        <a class="boton-img wow animated fadeInLeft" data-wow-duration="0.75s" data-wow-delay="0.2s" href="descargables/video_institucional_maracuya.pdf" target="_blank">
                            <img src="img/video-institucional.png" width="90" height="88">
                        </a>
                        <a class="boton-img wow animated fadeInLeft" data-wow-duration="0.75s" data-wow-delay="0.4s" href="descargables/animacion_maracuya.pdf" target="_blank">
                            <img src="img/video-animado.png" width="90" height="88">
                        </a>
                        <a class="boton-img wow animated fadeInLeft" data-wow-duration="0.75s" data-wow-delay="0.8s" href="descargables/fotografia_maracuya.pdf" target="_blank">
                            <img src="img/video-y-fotografia.png" width="90" height="88">
                        </a>
                        <a class="boton-img wow animated fadeInLeft" data-wow-duration="0.75s" data-wow-delay="1.2s" href="descargables/grafica_maracuya.pdf" target="_blank">
                            <img src="img/papeleria-grafica.png" width="90" height="88">
                        </a>
                        <div class="clearfix"></div>
                    </div>
				</div>
			</div>
            <div class="clearfix"></div>
		</div>
	</section>
    <section class="seccion-estilo seccion-nosotros parallax-window" data-parallax="scroll" data-image-src="img/asi-trabajamos_1.jpg">
		<div class="text-slider fadeFromBottom">
            <div class="row">
	            <div class="container-fluid">
                    <h2>¿Porqué elegirnos?</h2>
                    <div class="wow animated fadeInLeft" data-wow-duration="0.75s" data-wow-delay="0s">
                        <p>Por nuestra experiencia en audiovisuales y diseño gráfico.</p>
                        <p>Nuestra seriedad y responsabilidad en proyectos corporativos e institucionales es comprobada.</p>
                       <a class="boton-img wow animated fadeIn" data-wow-duration="0.75s" data-wow-delay="0.25s" href="descargables/triptico_de_presentacion_maracuya.pdf" target="_blank">
                            <img src="img/triptico-presentacion.png" width="90" height="88">
                        </a>
                        <div class="clearfix"></div>
                    </div>
				</div>
			</div>
            <div class="clearfix"></div>
		</div>
	</section>
	<?php include "includes/footer.php"; ?>
</div>
</body>
</html>