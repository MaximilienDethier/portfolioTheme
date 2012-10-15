<?php get_header(); ?>

<body id="comp">

<?php get_sidebar(header); ?>

<div id="mainBlock">

		<?php while ( have_posts() ):

			the_post(); 

			the_content();

			get_template_part('skills');

		endwhile;?>
	

	
</div>

</body>

<?php get_footer(); ?>