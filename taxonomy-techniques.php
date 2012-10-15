<?php get_header(); ?>

<body id="blog">

<div id="disclaimer">
</div>

<div id="container">
	
	<nav id="mainNav">
		<a id="symbol" href="/wordpress" title="Retour à la page d'accueil">Home</a>
		
		<ul>
			<li><a href="/wordpress" title="Retour à la page d'accueil">Home</a></li>
			<li><a href="./?page_id=14" title="Découvrez toutes mes créations !">Portfolio</a></li>
			<li><a href="./?page_id=19" title="Découvrez mes connaissances, mon expérience, ...">Expérience</a></li>
			<li><a href="./?page_id=17" title="Pour me joindre, c'est par ici">Contact</a></li>
			<li id="currentPage"><a href="./?page_id=21" title="Suivez mon actu">Blog</a></li>
		</ul>
	</nav>
</div>

<div id="mainBlock">

	<h1><br />Mon actu, mes bons plans</h1>

				<section>
				
				<h2 id="tagH1">
				
				- Articles classés sous le tag
				
				<?php $term = get_term_by("slug", get_query_var("term"), get_query_var("taxonomy"));
				echo $term ->name;?> -
				
				</h2>
				
				<?php while ( have_posts() ) : the_post(); ?>
				<article>					
					<?php get_template_part( 'content', 'single' ); ?>
					
					<div id="categoPost">
					<h3>Catégories du Post :</h3>
					<?php the_terms($post->id, "techniques"); ?>
					</div>
					
				</article>
				<?php endwhile; // end of the loop. ?>
				
			</section>

</div>

	</body>


<?php get_footer(); ?>