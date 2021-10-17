<article>
    <img src="<?php the_post_thumbnail_url( "thumbnail" ); ?>">
    <h1>
		<?php
		the_title();
		?>
    </h1>
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
</article>