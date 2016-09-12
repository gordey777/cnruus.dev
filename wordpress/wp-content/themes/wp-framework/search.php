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
              Результаты поиска

            </span>
          </div>
          <div class="jianj">
            <div class="clear mt20"></div>
            <div class="j_con">
            <h1 class="search-title inner-title">
            <?php echo sprintf( __( '%s Search Results for 1  ', 'wpeasy' ), $wp_query->found_posts ); echo get_search_query(); ?>

            </h1>
            <?php get_template_part('loop'); ?>
            <?php get_template_part('pagination'); ?>
            </div>
          </div>
        </div>
      </div>


<?php get_footer(); ?>
