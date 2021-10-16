<?php
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