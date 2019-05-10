<div id="comments" class="clearfix">
  <?php
if(have_comments()):
?>
  <h3 id="resp">Comment</h3>
  <ol class="commets-list">
    <?php wp_list_comments('avatar_size=55'); ?>
  </ol>
  <?php
endif;

$args=array('title_reply' => '<i class="fa fa-envelope-o" aria-hidden="true"></i>- <span class="gf">Comments</span> -',
'
lavel_submit' => ('Submit Comment')
);
comment_form($args);
?>
</div>
