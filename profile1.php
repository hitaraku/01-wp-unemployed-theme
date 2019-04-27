<!-- Author Info -->
<div id="prof-upper-article">
<div class="prof-under-article clearfix">
	<div class="prof-under-article-title">
	<ion-icon name="brush"></ion-icon>この記事を書いている人 - <span class="gf">WRITER</span> -
	</div>
	<div class="prof-under-article-left">
    <?php 
        $get_author_gravatar = get_avatar_url($get_author_id, array('size' => 450));

        if($get_author_gravatar != false) {
            echo '<img src="'.$get_author_gravatar.'" alt="'.get_the_title().'" />';    
        }
    ?>
    <div class="prof-under-article-name">
            <a href="<?php echo esc_url(home_url('/')).'author/'.the_author('', false) ?>" title="<?php the_author() ?> の投稿" rel="author"><?php the_author() ?></a>		</div>
        </div>
        <div class="prof-under-article-right">
            <div class="prof-under-article-right-sns">
            </div>
            <div class="prof-under-article-right-description smanone">
            <?php the_author_description(); ?>
            </div>
            <div class="prof-under-article-right-profurl">
            </div>
        </div>	
    </div>
</div>