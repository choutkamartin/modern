<?php
get_header();
?>
    <main class="container py-5">
        <h1 class="mb-3">Blog</h1>
        <div class="container d-grid">
            <section class="row gap-5">
				<?php
				if ( have_posts() ) {
					while ( have_posts() ) {
						the_post();
						get_template_part( "template-parts/content", "archive" );
					}
				}
				?>
            </section>
        </div>
		<?php
		the_posts_pagination();
		?>
    </main>
<?php
get_footer();
?>