<?php
function modern_register_styles()
{
    $version = wp_get_theme()->get("Version");
    wp_enqueue_style("modern", get_template_directory_uri() . "/style.css", array("bootstrap"), $version, "all");
    wp_enqueue_style("bootstrap", "https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css", array(), "1.0", "all");
}

add_action("wp_enqueue_scripts", "modern_register_styles");

?>