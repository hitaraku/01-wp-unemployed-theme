<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package WordPress
 * @subpackage Unemployed
 * @since Unemployed 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- vendor -->
		<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

		<!-- own -->
		<link rel="stylesheet" href="<? bloginfo('stylesheet_url');?>">
		
		<!-- vendor -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://unpkg.com/ionicons@4.5.5/dist/ionicons.js"></script>
        <script src="<? bloginfo('template_url'); ?>/vendors/js/jQueryRotate.js"></script>
		<script src="<? bloginfo('template_url'); ?>/vendors/js/jquery.waypoints.min.js"></script>

		<?php wp_head(); ?>
		<!-- auto adsense -->
		<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar(4) ) : else : ?>
		<?php endif; ?>
	</head>
	
	<body>
		<header>
			<div id="mobile-menu"><ion-icon name="menu" style="width:30px;height:30px;"></ion-icon></div>
			<div id="header-title">職業、<span id="impact-mu"><a href="/">無</a></span><span id="header-title-last">職</span>。</div>		
            <nav>
				<div id="container">
					<div id="header-menu" class="pushy pushy-left">
						<ul>
							<?php wp_list_pages( '&title_li=&depth=1' ); ?>
							<li>
								<div class="tooltip"><a href="#"><ion-icon name="warning" style="font-size: 30px"></ion-icon></a>
									<span class="tooltiptext">準備中です</span>
								</div>
							</li>
							<!-- clear float left on <li> -->
							<span class="clearfix"></span>
						</ul>
					</div>
				</div>
			</nav>
			
			<nav id="nav-sticky">
				<div id="header-menu-sticky">
					<ul>
					<?php wp_list_pages( '&title_li=&depth=1' ); ?>
					<li>
						<div class="tooltip"><a href="#"><ion-icon name="warning" style="font-size: 30px"></ion-icon></a>
							<span class="tooltiptext">準備中です</span>
						</div>
					</li>

						<!-- clear float left on <li> -->
						<span class="clearfix"></span>
					</ul>
				</div>
			</nav>
			<div class="site-overlay"></div>
		</header>