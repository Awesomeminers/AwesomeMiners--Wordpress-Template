<div id="kommentare">
	
  <underline><?php comments_number( 'Keine Kommentare', '1 Kommentar', '% Kommentare' ); ?></underline><br><br>

   <?php foreach ($comments as $comment) : ?>
 
      <div class="comment" id="comment-<?php comment_ID() ?>">
 
         <underline><b><?php comment_author_link() ?></b> sagte am <b><?php comment_date('j. F Y') ?></b> um <b><?php comment_time('H:i') ?></b> :</underline>
		 <br><br>
 
				<div id="comment_avatar"><?php echo get_avatar($comment,$size='50'); ?></div>

					 <div id="comment_text"><?php comment_text() ?>
			 
					  <?php if ($comment->comment_approved == '0') : ?>
						<strong>Achtung: Dein Kommentar muss erst noch freigegeben werden.</strong><br />
					 <?php endif; ?>
	 
			</div>
<div style='clear:both'>&nbsp;</div>
		</div>

   <?php endforeach; /* end for each comment */ ?>

 

</div><!-- kommentare -->




<div id="kommentar_formular">
 
<h3 id="respond">Kommentar schreiben</h3>
 
<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
 

<?php
if ( is_user_logged_in() ) {
?>


	<p>
      Kommentar
      <textarea name="comment" id="comment" style="width: 490px;" rows="10" tabindex="3"></textarea>
   </p>
 


   <p>
      <input name="submit" type="submit" id="submit" tabindex="5" value="Kommentar abschicken" tabindex="4" />
      <input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
   </p>

   

<?php
} else {
?> 
    


	<p>
      <input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="22" tabindex="1" />
      <label for="author">Name</label>
   </p>
 


   <p>
      <input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="22" tabindex="2" />
      <label for="email">Email <small>(wird nicht veröffentlicht)</small></label>
   </p>
 


   <p>
      Kommentar
      <textarea name="comment" id="comment" style="width: 490px;" rows="10" tabindex="3"></textarea>
   </p>
 


   <p>
      <input name="submit" type="submit" id="submit" tabindex="5" value="Kommentar abschicken" tabindex="4" />
      <input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
   </p>



<?php }
?>



<?php do_action('comment_form', $post->ID); ?>
 
</form>
 
</div> <!-- kommentar_formular -->


