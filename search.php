<?php get_header(); ?>

	<div class="container">


			<h1><span><?php echo sprintf( __( '%s Search Results for ', 'webfactor' ), $wp_query->found_posts ); echo get_search_query(); ?></span></h1>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>



</div>

<?php get_footer(); ?>
