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
                        <li><a href="#">Home</a></li>
                        <li><a href="#">無職</a></li>
                        <li><a href="#">無色</a></li>
                        <li>
							<div class="tooltip"><a href="#"><ion-icon name="warning" style="font-size: 20px;"></ion-icon></a>
								<span class="tooltiptext">aaaaa</span>
							</div>
						</li>
                        <li><a href="#">俺</a></li>
                    </ul>
                </div>
                <div class="col span-1-of-2">
                    <ul class="social-links">
                        <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                        <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                        <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                        <li><a href="#"><i class="ion-social-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <p>
                    Copyright &copy; 2019 by Unemployed. All rights reserved.
                </p>
            </div>
        </footer>		

		<script src="<? bloginfo('template_url'); ?>/resources/js/myscript.js"></script>
<!--	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>-->
		<script src="//cdn.jsdelivr.net/respond/1.4.2/respond.min.js"></script>
		<script src="//cdn.jsdelivr.net/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="//cdn.jsdelivr.net/selectivizr/1.0.3b/selectivizr.min.js"></script>
	    <script src="<? bloginfo('template_url'); ?>/vendors/js/jquery.waypoints.min.js"></script>
        <?php wp_footer(); ?>
	</body>
</html>