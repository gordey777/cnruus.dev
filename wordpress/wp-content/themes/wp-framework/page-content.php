<?php /* Template Name: Content Page Template */ get_header(); ?>
  <?php if (have_posts()): while (have_posts()) : the_post(); ?>

      <div class="clear mt10"></div>

      <div class="left">
        <div class="fenleis mb10 ">
          <?php get_sidebar(); ?>
        </div>
      </div>

      <div class="right">
        <div class="tuijian border">
          <div class="tjbt ">
            <span class="fl">
            <?php the_title(); ?>

            </span>
          </div>
          <div class="jianj">
            <div class="clear mt20"></div>
            <div class="j_con">
              <?php the_content(); ?>
              <?php edit_post_link(); ?>
            </div>
          </div>
        </div>
      </div>


  <?php endwhile; else: // If 404 page error ?>
    <article>

      <h2 class="page-title inner-title">
      <?php _e( 'Sorry, nothing to display.', 'wpeasy' ); ?>

      </h2>

    </article>
  <?php endif; ?>

<?php get_footer(); ?>
