<?php
/*
Template Name: Bez titulku
*/
get_header();
?>

<?php
add_filter( "the_title", function ( $title ) {
	return "";
} );
?>
    <main class="container py-5">
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( "template-parts/content", "page" ); ?>
		<?php endwhile; ?>
    </main>

<?php get_footer(); ?>