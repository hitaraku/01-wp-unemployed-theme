<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package WordPress
 * @subpackage Unemployed
 * @since Unemployed 1.0
 */
?>
<?php //get_header(); ?>

<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package WordPress
 * @subpackage Unemployed
 * @since Unemployed 1.0
 */
?>
<!DOCTYPE html>
<html <?php language_attributes();?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset');?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- vendor -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<script defer src="https://use.fontawesome.com/releases/v5.8.2/js/all.js" integrity="sha384-DJ25uNYET2XCl5ZF++U8eNxPWqcKohUUBUpKGlNLMchM7q4Wjg2CUpjHLaL8yYPH" crossorigin="anonymous"></script>

		<!-- own -->
		<link rel="stylesheet" href="<?bloginfo('stylesheet_url');?>">

		<!-- vendor -->
		<script src="https://unpkg.com/ionicons@4.5.5/dist/ionicons.js"></script>
        <!-- <script src="<?bloginfo('template_url');?>/vendors/js/jQueryRotate.js"></script>
		<script src="<?bloginfo('template_url');?>/vendors/js/jquery.waypoints.min.js"></script> -->

		<?php wp_head();?>
		<!-- auto adsense -->
		<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar(4)): else: ?>
		<?php endif;?>
	</head>

	<body>
		<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
		<a class="navbar-brand" href="/">
				<?php bloginfo('name');?>
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div id="navbarCollapse" class="navbar-collapse collapse" style="">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item"><a href="http://localhost:8089/" class="nav-link"><i class="fas fa-home"></i> Home</a></li>
				<li class="nav-item"><a href="http://localhost:8089/unemployed/" class="nav-link"><i class="fas fa-bomb"></i> 無職</a></li>
				<?php
				// wp_nav_menu([
				// 	'container' => 'div',
				// 	'container_id' => 'navbarCollapse',
				// 	'container_class' => 'collapse navbar-collapse',
				// 	'menu_id' => false,
				// 	'menu_class' => 'navbar-nav mr-auto',
				// 	'depth' => 0,
				// 	'fallback_cb' => 'bs4navwalker::fallback',
				// 	'walker' => new bs4navwalker(),
				// ]);
				$taxonomy = "category";
				/** Get all taxonomy terms */
				$terms = get_terms($taxonomy, array(
						"orderby"    => "count",
						"hide_empty" => false
					)
				);
				if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){
					/** Get terms that have children */
					$hierarchy = _get_term_hierarchy($taxonomy);
					/** Loop through every term */
					foreach($terms as $term) {
					//Skip term if it has children
					if($term->parent) {
					  continue;
					} 
					/** If the term has children... */
					  if($hierarchy[$term->term_id]) {
						echo '<li class="nav-item dropdown"><a href="'.esc_url( get_term_link( $term ) ).'" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-'. get_field('icon-name', $term) .'"></i> ' . $term->name . '</a>';  
						/** display them */
						echo '<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">';
						foreach($hierarchy[$term->term_id] as $child) {
							/** Get the term object by its ID */
							$child = get_term($child, "category");
							echo '<a class="dropdown-item" href="'.esc_url( get_term_link( $child ) ).'"><i class="fas fa-'. get_field('icon-name', $child) .'"></i> ' . $child->name . '</a>';
						}
						
						echo '</div></li>';
					 } else {
						echo '<li class="nav-item"><a href="'.esc_url( get_term_link( $term ) ).'" class="nav-link" role="button"><i class="fas fa-'. get_field('icon-name', $term) .'"></i> ' . $term->name . '</a></li>';  						
					 }
				  }
				}
				?>
			</ul>
		</div>
		</nav>
		<header>
			<div id="header-title">職業、<span id="impact-mu"><a href="/">無</a></span><span id="header-title-last">職</span>。</div>
		</header>

			<main role="main" class="container">
				<div class="row">
					<div class="col-md-8 blog-main"><!-- main contents section -->
						<section class="section-lifechoice">
							<div id="chinema-effect" class="clearfix">
								<a id="lifechoice-link" href="boku/nazeboku">なぜ、僕が無職で生きることを決めたか。</a>
							</div>
						</section>

						<section class="section-blogs">
							<h2 class="home-section-header">ブログ &mdash; 新着一覧</h2>
							<ul class="blogs-showcase clearfix">
								<?php
if (have_posts()): while (have_posts()): the_post();
        get_template_part('content', get_post_format());
    endwhile;endif;?>
							</ul>
						</section>

						<section class="section-past_future">
							<div id="row">
							<h2 class="home-section-header">過去 &mdash; 現在 &mdash; 未来</h2>
								<div class="tv col span-1-of-4 box">
									<a href="boku/10years-ago">
										<p>１０年前</p>
										<div class="past_future_photo">
											<img src="<?bloginfo('template_url');?>/resources/img/past-1.jpg" alt="10 years ago.">
										</div>
										<p>自分の進路が曖昧</p>
									</a>
								</div>
								<div class="col span-1-of-10 box"></div>
								<div class="tv col span-1-of-4 box">
									<a href="boku/5years-ago">
										<p>５年前</p>
										<div class="past_future_photo">
											<img src="<?bloginfo('template_url');?>/resources/img/past-2.jpg" alt="10 years ago.">
										</div>
										<p>やりたかったIT業界へ</p>
									</a>
								</div>
								<div class="col span-1-of-10 box"></div>
								<div class="tv col span-1-of-4 box">
									<a href="boku/now">
										<p>現在</p>
										<div class="past_future_photo">
											<span id="past-impact-mu">無</span>
					<!--						<img src="resources/img/past-3.jpg" alt="10 years ago.">-->
										</div>
										<p>無職として生きて行く</p>
									</a>
								</div>
								<div class="clearfix"></div>
							</div>
						</section>
					</div><!-- End main contents section -->

					<aside class="col-md-4 blog-sidebar">
						<?php get_sidebar();?>
					</aside>
				</div><!-- row tag end -->
			</main>

	<?php //get_footer(); ?>

	<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package WordPress
 * @subpackage Unemployed
 * @since Unemployed 1.0
 */
?>
			<footer>
				<div class="row">
					<div class="col span-1-of-2">
						<ul class="footer-nav">
							<?php wp_list_pages('&title_li=&depth=1');?>
							<li>
								<div class="tooltip"><a href="#"><ion-icon name="warning" style="font-size: 20px;"></ion-icon></a>
									<span class="tooltiptext">準備中です</span>
								</div>
							</li>
						</ul>
					</div>
					<div class="col span-1-of-2">
						<ul class="social-links">
							<?php if (get_option('twitter_url')): ?>
								<li><a href="<?php echo get_option('twitter_url') ?>"><i class="ion-social-twitter"></i></a></li>
								<?else: ?>
							<?php endif;?>
							<?php if (get_option('facebook_url')): ?>
								<li><a href="<?php echo get_option('facebook_url') ?>"><i class="ion-social-facebook"></i></a></li>
								<?else: ?>
							<?php endif;?>
							<!-- <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
							<li><a href="#"><i class="ion-social-instagram"></i></a></li> -->
						</ul>
					</div>
				</div>
				<div class="row">
					<p>
						Copyright &copy; 2019 by Unemployed. All rights reserved.
					</p>
				</div>
			</footer>

			<!-- トップページの記事一覧の全体をクリックさせる -->
			<script>
			(function($){
				$(function(){
					$('#topnews dl.clearfix').click(function(){
						window.location = $(this).data('href');
					});
				});
			})(jQuery);
			</script>
	<!--	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>-->
			<!-- <script src="//cdn.jsdelivr.net/respond/1.4.2/respond.min.js"></script>
			<script src="//cdn.jsdelivr.net/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="//cdn.jsdelivr.net/selectivizr/1.0.3b/selectivizr.min.js"></script>
			<script src="<?//bloginfo('template_url'); ?>/resources/js/myscript.js"></script> -->
			<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

			<?php wp_footer();?>
		</div><!-- end wrapper -->
	</body>
</html>