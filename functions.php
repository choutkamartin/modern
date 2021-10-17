<?php

class Menu_Walker extends Walker_Nav_Menu
{
    function start_el(&$output, $item, $depth = 0, $args = [], $id = 0)
    {
        $output .= "<li class='" . implode(" ", $item->classes) . "'>";

        if ($item->url && $item->url != '#') {
            $output .= '<a href="' . $item->url . '">';
        } else {
            $output .= '<span>';
        }

        $output .= $item->title;

        if ($item->url && $item->url != '#') {
            $output .= '</a>';
        } else {
            $output .= '</span>';
        }

        if ($args->walker->has_children) {
            $output .= '<i class=""></i>';
        }
    }
}

function modern_theme_support()
{
    add_theme_support("title-tag");
    add_theme_support("custom-logo");
    add_theme_support("post-thumbnails");
}

add_action("after_setup_theme", "modern_theme_support");

function modern_menus()
{
    $locations = array(
        "primary" => "Horní hlavička",
        "footer" => "Patička"
    );

    register_nav_menus($locations);
}

add_action("init", "modern_menus");

function modern_register_styles()
{
    $version = wp_get_theme()->get("Version");
    wp_enqueue_style("modern", get_template_directory_uri() . "/style.css", array("bootstrap"), $version, "all");
    wp_enqueue_style("bootstrap", "https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css", array(), "5.1.3", "all");
}

add_action("wp_enqueue_scripts", "modern_register_styles");

function modern_register_scripts()
{
    wp_enqueue_script("popper", get_template_directory_uri() . "https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js", array(), "2.10.2", "all");
    wp_enqueue_script("bootstrapjs", "https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js", array("popper"), "5.1.3", "all");
}

add_action("wp_enqueue_scripts", "modern_register_scripts");

?>