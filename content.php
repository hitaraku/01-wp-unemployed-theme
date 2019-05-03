
<!-- <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
<?php the_date(); ?> by <a href="#"><?php the_author(); ?></a> 
<a href="<?php comments_link(); ?>">
	<?php
	printf( _nx( '1 Comment', '%1$s Comments', get_comments_number(), 'comments title', 'textdomain' ), number_format_i18n( 		get_comments_number() ) ); ?>
</a>
</p> -->
<li class="span-1-of-4">
    <figure class="blog-photo">
        <?php $cat = get_the_category(); ?>
        <?php $cat = $cat[0]; ?>
        <a class="blog-category" href="category/<?php echo $cat->slug; ?>"><?php echo get_cat_name($cat->term_id); ?></a>
        <?php if ( has_post_thumbnail() ) {?>
            <a href="<?php the_permalink(); ?>">
                <?php	the_post_thumbnail( 'thumb320' ); ?>
            </a>
            <?php } else { ?>
            <?php //the_excerpt(); ?>
        <?php } ?>
        <p class="blog-post-meta">
            <ion-icon name="paper"></ion-icon><?php echo get_the_date('Y/m/d'); ?>
            <?php if ($mtime = get_mtime('Y/m/d')) echo '<ion-icon name="refresh"></ion-icon>   ' , $mtime; ?>
        </p>
        <a class="blog-title" href="<?php the_permalink(); ?>"><?php echo mb_strimwidth(the_title('', '', false), 0, 20, "..."); ?></a>
    </figure>
</li>

