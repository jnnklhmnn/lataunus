<?php
/**
 * @package lataunus
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		<div class="entry-meta">
			<?php lataunus_posted_on(); ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="entry-content">
		 <?php if (has_post_thumbnail( get_the_ID() )){
		 	the_post_thumbnail( 'thumbnail' );
		 	} ?> 
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'lataunus' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php lataunus_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
