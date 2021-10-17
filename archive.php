<?php
get_header();
?>
    <main class="container py-5">
        <h1>Blog</h1>
		<?php
		if ( have_posts() ) {
			while ( have_posts() ) {
				the_post();
				get_template_part( "template-parts/content", "archive" );
			}
		}
		?>
    </main>
<?php
get_footer();
?>