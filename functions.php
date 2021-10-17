<?php

class Menu_Walker extends Walker_Nav_Menu {

	public function start_lvl( &$output, $depth = 0, $args = array() ) {
		if ( $depth === 0 ) {
			$output .= '<ul class="dropdown-menu" aria-labelledby="navbarDropdown">';
		}
		if ( $depth === 1 ) {
			$output .= '<ul class="dropdown-menu" aria-labelledby="navbarDropdown">';
		}
	}

	function start_el( &$output, $item, $depth = 0, $args = [], $id = 0 ) {
		if ( $args->walker->has_children ) {
			$output .= "<li class='nav-item dropdown" . implode( " ", $item->classes ) . "'>";
		} else {
			$output .= "<li class='nav-item" . implode( " ", $item->classes ) . "'>";
		}

		if ( $item->url && $item->url != '#' && $depth !== 0 && ( $args->walker->has_children == false ) ) {
			$output .= '<a class="dropdown-item" href="' . $item->url . '">';
		} else if ( $args->walker->has_children == false ) {
			$output .= '<span>';
		}

		if ( $item->url && $item->url != '#' && $depth == 0 && ( $args->walker->has_children == false ) ) {
			$output .= '<a class="nav-link" href="' . $item->url . '">';
		} else if ( $args->walker->has_children == false ) {
			$output .= '<span>';
		}

		if ( $item->url == false && $args->walker->has_children == true ) {
			$output .= '<a class="nav-link dropdown-toggle" id="navbarDropdown" role="button"
                           data-bs-toggle="dropdown" aria-expanded="false">';
		}

		if ( $item->url == true && $args->walker->has_children == true ) {
			$output .= '<a class="nav-link dropdown-toggle" href="' . $item->url . '" id="navbarDropdown" role="button"
                           data-bs-toggle="dropdown" aria-expanded="false">';
		}

		$output .= $item->title;

		if ( $item->url == true && $args->walker->has_children == true ) {
			$output .= '</a>';
		}

		if ( $item->url == false && $args->walker->has_children == true ) {
			$output .= '</a>';
		}

		if ( $item->url && $item->url != '#' && ( $args->walker->has_children == false ) ) {
			$output .= '</a>';
		} else if ( $args->walker->has_children == false ) {
			$output .= '</span>';
		}
	}
}

function modern_theme_support() {
	add_theme_support( "title-tag" );
	add_theme_support( "custom-logo" );
	add_theme_support( "post-thumbnails" );
}

add_action( "after_setup_theme", "modern_theme_support" );

function modern_menus() {
	$locations = array(
		"primary" => "Horní hlavička",
		"footer"  => "Patička"
	);

	register_nav_menus( $locations );
}

add_action( "init", "modern_menus" );

function modern_register_styles() {
	$version = wp_get_theme()->get( "Version" );
	wp_enqueue_style( "modern", get_template_directory_uri() . "/style.css", array( "bootstrap" ), rand(111,9999), "all" );
	wp_enqueue_style( "bootstrap", "https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css", array(), "5.1.3", "all" );
}

add_action( "wp_enqueue_scripts", "modern_register_styles" );

function modern_register_scripts() {
	wp_enqueue_script( "popper", get_template_directory_uri() . "https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js", array(), "2.10.2", "all" );
	wp_enqueue_script( "bootstrapjs", "https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js", array( "popper" ), "5.1.3", "all" );
}

add_action( "wp_enqueue_scripts", "modern_register_scripts" );

function modern_widget_areas() {

	register_sidebar( array(
		"name"          => "Horní záhlaví",
		"id"            => "topbar",
		"description"   => "Oblast záhlaví",
		"before-title"  => "",
		"after-title"   => "",
		"before-widget" => "",
		"after-widget"  => "",
	) );

	register_sidebar( array(
		"name"          => "Záhlaví",
		"id"            => "header",
		"description"   => "Oblast záhlaví",
		"before-title"  => "",
		"after-title"   => "",
		"before-widget" => "",
		"after-widget"  => "",
	) );

	register_sidebar( array(
		"name"          => "Zápatí",
		"id"            => "footer",
		"description"   => "Oblast zápatí",
		"before-title"  => "",
		"after-title"   => "",
		"before-widget" => "",
		"after-widget"  => "",
	) );

	register_sidebar( array(
		"name"          => "Horní zápatí",
		"id"            => "footer-top",
		"description"   => "Oblast horního zápatí",
		"before-title"  => "",
		"after-title"   => "",
		"before-widget" => "",
		"after-widget"  => "",
	) );

	register_sidebar( array(
		"name"          => "Střední zápatí",
		"id"            => "footer-middle",
		"description"   => "Oblast středního zápatí",
		"before-title"  => "",
		"after-title"   => "",
		"before-widget" => "",
		"after-widget"  => "",
	) );

	register_sidebar( array(
		"name"          => "Spodní zápatí",
		"id"            => "footer-bottom",
		"description"   => "Oblast spodního zápatí",
		"before-title"  => "",
		"after-title"   => "",
		"before-widget" => "",
		"after-widget"  => "",
	) );
}

add_action( "widgets_init", "modern_widget_areas" );

?>