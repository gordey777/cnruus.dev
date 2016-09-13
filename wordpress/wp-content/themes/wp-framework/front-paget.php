<?php /* Template Name: Front Page */ get_header(); ?>


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
      <?php wp_reset_query();
      ?>

      </p>
    </div>
  </div>

  <div class="wrap1 fl">
    <div class="tit2">
      <a href="<?php echo get_category_link( 18 ); ?>" class="fr" target="_blank">более&gt;&gt;</a>
      <h3>новости</h3>
    </div>

    <div class="con1">
 <!-- <dl>
        <dt class="fl">
          <a href="EconomyDetail.aspx?nid=3805" target="_blank" title="Эксклюзив: Активно развиваются связи между банками России и Китая -- cтарший вице- президент Сбербанк КИБ">
            <img src="<?php echo get_template_directory_uri(); ?>/img/201609090837139466.png" width="120" height="85" /></a>
        </dt>
        <dd class="fr">
          <h3><a href="EconomyDetail.aspx?nid=3805" target="_blank" title="Эксклюзив: Активно развиваются связи между банками России и Китая -- cтарший вице- президент Сбербанк КИБ">Эксклюзив: Активно ра...</a></h3>
          <p>Эксклюзив: Активно развиваются связи между банками Ро...<a href="EconomyDetail.aspx?nid=3805" target="_blank">подробнее</a></p>
        </dd>
      </dl>
      <div class="clear"></div>
 -->
        <ul>
          <?php
          $my_posts = get_posts('numberposts=4&category=18');
          foreach ($my_posts as $post) :
          setup_postdata($post);
          ?>
          <li><span class="fr">[<?php the_time('j F Y'); ?>]</span>
            <font>·  </font><a href="<?php the_permalink(); ?>"><?php trim_title_chars(75, '...'); ?></a>
          <li/>
          <?php endforeach; ?>
        </ul>

    </div>
  </div>


  <div class="wrap fl">
        <div class="tit1">
      <a href="<?php echo get_page_link( 63 ); ?>" class="fr">более&gt;&gt;</a>
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
                      'echo'               => '0')
                    );
      ?>
      <?php echo $this_category; ?>
    </ul>
</div>
<div class="clear"></div>
<div class="ad">
        <?php if( have_rows('first_image_line') ): ?>
          <?php while ( have_rows('first_image_line') ) : the_row(); ?>
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
            <font>·  </font><a href="<?php the_permalink(); ?>"><?php trim_title_chars(75, '...'); ?></a>
          <li/>
          <?php endforeach; ?>
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
          <?php if( have_rows('second_image_line') ): ?>
          <?php while ( have_rows('second_image_line') ) : the_row(); ?>
      <div class="front-page-line">
              <a class="front-page-line" href="<?php the_sub_field('link'); ?>" target="_blank">
              <?php $image = get_sub_field('image');
                if( !empty($image) ): ?>
                  <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" >
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
        </ul>
    </div>

</div>
<div class="clear mb10"></div>
<div class="xiaop">
  <div class="xp_tit">
    <span class="fr"><a href="IntoRussia.aspx?snd=355" target="_blank">новинки</a>|<a href="IntoRussia.aspx?snd=283" target="_blank">рекомендуемые</a>|<a href="IntoRussia.aspx?snd=286" target="_blank">хит продаж</a></span>
    <h3>Китайские народные изделия</h3>
  </div>
  <div class="xp_con">

          <?php
          $my_posts = get_posts('numberposts=10&category=21,16');
          foreach ($my_posts as $post) :
          setup_postdata($post);
          ?>

          <a href="<?php the_permalink(); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/img/201609081010562755.png" width="190" height="125" />
            <br /><?php trim_title_chars(20, '...'); ?>
          </a>

          <?php endforeach; ?>
      <?php wp_reset_query();   ?>




  </div>
</div>
<div class="clear mb10"></div>
<div class="area">
  <div class="guanz">
    <div class="gz_tit"><a href="IndustryConcern.aspx" target="_blank">О нас</a></div>
    <dl>
      <dt>
        <img src="<?php echo get_template_directory_uri(); ?>/img/20160414151119348.jpg" width="34" height="34" /><a href="/Russian/IndustryConcern.aspx?snd=486" target="_blank">Наши деятельности</a></dt>
      <dd>Наши услуги:1.Поиск и о...</dd>
    </dl>
    <dl>
      <dt>
        <img src="<?php echo get_template_directory_uri(); ?>/img/201604141511324467.jpg" width="34" height="34" /><a href="/Russian/IndustryConcern.aspx?snd=487" target="_blank">Наши достижении</a></dt>
      <dd>我们的业务模式</dd>
    </dl>
    <dl>
      <dt>
        <img src="<?php echo get_template_directory_uri(); ?>/img/201604141511468063.jpg" width="34" height="34" /><a href="/Russian/IndustryConcern.aspx?snd=488" target="_blank">Наши представительства</a></dt>
      <dd>我们的资源平台</dd>
    </dl>
    <dl>
      <dt>
        <img src="<?php echo get_template_directory_uri(); ?>/img/201604141511571826.jpg" width="34" height="34" /><a href="/Russian/IndustryConcern.aspx?snd=489" target="_blank">наша команда</a></dt>
      <dd>我们的团队 湖南中俄商贸中心为深化湖南与...</dd>
    </dl>
  </div>
</div>
<div class="clear"></div>
<div class="link">
  <b>Партнеры:</b>
</div>
<div class="compan_nr oh">
  <div class="compan_logo fl">
    <div class="logo_top">
      <a href="http://www.ruchina.org" target="_blank">
        <img src="<?php echo get_template_directory_uri(); ?>/img/20160516131022512.jpg" width="135" height="67" /></a>
    </div>
    <div class="logo_btn">《中国与俄罗斯》杂志</div>
  </div>
  <div class="compan_logo fl">
    <div class="logo_top">
      <a href="http://www.mofcom.gov.cn/" target="_blank">
        <img src="<?php echo get_template_directory_uri(); ?>/img/201605201652226770.png" width="135" height="67" /></a>
    </div>
    <div class="logo_btn">中华人民共和国商务部</div>
  </div>
  <div class="compan_logo fl">
    <div class="logo_top">
      <a href="http://www.hunancom.gov.cn/" target="_blank">
        <img src="<?php echo get_template_directory_uri(); ?>/img/201605201654443574.png" width="135" height="67" /></a>
    </div>
    <div class="logo_btn">湖南省商务厅</div>
  </div>
  <div class="compan_logo fl">
    <div class="logo_top">
      <a href="http://www.hnccpit.org/" target="_blank">
        <img src="<?php echo get_template_directory_uri(); ?>/img/201605201703203735.png" width="135" height="67" /></a>
    </div>
    <div class="logo_btn">湖南省贸促会</div>
  </div>
  <div class="compan_logo fl">
    <div class="logo_top">
      <a href="http://crst.kz/" target="_blank">
        <img src="<?php echo get_template_directory_uri(); ?>/img/201605222040035623.png" width="135" height="67" /></a>
    </div>
    <div class="logo_btn">哈萨克斯坦合作商</div>
  </div>
  <div class="compan_logo fl">
    <div class="logo_top">
      <a href="http://nuclin.ru/" target="_blank">
        <img src="<?php echo get_template_directory_uri(); ?>/img/201605242135244306.png" width="135" height="67" /></a>
    </div>
    <div class="logo_btn">俄罗斯莫斯科代表处</div>
  </div>
  <div class="compan_logo fl">
    <div class="logo_top">
      <a href="http://kkanikuli.ru/" target="_blank">
        <img src="<?php echo get_template_directory_uri(); ?>/img/201605251144083222.jpg" width="135" height="67" /></a>
    </div>
    <div class="logo_btn">伊尔库茨克代表处</div>
  </div>
  <div class="compan_logo fl">
    <div class="logo_top">
      <a href="http://lufangbbs.com/" target="_blank">
        <img src="<?php echo get_template_directory_uri(); ?>/img/201608301629412270.png" width="135" height="67" /></a>
    </div>
    <div class="logo_btn">鲁芳俄语论坛</div>
  </div>
  <div class="compan_logo fl">
    <div class="logo_top">
      <a href="http://www.expoural.com/" target="_blank">
        <img src="<?php echo get_template_directory_uri(); ?>/img/201606061100056682.png" width="135" height="67" /></a>
    </div>
    <div class="logo_btn">乌拉尔展览公司</div>
  </div>
  <div class="compan_logo fl">
    <div class="logo_top">
      <a href="http://www.expocentr.ru/" target="_blank">
        <img src="<?php echo get_template_directory_uri(); ?>/img/201606061306447703.png" width="135" height="67" /></a>
    </div>
    <div class="logo_btn">莫斯科国际会展中心</div>
  </div>
  <div class="compan_logo fl">
    <div class="logo_top">
      <a href="http://www.russchinatrade.ru/ru/links" target="_blank">
        <img src="<?php echo get_template_directory_uri(); ?>/img/201606061920072826.png" width="135" height="67" /></a>
    </div>
    <div class="logo_btn">俄罗斯驻中国商务代表处</div>
  </div>
  <div class="compan_logo fl">
    <div class="logo_top">
      <a href="http://minenergo.gov.ru/" target="_blank">
        <img src="<?php echo get_template_directory_uri(); ?>/img/201606061921508947.png" width="135" height="67" /></a>
    </div>
    <div class="logo_btn">俄罗斯能源部</div>
  </div>
  <div class="compan_logo fl">
    <div class="logo_top">
      <a href="http://icsti.biz/" target="_blank">
        <img src="<?php echo get_template_directory_uri(); ?>/img/201606191033117649.png" width="135" height="67" /></a>
    </div>
    <div class="logo_btn">МЦНТИ</div>
  </div>
  <div class="compan_logo fl">
    <div class="logo_top">
      <a href="http://gknt.gov.by/" target="_blank">
        <img src="<?php echo get_template_directory_uri(); ?>/img/201606191051405550.png" width="135" height="67" /></a>
    </div>
    <div class="logo_btn">白俄罗斯科技委</div>
  </div>
  <div class="clear"></div>
</div>






<?php get_footer(); ?>
