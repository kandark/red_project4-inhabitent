<?php
remove_action('shutdown', 'wp_ob_end_flush_all', 1);
//Adds script and stylesheets
function inhabitant_files() {
    wp_enqueue_style('inhabitant_styles', get_stylesheet_uri('/build/css/style.min.css'), NULL, microtime());
    wp_enqueue_style('fonts', "https://fonts.googleapis.com/css?family=Lato&display=swap");



wp_enqueue_script('inhabitent-search-toggle',get_template_directory_uri() .'/build/js/search-toggle.js',array('jquery'),NULL,true);

}

add_action('wp_enqueue_scripts', 'inhabitant_files');

//Adds theme support - ex: title tag
function inhabitent_features() {
    add_theme_support('title-tag');

    add_theme_support('post-thumbnails');


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
    
        function inhabitent_post_types() {
            register_post_type( 'product', array(
                'has_archive' => true,
                'show_in_rest' => true,
                'public' => true,
                'supports' => array ('title', 'editor', 'thumbnail'),
                'labels' => array(
                    'name' => 'Products',
                    'add_new_item' => 'Add New Product',
                    'edit_item' => 'Edit Product',
                    'all_items' => 'All Products',
                    'singular_name' => 'Product'
                ),
                'menu_icon' => 'dashicons-camera'
            ));
        





// Register Custom Taxonomy



    $labels = array(

        'name'                       => _x('Product Types','Taxonomy General Name', 'Product Type' ),
        'singular_name'              => _x( 'Product type', 'Taxonomy Singular Name', 'Product Type' ),
        'menu_name'                  => __( 'Product type', 'Product Type' ),
        'all_items'                  => __( 'All Items', 'Product Type'),
        'parent_item'                => __( 'Parent Item', 'Product Type' ),
        'parent_item_colon'          => __( 'Parent Item:', 'Product Type' ),
        'new_item_name'              => __( 'New Item Name', 'Product Type' ),
        'add_new_item'               => __( 'Add New Item', 'Product Type' ),
        'edit_item'                  => __( 'Edit Item', 'Product Type' ),
        'update_item'                => __( 'Update Item', 'Product Type' ),
        'view_item'                  => __( 'View Item', 'Product Type' ),
        'separate_items_with_commas' => __( 'Separate items with commas', 'Product Type' ),
        'add_or_remove_items'        => __( 'Add or remove items', 'Product Type'),
        'choose_from_most_used'      => __( 'Choose from the most used', 'Product Type' ),
        'popular_items'              => __( 'Popular Items', 'Product Type' ),
        'search_items'               => __( 'Search Items', 'Product Type' ),
        'not_found'                  => __( 'Not Found', 'Product Type' ),

    );

    $args = array(
        'labels'                     => $labels,
        'hierarchical'               => true,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => true,

    );

    

    register_taxonomy( 'product-type', array( 'product' ), $args );

}


    add_action('init','inhabitent_post_types');

    function inhabitent_adventure_types() {
        register_post_type( 'adventure', array(
            'has_archive' => true,
            'show_in_rest' => true,
            'public' => true,
            'supports' => array ('title', 'editor', 'thumbnail'),
            'labels' => array(
                'name' => 'Adventures',
                'add_new_item' => 'Add New Adventure',
                'edit_item' => 'Edit Adventure',
                'all_items' => 'All Adventures',
                'singular_name' => 'Adventure'
            ),
            'menu_icon' => 'dashicons-store' //find a way to change this to look cool
        ));
    





// Register Custom Taxonomy



$labels = array(

    'name'                       => _x('Adventure Types','Taxonomy General Name', 'Adventure Type' ),
    'singular_name'              => _x( 'Adventure type', 'Taxonomy Singular Name', 'Adventure Type' ),
    'menu_name'                  => __( 'Adventure type', 'Adventure Type' ),
    'all_items'                  => __( 'All Items', 'Adventure Type'),
    'parent_item'                => __( 'Parent Item', 'Adventure Type' ),
    'parent_item_colon'          => __( 'Parent Item:', 'Adventure Type' ),
    'new_item_name'              => __( 'New Item Name', 'Adventure Type' ),
    'add_new_item'               => __( 'Add New Item', 'Adventure Type' ),
    'edit_item'                  => __( 'Edit Item', 'Adventure Type' ),
    'update_item'                => __( 'Update Item', 'Adventure Type' ),
    'view_item'                  => __( 'View Item', 'Adventure Type' ),
    'separate_items_with_commas' => __( 'Separate items with commas', 'Adventure Type' ),
    'add_or_remove_items'        => __( 'Add or remove items', 'Adventure Type'),
    'choose_from_most_used'      => __( 'Choose from the most used', 'Adventure Type' ),
    'popular_items'              => __( 'Popular Items', 'Adventure Type' ),
    'search_items'               => __( 'Search Items', 'Adventure Type' ),
    'not_found'                  => __( 'Not Found', 'Adventure Type' ),

);

$args = array(
    'labels'                     => $labels,
    'hierarchical'               => true,
    'public'                     => true,
    'show_ui'                    => true,
    'show_admin_column'          => true,
    'show_in_nav_menus'          => true,
    'show_tagcloud'              => true,

);



register_taxonomy( 'adventure-type', array( 'adventure' ), $args );

}


add_action('init','inhabitent_adventure_types');





function inhabitent_adjust_product($query) {
    if(!is_admin() && is_post_type_archive('product')) :
    $query->set('order', 'ASC');
    $query->set('orderby', 'title');
    $query->set('posts_per_page', '16');
    endif; 
}
add_action('pre_get_posts', 'inhabitent_adjust_product');

add_action( 'wp_enqueue_scripts', 'tthq_add_custom_fa_css' );

function tthq_add_custom_fa_css() {
wp_enqueue_style( 'custom-fa', 'https://use.fontawesome.com/releases/v5.0.6/css/all.css' );
}
?>