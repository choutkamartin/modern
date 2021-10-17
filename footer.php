<footer>
    <footer class="text-center text-lg-start bg-light text-muted">
        <section
                class="p-4 border-bottom"
        >
			<?php
			dynamic_sidebar( "footer-top" );
			?>
        </section>
        <section class="">
            <div class="container text-center text-md-start mt-5">
                <div class="row mt-3">
					<?php
					dynamic_sidebar( "footer-middle" );
					?>
                </div>
            </div>
        </section>
        <div class="p-4" style="background-color: rgba(0, 0, 0, 0.05);">
            <div>
				<?php
				dynamic_sidebar( "footer-bottom" )
				?>
            </div>
            <div class="d-flex justify-content-center gap-3">
                <a class="" href="<?php echo home_url( "/" ); ?>">Modern Theme </a>
                <span>© <?php echo date( "Y" ); ?></span>
            </div>
        </div>
    </footer>
</footer>
<?php
wp_footer();
?>