<?php

function add_recourses(){
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'add_recourses');


function basic_register_menu(){
    register_nav_menus(array(
        'menu-navigation'=>'Menu de navegação'
    ));
}
add_action('init', 'basic_register_menu');