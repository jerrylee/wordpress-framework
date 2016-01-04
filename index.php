<?php get_header(); ?>

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
</section>

<?php get_footer(); ?>
