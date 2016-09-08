<?php get_header(); ?>

      <div class="clear mt10"></div>

      <div class="left">

          <?php get_sidebar(); ?>

      </div>

      <div class="right">
        <div class="tuijian border">
  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <h1 class="ctitle"><?php _e( 'Page not found', 'wpeasy' ); ?></h1>
    <h2><a href="<?php echo home_url(); ?>"><?php _e( 'Return home?', 'wpeasy' ); ?></a></h2>
      </article>
        </div>
      </div>

<?php get_footer(); ?>
