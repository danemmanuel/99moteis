<?php 
require 'partes/config.php';
?>
<!doctype html>
<html class="no-js" lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title><?php echo $tituloPagina .' - '. $cliente;?></title>

	<meta name="keywords" content="<?php print($keywords);?>">
	<meta name="description" content="<?php print($descricao);?>">
	<meta name="author" content="Oxigenium.co">
	<meta class="viewport" name="viewport" content="width=device-width, initial-scale=1.0">
	
	<!-- Social -->
	<meta property="og:locale" content="pt_BR">
	<meta property="og:url" content="<?php print($url);?>">
	<meta property="og:title" content="<?php print($tituloPagina);?>">
	<meta property="og:site_name" content="<?php print($cliente);?>">
	<meta property="og:description" content="<?php print($descricao);?>">
	<meta property="og:image" content="<?php echo $baseURL ?>/img/ico/apple-touch-icon-114-precomposed.png">
	<meta property="og:image:type" content="image/png">
	<meta property="og:image:width" content="114">
	<meta property="og:image:height" content="114">
	<meta property="og:type" content="website">

	<!-- Favicon -->
	<!-- Le fav and touch icons -->
	<link rel="shortcut icon" href="<?php echo $baseURL ?>favicon.ico" type="image/x-icon">
	<link rel="icon" href="<?php echo $baseURL ?>favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo $baseURL ?>apple-touch-icon-114-precomposed.png" />
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo $baseURL ?>apple-touch-icon-72-precomposed.png" />
	<link rel="apple-touch-icon-precomposed" href="<?php echo $baseURL ?>apple-touch-icon-57-precomposed.png" />
	
	<script src="<?php echo $baseURL ?>/js/vendor/jquery-1.12.0.min.js"></script>
	<script src="<?php echo $baseURL ?>/assets/js/jquery.scrollify.js"></script>

	<link rel="stylesheet" href="<?php echo $baseURL ?>/public/css/style.min.css">



	
	<script>
		$(function() {
			$.scrollify({
				section:".section",
				scrollSpeed: 1500,
				updateHash: false,
				setHeights: true,
				offset : 0,
				overflowScroll: true,
				standardScrollElements: "",
				touchScroll:true,
				scrollbars:false,
				before:function(i,panels) {

					var ref = panels[i].attr("data-section-name");

					$(".pagination .active").removeClass("active");

					$(".pagination").find("a[href=\"#" + ref + "\"]").addClass("active");
				},
				afterRender:function() {
					var pagination = "<ul class=\"pagination\">";
					var activeClass = "";
					$(".section").each(function(i) {
						activeClass = "";
						if(i===0) {
							activeClass = "active";
						}
						
					});

					pagination += "</ul>";

					$(".home").append(pagination);

					$(".pagination a").on("click",$.scrollify.move);
				}
			});
		});


	</script>
	
	<script>
		$(document).ready(function(){

			$(window).scroll(function(){

				if ($(window).scrollTop() > $(window).height()/2) {
					$('.home-header').addClass("stick");
					$('.footer-home').addClass("stick");
				}
				
				else {
					$('.home-header').removeClass("stick");
					$('.footer-home').removeClass("stick");
				}
			});
		});


	</script>

	<script>
		
	</script>
</head>
<body id="<?php echo $bodyID ?>">
	<div class="main">

        <!--[if lt IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->


        <?php include 'partes/header.php' ?>
