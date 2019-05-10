<div id="topnews">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <dl class="clearfix" data-href="<?php the_permalink();?>">
    <dt>
		<div class="category_info">
	<p>
<?php $cat = get_the_category(); ?>
<?php $cat = $cat[0]; ?>
<?php echo get_cat_name($cat->term_id); ?>
	</p>
		</div>	
	<div class="trim">
	  <a href="<?php the_permalink() ?>" class="ripple">
		  <?php if ( has_post_thumbnail() ): // サムネイルを持っているときの処理 ?>
		  <div class="smanone"><?php the_post_thumbnail( 'thumb320' ); ?></div>
      <?php else: // サムネイルを持っていないときの処理 ?>
      <img src="<?php echo get_template_directory_uri(); ?>/images/no-img.png" alt="no image" title="no image" width="240" height="160" />
      <?php endif; ?>
      </a>
		</div>	
	</dt>
    <dd>
	  <div class="blog_info">
        <p><ion-icon name="paper"></ion-icon></i>&nbsp;
          <?php the_time('Y/m/d') ?>&nbsp;
          <?php if ($mtime = get_mtime('Y/m/d')) echo '<ion-icon name="refresh"></ion-icon>   ' , $mtime; ?>
      </div>
	 
      <h3><a href="<?php the_permalink(); ?>" class="ripple">
        <?php the_title(); ?>
        </a></h3>
    </dd>
		<div class="readmore"><i class="fas fa-angle-double-right"></i> この記事を読む</div>
  </dl>
  <?php endwhile; else: ?>
  <p>記事がありません</p>
  <?php endif; ?>
</div>

<!-- sidebar -->
<div id="sidebar">
  <?php get_sidebar(); ?>
</div>
<div class="clearfix"></div>