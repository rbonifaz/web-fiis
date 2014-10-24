<!DOCTYPE HTML>
<!--
	Arcana by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<script type="text/javascript">

		$(document).ready(function() {
		$('a[href*=#]').each(function() {
		if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'')
		&& location.hostname == this.hostname
		&& this.hash.replace(/#/,'') ) {
		var $targetId = $(this.hash), $targetAnchor = $('[name=' + this.hash.slice(1) +']');
		var $target = $targetId.length ? $targetId : $targetAnchor.length ? $targetAnchor : false;
		if ($target) {
		var targetOffset = $target.offset().top;
		$(this).click(function() {
            $("#nav li a").removeClass("active");
            $(this).addClass('active');
		$('html, body').animate({scrollTop: targetOffset}, 1000);
		return false;
		});
		}
		}
		});
		});
		</script>
	
	
	
		<title>FIIS UNAC</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.dropotron.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-wide.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
	</head>
	<body>

		<!-- Header -->
								<?php
								include "menu.php";
								?>
			
		<!-- Banner -->
			<section id="banner">
				<header>
					<h2><em>Mensaje del decano</em></h2>
					<a href="#" class="button">Leer más</a>
				</header>
			</section>
		<!-- Highlights -->
			

		
			
		<!-- CTA -->
			<section id="cta" class="wrapper style3">
				<div class="container">
					<header>
						<h6>Av. Juan Pablo II 306, Bellavista - Callao</h6>
					</header>
				</div>
			</section>

		<!-- Footer -->
			<div id="footer">
				<div class ="copyright">
					<ul class="menu">
						<li style="align: center">&copy; Facultad de Ingenieria Industrial y de Sistemas </li>
					</ul>
				</div>
			
			</div>
	</body>
</html>
