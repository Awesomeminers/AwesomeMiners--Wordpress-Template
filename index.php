<?php get_header(); ?>
		
	<div id="content_box">

				<div id="main">
			 
				  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						 <div class="entry">
							<div class="headline_entry">
								<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
								<underline>Erstellt am <b><?php the_time(); ?></b> von <b><?php the_author(); ?></b></underline>
								</div>
									
									
									<div class="content_entry"><?php the_content(); ?></div>
										<div class="footer_entry">
											<underline><a href="<?php the_permalink() ?>"><b><?php comments_number( 'Keine Kommentare', '1 Kommentar', '% Kommentare' ); ?></b></a></underline>
										</div>
							</div>
				  <?php endwhile; ?>
 
			<p align="center"><?php next_posts_link('&laquo; &Auml;ltere Eintr&auml;ge') ?> | <?php previous_posts_link('Neuere Eintr&auml;ge &raquo;') ?></p>
 
      <?php endif; ?>
			 
			   </div><!-- main -->
			 
		   <div id="sidebar">
				<?php get_sidebar(); ?>
		   </div><!-- sidebar --> 

	</div>

<?php get_footer(); ?>