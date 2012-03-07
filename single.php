<?php get_header(); ?>
 
	<div id="content_box">

			   <div id="main">
			 
					  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

						 <div class="headline_entry">
							<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
						 </div>

								 <div id="meta">
									<underline>Erstellt am <b><?php the_date(); ?></b> um <b><?php the_time(); ?></b> von <b><?php the_author(); ?></b></underline>
								 </div>

							 <div class="entry">
								<?php the_content(); ?>
							 </div>

						  <?php endwhile; endif; ?>

					  <?php comments_template(); ?>
				 
				</div><!-- main -->
				 
			   <div id="sidebar"><?php get_sidebar(); ?></div><!-- sidebar --> 
		 
	</div><!-- content_box --> 

<?php get_footer(); ?>