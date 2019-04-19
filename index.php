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
		
		<section class="section-lifechoice">
			<div id="chinema-effect" class="clearfix">
				<a id="lifechoice-link" href="#">なぜ、俺が無職で生きることを決めたか。</a>			
			</div>
		</section>
				
		<section class="section-blogs">
			<h2>ブログ &mdash; 新着一覧</h2>
			<ul class="blogs-showcase clearfix">
                <li>
                    <figure class="blog-photo">
                        <img src="<? bloginfo('template_url'); ?>/resources/img/1.jpg" alt="Korean bibimbap with egg and vegetables">
                    </figure>
                </li>
                <li>
                    <figure class="blog-photo">
                        <img src="<? bloginfo('template_url'); ?>/resources/img/1.jpg" alt="Korean bibimbap with egg and vegetables">
                    </figure>
                </li>
                <li>
                    <figure class="blog-photo">
                        <img src="<? bloginfo('template_url'); ?>/resources/img/1.jpg" alt="Korean bibimbap with egg and vegetables">
                    </figure>
                </li>
                <li>
                    <figure class="blog-photo">
                        <img src="<? bloginfo('template_url'); ?>/resources/img/1.jpg" alt="Korean bibimbap with egg and vegetables">
                    </figure>
                </li>
			</ul>
			<ul class="blogs-showcase clearfix">
                <li>
                    <figure class="blog-photo">
                        <img src="<? bloginfo('template_url'); ?>/resources/img/1.jpg" alt="Korean bibimbap with egg and vegetables">
                    </figure>
                </li>
                <li>
                    <figure class="blog-photo">
                        <img src="<? bloginfo('template_url'); ?>/resources/img/1.jpg" alt="Korean bibimbap with egg and vegetables">
                    </figure>
                </li>
                <li>
                    <figure class="blog-photo">
                        <img src="<? bloginfo('template_url'); ?>/resources/img/1.jpg" alt="Korean bibimbap with egg and vegetables">
                    </figure>
                </li>
                <li>
                    <figure class="blog-photo">
                        <img src="<? bloginfo('template_url'); ?>/resources/img/1.jpg" alt="Korean bibimbap with egg and vegetables">
                    </figure>
                </li>
			</ul>
		</section>
		
		<section class="section-past_future">
			<h2>過去 &mdash; 現在 &mdash; 未来</h2>
			<div class="row">
				<div class="tv col span-1-of-4 box">
					<a href="#">
						<p>１０年前</p>
						<div class="past_future_photo">
							<img src="<? bloginfo('template_url'); ?>/resources/img/past-1.jpg" alt="10 years ago.">
						</div>	
						<p>自分の進路が曖昧</p>
					</a>
				</div>
				<div class="col span-1-of-8 box"></div>
				<div class="tv col span-1-of-4 box">
					<a href="#">
						<p>５年前</p>
						<div class="past_future_photo">
							<img src="<? bloginfo('template_url'); ?>/resources/img/past-2.jpg" alt="10 years ago.">
						</div>	
						<p>やりたかったIT業界へ</p>
					</a>
				</div>
				<div class="col span-1-of-8 box"></div>
				<div class="tv col span-1-of-4 box">
					<a href="#">
						<p>現在</p>
						<div class="past_future_photo">
							<span id="past-impact-mu">無</span>
	<!--						<img src="resources/img/past-3.jpg" alt="10 years ago.">-->
						</div>
						<p>無職として生きて行く</p>
					</a>
				</div>
			</div>
			
		</section>

<?php get_footer(); ?>