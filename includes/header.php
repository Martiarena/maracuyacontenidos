	<header class="navbar-fixed-top">
		<div class="header-fondo">
			<div class="container">
				<?php
                    $consultarCot = 'SELECT * FROM contact';
                    $resultadoCot = mysqli_query($enlaces,$consultarCot) or die('Consulta fallida: ' . mysqli_error($enlaces));
                    while($filaCot = mysqli_fetch_array($resultadoCot)){
                        $xPhone			= $filaCot['phone'];
                        $xMobile		= $filaCot['mobile'];
                ?>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="telefono-header">
						<ul>
							<li><span>¡Pide tu cotización!</span></li>
							<li><i class="fa fa-phone" aria-hidden="true"></i> <?php echo $xPhone; ?></li>
							<li><?php echo $xMobile; ?></li>
						</ul>
					</div>
				</div>
				<?php 
					}
					mysqli_free_result($resultadoCot);
				?>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="logo col-lg-4 col-md-4 col-sm-12 col-xs-12">
					<a href="index.php"><img class="wow animated bounceInLeft" data-wow-duration="1.5s" data-wow-delay="1s" src="cms/images/meta/<?php echo $xLogo; ?>" /></a>
				</div>
				<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
					<div class="row">
						<nav class="navbar list_menu">
							<div class="navbar-header">
								<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							</div>
							<div class="collapse navbar-collapse cl-effect-4" id="bs-example-navbar-collapse-1">
								<ul class="nav navbar-nav">
									<li class="wow animated fadeInDown" data-wow-duration="1.5s" data-wow-delay="1s"><a class="<?php echo ($page == "nosotros" ? "active" : "")?>" href="quienes-somos.php">Quienes Somos</a></li>
									<li class="wow animated fadeInDown" data-wow-duration="1.5s" data-wow-delay="1.5s"><a class="<?php echo ($page == "portafolio" ? "active" : "")?>" href="portafolio.php">Portafolio</a></li>
									<li class="wow animated fadeInDown" data-wow-duration="1.5s" data-wow-delay="2s"><a class="<?php echo ($page == "servicios" ? "active" : "")?>" href="servicios.php">Servicios</a></li>
									<li class="wow animated fadeInDown" data-wow-duration="1.5s" data-wow-delay="2.5s"><a class="<?php echo ($page == "contacto" ? "active" : "")?>" href="contacto.php">Contacto</a></li>
								</ul>
							</div>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</header>