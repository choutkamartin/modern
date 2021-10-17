<?php
/*
Template Name: Plná šířka
*/
get_header();
?>

    <main>
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( "template-parts/content", "page" ); ?>
		<?php endwhile; ?>
    </main>

<?php get_footer(); ?>