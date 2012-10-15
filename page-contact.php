<?php get_header(); ?>

<body id="contact">

<?php get_sidebar(header); ?>

<div id="mainBlock">
	
		<?php while ( have_posts() ):

			the_post(); 

			the_content();

		endwhile;

		get_template_part('social');

		get_template_part('contact');

		?>

	
</div>

</body>

<?php get_footer(); ?>