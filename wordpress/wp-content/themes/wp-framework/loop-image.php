

<?php
if ( in_category( 30 ) || post_is_in_descendant_category( 30 ) ) {
  include 'loop-image.php';
}
else {
  include 'loop-text.php';
}


 ?>


<?php if (have_posts()): while (have_posts()) : the_post(); ?>
  <div id="post-<?php the_ID(); ?>" <?php post_class('looper'); ?>>

    <a rel="nofollow" class="feature-img" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
      <?php if ( has_post_thumbnail()) :
        the_post_thumbnail('medium');
      else: ?>
        <!-- <img src="<?php echo catchFirstImage(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" /> -->
      <?php endif; ?>
    </a><!-- /post thumbnail -->

    <dl class="news_dl">
        <dt>
          <a href="<?php the_permalink(); ?>" target="_blank" title="<?php the_title(); ?>" class="dt_1">
            <?php trim_title_chars(60, '...'); ?>
          </a>

        </dt>

        <dd>
          <?php wpeExcerpt('wpeExcerpt40'); ?>

        </dd>
    </dl>




  </div><!-- /looper -->
  <?php endwhile; else: ?>

  <div>

    <h2 class="title"><?php _e( 'Sorry, nothing to display.', 'wpeasy' ); ?></h2>

  </div><!-- /article -->
<?php endif; ?>
