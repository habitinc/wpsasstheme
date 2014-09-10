<?php
/**
 * The most basic template
 *
 * @package WordPress
 * @subpackage NAME ME
 * @since 1.0
 */

get_header(); ?>

<?php /* The loop */ ?>
<?php while ( have_posts() ) : the_post(); ?>

	<article class="wrapper">
		<h1><?php the_title(); ?></h1>
		<?php the_content(); ?>		
	</article>
	
<?php endwhile; ?>
<?php /* End the loop */?>

<?php get_footer(); ?>
