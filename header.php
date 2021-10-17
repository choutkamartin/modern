<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<?php
	wp_head();
	?>
</head>
<body>
<header>
    <a>
		<?php
		echo get_bloginfo( "name" );
		?>
    </a>
	<?php
	if ( function_exists( 'the_custom_logo' ) ) {
		$custom_logo_id = get_theme_mod( "custom_logo" );
		$logo           = wp_get_attachment_image_src( $custom_logo_id );
	}
	?>
    <img src="<?= $logo[0] ?>"
	<?php
	wp_nav_menu(
		array(
			"menu"           => "primary",
			"theme_location" => "primary",
			"walker"         => new Menu_Walker(),
		)
	)
	?>
</header>
</body>
</html>