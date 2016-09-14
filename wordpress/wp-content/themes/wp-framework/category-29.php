<?php get_header(); ?>


 <div class="clear mt10"></div>

      <div class="left">
        <div class="fenleis mb10 ">
          <div class="nr">


            <h3><?php echo get_category_parents($cat, TRUE, ''); ?></h3>

              <?php $categories = get_the_category($post->ID);
                  if ($categories) {
                   $category_ids = array();
                   foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;
                   $args=array(
                   'category__in' => $category_ids, // Сортировка производится по категориям
                   'showposts'=>99, //Количество выводимых записей
                   'caller_get_posts'=>1); // Запрещаем повторение ссылок
                   $my_query = new wp_query($args);
                   if( $my_query->have_posts() ) {
                  echo '<ul class="uls2">';
                          while ($my_query->have_posts()) {
                              $my_query->the_post();
                          ?>
                              <li>
                                <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">

                                  <?php the_title(); ?>

                                </a>
                              </li>
                          <?php
                          }

                          echo '</ul>';
                      }
                  wp_reset_query();
              } ?>

          </div>
        </div>
          <?php get_sidebar(); ?>
      </div>

      <div class="right">
        <div class="tuijian border">

          <div class="tjbt ">
            <span class="fl">
              <?php
                if( is_category() )
                echo get_queried_object()->name; ?>
            </span>
          </div>

          <div class="news_con">

            <?php if (have_posts()): while (have_posts()) : the_post(); ?>
              <dl class="news_dl fw_dl">
                  <dt>
                  <a href="<?php the_permalink(); ?>" target="_blank" title="<?php the_title(); ?>" class="dt_1">
                    <?php the_title(); ?>
                  </a>
                  <span class="dt_2"><b>&gt;</b></span>
                  </dt>
              </dl>
            <?php endwhile; else: ?>

              <div>
                <h2 class="title"><?php _e( 'Sorry, nothing to display.', 'wpeasy' ); ?></h2>
              </div><!-- /article -->

            <?php endif; ?>
          </div>
          <div class="clear"></div>
          <div class="page">
             <?php get_template_part('pagination'); ?>
          </div>

        </div>
      </div>




<?php get_footer(); ?>
