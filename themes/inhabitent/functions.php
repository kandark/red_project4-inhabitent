<?php
remove_action('shutdown', 'wp_ob_end_flush_all', 1);
//Adds script and stylesheets
function inhabitant_files() {
    wp_enqueue_style('inhabitant_styles', get_stylesheet_uri('/build/css/style.min.css'), NULL, microtime());
    wp_enqueue_style('fonts', "https://fonts.googleapis.com/css?family=Lato&display=swap");



}

add_action('wp_enqueue_scripts', 'inhabitant_files');

//Adds theme support - ex: title tag
function inhabitant_features() {
    add_theme_support('title-tag');

    add_theme_support('post-thumbails');


    register_nav_menus(array(
        'main'=>'Main Menu'
    ));
}

add_action('after_setup_theme', 'inhabitent_features');
//widgets
function inhabitent_widgets(){
    register_sidebar(array(
        'name'=>'sidebar Info',
        'id'=>'sidebar-info',
        'description'=>'Add a text block with business hours',
        'before_widget'=>'<aside>',
        'after_widget'=>'</aside>',
        'before_title'=>'<h2 class="widget-hours">',
        'after_title'=>'</h2>'

    ));

}

add_action('widgets_init','inhabitent_widgets');


add_action( 'wp_enqueue_scripts', 'tthq_add_custom_fa_css' );

function tthq_add_custom_fa_css() {
wp_enqueue_style( 'custom-fa', 'https://use.fontawesome.com/releases/v5.0.6/css/all.css' );
}
?>