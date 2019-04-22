<?php get_header(); ?>

	<div class="row">
		<div class="col-sm-12">

		<?php /*--- カテゴリーが階層化している場合に対応させる --- */ ?>
<?php $catid = $cat; /* 表示中のカテゴリーIDをセット */ ?>
<?php $allcats = array(); /* 親カテゴリーをセットする配列を初期化しておく */ ?>
<?php 
while(!$catid==0) {    /* すべてのカテゴリーIDを取得し配列にセットするループ */
    $mycat = get_category($catid);     /* カテゴリーIDをセット */
    $catid = $mycat->parent;     /* 上で取得したカテゴリーIDの親カテゴリーをセット */
    array_push($allcats, $catid);
}
array_pop($allcats);
$allcats = array_reverse($allcats);
?>
<?php /*--- 親カテゴリーがある場合は表示させる --- */ ?>
<?php foreach($allcats as $catid): ?>
<div itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
<a href="<?php echo get_category_link($catid); ?>" itemprop="url">
<span itemprop="title"><?php echo get_cat_name($catid); ?></span>
</a>  &gt; 
</div>
<?php endforeach; ?>
<?php /*--- 最下層のカテゴリ名を表示 --- */ ?>
<div><?php single_cat_title(); ?></div>
</div>   
 <!--- end [breadcrumb] -->

          <!--ループ開始-->
          <h2 class="archiev">「 無色 」 一覧 </h2>「無職」以外のカテゴリ。何の色もねぇのさ。。。

<!-- カテゴリの説明文 -->
<?php if (is_category() && //カテゴリページの時
          !is_paged() &&   //カテゴリページのトップの時
          category_description()) : //カテゴリの説明文が空でない時 ?>
<div class="category-description"><?php echo category_description(); ?></div>
<?php endif; ?>
<!-- カテゴリの説明文 -->

<?php
    $query = new WP_Query( array( 'category__not_in' => array( 1 ) ) );
?>

<div id="topnews">
  <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
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

        <!--/elephant--> 
        <!--ページナビ-->
        <?php if (function_exists("pagination")) {
pagination($wp_query->max_num_pages);
} ?>
		</div> <!-- /.col -->
	</div> <!-- /.row -->

<?php get_footer(); ?>