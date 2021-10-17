<?php
get_header();
?>
    <main class="container py-5 clearfix">
        <h1><?php the_title(); ?></h1>
		<?php
		if ( have_posts() ) {
			while ( have_posts() ) {
				the_post();
				get_template_part( "template-parts/content", "page" );
			}
		}
		?>
    </main>
<?php
get_footer();
?>