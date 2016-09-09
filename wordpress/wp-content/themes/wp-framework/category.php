<?php get_header(); ?>


 <div class="clear mt10"></div>

      <div class="left">
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



<?php get_sidebar(); ?>
<?php get_footer(); ?>
