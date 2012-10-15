<?php
/**
 * The template for displaying content in the single.php template
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h2 class="entry-title"><?php the_title(); ?></h2>
		
		<?php if ( 'post' == get_post_type() ) : ?>
		<div class="entry-meta">
			<?php the_date(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'portfolioTheme' ) . '</span>', 'after' => '</div>' ) ); ?>
	</div><!-- .entry-content -->

			<?php if ( has_post_thumbnail() ) { // dans la boucle
		    $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large');
			echo '<a class="gallery" href="' . $large_image_url[0] . '" title="' . the_title_attribute('echo=0') . '" >';
			the_post_thumbnail('medium');
			echo '</a>';
			}
		?>

		<?php edit_post_link( __( 'Edit', 'portfolioTheme' ), '<span class="edit-link">', '</span>' ); ?>


	</footer><!-- .entry-meta -->
</article><!-- #post-<?php the_ID(); ?> -->
