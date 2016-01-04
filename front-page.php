<?php get_header(); ?>
<!-- splash, either partials/splash-image.php for background image, or partials/splash-carousel.php for carousel. -->
      <?php get_template_part('partials/splash-image'); ?>
<!--/ splash -->
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
