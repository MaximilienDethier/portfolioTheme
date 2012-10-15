<?php get_header(); ?>

<body id="blog">

<?php get_sidebar(header); ?>

<div id="mainBlock">

	<h1><br />Mon actu, mes bons plans</h1>
	
	<div id="containerGallery">
	
		<div id="RSS">
		
			<a id="RSSTitle" href="#" title="Ne manquez rien grâce au flux RSS !"><span id="iconRSS"></span>Suivre via RSS</a>
			
			<?php get_template_part('socialPortfolio'); ?>
			
		</div>
			
			<section>
				
				<?php
					$recentPosts = new WP_Query();
					$recentPosts->query('showposts=5');
				?>
				<?php while ($recentPosts->have_posts()) : $recentPosts->the_post(); ?>
					<article>
						
						<a href="<?php the_permalink() ?>" rel="bookmark"><h2><?php the_title(); ?> </h2> </a>

						<span class="date">Le <?php the_date(); ?></span>
					
						<?php if ( has_post_thumbnail() ) { // dans la boucle
							   $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large');
								echo '<a class="gallery" href="' . $large_image_url[0] . '" title="' . the_title_attribute('echo=0') . '" >';
								the_post_thumbnail('medium');
								echo '</a>';
							}
						?>
												
						<p class="articleFloat"><?php echo get_the_content(); ?></p>
										
						
					</article>
				<?php endwhile; ?>


				
			</section>
	
	</div>
	
</div>
		
		<script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.heplbox.js"></script>
		<script>
			jQuery( function() {
				jQuery( 'a.gallery' ).heplbox(); 
			} );
		</script>


</body>

<?php get_footer(); ?>