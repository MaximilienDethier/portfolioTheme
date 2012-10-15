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
				<article>
				
				<?php while ( have_posts() ) : the_post(); ?>

					<nav id="nav-single">
						<h3 class="assistive-text"><?php _e( 'Post navigation', 'twentyeleven' ); ?></h3>
						<span class="nav-previous"><?php previous_post_link( '%link', __( '<span class="meta-nav">&larr;</span> Previous', 'twentyeleven' ) ); ?></span>
						<span class="nav-next"><?php next_post_link( '%link', __( 'Next <span class="meta-nav">&rarr;</span>', 'twentyeleven' ) ); ?></span>
					</nav><!-- #nav-single -->
					
					<?php get_template_part( 'content', 'single' ); ?>
					
					<div id="categoPost">
					<h3>Catégories du Post :</h3>
					<?php the_terms($post->id, "techniques"); ?>
					</div>

				<?php endwhile; // end of the loop. ?>
				
				</article>
			</section>
		</div>

	</body>


<?php get_footer(); ?>