<?php 



/* */
wp_enqueue_script( 'jQuery' );


function mp_cpt_mycustomposttype() {

    $labels = array(
        'name'                  => 'TheName',
        '...'
    );
    $args = array(
        'label'                 => 'TheName',
        'description'           => 'TheNamePlural',
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'excerpt', 'thumbnail', 'custom-fields', ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => false,
        'can_export'            => true,
        'has_archive'           => false,        
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
    );
    register_post_type( 'customposttypename', $args );
}
add_action( 'init', 'mp_cpt_mycustomposttype', 0 );
add_theme_support( 'post-thumbnails', array( 'post', 'customposttypename' ) );

	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'script',
			'style',
			'navigation-widgets',
			'post-formats',

		)
	);





function prefix_editor_color_palette() {
    register_nav_menus(
        array(
            'primary' => esc_html__( 'Primary menu', 'twentytwentyone' ),
            'footer'  => esc_html__( 'Secondary menu', 'twentytwentyone' ),
        )
    );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'post-thumbnails', array( 'post' ) );          // Posts only
    add_theme_support( 'post-thumbnails', array( 'page' ) );          // Pages only
    add_theme_support( 'post-thumbnails', array( 'post', 'movie' ) ); // Posts and Movies

    add_theme_support(
        'html5',
        array(
            'admin-bar',
    'align-wide',
    'automatic-feed-links',
    'core-block-patterns',
    'custom-background',
    'custom-header',
    'custom-line-height',
    'custom-logo',
    'customize-selective-refresh-widgets',
    'custom-spacing',
    'custom-units',
    'dark-editor-style',
    'disable-custom-colors',
    'disable-custom-font-sizes',
    'editor-color-palette',
    'editor-gradient-presets',
    'editor-font-sizes',
    'editor-styles',
    'featured-content',
    'html5',
    'menus',
    'post-formats',
    'post-thumbnails',
    'responsive-embeds',
    'starter-content',
    'title-tag',
    'wp-block-styles',
    'widgets',
    'widgets-block-editor',
        )
    );
    
}
add_action( 'after_setup_theme', 'prefix_editor_color_palette' );


function my_style() {
	wp_enqueue_style( 'style-name', get_stylesheet_uri() );
    wp_enqueue_style( 'my-splide', get_template_directory_uri(). '/slider/splide.min.css', false );
}


add_action( 'wp_enqueue_scripts', 'my_style' );
function myscript() {
    wp_enqueue_style( 'style-name', get_stylesheet_uri() );
   	wp_enqueue_script('main-scripts', get_template_directory_uri().'/js.js',array(), '1.0.0', true );
	wp_enqueue_script('splide', get_template_directory_uri().'/slider/splide.min.js',array(), true );
}
 
add_action( 'wp_enqueue_scripts', 'myscript' );


// function wpse_225625_to_the_top( $content ) {
//     if(is_single()) {
//       echo "aaaaaaaa";
// }
// }

// add_filter( 'the_content', 'wpse_225625_to_the_top', 20/* Super important yo */  );
// the function that edits post content
// function my_edit_content( $content ) {
//     global $post;
//     // only edit specific post types
//     $types = array( 'post', 'page' );
//     if ( $post && in_array( $post->post_type, $types, true ) ) {
//        $content = 'Hello World '. $content;
//     }
  
//     return $content;
//   }
  
//   // add the filter when main loop starts
//   add_action( 'loop_start', function( WP_Query $query ) {
//      if ( $query->is_main_query() ) {
//        add_filter( 'the_content', 'my_edit_content', -10 );
//      }
//   } );
  
//   // remove the filter when main loop ends
//   add_action( 'loop_end', function( WP_Query $query ) {
//      if ( has_filter( 'the_content', 'my_edit_content' ) ) {
//        remove_filter( 'the_content', 'my_edit_content' );
//      }
//   } );