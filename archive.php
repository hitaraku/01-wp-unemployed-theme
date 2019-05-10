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
<div><?php //single_cat_title(); ?></div>
</div>   
 <!--- end [breadcrumb] -->

          <!--ループ開始-->
          <h2 class="archiev">「
            <?php if( is_category() ) { ?>
            <?php single_cat_title(); ?>
            <?php } elseif( is_tag() ) { ?>
            <?php single_tag_title(); ?>
            <?php } elseif( is_tax() ) { ?>
            <?php single_term_title(); ?>
            <?php } elseif (is_day()) { ?>
            日別アーカイブ：<?php echo get_the_time('Y年m月d日'); ?>
            <?php } elseif (is_month()) { ?>
            月別アーカイブ：<?php echo get_the_time('Y年m月'); ?>
            <?php } elseif (is_year()) { ?>
            年別アーカイブ：<?php echo get_the_time('Y年'); ?>
            <?php } elseif (is_author()) { ?>
            投稿者アーカイブ：<?php echo esc_html(get_queried_object()->display_name); ?>
            <?php } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
              ブログアーカイブ
              <?php } ?>
            」 一覧 </h2>

<!-- カテゴリの説明文 -->
<?php if (is_category() && //カテゴリページの時
          !is_paged() &&   //カテゴリページのトップの時
          category_description()) : //カテゴリの説明文が空でない時 ?>
<div class="category-description"><?php echo category_description(); ?></div>
<?php endif; ?>
<!-- カテゴリの説明文 -->

          <?php get_template_part('itiran');?>
        <!--/elephant--> 
        <!--ページナビ-->
        <?php if (function_exists("pagination")) {
pagination($wp_query->max_num_pages);
} ?>
		</div> <!-- /.col -->
	</div> <!-- /.row -->

<?php get_footer(); ?>