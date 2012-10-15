<?php get_header(); ?>

<body id="home">

<?php get_sidebar(header); ?>

<div id="mainBlock">
	
		<?php while ( have_posts() ):

			the_post(); 

			the_content();

		endwhile;?>

		<?php $loop = new WP_Query( array( 'post_type' => 'page', 'posts_per_page' => 4 ) ); 
		
		$i = 0;

		while ( $loop->have_posts() ) : $loop->the_post();?>

		<p id="blockResume<?php echo $i; ?>"><a title="" href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a> <?php echo get_the_excerpt(); ?> </p>
		
		<?php $i++; 
			endwhile; ?>
	
</div>

</body>

<?php get_footer(); ?>