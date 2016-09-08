        <div class="fenleis mb10 ">
          <div class="nr">


            <h3><?php the_category('', 'multiple'); ?></h3>



                <?php
                $i=1;
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


                else {

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
                }

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
<aside class="sidebar" role="complementary">

  <?php if ( is_active_sidebar('widgetarea1') ) : ?>
    <?php dynamic_sidebar( 'widgetarea1' ); ?>
  <?php else : ?>

    <!-- If you want display static widget content - write code here
    RU: Здесь код вывода того, что необходимо для статического контента виджетов -->

  <?php endif; ?>

  </aside><!-- /sidebar -->
        </div>
        <a href="http://www.cnruss.com/Russian/FreeRelease.aspx">
          <img src="<?php echo get_template_directory_uri(); ?>/img/fb.jpg" width="100%">
        </a>







