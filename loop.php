<?php
//standard loop
?>
        <?php if(have_posts()):while(have_posts()):the_post(); ?>
          <h1><?php the_title(); ?></h1>
        	<div class="row-fluid">
        	  <?php the_content(); ?>
        	</div>
        <?php endwhile; endif; ?>
