<?php get_header(); ?>

      <div class="clear mt10"></div>

      <div class="left">
        <div class="fenleis mb10 ">
          <div class="nr">


            <h3><?php the_category('', 'multiple'); ?></h3>

                <?php
                  $categories = get_the_category($post->ID);
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

        <?php

        if (have_posts()): while (have_posts()) : the_post(); ?>

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
                <div class="jj_tit j_tit"><?php the_title(); ?></div>
                <div class="sj"><?php the_time('d F Y'); ?> <?php the_time('H:i'); ?></div>
            <div class="clear mt20"></div>


            <div class="j_con">


              <?php if ( has_post_thumbnail()) :?>
                <a class="single-thumb" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                  <?php the_post_thumbnail(); // Fullsize image for the single post ?>
                </a>
              <?php endif; ?><!-- /post thumbnail -->

              <?php the_content(); ?>
            </div>
            <div>

            <?php
            // След./Пред. Пост.
            $post_nav = get_the_post_navigation( array(
              'screen_reader_text' => '',
              'next_text' => '<span class="post-title">%title</span>'.'<span class="meta-nav meta-nav-next" aria-hidden="true"> :ДАЛЕЕ</span> ',
              'prev_text' => '<span class="meta-nav meta-nav-prev" aria-hidden="true">НАЗАД: </span>'.
                '<span class="post-title">%title</span>',
            ) );

            echo $post_nav;
            ?>


            </div>

          </div>

              <?php edit_post_link(); ?>

      <?php endwhile; else: ?>


          <h2 class="page-title inner-title"><?php _e( 'Sorry, nothing to display.', 'wpeasy' ); ?></h2>


      <?php endif; ?>






        </div>
      </div>




<?php get_footer(); ?>

