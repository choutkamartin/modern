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
<?php
if ( function_exists( 'the_custom_logo' ) ) {
	$custom_logo_id = get_theme_mod( "custom_logo" );
	$logo           = wp_get_attachment_image_src( $custom_logo_id );
}
?>
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="<?= $logo[0] ?>" alt="" width="32" height="32" class="d-inline-block align-text-top">
				<?php
				echo get_bloginfo( "name" );
				?>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
				<?php
				wp_nav_menu(
					array(
						"menu"           => "primary",
						"theme_location" => "primary",
						"container"      => false,
						"menu_class"     => "navbar-nav me-auto mb-2 mb-lg-0",
						"walker"         => new Menu_Walker(),
					)
				)
				?>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
</header>
</body>
</html>