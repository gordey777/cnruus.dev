<?php /* Template Name: Front */ get_header(); ?>


<div class="sy_l fl">
  <div class="wrap fl">
    <div class="tit1">
      <a href="<?php echo get_page_link( 71 ); ?>" class="fr">подробнее&gt;&gt;</a>
      <h3><?php echo get_the_title( 10 ) ?></h3>
    </div>

    <div class="con1">
      <p>
      <?php
      $query = new WP_Query( 'page_id=71' );
            while ( $query->have_posts() ) {
            $query->the_post();
              //the_title();
              wpeExcerpt('wpeExcerpt40');
      } ?>
      <?php wp_reset_query(); ?>
      </p>
    </div>
  </div>

  <div class="wrap1 fl">
    <div class="tit2">
      <a href="<?php echo get_category_link( 18 ); ?>" class="fr" target="_blank">подробнее&gt;&gt;</a>

      <h3><?php echo get_cat_name( 11 ) ?></h3>
    </div>

    <div class="con1 tabs">
        <input id="tab1" type="radio" name="tabs" checked>
        <label for="tab1" title="Вкладка 1"><?php echo get_cat_name( 18 ) ?></label>

        <input id="tab2" type="radio" name="tabs">
        <label for="tab2" title="Вкладка 2"><?php echo get_cat_name( 19 ) ?></label>

        <input id="tab3" type="radio" name="tabs">
        <label for="tab3" title="Вкладка 3"><?php echo get_cat_name( 22 ) ?></label>

        <section id="content1">
          <dl class="height">
              <?php
              $my_posts = get_posts('numberposts=1&category=18');
              foreach ($my_posts as $post) :
              setup_postdata($post);
              ?>

                <dt class="fl">
                  <a href="<?php the_permalink(); ?>">
                    <img src="<?php echo catchFirstImage(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" width="120" height="85" />
                  </a>
                </dt>

                <dd class="fr height">
                  <h3><a href="<?php the_permalink(); ?>"><?php trim_title_chars(20, '...'); ?></a></h3>
                  <p>
                    <?php wpeExcerpt2('wpeExcerpt10'); ?>
                    <a href="<?php the_permalink(); ?>" target="_blank">подробнее</a>
                  </p>
                </dd>
              <?php endforeach; ?>
            <?php wp_reset_query();   ?>
          </dl>

        <div class="carousel_lite">
          <ul class="ul-con2">
            <?php
            $my_posts = get_posts('numberposts=-1&category=18');
            foreach ($my_posts as $post) :
            setup_postdata($post);
            ?>
            <li><span class="fr">[<?php the_time('j F Y'); ?>]</span>
              <font>·  </font><a href="<?php the_permalink(); ?>"><?php trim_title_chars(40, '...'); ?></a>
            </li>
            <?php endforeach; ?>
            <?php wp_reset_postdata();   ?>
          </ul>
          </div>
        </section>

        <section id="content2" class="scroll-list">

            <ul class="ul-con2">
              <?php
              $my_posts = get_posts('numberposts=-1&category=19');
              foreach ($my_posts as $post) :
              setup_postdata($post);
              ?>
              <li><span class="fr">[<?php the_time('j F Y'); ?>]</span>
                <font>·  </font><a href="<?php the_permalink(); ?>"><?php trim_title_chars(40, '...'); ?></a>
              </li>
              <?php endforeach;
              wp_reset_postdata();?>
            </ul>

        </section>
        <section id="content3" class="scroll-list">

            <ul class="ul-con2">
              <?php
              $my_posts = get_posts('numberposts=1&category=22');
              foreach ($my_posts as $post) :
              setup_postdata($post);
              ?>
              <li><span class="fr">[<?php the_time('j F Y'); ?>]</span>
                <font>·  </font><a href="<?php the_permalink(); ?>"><?php trim_title_chars(40, '...'); ?></a>
              </li>
              <?php endforeach; ?>
              <?php wp_reset_query();   ?>
            </ul>


        </section>
      </div>
  </div>

<!-- Servise -->
  <div class="wrap fl width2">
    <div class="tit1">
      <a href="<?php echo get_category_link( 29 ); ?>" class="fr">подробнее&gt;&gt;</a>
      <h3><?php echo get_cat_name( 29 ) ?></h3>
    </div>
    <div class="con2 serv-cont">

      <?php if( have_rows('service', 15) ): ?>
          <?php while ( have_rows('service', 15) ) : the_row(); ?>
          <div class="serv-row">
            <div class="serv-title">
              <a href="<?php the_sub_field('link_1'); ?>">
                <h3>
                  <?php the_sub_field('title_1'); ?>
                </h3>
              </a>
            </div>
            <div class="serv-title">
              <a href="<?php the_sub_field('link_2'); ?>">
                <h3>
                  <?php the_sub_field('title_2'); ?>
                </h3>
              </a>
            </div>
            <div class="serv-title">
              <a href="<?php the_sub_field('link_3'); ?>">
                <h3>
                  <?php the_sub_field('title_3'); ?>
                </h3>
              </a>
            </div>
          </div>
          <?php  endwhile;
          else : ?>
        <?php endif; ?>


    </div>
  </div>



</div>


<div class="fenl fr">
  <a href="<?php echo get_category_link( 63 ); ?>">
    <h3><?php echo get_cat_name( 63 ) ?></h3>
  </a>
  <div class="scroll-list mainPage">
    <ul class="mainPageList">
    <!-- CATEGIRY LIST -->
      <?php $this_category = wp_list_categories(
        array(
          'show_option_none'   => '',
          'hide_empty'         => 0,
          'orderby'            => 'name',
          'show_count'         => '0',
          'hierarchical'       => '0',
          'depth'              => '0',

          'title_li'           => '',
          'use_desc_for_title' => '0',
          'child_of'           => '63',
          'echo'               => '0'
          )
        );
      ?>
      <?php echo $this_category; ?>
      <?php wp_reset_query();   ?>
      <!-- POST LIST -->
      <?php
          $my_posts = get_posts('numberposts=-1&category=63');
          foreach ($my_posts as $post) :
          setup_postdata($post);
          ?>
          <li>
            <a href="<?php the_permalink(); ?>">
              <?php trim_title_chars(24, '...'); ?>
            </a>
          </li>
          <?php endforeach; ?>
          <?php wp_reset_query();   ?>
    </ul>
  </div>
</div>

<div class="clear"></div>
<div class="ad">
  <?php if( have_rows('first_line_images', 15) ): ?>
    <?php while ( have_rows('first_line_images', 15) ) : the_row(); ?>
      <div class="front-page-line">
        <a class="front-page-line" href="<?php the_sub_field('link'); ?>" target="_blank">
        <?php $image = get_sub_field('image');
        if( !empty($image) ): ?>
          <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
        <?php endif; ?>
        </a>
      </div>
    <?php  endwhile;
    else : ?>
  <?php endif; ?>
</div>

<div class="clear mb10"></div>

<div class="w-full">

  <div class="tit1">
    <a href="<?php echo get_category_link( 25 ); ?>" class="fr" target="_blank">подробнее&gt;&gt;</a>
    <h3><?php echo get_cat_name( 19 ) ?></h3>

  </div>
  <div class="con3">

    <div class="wrap-5">
      <div class="tit3">
          <a href="<?php echo get_category_link( 7 ); ?>" class="fr" target="_blank">
            <h3>
              <?php echo get_cat_name( 7 ) ?>
            </h3>
          </a>
      </div>
        <div class="con4 scroll-list">
            <ul class="bor-right">
              <?php
              $my_posts = get_posts('numberposts=-1&category=7');
              foreach ($my_posts as $post) :
              setup_postdata($post);
              ?>
              <li>
                <font>·  </font><a href="<?php the_permalink(); ?>"><?php trim_title_chars(25, '...'); ?></a>
              </li>
              <?php endforeach; ?>
              <?php wp_reset_query();   ?>
            </ul>
        </div>
    </div>
    <div class="wrap-5">
      <div class="tit3">
          <a href="<?php echo get_category_link( 8 ); ?>" class="fr" target="_blank">
            <h3>
              <?php echo get_cat_name( 8 ) ?>
            </h3>
          </a>
      </div>
        <div class="con4 scroll-list">
            <ul class="bor-right">
              <?php
              $my_posts = get_posts('numberposts=-1&category=8');
              foreach ($my_posts as $post) :
              setup_postdata($post);
              ?>
              <li>
                <font>·  </font><a href="<?php the_permalink(); ?>"><?php trim_title_chars(25, '...'); ?></a>
              </li>
              <?php endforeach; ?>
              <?php wp_reset_query();   ?>
            </ul>
        </div>
    </div>
    <div class="wrap-5">
      <div class="tit3">
          <a href="<?php echo get_category_link( 16 ); ?>" class="fr" target="_blank">
            <h3>
              <?php echo get_cat_name( 16 ) ?>
            </h3>
          </a>
      </div>
      <div class="con4 scroll-list">
          <ul class="bor-right">
            <?php
            $my_posts = get_posts('numberposts=-1&category=16');
            foreach ($my_posts as $post) :
            setup_postdata($post);
            ?>
            <li>
              <font>·  </font><a href="<?php the_permalink(); ?>"><?php trim_title_chars(24, '...'); ?></a>
            </li>
            <?php endforeach; ?>
            <?php wp_reset_query();   ?>
          </ul>

      </div>
    </div>
    <div class="wrap-5">
      <div class="tit3">
          <a href="<?php echo get_category_link( 65 ); ?>" class="fr" target="_blank">
            <h3>
              <?php echo get_cat_name( 65 ) ?>
            </h3>
          </a>
      </div>
        <div class="con4 scroll-list">
            <ul class="bor-right">
              <?php
              $my_posts = get_posts('numberposts=-1&category=65');
              foreach ($my_posts as $post) :
              setup_postdata($post);
              ?>
              <li>
                <font>·  </font><a href="<?php the_permalink(); ?>"><?php trim_title_chars(25, '...'); ?></a>
              </li>
              <?php endforeach; ?>
              <?php wp_reset_query();   ?>
            </ul>
        </div>
    </div>
    <div class="wrap-5">
      <div class="tit3">
        <h3>
          Докуметы (скачать)
        </h3>
      </div>
      <div class="con4 scroll-list">
        <ul>
          <?php if( have_rows('documents', 15) ): ?>
            <?php while ( have_rows('documents', 15) ) : the_row(); ?>
              <li>
                <?php if( get_sub_field('file') ): ?>
                  <a href="<?php the_sub_field('file'); ?>" ><?php the_sub_field('file_title'); ?> (скачать)</a>
                <?php endif; ?>
              </li>
            <?php  endwhile;
            else : ?>
          <?php endif; ?>
        </ul>
      </div>
    </div>


  </div>
</div>


<div class="clear"></div>

<div class="ad">
      <?php if( have_rows('second_line_images', 15) ): ?>
        <?php while ( have_rows('second_line_images', 15) ) : the_row(); ?>
          <div class="front-page-line">
            <a class="front-page-line" href="<?php the_sub_field('link'); ?>" target="_blank">
            <?php $image = get_sub_field('image');
            if( !empty($image) ): ?>
              <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
            <?php endif; ?>
            </a>
          </div>
        <?php  endwhile;
        else : ?>
      <?php endif; ?>


</div>


<div class="clear mb10"></div>
<div class="xiaop">
  <div class="xp_tit">
    <span class="fr"><a href="IntoRussia.aspx?snd=355" target="_blank">новинки</a><!-- |<a href="IntoRussia.aspx?snd=283" target="_blank">рекомендуемые</a>|<a href="IntoRussia.aspx?snd=286" target="_blank">хит продаж</a> --></span>
    <h3>Китайские народные изделия</h3>
  </div>
  <div class="xp_con">

      <?php
      $my_posts = get_posts('numberposts=10&category=31');
      foreach ($my_posts as $post) :
      setup_postdata($post);
      ?>

      <a href="<?php the_permalink(); ?>">
        <dt>
          <?php if ( has_post_thumbnail()) :
            the_post_thumbnail('custum');
          else: ?>
            <img src="<?php echo catchFirstImage(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
          <?php endif; ?>
        </dt>
        <dd>
          <?php trim_title_chars(20, '...'); ?>
        </dd>
      </a>

      <?php endforeach; ?>
      <?php wp_reset_query();   ?>


  </div>
</div>
<div class="clear mb10"></div>
<div class="area">
  <div class="guanz">
    <div class="gz_tit">
<!--       <a href="IndustryConcern.aspx" target="_blank">
  О нас
</a> -->
    </div>
          <?php
          $my_posts = get_posts('numberposts=4&category=64');
          foreach ($my_posts as $post) :
          setup_postdata($post); ?>

            <dl>
              <dt class="FP-xs-img">
                <?php if ( has_post_thumbnail()) :
                  the_post_thumbnail('medium');
                else: ?>
                  <img src="<?php echo catchFirstImage(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" width="34" height="34" />
                <?php endif; ?>
                <a href="<?php the_permalink(); ?>" target="_blank">
                  <?php trim_title_chars(19, '...'); ?>
                </a>
              </dt>
              <dd><?php wpeExcerpt2('wpeExcerpt7'); ?></dd>
            </dl>

          <?php endforeach; ?>
          <?php wp_reset_query();   ?>

  </div>
</div>
<div class="clear"></div>


<div class="link">
  <b>Партнеры:</b>
</div>

<div class="compan_nr oh">
      <?php if( have_rows('partner_fild', 15) ): ?>
        <?php while ( have_rows('partner_fild', 15) ) : the_row(); ?>
        <div class="compan_logo fl">
          <div class="logo_top">
            <a href="<?php the_sub_field('partner_link'); ?>" target="_blank">
            <?php $image = get_sub_field('partner_image');
            if( !empty($image) ): ?>
              <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" width="135" height="67">
            <?php endif; ?>
            </a>
          </div>
          <div class="logo_btn">
            <?php the_sub_field('partner_title'); ?>
          </div>
        </div>
        <?php  endwhile;
        else : ?>
      <?php endif; ?>



  <div class="clear"></div>
</div>




<?php get_footer(); ?>
