<!DOCTYPE HTML>
<!--
	Dopetrope by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<?php wp_head() ?>
	</head>
	<body <?php body_class ('homepage is-preload') ?>>
		<div id="page-wrapper">

			<!-- Header -->
				<section id="header">

					<!-- Logo -->
						<?php the_custom_logo()?>

					<!-- Nav -->
						<nav id="nav">

						<?php
						wp_nav_menu( array ( 
							'theme_location' => 'primary',
							'container' => ''


						));
						
						
						?>
						
						</nav>

				

					
				</section>
