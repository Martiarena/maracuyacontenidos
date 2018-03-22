	<footer>
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 logo-footer wow animated fadeInLeft" data-wow-duration="0.5s" data-wow-delay="0s">
					<img src="img/logo-footer.png" />
				</div>
				<div class="col-lg-5 col-md-5 col-sm-4 col-xs-12 wow animated fadeIn" data-wow-duration="0.5s" data-wow-delay="0.2s">
					<?php
						$consultarCot = 'SELECT * FROM contact';
						$resultadoCot = mysqli_query($enlaces,$consultarCot) or die('Consulta fallida: ' . mysqli_error($enlaces));
						while($filaCot = mysqli_fetch_array($resultadoCot)){
							$xPhone			= $filaCot['phone'];
							$xMobile		= $filaCot['mobile'];
							$xEmail			= $filaCot['email'];
					?>
					<ul class="contact-list">
						<li><i class="fa fa-phone" aria-hidden="true"></i> <?php echo $xPhone; ?> | <?php echo $xMobile; ?></li>
						<li><i class="fa fa-envelope" aria-hidden="true"></i> <?php echo $xEmail; ?></li>
					</ul>
					<?php 
						}
						mysqli_free_result($resultadoCot);
					?>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 wow animated fadeInRight" data-wow-duration="0.5s" data-wow-delay="0.4s">
					<ul class="social-links">
						<?php
                            $consultarSol = "SELECT * FROM social_links WHERE estado='A' ORDER BY orden";
                            $resultadoSol = mysqli_query($enlaces,$consultarSol) or die('Consulta fallida: ' . mysqli_error($enlaces));
                            while($filaSol = mysqli_fetch_array($resultadoSol)){
                                $xCodigo		= $filaSol['cod_link'];
                                $xType			= $filaSol['type'];
                                $xLink			= $filaSol['links'];
                                $xOrden			= $filaSol['orden'];
                                $xEstado		= $filaSol['estado'];
                        ?>
						<li><a href="<?php echo $xLink; ?>" target="_blank"><i class="fa <?php echo $xType; ?>" aria-hidden="true"></i></a></li>
						<?php
                            }
                            mysqli_free_result($resultadoSol);
                        ?>
					</ul>
				</div>
			</div>
		</div>
	</footer>
    <!-- Diseñado por Raúl Martiarena, visite Raúlmartiarena.com -->
	<!-- jQuery -->
	<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="js/jquery-migrate-1.4.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/wow.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
	<script type="text/javascript" src="resources/parallax/parallax.js"></script>
	<script type="text/javascript" src="resources/creative-link-effects/js/modernizr.custom.js"></script>
	<script>
		$('.parallax-window').parallax();
	</script>
	<script type="text/javascript">
		new WOW().init();
	</script>
	<script type="text/javascript">
		(function() {
			var isSafari = !!navigator.userAgent.match(/Version\/[\d\.]+.*Safari/);
			if(isSafari) {
				document.getElementById('support-note').style.display = 'block';
			}
		})();
	</script>
	
	<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WSGDCHV"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->