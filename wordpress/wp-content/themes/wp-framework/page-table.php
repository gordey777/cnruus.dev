<?php /* Template Name: Table Page */ get_header(); ?>


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
              <?php wp_reset_postdata(); ?>
            </h3>


            <?php echo(wpb_list_child_pages()); ?>

          </div>
        </div>
          <?php get_sidebar(); ?>
      </div>




      <div class="right">

        <div class="tuijian border">
            <?php if (have_posts()): while (have_posts()) : the_post(); ?>
              <div class="tjbt ">
                <span class="fl">
                <?php the_title(); ?>

                </span>
              </div>
            <div class="zh_con">
                <table width="100%">
                    <tbody>

                    <tr>
                        <th width="20%">Дата</th>
                        <th width="60%">Название выставки</th>
                        <th width="20%">Место проведения</th>
                    </tr>

                      <?php if( have_rows('expo_info') ): ?>
                        <?php while ( have_rows('expo_info') ) : the_row(); ?>

                        <tr>

                          <td width="20%">
                            <?php the_sub_field('data'); ?>
                          </td>

                          <td width="60%">
                            <?php
                            $post_object = get_sub_field('title');
                            if( $post_object ):
                              $post = $post_object;
                              setup_postdata( $post );
                            ?>
                                <a href="<?php the_permalink(); ?>" target="_blank" title="Международная выставка" class="dt_1">
                                  <?php the_title(); ?>
                                  </a>
                              <?php wp_reset_postdata(); ?>
                            <?php endif; ?>
                          </td>

                          <td width="20%">
                            <?php the_sub_field('city'); ?>
                          </td>

                        </tr>

                        <?php  endwhile;
                        else : ?>
                      <?php endif; ?>
                </tbody>
                </table>
                <div class="clear"></div>
                <div class="page">

                  <!-- AspNetPager 7.3.2  Copyright:2003-2010 Webdiyer (www.webdiyer.com) -->
                  <div id="ctl00_ContentPlaceHolder1_AspNetPager1" class="paginator">
                  <a disabled="disabled" style="margin-right:5px;">首页</a><a disabled="disabled" style="margin-right:5px;">上一页</a><span class="cpb" style="margin-right:5px;">1</span><a href="javascript:__doPostBack('ctl00$ContentPlaceHolder1$AspNetPager1','2')" style="margin-right:5px;">2</a><a href="javascript:__doPostBack('ctl00$ContentPlaceHolder1$AspNetPager1','3')" style="margin-right:5px;">3</a><a href="javascript:__doPostBack('ctl00$ContentPlaceHolder1$AspNetPager1','4')" style="margin-right:5px;">4</a><a href="javascript:__doPostBack('ctl00$ContentPlaceHolder1$AspNetPager1','2')" style="margin-right:5px;">下一页</a><a href="javascript:__doPostBack('ctl00$ContentPlaceHolder1$AspNetPager1','4')" style="margin-right:5px;">尾页</a>
                  </div>
                  <!-- AspNetPager 7.3.2  Copyright:2003-2010 Webdiyer (www.webdiyer.com) -->


                </div>
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



