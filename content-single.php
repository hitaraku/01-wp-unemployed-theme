<div class="blog-post">
<div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
    <?php
    if(function_exists('bcn_display'))
    {
        $str = bcn_display(true);
        echo str_replace('Home', '<ion-icon name="home"></ion-icon>Home', $str);
    }?>
</div>
<div id="post-thumbnail">
    <?php if ( has_post_thumbnail() ) {
        the_post_thumbnail();
    } ?>
</div>
<h2 class="blog-post-title"><?php the_title(); ?></h2>
<p class="blog-post-meta">
    <ion-icon name="paper"></ion-icon><?php the_date(); ?>
    <?php if ($mtime = get_mtime('Y/m/d')) echo '<ion-icon name="refresh"></ion-icon>   ' , $mtime; ?>
</p>

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

<!-- Content -->
<?php the_content(); ?>


</div><!-- /.blog-post -->