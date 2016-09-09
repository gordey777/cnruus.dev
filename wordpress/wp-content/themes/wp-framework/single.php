<?php get_header(); ?>

      <div class="clear mt10"></div>

      <div class="left">
        <div class="fenleis mb10 ">
          <div class="nr">


            <h3><?php the_category('', 'multiple'); ?></h3>



                <?php
/*                $i=1;
                $cat = get_query_var('cat');
                $categories = get_categories('parent='.$cat.'');
                foreach ($categories as $category) { $i++; }

                if ($i > 1) {
                  echo '<ul class="uls2">';
                  foreach ($categories as $category) { ?>
                    <li>
                    <a href="<?php echo get_category_link($category->term_id); ?>" ><?php echo $category->name; ?></a>
                    </li>
                  <?php }
                  echo "</ul>";
                }


                else {*/

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
                              <li><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></li>
                          <?php
                          }

                          echo '</ul>';
                      }
                  wp_reset_query();
                  }
/*                }
*/
                ?>





          </div>
        </div>
        <div class="contactn mt10 mb10">
          <div class="tits">
            <h4><a class="yan2" href="http://www.cnruss.com/Russian/%EF%BF%A5">Свяжитесь с нами</a> </h4>
          </div>
          <div class="subnr">
            <img alt="Свяжитесь с нами" width="100%" src="<?php echo get_template_directory_uri(); ?>/img/img14n.gif">
            <p class="yan2">Российско-китайский бизнес-центр </p>
            <p><span>Контактное лицо：</span>Фань Семён</p>
            <p><span>Моб:</span>+86 15388055177</p>
            <p><span>Тел.：</span>+86 731-84028467</p>
            <p><span>Режим работы: </span></p>
            <p>8:30---17:30</p>
            <p><span>E-mail：</span>hunanrussia@163.com</p>
            <p><span>Адрес:</span>410151，Чанша, Ваньцзяливэй 35,офис 311.　</p>
          </div>
          <?php get_sidebar(); ?>
        </div>
        <a href="http://www.cnruss.com/Russian/FreeRelease.aspx">
          <img src="<?php echo get_template_directory_uri(); ?>/img/fb.jpg" width="100%">
        </a>
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
