<?php get_header(); ?>


<div class="sy_l fl">
  <div class="wrap fl">
    <div class="tit1">
      <a href="<?php echo get_page_link( 71 ); ?>" class="fr">более&gt;&gt;</a>
      <h3>О компании</h3>
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
      <a href="<?php echo get_category_link( 18 ); ?>" class="fr" target="_blank">более&gt;&gt;</a>
      <h3>новости</h3>
    </div>

    <div class="con1">
      <dl>
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

            <dd class="fr">
              <h3><a href="<?php the_permalink(); ?>"><?php trim_title_chars(20, '...'); ?></a></h3>
              <p>
                <?php wpeExcerpt2('wpeExcerpt10'); ?>
                <a href="<?php the_permalink(); ?>" target="_blank">подробнее</a>
              </p>
            </dd>
          <?php endforeach; ?>
        <?php wp_reset_query();   ?>
      </dl>

      <ul class="ul-con2">
        <?php
        $my_posts = get_posts('numberposts=3&category=18');
        foreach ($my_posts as $post) :
        setup_postdata($post);
        ?>
        <li><span class="fr">[<?php the_time('j F Y'); ?>]</span>
          <font>·  </font><a href="<?php the_permalink(); ?>"><?php trim_title_chars(40, '...'); ?></a>
        <li/>
        <?php endforeach; ?>
        <?php wp_reset_query();   ?>
      </ul>

    </div>
  </div>


  <div class="wrap fl">
    <div class="tit1">
      <a href="<?php echo get_category_link( 63 ); ?>" class="fr">более&gt;&gt;</a>
      <h3>Предприятия</h3>
    </div>
    <div class="con2">

      <ul>
          <?php
          $my_posts = get_posts('numberposts=6&category=63');
          foreach ($my_posts as $post) :
          setup_postdata($post);
          ?>
          <li>
            <font>·  </font><a href="<?php the_permalink(); ?>"><?php trim_title_chars(75, '...'); ?></a>
          <li/>
          <?php endforeach; ?>
          <?php wp_reset_query();   ?>
      </ul>

      <ul id="demo2"></ul>
    </div>
  </div>


  <div class="wrap1 fl">
    <div class="tit2">
      <a href="<?php echo get_category_link( 19 ); ?>" class="fr" target="_blank">более&gt;&gt;</a>
      <h3>мероприятия</h3>
    </div>

    <div class="con2">
        <ul>
          <?php
          $my_posts = get_posts('numberposts=4&category=19');
          foreach ($my_posts as $post) :
          setup_postdata($post);
          ?>
          <li><span class="fr">[<?php the_time('j F Y'); ?>]</span>
            <font>·  </font><a href="<?php the_permalink(); ?>"><?php trim_title_chars(75, '...'); ?></a>
          <li/>
          <?php endforeach; ?>
          <?php wp_reset_query();   ?>
        </ul>
    </div>

  </div>
</div>


<div class="fenl fr">
  <h3>Каталоги</h3>
    <ul class="mainPageList">
      <?php $this_category = wp_list_categories(
        array(
          'show_option_none'   => '',
          'hide_empty'         => 0,
          'orderby'            => 'name',
          'show_count'         => '0',

          'title_li'           => '',
          'use_desc_for_title' => '0',
          'child_of'           => '30',
          'echo'               => '0'
          )
        );
      ?>
      <?php echo $this_category; ?>
      <?php wp_reset_query();   ?>
    </ul>
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
<div class="wrap fl">
  <div class="tit1">
    <a href="<?php echo get_category_link( 25 ); ?>" class="fr" target="_blank">более&gt;&gt;</a>
    <h3>О спросах</h3>

  </div>

  <div class="con2">

    <ul>
      <?php
      $my_posts = get_posts('numberposts=4&category=25');
      foreach ($my_posts as $post) :
      setup_postdata($post);
      ?>
      <li>
        <font>·  </font>
        <a href="<?php the_permalink(); ?>">
          <?php trim_title_chars(75, '...'); ?>
        </a>
      <li/>
      <?php endforeach; ?>
      <?php wp_reset_query();   ?>
    </ul>
  </div>
</div>

<div class="wrap1 fl" style="width: 330px;">
  <div class="tit2">
    <a href="<?php echo get_category_link( 26 ); ?>" class="fr" target="_blank">более&gt;&gt;</a>
    <h3>Поставки</h3>
  </div>

  <div class="con2">

    <ul>
      <?php
      $my_posts = get_posts('numberposts=4&category=26');
      foreach ($my_posts as $post) :
      setup_postdata($post);
      ?>
      <li><span class="fr">[<?php the_time('j F Y'); ?>]</span>
        <font>·  </font><a href="<?php the_permalink(); ?>"><?php trim_title_chars(75, '...'); ?></a>
      <li/>
      <?php endforeach; ?>
      <?php wp_reset_query();   ?>
    </ul>

  </div>
</div>

<div class="wrap fr" style="margin-right: 0;">
  <div class="tit1">
    <h3>Фото / Видео</h3>
  </div>
  <div id="hotpic">
    <div id="NewsPic" style="position: relative;">
      <a style="" target="_blank" href="http://russian.cctv.com/2016/06/07/VIDEHdYeiWzMfuKZHGjvF0wc160607.shtml"><img class="Picture" src="<?php echo get_template_directory_uri(); ?>/img/201606072123189398.jpg" width="323" height="210" /></a>
      <a style="visibility: hidden; display: none;" target="_blank" href="http://www.zjjgood.com/system/video.php?videoId=213"><img class="Picture" src="<?php echo get_template_directory_uri(); ?>/img/201607291617248851.jpg" width="323" height="210" /></a>
      <div class="Nav" style="position: absolute; bottom: 0; z-index: 999;">
        <span class="Cur">1</span> <span class="Normal">2</span>
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
<div class="wrap fl">
  <div class="tit1">

      <a href="<?php echo get_category_link( 28 ); ?>" class="fr" target="_blank">более&gt;&gt;</a>
      <h3>Бизнес в Китае</h3>
    </div>

    <div class="con2">
      <ul>
        <?php
        $my_posts = get_posts('numberposts=4&category=28');
        foreach ($my_posts as $post) :
        setup_postdata($post);
        ?>
        <li><span class="fr">[<?php the_time('j F Y'); ?>]</span>
          <font>·  </font><a href="<?php the_permalink(); ?>"><?php trim_title_chars(75, '...'); ?></a>
        <li/>
        <?php endforeach; ?>
        <?php wp_reset_query();   ?>

      </ul>
    </div>
</div>

<div class="wrap1 fl" style="width: 330px;">
  <div class="tit2">
      <a href="<?php echo get_category_link( 16 ); ?>" class="fr" target="_blank">более&gt;&gt;</a>
      <h3>Выставки</h3>
    </div>

    <div class="con2">
        <ul>
          <?php
          $my_posts = get_posts('numberposts=4&category=16');
          foreach ($my_posts as $post) :
          setup_postdata($post);
          ?>
          <li><span class="fr">[<?php the_time('j F Y'); ?>]</span>
            <font>·  </font><a href="<?php the_permalink(); ?>"><?php trim_title_chars(60, '...'); ?></a>
          <li/>
          <?php endforeach; ?>
          <?php wp_reset_query();   ?>
        </ul>
    </div>
</div>

<div class="wrap fr" style="margin-right: 0;">
  <div class="tit1">
    <a href="<?php echo get_category_link( 21 ); ?>" class="fr" target="_blank">более&gt;&gt;</a>
    <h3>Нормативные документы</h3>
  </div>
    <div class="con2">
        <ul>
          <?php
          $my_posts = get_posts('numberposts=4&category=21');
          foreach ($my_posts as $post) :
          setup_postdata($post);
          ?>
          <li>
            <font>·  </font><a href="<?php the_permalink(); ?>"><?php trim_title_chars(75, '...'); ?></a>
          <li/>
          <?php endforeach; ?>
          <?php wp_reset_query();   ?>
        </ul>
    </div>
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
      <a href="IndustryConcern.aspx" target="_blank">
        О нас
      </a>
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
