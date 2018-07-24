<!DOCTYPE HTML>
<!--
	Helios by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<?php wp_head(); ?>


		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	<body class="homepage is-preload">
		 
		
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header">

					<!-- Inner -->

						<div class="inner">
							<header>
								<h1><a href="index.php" id="logo"><?php the_field('header_title');?></a></h1>
								<hr />
								<p><?php the_field('header_description');?></p>
							</header>
							<footer>
								<a href="#" class="button circled scrolly"><?php the_field('header_button_text');?></a>
							</footer>
						</div>

					<!-- Nav -->
						<nav id="nav">
							<ul>
								<?php wp_nav_menu();?>
							</ul>
						</nav>

				</div>
