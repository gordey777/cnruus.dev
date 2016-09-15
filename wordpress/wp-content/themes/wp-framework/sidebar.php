
<aside class="sidebar" role="complementary">

  <?php if ( is_active_sidebar('widgetarea1') ) : ?>
    <?php dynamic_sidebar( 'widgetarea1' ); ?>
  <?php else : ?>

    <!-- If you want display static widget content - write code here
    RU: Здесь код вывода того, что необходимо для статического контента виджетов -->

  <?php endif; ?>

  </aside><!-- /sidebar -->
      <div class="contactn mt10 mb10">
      <?php if( have_rows('sidebar_contacts', 15) ): ?>
        <?php while ( have_rows('sidebar_contacts', 15) ) : the_row(); ?>

          <div class="tits">
            <h4>
            <a href="<?php the_sub_field('contacts_link'); ?>" target="_blank">
              <?php the_sub_field('contacts_title'); ?>
            </a> </h4>
          </div>
          <div class="subnr">
            <?php $image = get_sub_field('contacts_image');
            if( !empty($image) ): ?>
              <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" width="100%">
            <?php endif; ?>
            <?php the_sub_field('contacts_content'); ?>
          </div>

        <?php  endwhile;
        else : ?>
      <?php endif; ?>
        </div>



      <?php if( have_rows('sidebar_image', 15) ): ?>
        <?php while ( have_rows('sidebar_image', 15) ) : the_row(); ?>

            <a href="<?php the_sub_field('contacts_link'); ?>" target="_blank">
            <?php $image = get_sub_field('contacts_image');
            if( !empty($image) ): ?>
              <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" width="100%">
            <?php endif; ?>
            </a>

        <?php  endwhile;
        else : ?>
      <?php endif; ?>








