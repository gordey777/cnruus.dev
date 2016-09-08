<?php get_header(); ?>

      <div class="clear mt10"></div>

      <div class="left">

          <?php get_sidebar(); ?>
      </div>

      <div class="right">
        <div class="tuijian border">
          <?php if (have_posts()): while (have_posts()) : the_post(); ?>

          <div class="tjbt ">
            <span class="fl">
            <?php the_title(); ?>

            </span>
          </div>
          <div class="jianj">
            <div class="clear mt20"></div>
            <div class="j_con">

              <?php if ( has_post_thumbnail()) :?>
                <a class="single-thumb" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                  <?php the_post_thumbnail(); // Fullsize image for the single post ?>
                </a>
              <?php endif; ?><!-- /post thumbnail -->


              <?php the_content(); ?>
              <?php edit_post_link(); ?>

            </div>
          </div>


      <span class="date"><?php the_time('d F Y'); ?> <?php the_time('H:i'); ?></span>
      <span class="author"><?php _e( 'Published by', 'wpeasy' ); ?> <?php the_author_posts_link(); ?></span>
      <span class="comments"><?php comments_popup_link( __( 'Leave your thoughts', 'wpeasy' ), __( '1 Comment', 'wpeasy' ), __( '% Comments', 'wpeasy' )); ?></span><!-- /post details -->


      <?php the_tags( __( 'Tags: ', 'wpeasy' ), ', ', '<br>'); // Separated by commas with a line break at the end ?>

      <p></p>

      <p><?php _e( 'This post was written by ', 'wpeasy' ); the_author(); ?></p>


      <?php comments_template(); ?>




      <?php endwhile; else: ?>


          <h2 class="page-title inner-title"><?php _e( 'Sorry, nothing to display.', 'wpeasy' ); ?></h2>


      <?php endif; ?>

        </div>
      </div>




<?php get_footer(); ?>
