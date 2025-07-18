<!DOCTYPE html>
<html lang="pt_br">
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?= get_template_directory_uri() . '/css/style.css' ?>">
</head>
<body>
    <?php

    the_custom_logo();

    wp_nav_menu(
        array(
            'menu' =>'menu-navigation'
        )
    );
