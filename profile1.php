<!-- Author Info -->
<div id="prof-upper-article">
    <div class="prof-under-article clearfix">
        <div class="prof-under-article-title">
            <ion-icon name="brush"></ion-icon>この記事を書いている人 - <span class="gf">WRITER</span> -
        </div>

        <div class="prof-under-article-left">
        <?php echo get_avatar( get_the_author_id(), 150 ); ?>
            <div class="prof-under-article-name">
            <?php the_author_posts_link(get_the_author_id()); ?>
            </div>
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