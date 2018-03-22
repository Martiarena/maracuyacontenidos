<?php include "cms/includes/conexion.php"; ?>
<!doctype html>
<html>
<head>
<?php include "includes/head.php"; ?>
<link href="css/isotope-buttons.css" rel="stylesheet" type="text/css" />
<link href="resources/jackbox/css/jackbox.css" rel="stylesheet" type="text/css" />
<link href="resources/jackbox/css/jackbox_hovers.css" rel="stylesheet" type="text/css" />
</head>
<body class="fondo-blanco index-page" data-page="index">
	<?php $page = "portafolio"; ?>
	<div id="loader-wrapper">
		<div id="loader"></div>
		<div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
	</div>
	<?php
    	$consultarPor = "SELECT cp.cod_categoria, cp.categoria, p.* FROM categorias as cp, portafolio as p WHERE p.cod_categoria=cp.cod_categoria AND p.estado='A' ORDER BY orden";
		$resultadoPor = mysqli_query($enlaces,$consultarPor) or die('Consulta fallida: ' . mysqli_error($enlaces));
		while($filaPor = mysqli_fetch_array($resultadoPor)){
			$xCodigo		= $filaPor['cod_portafolio'];
			$xCategoria		= $filaPor['categoria'];
			$xNomPorta		= $filaPor['nom_portafolio'];
			$xCliente		= $filaPor['cliente'];
			$xFormat		= $filaPor['formato'];
			$xResumen		= $filaPor['resumen'];
			$xImagen		= $filaPor['imagen'];
			$xOrden			= $filaPor['orden'];
			$xEstado		= $filaPor['estado'];
	?>
    <div class="jackbox-description" id="description_<?php echo $xCodigo; ?>">
    	<div class="titulo-grafica row-per">
        	<h3><?php echo $xNomPorta; ?></h3>
            <div class="cl"></div>
		</div>
        <div class="row-per" style="margin-bottom:20px;">
            <ul class="lista-grafica">
                <?php if($xCliente!=""){?><li><strong>CLIENTE:</strong> <?php echo $xCliente; ?></li><?php } ?>
                <?php if($xFormat!=""){?><li><strong>FORMATO:</strong> <?php echo $xFormat; ?></li><?php } ?>
            </ul>
            <div class="cl"></div>
        </div>
        <?php if($xResumen!=""){ ?>
        <div class="row-per" style="margin-bottom:0px;">
    	    <strong>RESUMEN:</strong>
        	<div class="cl"></div>
	        <p class="parrafo"><?php echo $xResumen; ?></p>
	        <div class="cl"></div>
		</div>
        <?php } ?>
	</div>
	<?php
    	}
	    mysqli_free_result($resultadoPor);
	?>
	<?php include "includes/header.php"; ?>
	<section class="seccion-interna camera_banner">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 wow animated fadeIn" data-wow-duration="0.75s" data-wow-delay="1.8s">
					<h2>Portafolio</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-seccion wow animated bounceInUp" data-wow-duration="1s" data-wow-delay="2s">
                	<div id="filters" class="button-group">
                    	<button class="button is-checked" data-filter="*">Todos</button>
                    	<?php
							$consultarCategoria = "SELECT * FROM categorias WHERE estado='A' ORDER BY orden";
						    $resultadoCategoria = mysqli_query($enlaces,$consultarCategoria) or die('Consulta fallida: ' . mysqli_error($enlaces));
						    while($filaCat = mysqli_fetch_array($resultadoCategoria)){
			    				$xCodigo		= $filaCat['cod_categoria'];
						        $xCategoria		= $filaCat['categoria'];
						        $xOrden			= $filaCat['orden'];
						        $xEstado		= $filaCat['estado'];
						?>
						<?php if($xCodigo!="0"){?><button class="button" data-filter=".<?php echo $xCategoria; ?>"><?php echo $xCategoria; ?></button><?php } ?>
			            <?php
							}
							mysqli_free_result($resultadoCategoria);
			            ?>
					</div>
                    <div class="grid">
                    	<?php
                       		$consultarPor = "SELECT cp.cod_categoria, cp.categoria, p.* FROM categorias as cp, portafolio as p WHERE p.cod_categoria=cp.cod_categoria AND p.estado='A' ORDER BY orden";
							$resultadoPor = mysqli_query($enlaces,$consultarPor) or die('Consulta fallida: ' . mysqli_error($enlaces));
							while($filaPor = mysqli_fetch_array($resultadoPor)){
								$xCodigo		= $filaPor['cod_portafolio'];
								$xCategoria		= $filaPor['categoria'];
								$xNomPorta		= $filaPor['nom_portafolio'];
								$xCliente		= $filaPor['cliente'];
								$xType			= $filaPor['type'];
								$xImagen		= $filaPor['imagen'];
								$xVideo			= $filaPor['video'];
								$xOrden			= $filaPor['orden'];
								$xEstado		= $filaPor['estado'];
						?>  
                        <div class="element-item <?php echo $xCategoria; ?>">
                        	<div class="text-center">
                                <a class="jackbox" data-group="grupo<?php echo $xCodigo; ?>" data-title="<?php echo $xNomPorta; ?>" href="<?php if($xType=="I"){?>cms/images/portafolio/<?php echo $xImagen; ?><?php }?><?php if($xType=="V"){?><?php echo $xVideo; ?><?php }?>" data-description="#description_<?php echo $xCodigo; ?>">
                                    <div class="jackbox-hover jackbox-hover-black <?php if($xType=="I"){?>jackbox-hover-magnify<?php } ?><?php if($xType=="V"){?>jackbox-hover-play<?php } ?>"></div>
                                    <img src="cms/images/portafolio/<?php echo $xImagen; ?>" />
                                </a>
                                <h6><?php echo $xNomPorta; ?></h6>
                                <?php if($xType=="I"){?> 
                                <ul class="jackbox-hidden-items">
									<?php 
										$galeria="SELECT * FROM galeria_portafolio WHERE cod_portafolio='$xCodigo'";
										$ejecutag=mysqli_query($enlaces,$galeria);
										while($filagp=mysqli_fetch_array($ejecutag)){
											$xCodigo	= $filagp['cod_portafolio'];
											$xImgG 		= $filagp['imagen'];
                                    ?>
                                    <li class="jackbox" data-group="grupo<?php echo $xCodigo; ?>" data-title="<?php echo $xNomPorta; ?>" data-thumbnail="cms/images/portafolio/galeria/<?php echo $xImgG; ?>" data-href="cms/images/portafolio/galeria/<?php echo $xImgG; ?>"></li>
                                    <?php 
										}
										mysqli_free_result($ejecutag);
									?>
                                </ul>
                                <?php } ?>
							</div>
                        </div>
						<?php
                        	}
							mysqli_free_result($resultadoPor);
						?>
					</div> 
				</div>
			</div>
		</div>
	</section>
  	<?php include "includes/footer.php"; ?>
    <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.js"></script>
    <script>
		var $grid = $('.grid').isotope({
		  itemSelector: '.element-item',
		  layoutMode: 'fitRows',
		  getSortData: {
			name: '.name',
			symbol: '.symbol',
			number: '.number parseInt',
			category: '[data-category]',
			weight: function( itemElem ) {
			  var weight = $( itemElem ).find('.weight').text();
			  return parseFloat( weight.replace( /[\(\)]/g, '') );
			}
		  }
		});
		
		// filter functions
		var filterFns = {
		  // show if number is greater than 50
		  numberGreaterThan50: function() {
			var number = $(this).find('.number').text();
			return parseInt( number, 10 ) > 50;
		  },
		  // show if name ends with -ium
		  ium: function() {
			var name = $(this).find('.name').text();
			return name.match( /ium$/ );
		  }
		};
		
		// bind filter button click
		$('#filters').on( 'click', 'button', function() {
		  var filterValue = $( this ).attr('data-filter');
		  // use filterFn if matches value
		  filterValue = filterFns[ filterValue ] || filterValue;
		  $grid.isotope({ filter: filterValue });
		});
		
		// bind sort button click
		$('#sorts').on( 'click', 'button', function() {
		  var sortByValue = $(this).attr('data-sort-by');
		  $grid.isotope({ sortBy: sortByValue });
		});
		
		// change is-checked class on buttons
		$('.button-group').each( function( i, buttonGroup ) {
		  var $buttonGroup = $( buttonGroup );
		  $buttonGroup.on( 'click', 'button', function() {
			$buttonGroup.find('.is-checked').removeClass('is-checked');
			$( this ).addClass('is-checked');
		  });
		});
	</script>
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
	    	showInfoByDefault: true,
    		preloadGraphics: true,
    		fullscreenScalesContent: true,
	    	useThumbs: true,
			useThumbTooltips: false
		});
	</script>
</div>
</body>
</html>