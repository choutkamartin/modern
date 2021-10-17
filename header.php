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

    <?php
    if (function_exists('the_custom_logo')) {
        the_custom_logo();
    }
    ?>
    <?php
    wp_nav_menu(
        array(
            "menu" => "primary",
            "theme_location" => "primary",
            "walker" => new Menu_Walker(),
        )
    )
    ?>

</header>
</body>
</html>