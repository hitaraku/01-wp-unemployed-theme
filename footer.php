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
                        <?php wp_list_pages( '&title_li=&depth=1' ); ?>
                        <li>
							<div class="tooltip"><a href="#"><ion-icon name="warning" style="font-size: 20px;"></ion-icon></a>
								<span class="tooltiptext">準備中です</span>
							</div>
						</li>
                    </ul>
                </div>
                <div class="col span-1-of-2">
                    <ul class="social-links">
                        <?php if ( get_option( 'twitter_url' ) ) : ?> 
                            <li><a href="<?php echo get_option( 'twitter_url' )?>"><i class="ion-social-twitter"></i></a></li>
                            <? else : ?>
                        <?php endif; ?>
                        <?php if ( get_option( 'facebook_url' ) ) : ?> 
                            <li><a href="<?php echo get_option( 'facebook_url' )?>"><i class="ion-social-facebook"></i></a></li>
                            <? else : ?>
                        <?php endif; ?>
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
		<script src="//cdn.jsdelivr.net/respond/1.4.2/respond.min.js"></script>
		<script src="//cdn.jsdelivr.net/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//cdn.jsdelivr.net/selectivizr/1.0.3b/selectivizr.min.js"></script>
		<script src="<? bloginfo('template_url'); ?>/resources/js/myscript.js"></script>
        <?php wp_footer(); ?>
	</body>
</html>