<?php include "cms/includes/conexion.php"; ?>
<!doctype html>
<html>
<head>
<?php include "includes/head.php"; ?>
</head>
<body>
<?php $page = "servicios"; ?>
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
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 wow animated fadeIn" data-wow-duration="0.65s" data-wow-delay="2.2s">
					<h2>Servicios</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-seccion">
					<div>
                        <ul class="nav nav-tabs" role="tablist">
                        	<li role="presentation" class="active wow animated fadeInLeft" data-wow-duration="0.65s" data-wow-delay="2.6s">
                            	<a href="#ser1" aria-controls="ser1" role="tab" data-toggle="tab">
                                	<div>
                                    	<img src="img/audiovisual-icon.png" />
                                        <h4>Audiovisual</h4>
									</div>
								</a>
                        	</li>
                        	<li role="presentation" class="wow animated fadeInLeft" data-wow-duration="0.65s" data-wow-delay="3s">
                        		<a href="#ser2" aria-controls="ser2" role="tab" data-toggle="tab">
                            		<div>
                                		<img src="img/fotografia-icon.png" />
	                                    <h4>Fotografía</h4>
    	                            </div>
        	                    </a>
            	            </li>
                	        <li role="presentation" class="wow animated fadeInLeft" data-wow-duration="0.65s" data-wow-delay="3.2s">
                    	    	<a href="#ser3" aria-controls="ser3" role="tab" data-toggle="tab">
                        	    	<div>
                            	    	<img src="img/grafica-icon.png" />
	                            		<h4>Gráfica</h4>
	                                </div>
    	                        </a>
        	                </li>
						</ul>
                        <!-- Tab panes -->
                        <div class="tab-content wow animated fadeInUp" data-wow-duration="0.65s" data-wow-delay="2.8s">
                        	<div role="tabpanel" class="tab-pane active" id="ser1">
                        		<div class="row">
                            		<div class="row-ser">
                                    	<div class="linea-amarilla text-center">
                                        	<div class="col-img col-img-left">
                                            	<img src="img/servicios/audiovisual/produccion-1.jpg">
	                                        </div>
    	                                    <div class="col-text">
        	                                    <h5>Producción</h5>
            	                                <ul>
                	                                <li>Coordinamos logística. Scouting locacionado, casting, requerimientos técnicos.</li>
                    	                        </ul>
                        	                </div>
                            	            <div class="col-img col-img-right">
                                                <img class="hidden-sm hidden-md hidden-lg" src="img/servicios/audiovisual/produccion-1.jpg">
                                	            <img src="img/servicios/audiovisual/produccion-2.jpg">
                                    	    </div>
                                            <div class="cl"></div>
										</div>
									</div>
                                    <div class="row-ser">
                                    	<div class="linea-amarilla text-center">
                                        	<div class="col-img col-img-left">
                                            	<img src="img/servicios/audiovisual/guion-1.jpg">
	                                        </div>
    	                                    <div class="col-text">
        	                                    <h5>Guión</h5>
            	                                <ul>
                	                                <li>Escritura de guión para documentales institucionales, ficción y radial. Creación de guión técnico y story board.</li>
                    	                        </ul>
                        	                </div>
                            	            <div class="col-img col-img-right">
                                            	<img class="hidden-sm hidden-md hidden-lg" src="img/servicios/audiovisual/guion-1.jpg">
                                	            <img src="img/servicios/audiovisual/guion-2.jpg">
                                    	    </div>
                                            <div class="cl"></div>
										</div>
									</div>
                                    <div class="row-ser">
                                    	<div class="linea-amarilla text-center">
                                        	<div class="col-img col-img-left">
                                            	<img src="img/servicios/audiovisual/direccion-1.jpg">
	                                        </div>
    	                                    <div class="col-text">
        	                                    <h5>Dirección</h5>
            	                                <ul>
                	                                <li>Comerciales ,institucionales, corporativos, programas de televisión, video clips, documentales.</li>
                    	                        </ul>
                        	                </div>
                            	            <div class="col-img col-img-right">
                                            	<img class="hidden-sm hidden-md hidden-lg" src="img/servicios/audiovisual/direccion-1.jpg">
                                	            <img src="img/servicios/audiovisual/direccion-2.jpg">
                                    	    </div>
                                            <div class="cl"></div>
										</div>
									</div>
                                    <div class="row-ser">
                                    	<div class="linea-amarilla text-center">
                                        	<div class="col-img col-img-left">
                                            	<img src="img/servicios/audiovisual/grabacion-1.jpg">
	                                        </div>
    	                                    <div class="col-text">
        	                                    <h5>Grabación</h5>
            	                                <ul>
                	                                <li>Utilizamos cámaras 4k y alta definición, drones, equipos de luces profesionales y personal especializado.</li>
                    	                        </ul>
                        	                </div>
                            	            <div class="col-img col-img-right">
                                            	<img class="hidden-sm hidden-md hidden-lg" src="img/servicios/audiovisual/grabacion-1.jpg">
                                	            <img src="img/servicios/audiovisual/grabacion-2.jpg">
                                    	    </div>
                                            <div class="cl"></div>
										</div>
									</div>
                                    <div class="row-ser">
                                    	<div class="linea-amarilla text-center">
                                        	<div class="col-img col-img-left">
                                            	<img src="img/servicios/audiovisual/edicion-1.jpg">
	                                        </div>
    	                                    <div class="col-text">
        	                                    <h5>Edición</h5>
            	                                <ul>
                	                                <li>Especialistas en edición en Adobe CC</li>
                                                    <li>Editores de video y post productores especializados y de experiencia.</li>
                    	                        </ul>
                        	                </div>
                            	            <div class="col-img col-img-right">
                                            	<img class="hidden-sm hidden-md hidden-lg" src="img/servicios/audiovisual/edicion-1.jpg">
                                	            <img src="img/servicios/audiovisual/edicion-2.jpg">
                                    	    </div>
                                            <div class="cl"></div>
										</div>
									</div>
                                    <div class="row-ser">
                                    	<div class="linea-amarilla text-center">
                                        	<div class="col-img col-img-left">
                                            	<img src="img/servicios/audiovisual/audio-1.jpg">
	                                        </div>
    	                                    <div class="col-text">
        	                                    <h5>PostProducción de Audio</h5>
            	                                <ul>
                	                                <li>Musicalización, locución y Mezcla de audio, doblajes, jingles de radio.</li>
                    	                        </ul>
                        	                </div>
                            	            <div class="col-img col-img-right">
                                            	<img class="hidden-sm hidden-md hidden-lg" src="img/servicios/audiovisual/audio-1.jpg">
                                	            <img src="img/servicios/audiovisual/audio-2.jpg">
                                    	    </div>
                                            <div class="cl"></div>
										</div>
									</div>
                                    <div class="row-ser">
                                    	<div class="linea-amarilla text-center">
                                        	<div class="col-img col-img-left">
                                            	<img src="img/servicios/audiovisual/video-1.jpg">
	                                        </div>
    	                                    <div class="col-text">
        	                                    <h5>PostProducción de Vídeo</h5>
            	                                <ul>
                	                                <li>Animación 2D, 3D, personajes animados, efectos y grafica en movimiento.</li>
                    	                        </ul>
                        	                </div>
                            	            <div class="col-img col-img-right">
                                            	<img class="hidden-sm hidden-md hidden-lg" src="img/servicios/audiovisual/video-1.jpg">
                                	            <img src="img/servicios/audiovisual/video-2.jpg">
                                    	    </div>
                                            <div class="cl"></div>
										</div>
									</div>
                                    <div class="row-ser">
                                    	<div class="linea-amarilla text-center">
                                        	<div class="col-img col-img-left">
                                            	<img src="img/servicios/audiovisual/autoria-1.jpg">
	                                        </div>
    	                                    <div class="col-text">
        	                                    <h5>Autoría</h5>
            	                                <ul>
                	                                <li>Creación de menús interactivos.</li>
                                                    <li>Multicopiados, impresión de discos y carátulas.</li>
                    	                        </ul>
                        	                </div>
                            	            <div class="col-img col-img-right">
                                            	<img class="hidden-sm hidden-md hidden-lg" src="img/servicios/audiovisual/autoria-1.jpg">
                                	            <img src="img/servicios/audiovisual/autoria-2.jpg">
                                    	    </div>
                                            <div class="cl"></div>
										</div>
									</div>
                                    <div class="row-ser">
                                    	<div class="linea-amarilla text-center">
                                        	<div class="col-img col-img-left">
                                            	<img src="img/servicios/audiovisual/subtitulado-1.jpg">
	                                        </div>
    	                                    <div class="col-text">
        	                                    <h5>Subtitulado</h5>
            	                                <ul>
                	                                <li>Traducción en varios idiomas.</li>
                	                                <li>Doblaje a idiomas nativos y oficiales.</li>
                    	                        </ul>
                        	                </div>
                            	            <div class="col-img col-img-right">
                                            	<img class="hidden-sm hidden-md hidden-lg" src="img/servicios/audiovisual/subtitulado-1.jpg">
                                	            <img src="img/servicios/audiovisual/subtitulado-2.jpg">
                                    	    </div>
                                            <div class="cl"></div>
										</div>
									</div>
								</div>
                        	</div>
                        	<div role="tabpanel" class="tab-pane" id="ser2">
                        		<div class="row">
                            		<div class="row-ser">
                                    	<div class="linea-amarilla text-center">
                                        	<div class="col-img col-img-left">
                                            	<img src="img/servicios/fotografia/institucional-1.jpg">
	                                        </div>
    	                                    <div class="col-text">
        	                                    <h5>Institucional</h5>
            	                                <ul>
                	                                <li>Fotografía de industrias, procesos, edificaciones,inspección.</li>
                                                    <li>Fotografía aerea con drones.</li>
                    	                        </ul>
                        	                </div>
                            	            <div class="col-img col-img-right">
                                            	<img class="hidden-sm hidden-md hidden-lg" src="img/servicios/fotografia/institucional-1.jpg">
                                	            <img src="img/servicios/fotografia/institucional-2.jpg">
                                    	    </div>
                                            <div class="cl"></div>
										</div>
									</div>
                                    <div class="row-ser">
                                    	<div class="linea-amarilla text-center">
                                        	<div class="col-img col-img-left">
                                            	<img src="img/servicios/fotografia/eventos-1.jpg">
	                                        </div>
    	                                    <div class="col-text">
        	                                    <h5>Eventos</h5>
            	                                <ul>
                	                                <li>Fotografía de seminarios, talleres,conciertos, exposiciones.</li>
                    	                        </ul>
                        	                </div>
                            	            <div class="col-img col-img-right">
                                            	<img class="hidden-sm hidden-md hidden-lg" src="img/servicios/fotografia/eventos-1.jpg">
                                	            <img src="img/servicios/fotografia/eventos-2.jpg">
                                    	    </div>
                                            <div class="cl"></div>
										</div>
									</div>
                                    <div class="row-ser">
                                    	<div class="linea-amarilla text-center">
                                        	<div class="col-img col-img-left">
                                            	<img src="img/servicios/fotografia/publicitaria-1.jpg">
	                                        </div>
    	                                    <div class="col-text">
        	                                    <h5>Publicitaria</h5>
            	                                <ul>
                	                                <li>Fotografía de productos, catálogos, retratos.</li>
                    	                        </ul>
                        	                </div>
                            	            <div class="col-img col-img-right">
                                            	<img class="hidden-sm hidden-md hidden-lg" src="img/servicios/fotografia/publicitaria-1.jpg">
                                	            <img src="img/servicios/fotografia/publicitaria-2.jpg">
                                    	    </div>
                                            <div class="cl"></div>
										</div>
									</div>
								</div>
	                        </div>
                            <div role="tabpanel" class="tab-pane" id="ser3">
                            	<div class="row">
                                	<div class="row-ser">
                                    	<div class="linea-amarilla text-center">
                                        	<div class="col-img col-img-left">
                                            	<img src="img/servicios/grafica/diseno-grafico-1.jpg">
	                                        </div>
    	                                    <div class="col-text">
        	                                    <h5>Diseño Gráfico</h5>
            	                                <ul>
                	                                <li>Tripticos, folletería, brochures, catálogos logotipos.</li>
                    	                        </ul>
                        	                </div>
                            	            <div class="col-img col-img-right">
                                            	<img class="hidden-sm hidden-md hidden-lg" src="img/servicios/grafica/diseno-grafico-1.jpg">
                                	            <img src="img/servicios/grafica/diseno-grafico-2.jpg">
                                    	    </div>
                                            <div class="cl"></div>
										</div>
									</div>
                                    <div class="row-ser">
                                    	<div class="linea-amarilla text-center">
                                        	<div class="col-img col-img-left">
                                            	<img src="img/servicios/grafica/identidad-1.jpg">
	                                        </div>
    	                                    <div class="col-text">
        	                                    <h5>Identidad</h5>
            	                                <ul>
                	                                <li>Identidad Corporativa, institucional.</li>
                                                    <li>Manual y Logo Institucional. Memorias.</li>
                    	                        </ul>
                        	                </div>
                            	            <div class="col-img col-img-right">
                                            	<img class="hidden-sm hidden-md hidden-lg" src="img/servicios/grafica/identidad-1.jpg">
                                	            <img src="img/servicios/grafica/identidad-2.jpg">
                                    	    </div>
                                            <div class="cl"></div>
										</div>
									</div>
                                    <div class="row-ser">
                                    	<div class="linea-amarilla text-center">
                                        	<div class="col-img col-img-left">
                                            	<img src="img/servicios/grafica/imprenta-1.jpg">
	                                        </div>
    	                                    <div class="col-text">
        	                                    <h5>Imprenta</h5>
            	                                <ul>
                	                                <li>Impresión de banner, catálogos, revistas.</li>
                                                    <li>Incluye pruebas de color y entrega en sitio.</li>
                    	                        </ul>
                        	                </div>
                            	            <div class="col-img col-img-right">
                                            	<img class="hidden-sm hidden-md hidden-lg" src="img/servicios/grafica/imprenta-1.jpg">
                                	            <img src="img/servicios/grafica/imprenta-2.jpg">
                                    	    </div>
                                            <div class="cl"></div>
										</div>
									</div>
								</div>
                            </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
  	<?php include "includes/footer.php"; ?>
    <script>
		$('#myTabs a').click(function (e) {
		  e.preventDefault()
		  $(this).tab('show')
		})
    </script>
</div>
</body>
</html>