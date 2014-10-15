<?php
/************************
Theme Support
************************/

function theme_support() {
    
    //adding support for html5
    current_theme_supports('html5');
    
    //adding support for post thumbnails
	add_theme_support('post-thumbnails');
    //registering set image sizes starting with the post thumbnail
	set_post_thumbnail_size(125, 125, true);

	// adding post format support
	add_theme_support( 'post-formats',
		array(
			'aside',             // title less blurb
			'gallery',           // gallery of images
			'link',              // quick link to other site
			'image',             // an image
			'quote',             // a quick quote
			'status',            // a Facebook like status update
			'video',             // video
			'audio',             // audio
			'chat'               // chat transcript
		)
	);
    
    //register the main menu located in the header
	register_nav_menus(
		array(
			'main-menu' => __('Main Menu')
        )
	);
    
    //register the widgetized area in the sidebar
    register_sidebar(
        array(
		'name' => 'Sidebar',
		'id' => 'sidebar',
		'before_widget' => '<div class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	   ) 
    );
    
    //register first widgetized area in the footer
    register_sidebar(
        array(
		'name' => 'Footer 1',
		'id' => 'footer_1',
		'before_widget' => '<div class="widget col-sm-3">',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	   ) 
    );
    
    //register second widgetized area in the footer
    register_sidebar(
        array(
		'name' => 'Footer 2',
		'id' => 'footer_2',
		'before_widget' => '<div class="widget col-sm-3">',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	   ) 
    );
    
    //register third widgetized area in the footer
    register_sidebar(
        array(
		'name' => 'Footer 3',
		'id' => 'footer_3',
		'before_widget' => '<div class="widget col-sm-3">',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	   ) 
    );
    
    //register fourth widgetized area in the footer
    register_sidebar(
        array(
		'name' => 'Footer 4',
		'id' => 'footer_4',
		'before_widget' => '<div class="widget col-sm-3">',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	   ) 
    );
}
add_action('after_setup_theme', 'theme_support');

/************************
Menus
************************/

//function that produces the main menu. this is placed in the header.
function main_menu() {
    wp_nav_menu(array(
    	'container' => false,
    	'container_class' => 'menu clearfix',
    	'menu' => __('Main Menu'),
    	'menu_class' => 'nav navbar-nav navbar-right',
    	'theme_location' => 'main-menu',
    	'before' => '',
        'after' => '',
        'link_before' => '',
        'link_after' => '',
        'depth' => 2
	));
}

/************************
Maccha Functions
************************/

//function that produces the dynamic template header. this is placed in the jumbotron in Maccha, but can be moved.
function identify_template() {
    if (is_category()) {
        echo single_cat_title();
    } elseif (is_singular()) {
        if (have_posts()) : while (have_posts()) : the_post();
            echo the_title();
        endwhile; 
        endif;
    } elseif (is_tag()) {
        echo __('Posts Tagged: ') . single_tag_title();
    } elseif (is_author()) {
        echo __('Posts By: ') . the_author_meta('display_name', $author_id);
    } elseif (is_day()) {
        echo __('Posts On: ') . the_time('l, F j, Y');
    } elseif (is_month()) {
        echo __('Posts In: ') . the_time('F Y');
    } elseif (is_year()) {
        echo __('Posts In: ') . the_time('Y');
    } elseif (is_search()) {
        echo __('Search Results for ') . esc_attr(get_search_query());
    } else {
        echo bloginfo('name');
    }
}

//returns true if pagination is necessary
function show_posts_nav() {
	global $wp_query;
	return ($wp_query->max_num_pages > 1);
}

?>