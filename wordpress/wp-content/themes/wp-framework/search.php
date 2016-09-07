<?php get_header(); ?>

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
              <?php echo sprintf( __( '%s Search Results for ', 'wpeasy' ), $wp_query->found_posts ); echo get_search_query(); ?>

            </span>
          </div>
          <div class="jianj">
            <div class="clear mt20"></div>
            <div class="j_con">
            <?php get_template_part('loop'); ?>
            <?php get_template_part('pagination'); ?>
            </div>
          </div>
        </div>
      </div>


<?php get_footer(); ?>
