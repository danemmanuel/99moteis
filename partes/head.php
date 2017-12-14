<?php 
require 'partes/config.php';
?>
<!doctype html>
<html class="no-js" lang="pt-br">
<head>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-111176273-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-111176273-1');
	</script>

	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title><?php echo $tituloPagina .' - '. $cliente;?></title>

	<meta name="keywords" content="testar responsividade, site, responsivo, site responsivo, testar site, testar">
	<meta name="description" content="Teste a responsividade do site em qualquer dispositivo">
	<meta name="author" content="Dan Vieira">
	<meta class="viewport" name="viewport" content="width=device-width, initial-scale=1.0">
	
	<!-- Social -->
	<meta property="og:locale" content="pt_BR">
	<meta property="fb:app_id" content="FZsWknxxgW3">
	<meta property="og:url" content="<?php print($url);?>">
	<meta property="og:title" content="Responsive Test">
	<meta property="og:site_name" content="Responsive Test">
	<meta property="og:description" content="Teste a responsividade do site em qualquer dispositivo">
	<meta property="og:image" content="http://danvieira.me/tool/responsive/face.png">
	<meta property="og:image:type" content="image/png">
	<meta property="og:image:width" content="200">
	<meta property="og:image:height" content="200">
	<meta property="og:type" content="website">

	<!-- Favicon -->
	<!-- Le fav and touch icons -->
	<link rel="shortcut icon" href="<?php echo $baseURL ?>favicon.ico" type="image/x-icon">
	<link rel="icon" href="<?php echo $baseURL ?>favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo $baseURL ?>apple-touch-icon-114-precomposed.png" />
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo $baseURL ?>apple-touch-icon-72-precomposed.png" />
	<link rel="apple-touch-icon-precomposed" href="<?php echo $baseURL ?>apple-touch-icon-57-precomposed.png" />

	<script src="<?php echo $baseURL ?>public/js/jquery-3.2.1.min.js"></script>
	
	<script src="<?php echo $baseURL ?>public/js/materialize.min.js"></script>
	<script src="<?php echo $baseURL ?>public/js/main.js"></script>

	<link rel="stylesheet" href="<?php echo $baseURL ?>/public/css/style.min.css">

	<!--
	<script type="text/javascript" src="http://beeker.io/lab/exit-intent-popup/bioep.min.js"></script>

<script type="text/javascript">
      bioEp.init({
        html: '<?php echo "ola"; ?>',
        css: '#bio_ep {width: 400px; height: 300px; color: #333; background-color: #fafafa; text-align: center;}' +
        '#bio_ep_content {padding: 24px 0 0 0; font-family: "Titillium Web";}' +
        '#bio_ep_content span:nth-child(2) {display: block; color: #f21b1b; font-size: 32px; font-weight: 600;}' +
        '#bio_ep_content span:nth-child(3) {display: block; font-size: 16px;}' +
        '#bio_ep_content span:nth-child(4) {display: block; margin: -5px 0 0 0; font-size: 16px; font-weight: 600;}' +
        '.bio_btn {display: inline-block; margin: 18px 0 0 0; padding: 7px; color: #fff; font-size: 14px; font-weight: 600; background-color: #70bb39; border: 1px solid #47ad0b; cursor: pointer; -webkit-appearance: none; -moz-appearance: none; border-radius: 0; text-decoration: none;}',
        fonts: ['//fonts.googleapis.com/css?family=Titillium+Web:300,400,600'],
        cookieExp: 0
    });
    </script>
-->
</head>

<body id="<?php echo $bodyID ?>" > 



	<div class="main">



        <!--[if lt IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <?php include 'partes/header.php' ?>
