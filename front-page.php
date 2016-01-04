<?php get_header(); ?>

<section id="splash">
  <div class="container">
    <div class="row-fluid">Splash Image or Slider</div>
  </div><!--/container-->
</section><!--/splash-->

<section id="main-content">
  <div class="container">
    <div class="row">
      <div class="col-sm-8">
        <?php get_template_part('loop', 'index'); ?>
      </div>
      <div class="col-sm-4">
        <?php get_sidebar(); ?>
      </div>
    </div>
  </div>
</section><!--/main-content-->

<?php get_footer(); ?>
