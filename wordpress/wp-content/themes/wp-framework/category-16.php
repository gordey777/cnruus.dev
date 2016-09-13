<?php get_header(); ?>


 <div class="clear mt10"></div>

      <div class="left">
        <div class="fenleis mb10 ">
          <div class="nr">

            <h3><a href="<?php echo get_permalink(115); ?>">Информация о выставках</a></h3>
          <?php $category = get_the_category();
              if (is_category()) {
                  $this_category = get_category($cat);
                  if($this_category->category_parent) {
                      $this_category = wp_list_categories('orderby=name&show_count=0&current_category='.$category[0]->cat_ID.'&title_li=&use_desc_for_title=0&child_of='.$this_category->category_parent."&echo=0");
                  }
                  else {
                      $this_category = wp_list_categories('orderby=name&depth=1&show_count=0&current_category='.$category[0]->cat_ID.'&title_li=&use_desc_for_title=0&child_of='.$this_category->cat_ID."&echo=0");
                  }
              }
              elseif ( is_single()) {
                  if($category[0]->category_parent) {
                      $this_category = wp_list_categories('orderby=name&show_count=0&current_category='.$category[0]->cat_ID.'&title_li=&use_desc_for_title=0&child_of='.$category[0]->category_parent."&echo=0");
                  }
                  else {
                      $this_category = wp_list_categories('orderby=name&show_count=0&current_category='.$category[0]->cat_ID.'&title_li=&use_desc_for_title=0&child_of='.$category[0]->cat_ID."&echo=0");
                  }
              } ?>
            <ul class="uls2">
              <?php echo $this_category; ?>
            </ul>

          </div>
        </div>
          <?php get_sidebar(); ?>
      </div>

      <div class="right">
        <div class="tuijian border">
          <div class="tjbt ">
            <span class="fl">
              <?php


                foreach((get_the_category()) as $category) {
                  echo $category->cat_name . ' ';
              } ?>
      <?php wp_reset_query();   ?>

            </span>
          </div>

          <div class="news_con">

            <?php get_template_part('loop'); ?>
          </div>
          <div class="clear"></div>
          <div class="page">
             <?php get_template_part('pagination'); ?>
          </div>

        </div>
      </div>




<?php get_footer(); ?>
