<?php
	$consultarMet = 'SELECT * FROM metatags';
	$resultadoMet = mysqli_query($enlaces,$consultarMet) or die('Consulta fallida: ' . mysqli_error($enlaces));
	while($filaMet = mysqli_fetch_array($resultadoMet)){
		$xCodigo	= $filaMet['cod_meta'];
		$xTitulo	= $filaMet['title'];
		$xLogo		= $filaMet['logo'];
		$xDes		= $filaMet['description'];
		$xKey		= $filaMet['keywords'];
		$xUrl		= $filaMet['url'];
		$xFace1		= $filaMet['face1'];
		$xFace2		= $filaMet['face2'];
		$xIco		= $filaMet['ico'];
?>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1;" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<title><?php echo $xTitulo; ?></title>
<meta name="description" content="<?php echo $xDes; ?>" />
<meta name="keywords" content="<?php echo $xKey; ?>" />
<meta name="DC.title" content="<?php echo $xTitulo; ?>" />
<meta name="DC.description" lang="es" content="<?php echo $xDes; ?>" />
<meta name="geo.region" content="PE-LIM" />

<meta property="og:title" content="<?php echo $xTitulo; ?>" />
<meta property="og:type" content="company" />
<meta property="og:description" content="<?php echo $xDes; ?>" />
<meta property="og:url" content="<?php echo $xUrl; ?>" />
<meta property="og:image" content="<?php echo $xUrl; ?>/cms/images/meta/<?php echo $xFace1; ?>" />
<meta property="og:image" content="<?php echo $xUrl; ?>/cms/images/meta/<?php echo $xFace2; ?>" />
<link rel="shortcut icon" href="cms/images/meta/<?php echo $xIco; ?>" type="image/x-icon" />
<?php 
	}
	mysqli_free_result($resultadoMet);
?>
<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<!-- Bootstrap & font-awesome css -->
<link href="css/bootstrap.css" type="text/css" rel="stylesheet" />
<link href="resources/font-awesome/css/font-awesome.css" type="text/css" rel="stylesheet" />
<link rel="stylesheet" href="css/animate.css">
<link href="css/main.css" type="text/css" rel="stylesheet" />
<!-- Creative links effects css -->
<link rel="stylesheet" type="text/css" href="resources/creative-link-effects/css/component.css" />

<!-- buttons style -->
<link rel="stylesheet" type="text/css" href="resources/buttonstylesinspiration/css/vicons-font.css" />
<link rel="stylesheet" type="text/css" href="resources/buttonstylesinspiration/css/buttons.css" />
<!-- estilo css -->
<link href="css/estilo.css" type="text/css" rel="stylesheet" />

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-WSGDCHV');</script>
<!-- End Google Tag Manager -->