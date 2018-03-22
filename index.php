<?php include "cms/includes/conexion.php"; ?>
<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<?php include "includes/head.php"; ?>
<!-- Slick slider css -->
<link rel="stylesheet" type="text/css" href="resources/slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="resources/slick/slick-theme.css"/>
<!-- Camera slider css -->
<link rel="stylesheet" id="camera-css" href="resources/camera/css/camera.css" type="text/css" media="all">
<!-- Jackbox -->
<link href="resources/jackbox/css/jackbox.css" rel="stylesheet" type="text/css" />
<link href="resources/jackbox/css/jackbox_hovers.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php $page = "index"; ?>
<div>
	<div id="loader-wrapper">
		<div id="loader"></div>
		<div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
	</div>
	<?php include "includes/header.php"; ?>
	<div class="fluid_container camera_banner wow animated fadeIn" data-wow-duration="0.75s" data-wow-delay="1s">
        <div class="camera_wrap camera_magenta_skin" id="camera_wrap_2">
        	<?php
				$consultarBanner = "SELECT * FROM banners WHERE estado='A' ORDER BY orden";
			    $resultadoBanner = mysqli_query($enlaces,$consultarBanner) or die('Consulta fallida: ' . mysqli_error($enlaces));
			    while($filaBan = mysqli_fetch_array($resultadoBanner)){
			    	$xCodigo		= $filaBan['cod_banner'];
			        $xImagen		= $filaBan['imagen'];
			        $xOrden			= $filaBan['orden'];
			        $xEstado		= $filaBan['estado'];
			?>
            <div data-src="cms/images/banners/<?php echo $xImagen; ?>"></div>
            <?php
				}
				mysqli_free_result($resultadoBanner);
            ?>
        </div>
    </div>
	<section class="seccion-estilo">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<h3>Somos unos Genios en</h3>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 servicio-destacado text-center">
					<img src="img/audiovisual-icon.png" />
					<h4>Audio Visual</h4>
					<p><span class="amarillo">Vídeo</span> Corporativo, Institucional. Comerciales, Spots, Programas de tv. <span class="naranja">Animación 2d</span>, 3d.</p>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 servicio-destacado text-center">
					<img src="img/grafica-icon.png" />
					<h4>Gráfica</h4>
					<p><span class="amarillo">Diseño</span>, ilustración, Identidad Corporativa, Avisos gráficos, <span class="naranja">Folletería</span>.</p>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 servicio-destacado text-center">
					<img src="img/fotografia-icon.png" />
					<h4>Fotografía</h4>
					<p><span class="amarillo">Publicitaria</span>, Corporativa, Moda, retratos.</p>
				</div>
			</div>
		</div>
	</section>
	<section class="seccion-estilo parallax-window" data-parallax="scroll" data-image-src="img/somos-un-equipo_1.jpg">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 wow animated fadeIn" data-wow-duration="0.5s" data-wow-delay="0.2s">
					<h3>Qué ofrecemos y cómo lo hacemos</h3>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 wow animated fadeInUp text-center" data-wow-duration="0.5s" data-wow-delay="0.3s">
					<p>En Maracuyá, contenidos audiovisuales</p>
					<ul class="list-horizontal">
						<li>
                            <a href="https://www.youtube.com/watch?v=VHXwKq8bVXM" data-title="Qué ofrecemos y cómo lo hacemos en Maracuyá Contenidos?" data-group="video1" class="jackbox color-video-1">
                                <i class="neon fa fa-play-circle" aria-hidden="true"></i>
	                            <span>¿Qué ofrecemos?</span>
                            </a>
						</li>
						<li>
                            <a href="https://www.youtube.com/watch?v=ejePWy9UafQ" data-title="REEL MARACUYÁ" data-group="video2" class="jackbox color-video-2">
                                <i class="neon fa fa-play-circle" aria-hidden="true"></i>
	                            <span>REEL MARACUYÁ</span>
                            </a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<section class="seccion-estilo">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 wow animated fadeIn" data-wow-duration="0.5s" data-wow-delay="0.2s">
					<h3>Nuestros Clientes</h3>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 wow animated fadeIn" data-wow-duration="0.5s" data-wow-delay="0.35s">
					<div class="enlaces">
						<div class="autoplay">
	                        <?php
								$consultarCliente = "SELECT * FROM clientes WHERE estado='A' ORDER BY orden";
								$resultadoCliente = mysqli_query($enlaces,$consultarCliente) or die('Consulta fallida: ' . mysqli_error($enlaces));
								while($filaCli = mysqli_fetch_array($resultadoCliente)){
									$xCodigo		= $filaCli['cod_cliente'];
									$xImage			= $filaCli['imagen'];
									$xOrden			= $filaCli['orden'];
									$xEstado		= $filaCli['estado'];
							?>   
							<div><img src="cms/images/clientes/<?php echo $xImage; ?>" /></div>
							<?php
                                }
                                mysqli_free_result($resultadoCliente);
                            ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php include "includes/footer.php"; ?>
	<!-- Camera Slider js -->
	<script type="text/javascript" src="resources/camera/scripts/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="resources/camera/scripts/camera.js"></script>
	<script>
		jQuery(function(){
			jQuery('#camera_wrap_2').camera({
				fx: 'mosaic, mosaicReverse, mosaicRandom, mosaicSpiral, mosaicSpiralReverse',
				time: 4550,
				transPeriod: 700,
				gridDifference: 50,
				loader: 'none',
				height: '28%',
				pagination: true,
				thumbnails: false,
				navigation: true,
				navigationHover: false,
				playPause: false
			});
		});
	</script>
	<!-- Slick Slider js -->
	<script type="text/javascript" src="resources/slick/slick.min.js"></script>
	<script type="text/javascript">
	$('.autoplay').slick({
	  slidesToShow: 3,
	  slidesToScroll: 1,
	  autoplaySpeed: 2000,
	  autoplay: true,
	  dots: false,
	  responsive: [
		{
		  breakpoint: 1199,
		  settings: {
			slidesToShow: 2,
			slidesToScroll: 1
		  }
		},
		{
		  breakpoint: 911,
		  settings: {
			slidesToShow: 1,
			slidesToScroll: 1
		  }
		},
		{
		  breakpoint: 768,
		  settings: {
			slidesToShow: 1,
			slidesToScroll: 1
		  }
		}]
	});
	</script>
    <!-- Jackbox -->
    <script type="text/javascript" src="resources/jackbox/js/libs/jquery.address-1.5.min.js"></script>
	<script type="text/javascript" src="resources/jackbox/js/libs/Jacked.js"></script>
	<script type="text/javascript" src="resources/jackbox/js/jackbox-swipe.js"></script>
	<script type="text/javascript" src="resources/jackbox/js/jackbox.js"></script>
	<script type="text/javascript" src="resources/jackbox/js/libs/StackBlur.js"></script>
	<script type="text/javascript">
		/*jQuery(document).ready(function() {
			jQuery(".jackbox[data-group]").jackBox("init");
		});*/
		jQuery(".jackbox[data-group]").jackBox("init", {
    		deepLinking: false,
	    	showInfoByDefault: false,
    		preloadGraphics: true,
    		fullscreenScalesContent: true,
	    	useThumbs: true,
			useThumbTooltips: false
		});
	</script>
</div>
</body>
</html>