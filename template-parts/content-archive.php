<div class="card col-3 p-0">
    <img class="card-img-top" src="<?php the_post_thumbnail_url( "thumbnail" ); ?>">
    <div class="card-body">
        <h3>
			<?php
			the_title();
			?>
        </h3>
        <span>
		<?php
		the_date();
		?>
    </span>
        <span>
		<?php
		comments_number();
		?>
    </span>

        <p>
			<?php
			the_excerpt();
			?>
        </p>
        <a href="<?php the_permalink(); ?>">Zobrazit více</a>
    </div>
</div>