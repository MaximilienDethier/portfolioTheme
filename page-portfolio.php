<?php get_header(); ?>

<body id="portfolio">

<?php get_sidebar(header); ?>

<div id="mainBlock">
	
	<h1><br />Mes créations</h1>
	
	<div id="containerGallery">
	
		<div id="RSS">
		
			<a id="RSSTitle" href="#" title="Ne manquez rien grâce au flux RSS !"><div id="iconRSS"></div> Suivre via RSS</a>
			
			<?php get_template_part('socialPortfolio'); ?>

		</div>

		<section>

				<?php $loop = new WP_Query( array( 'post_type' => 'works', 'posts_per_page' => 4 ) ); 
				
				$i=0;

				while ( $loop->have_posts() ) : $loop->the_post();?>

				<article id="travailFolio<?php echo $i; ?>">

				  <h2> <?php the_title(); ?> </h2>

				  	<?php if ( has_post_thumbnail() ) { // dans la boucle
					   $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large');
						echo '<a class="gallery" href="' . $large_image_url[0] . '" title="' . the_title_attribute('echo=0') . '" >';
						the_post_thumbnail('medium'); ?>
						<div class="textHover"> 
							<?php echo get_the_content(); ?>
						</div>
						
						<?php echo '</a>';
						}
					?>
				  
				  
				
				  </article>

				<?php $i++;
				endwhile; ?>

		</section>
	
	</div>
	
	<p>Mes talents vous intéressent ? <a href="./?page_id=17" title="Me contacter">N'hésitez pas à me contacter !</a></p>
	
</div>

	<script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.heplbox.js"></script>
	<script>
		jQuery( function() {
			jQuery( 'a.gallery' ).heplbox(); 
		} );
	</script>

</body>

<?php get_footer(); ?>