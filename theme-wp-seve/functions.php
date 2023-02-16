<?php 
add_theme_support( 'post-thumbnails' );
add_theme_support( 'title-tag' );
add_action( 'wp_enqueue_scripts', 'load_dashicons_front_end' );
function load_dashicons_front_end() {
wp_enqueue_style( 'dashicons' );
}
add_filter('acf/format_value/type=text', 'do_shortcode');
add_filter('acf/format_value/type=textarea', 'do_shortcode');


// Désactive éditeur classique
add_action('init', 'init_remove_support', 100);
function init_remove_support(){
    $page = 'page';
    remove_post_type_support( $page, 'editor');
    $post = 'post';
    remove_post_type_support( $post, 'editor');
    $realisations = 'realisations';
    remove_post_type_support( $realisations, 'editor');
    $produits = 'produits';
    remove_post_type_support( $produits, 'editor');
}


// Menu
register_nav_menus( array(
	'header' => 'Menu Principal',
    'atelier'=> 'Menu Atelier',
    'association'=> 'Menu Association',
	'footer' => 'Bas de page',
) );


// CPT UI
function led_register_post_types() {
    $labels = array(
        'name' => 'Réalisations',
        'all_items' => 'Toutes les réalisations',  
        'singular_name' => 'Réalisation',
        'add_new_item' => 'Ajouter une réalisation',
        'edit_item' => 'Modifier la réalisation',
        'menu_name' => 'Réalisations'
    );

	$args = array(
        'labels' => $labels,
        'public' => true,
        'show_in_rest' => true,
        'has_archive' => true,
        'supports' => array( 'title','thumbnail' ),
        'menu_position' => 5, 
	);

    $produits = array(
        'name' => 'Produits',
        'all_items' => 'Tous les produits',  
        'singular_name' => 'Produit',
        'add_new_item' => 'Ajouter un produit',
        'edit_item' => 'Modifier le produit',
        'menu_name' => 'Produits'
    );

	$pdts = array(
        'labels' => $produits,
        'public' => true,
        'show_in_rest' => true,
        'has_archive' => true,
        'supports' => array( 'title','thumbnail' ),
        'menu_position' => 5, 
	);

    $categories = array(
        'name' => 'Catégories',
        'new_item_name' => 'Nom de la nouvelle catégorie',
    	'parent_item' => 'Type de produits',
    );
    
    $cat = array( 
        'labels' => $categories,
        'public' => true, 
        'show_in_rest' => true,
        'hierarchical' => true, 
    );

	register_post_type( 'realisations', $args );
    register_post_type( 'produits', $pdts );
    register_taxonomy( 'categories', 'produits', $cat );
}
add_action( 'init', 'led_register_post_types' ); 


// Appel des fichiers CSS, JS 
function led_register_assets() {
    
    wp_enqueue_script( 
        'jquery', 
        'https://code.jquery.com/jquery-3.6.0.min.js', 
        array( 'jquery' ), 
        '1.0', 
        true
    );

    wp_enqueue_script( 
        'led', 
        get_template_directory_uri() . '/js/accordion-script.js', 
        array( 'jquery' ), 
        '1.0', 
        true
    );

    wp_enqueue_script( 
        'toggle', 
        get_template_directory_uri() . '/js/toggle-menu.js', 
        array( 'jquery' ), 
        '1.0', 
        true
    );

    wp_enqueue_script( 
        'scroll', 
        get_template_directory_uri() . '/js/scroll.js', 
        array( 'jquery' ), 
        '1.0', 
        true
    );

    wp_enqueue_script( 
        'active', 
        get_template_directory_uri() . '/js/link-active.js', 
        array( 'jquery' ), 
        '1.0', 
        true
    );

    wp_enqueue_script( 
        'backtotop', 
        get_template_directory_uri() . '/js/backtotop.js', 
        array( 'jquery' ), 
        '1.0', 
        true
    );

    wp_enqueue_style( 
        'led',
        get_stylesheet_uri(), 
        array(), 
        '1.0'
    );
}
add_action( 'wp_enqueue_scripts', 'led_register_assets' );


// SLICK
function themeprefix_slick_enqueue_scripts_styles() {
	wp_enqueue_script( 'slickjs', get_stylesheet_directory_uri() . '/js/slick.min.js', array( 'jquery' ), '1.6.0', true );
	wp_enqueue_script( 'slickjs-init', get_stylesheet_directory_uri(). '/js/slick-init.js', array( 'slickjs' ), '1.6.0', true );

	wp_enqueue_style( 'slickcss', get_stylesheet_directory_uri() . '/css/slick.css', '1.6.0', 'all');
	wp_enqueue_style( 'slickcsstheme', get_stylesheet_directory_uri(). '/css/slick-theme.css', '1.6.0', 'all');
}
add_action( 'wp_enqueue_scripts', 'themeprefix_slick_enqueue_scripts_styles' );
