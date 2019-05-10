<div class="blog-post">
<div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
    <?php
    if(function_exists('bcn_display'))
    {
        $str = bcn_display(true);
        echo str_replace('Home', '<ion-icon name="home"></ion-icon>Home', $str);
    }?>
</div>
<?php the_post(); ?>
<div id="post-thumbnail">
    <?php if ( has_post_thumbnail() ) {
        the_post_thumbnail();
    } ?>
</div>
<h2 class="blog-post-title"><?php wp_title(''); ?></h2>
<!-- <p class="blog-post-meta">
    <ion-icon name="paper"></ion-icon><?php the_date(); ?>
    <?php if ($mtime = get_mtime('Y/m/d')) echo '<ion-icon name="refresh"></ion-icon>   ' , $mtime; ?>
</p> -->


<div class="page-content">
<?php the_content(); ?>
	</div>
    
<?php get_template_part('profile1'); //プロフィール記事上読み込み ?> 

</div><!-- /.blog-post -->
<!-- sidebar -->
<div id="sidebar">
  <?php get_sidebar(); ?>
</div>
<div class="clearfix"></div>
