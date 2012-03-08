<?php get_header(); ?>
 <div id="content_box">
   
    <div id="main">
      <?php if (have_posts()) : ?>
	  <br>
         <p class="info">Deine Suchergebnisse f&uuml;r <strong><?php echo $s ?></strong></p>
			<br>
         <?php while (have_posts()) : the_post(); ?>
            <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>

            <div class="entry">
               <?php the_content(); ?>
			</div>
         
				  <?php endwhile; ?>
			 
					 <p align="center"><?php next_posts_link('&laquo; &Auml;ltere Eintr&auml;ge') ?> | <?php previous_posts_link('Neuere Eintr&auml;ge &raquo;') ?></p>
			 
				  <?php else : ?>
					 <h2>Leider nichts gefunden</h2>
			 
				  <?php endif; ?>


			</div><!-- main -->
	 
		<div id="sidebar"> <?php get_sidebar(); ?> </div><!-- sidebar --> 

	 </div><!-- contnet_box --> 


<?php get_footer(); ?>