		<div id="top">
			<div class="main-logo">
				<a href="index.php" onclick="return false;"><img src="images/logo.png"></a>
			</div>
			<div class="m-nav"><i class="fa fa-bars"></i></div>
			<div class="profile-nav">
				<ul>
					<li class="profile-user-info">
						<a href="#" onclick="return false;">
							<b>Bienvenido, </b><span><?php echo $xAlias; ?></span> <i class="fa fa-user"></i>
						</a>
					</li>
					<li>
						<a href="usuarios.php">
							<i class="fa fa-gear"></i> Usuarios
						</a>
					</li>
					<li>
						<a href="cerrar_sesion.php">
							<i class="fa fa-times-circle"></i> Logout
						</a>
					</li>
				</ul>
			</div>
		</div>
		<div id="sidebar">
			<ul class="main-nav">
				<li class="collapsible">
					<a href="#" onclick="return false;"><i class="fa fa-home"></i> Inicio</a>
					<ul class="sub-menu">
						<li><a href="inicio.php"><i class="fa fa-file-text-o"></i> Meta tags</a></li>
						<li><a href="banners.php"><i class="fa fa-object-group"></i> Banners</a></li>
						<li><a href="clientes.php"><i class="fa fa-tags"></i> Clientes</a></li>
					</ul>
				</li>
				<li class="collapsible">
					<a href="#" onclick="return false;"><i class="fa fa-folder"></i> Portafolio</a>
                    <ul class="sub-menu">
						<li><a href="categorias.php"><i class="fa fa-window-restore"></i> Categorías</a></li>
						<li><a href="portafolio.php"><i class="fa fa-folder-open"></i> Trabajos</a></li>
						<li><a href="galerias.php"><i class="fa fa-picture-o"></i> Galerías</a></li>
					</ul>
                </li>
				<li><a href="contacto.php"><i class="fa fa-info"></i> Contacto</a></li>
				<li><a href="social.php"><i class="fa fa-share-alt"></i> Redes Sociales</a></li>
			</ul>
		</div> <!-- /sidebar -->