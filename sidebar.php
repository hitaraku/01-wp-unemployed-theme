<div id="side">
<aside class="<?php echo get_option( 'fanfare_column_design' ); ?>">
<?php if (is_404()) { ?>
<?php } else { ?>

<?php } ?>
  <div id="mybox">
    <?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar(1) ) : else : //サイドウイジェット読み込み ?>
    <?php endif; ?>
  </div>
  <!-- スマホだけのアドセンス -->
<?php if (is_404()) { ?>
<?php } else { ?>
  <?php if(is_mobile()) { //スマホの場合 ?>
  <div style="padding-top:10px;">
    <?php get_template_part('ad'); //アドセンス読み込み ?>
  </div>
  <?php } else { //PCの場合 ?>
  <?php } ?>
<?php } ?>
  <!-- /スマホだけのアドセンス -->
 <!-- スクロール広告用 -->
  <div id="scrollad">
 <?php if(is_mobile()) { //モバイルの場合 ?>
             <?php } else { //PCの場合 ?>
　　　<p></p>
      <?php get_template_part('scroll-ad'); //追尾式広告 ?>
  </div>
<?php } ?>


</aside>
</div>