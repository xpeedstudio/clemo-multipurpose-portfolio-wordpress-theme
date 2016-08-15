<?php
/**
 * @package _spx
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php the_content(); ?>
	<?php wp_link_pages(array(
	    'before' => '<p>' . __('Pages: ', 'clemo'),
	    'after' => '</p>',
	    'next_or_number' => 'next_and_number', # activate parameter overloading
	    'nextpagelink' => __('Next ', 'clemo'),
	    'previouspagelink' => __(' Previous', 'clemo'),
	    'pagelink' => '%',
	    'echo' => 1 )
	); ?>
	<hr>
	<?php clemo_post_tags(); ?>

	<footer class="entry-footer">
		<?php edit_post_link( __( 'Edit', 'clemo' ), '<div class="edit-link">', '</div>' ); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
