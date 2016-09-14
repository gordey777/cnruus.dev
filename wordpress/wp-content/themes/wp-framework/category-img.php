<?php get_header(); ?>


 <div class="clear mt10"></div>

      <div class="left">
        <div class="fenleis mb10 ">
          <div class="nr">




              <?php $category = get_the_category();
              if (is_category()) {
                $this_category = get_category($cat);
                if($this_category->category_parent) {
                  $this_category = wp_list_categories(
                    array(
                      'show_option_none'   => '',
                      'hide_empty'         => 0,
                      'orderby'            => 'name',
                      'show_count'         => '0',
                      'current_category'   => ''.$category[0]->cat_ID.'',
                      'title_li'           => '',
                      'use_desc_for_title' => '0',
                      'child_of'           => ''.$this_category->category_parent.'',
                      'echo'               => '0',
                      'walker'             => new Subcategory_Walker_Category )
                    );
                }
                else {

                  $this_category = wp_list_categories(
                    array(


                      'show_option_none'   => '',
                      'hide_empty'         => 0,
                      'orderby'            => 'name',
                      'depth'              => '1',
                      'show_count'         => '0',
                      'current_category'   => ''.$category[0]->cat_ID.'',
                      'title_li'           => '',
                      'use_desc_for_title' => '0',
                      'child_of'           => ''.$this_category->cat_ID.'',
                      'echo'               => '0',
                      'walker'             => new Subcategory_Walker_Category )
                    );
                }
              }
              elseif ( is_single()) {
                if($category[0]->category_parent) {
                  $this_category = wp_list_categories(
                    array(
                      'show_option_none'   => '',
                      'hide_empty'         => 0,
                      'orderby' => 'name',
                      'show_count' => '0',
                      'current_category' => ''.$category[0]->cat_ID.'',
                      'title_li' => '',
                      'use_desc_for_title' => '0',
                      'child_of' => ''.$category[0]->category_parent.'',
                      'echo' => '0', 'walker' => new Subcategory_Walker_Category )
                    );
                }
                else {
                  $this_category = wp_list_categories(
                    array(
                      'show_option_none'   => '',
                      'hide_empty'         => 0,
                      'orderby' => 'name',
                      'show_count' => '0',
                      'current_category' => ''.$category[0]->cat_ID.'',
                      'title_li' => '',
                      'use_desc_for_title' => '0',
                      'child_of' => ''.$category[0]->cat_ID.'',
                      'echo' => '0',
                      'walker' => new Subcategory_Walker_Category )
                    );
                }
              }
              ?>


            <h3><?php the_category('', 'multiple'); ?></h3>

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


                if( is_category() )
                echo get_queried_object()->name; ?>


            </span>
          </div>

            <div class="nr">

                <?php if (have_posts()): while (have_posts()) : the_post(); ?>
                    <dl class="dls">
                        <dt class="dt-img">
                          <a rel="nofollow" class="feature-img" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                              <?php if ( has_post_thumbnail()) :
                                the_post_thumbnail('medium');
                              else: ?>
                                <img src="<?php echo catchFirstImage(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
                              <?php endif; ?>
                          </a><!-- /post thumbnail -->
                        </dt>
                        <dd>
                          <a href="<?php the_permalink(); ?>" target="_blank" title="<?php the_title(); ?>" class="dt_1">
                            <?php trim_title_chars(30, '...'); ?>
                          </a>
                        </dd>
                    </dl>

                <?php endwhile; else: ?>
                  <div>
                    <h2 class="title"><?php _e( 'Sorry, nothing to display.', 'wpeasy' ); ?></h2>
                  </div><!-- /article -->
                <?php endif; ?>

            <div class="clear"></div>
            <div class="page">
               <?php get_template_part('pagination'); ?>
            </div>
          </div>

        </div>
      </div>




<?php get_footer(); ?>
