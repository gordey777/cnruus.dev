<?php /* Template Name: Content Page Template */ get_header(); ?>


      <div class="clear mt10"></div>

      <div class="left">
        <div class="fenleis mb10 ">
          <div class="nr">




            <h3>
              <?php
                $parent_title = get_the_title($post->post_parent);
                $parent_link = get_permalink($post->post_parent);
                $title = get_the_title();

                if ($parent_title != $title){
                  ?>
                  <a href="<?php echo $parent_link; ?>">
                    <?php echo $parent_title; ?>
                  </a>
                  <?php
                }

                else {
                  ?>
                  <a href="<?php echo get_page_link( ); ?>">
                    <?php echo the_title(); ?>
                  </a>
                  <?php
                }
              ?>
            </h3>


            <?php echo(wpb_list_child_pages()); ?>

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
                  <?php the_content(); ?>
                  <?php edit_post_link(); ?>

                </div>
              </div>

            <?php endwhile; else: // If 404 page error ?>

              <article>

                <h2 class="page-title inner-title">
                  <?php _e( 'Sorry, nothing to display.', 'wpeasy' ); ?>

                </h2>

              </article>

            <?php endif; ?>

        </div>

      </div>




<?php get_footer(); ?>
