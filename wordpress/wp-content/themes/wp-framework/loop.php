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
<span class="dt_2">
          <?php the_time('j F Y'); ?>
          <span><?php the_time('G:i'); ?></span>
          </span>
        </dt>

        <dd>
    <?php wpeExcerpt('wpeExcerpt40'); ?>

     <span class="author"><?php _e( 'Published by', 'wpeasy' ); ?> <?php the_author_posts_link(); ?></span>
    <span class="comments"><?php comments_popup_link( __( 'Leave your thoughts', 'wpeasy' ), __( '1 Comment', 'wpeasy' ), __( '% Comments', 'wpeasy' )); ?></span><!-- /post details -->
        </dd>
    </dl>




  </div><!-- /looper -->
  <?php endwhile; else: ?>

  <div>

    <h2 class="title"><?php _e( 'Sorry, nothing to display.', 'wpeasy' ); ?></h2>

  </div><!-- /article -->
<?php endif; ?>
