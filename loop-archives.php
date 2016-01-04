<?php
//archives loop ie. index.php, archive.php it returns excerpt.
?>
        <?php if(have_posts()):while(have_posts()):the_post(); ?>
          <h3><?php the_title(); ?></h3>
        	<div class="row-fluid">
        	  <?php the_excerpt(); ?>
        	</div><hr />
        <?php endwhile; endif; ?>
