<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package WordPress
 * @subpackage Unemployed
 * @since Unemployed 1.0
 */
?>
<?php get_header(); ?>
<div class="row">
	<div id="content">
		<div id="main">
			<main>
				<section class="section-lifechoice">
					<div id="chinema-effect" class="clearfix">
						<a id="lifechoice-link" href="boku/nazeboku">なぜ、僕が無職で生きることを決めたか。</a>			
					</div>
				</section>

		<!-- <nav>
			<ul class="pager">
				<li><?php next_posts_link( 'Previous' ); ?></li>
				<li><?php previous_posts_link( 'Next' ); ?></li>
			</ul>
		</nav> -->
						
				<section class="section-blogs">
					<h2 class="home-section-header">ブログ &mdash; 新着一覧</h2>
					<ul class="blogs-showcase clearfix">
						<?php
						if ( have_posts() ) : while ( have_posts() ) : the_post();
							get_template_part( 'content', get_post_format() ); 
						endwhile; endif; ?>
					</ul>
				</section>
				
				<section class="section-past_future">
					<div id="row">
					<h2 class="home-section-header">過去 &mdash; 現在 &mdash; 未来</h2>
						<div class="tv col span-1-of-4 box">
							<a href="boku/10years-ago">
								<p>１０年前</p>
								<div class="past_future_photo">
									<img src="<? bloginfo('template_url'); ?>/resources/img/past-1.jpg" alt="10 years ago.">
								</div>	
								<p>自分の進路が曖昧</p>
							</a>
						</div>
						<div class="col span-1-of-8 box"></div>
						<div class="tv col span-1-of-4 box">
							<a href="boku/5years-ago">
								<p>５年前</p>
								<div class="past_future_photo">
									<img src="<? bloginfo('template_url'); ?>/resources/img/past-2.jpg" alt="10 years ago.">
								</div>	
								<p>やりたかったIT業界へ</p>
							</a>
						</div>
						<div class="col span-1-of-8 box"></div>
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
			</main>
		</div>
		<div id="sidebar">
			<?php get_sidebar(); ?>
		</div>
		<div class="clearfix"></div>
	</div><!-- content tag end -->
</div><!-- row tag end -->

<?php get_footer(); ?>