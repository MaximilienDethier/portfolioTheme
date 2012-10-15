<?php get_header(); ?>

<body id="home">

<div id="disclaimer">

</div>

<div id="container">
	
	<nav id="mainNav">
		<a id="symbol" href="#" title="Retour à la page d'accueil">Home</a>
		
		<ul>
			<li id="currentPage"><a href="#" title="Retour à la page d'accueil">Home</a></li>
			<li><a href="./?page_id=14" title="Découvrez toutes mes créations !">Portfolio</a></li>
			<li><a href="./?page_id=19" title="Découvrez mes connaissances, mon expérience, ...">Expérience</a></li>
			<li><a href="./?page_id=17" title="Pour me joindre, c'est par ici">Contact</a></li>
			<li><a href="./?page_id=21" title="Suivez mon actu">Blog</a></li>
		</ul>
	</nav>
</div>

<div id="mainBlock">
	
		<?php while ( have_posts() ):

			the_post(); 

		endwhile;?>
	
</div>

</body>

<?php get_footer(); ?>