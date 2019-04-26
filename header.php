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
			<div id="header-title">職業、<span id="impact-mu"><a href="/">無</a></span><span id="header-title-last">職</span>。</div>		
            <nav>
				<div id="header-menu" class="js--section-features">
					<ul>
						<?php wp_list_pages( '&title_li=&depth=1' ); ?>
						<li>
							<div class="tooltip"><a href="#"><ion-icon name="warning" style="font-size: 30px"></ion-icon></a>
								<span class="tooltiptext">aaaaa</span>
							</div>
						</li>
						<!-- clear float left on <li> -->
						<span class="clearfix"></span>
					</ul>
				</div>
			</nav>
			
			<nav id="nav-sticky">
				<div id="header-menu-sticky">
					<ul>
					<?php wp_list_pages( '&title_li=&depth=1' ); ?>
					<li>
						<div class="tooltip"><a href="#"><ion-icon name="warning" style="font-size: 30px"></ion-icon></a>
							<span class="tooltiptext">aaaaa</span>
						</div>
					</li>

						<!-- clear float left on <li> -->
						<span class="clearfix"></span>
					</ul>
				</div>
			</nav>

		</header>