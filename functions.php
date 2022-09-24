<?php 


//enqueue script
function jaydenishere_script(){
    wp_enqueue_script('bootstrap-js',get_template_directory_uri() . '/inc/bootstrap.min.js', array('jqery'),'5.0.2',true );//boostrap using jquery dependency
    wp_enqueue_script('custom-javascript',get_template_directory_uri() . '/custom-javascript.js', array(),'',true);//cutom javascript file
	
    wp_enqueue_style('bootstrap-css',get_template_directory_uri() . '/inc/bootstrap.min.css',array(),'5.0.2','all');
    wp_enqueue_style('jaydenishere-style',get_stylesheet_uri() ,array(),filemtime(get_template_directory() . '/style.css'),'all');
	wp_enqueue_style('jaydenishere-page-style',get_template_directory_uri() . '/custom-page.css','all');
	wp_enqueue_style('jaydenishere-page-video-style',get_template_directory_uri() . '/custom-page-video.css','all');
	wp_enqueue_style('jaydenishere-page-web-design-style',get_template_directory_uri() . '/custom-page-web-design.css','all');
    //address of style sheet,it doesn't have dependency

  	// font-awesome
    wp_enqueue_style('font-awesome',('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css'));
	// Google Fonts
    wp_enqueue_style( 'google-fonts', ('https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap') );
  
} 
add_action('wp_enqueue_scripts','jaydenishere_script');

wp_register_script( 'swiper_js', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js', null, null, true );
wp_enqueue_script('swiper_js');
wp_register_style( 'swiper_css', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css' );
wp_enqueue_style('swiper_css');


//config
function jaydenishere_config(){
 
//add support
add_theme_support( 'menus' );

add_theme_support('title-tag');

//add woocommerce support
add_theme_support('woocommerce');



register_nav_menus(array(
  'jaydenishere_main_menu' => esc_html__('jaydenishere Main Menu','jaydenishere')
));
}
add_action('after_setup_theme','jaydenishere_config');

//create custom header logo in Apearance
function themename_custom_logo_setup() {
  $args = array(
      'width'              => 50,
      'height'             => 50,
      'flex-width'         => true,
      'flex-height'        => true
  );
  add_theme_support( 'custom-logo', $args );
}
add_action( 'after_setup_theme', 'themename_custom_logo_setup' );



function jaydenishere_widgets(){
	register_sidebar( array(
		'name'			=> esc_html__('Footer Sidebar 0','jaydenishere'),
		'id'			=> 'jaydenishere-sidebar-footer0',
		'description'	=> esc_html__('Drag and drop your widgets here','jaydenishere'),
		'before_widget'	=> '<div id="%1$s" class="widget %2$s widget-wrapper">', 
		'after_widget'	=> '</div>',
		'before_title'	=> '<h4 class="widget-title">',
		'after_title'	=> '</h4>',
	) );
  register_sidebar( array(
		'name'			=> esc_html__('Footer Sidebar 1','jaydenishere'),
		'id'			=> 'jaydenishere-sidebar-footer1',
		'description'	=> esc_html__('Drag and drop your widgets here','jaydenishere'),
		'before_widget'	=> '<div id="%1$s" class="widget %2$s widget-wrapper">', 
		'after_widget'	=> '</div>',
		'before_title'	=> '<h4 class="widget-title">',
		'after_title'	=> '</h4>',
	) );

	register_sidebar( array(
		'name'			=> esc_html__('Footer Sidebar 2','jaydenishere'),
		'id'			=> 'jaydenishere-sidebar-footer2',
		'description'	=> esc_html__('Drag and drop your widgets here','jaydenishere'),
		'before_widget'	=> '<div id="%1$s" class="widget %2$s widget-wrapper">', 
		'after_widget'	=> '</div>',
		'before_title'	=> '<h4 class="widget-title">',
		'after_title'	=> '</h4>',
	) );
	register_sidebar( array(
		'name'			=> esc_html__('Footer Sidebar 3','jaydenishere'),
		'id'			=> 'jaydenishere-sidebar-footer3',
		'description'	=> esc_html__('Drag and drop your widgets here','jaydenishere'),
		'before_widget'	=> '<div id="%1$s" class="widget %2$s widget-wrapper">', 
		'after_widget'	=> '</div>',
		'before_title'	=> '<h4 class="widget-title">',
		'after_title'	=> '</h4>',
	) );	
	register_sidebar( array(
		'name'			=> esc_html__('Woocommerce Sidebar','jaydenishere'),
		'id'			=> 'woocommerce_sidebar',
		'description'	=> esc_html__('Drag and drop your widgets here','jaydenishere'),
		'before_widget'	=> '<div id="%1$s" class="widget %2$s widget-wrapper">', 
		'after_widget'	=> '</div>',
		'before_title'	=> '<h4 class="widget-title">',
		'after_title'	=> '</h4>',
	) );	
	register_sidebar( array(
		'name'			=> esc_html__('Social Icons','jaydenishere'),
		'id'			=> 'social_icons',
		'description'	=> esc_html__('Drag and drop your widgets here','jaydenishere'),
		'before_widget'	=> '<div id="%1$s" class="widget %2$s widget-wrapper">', 
		'after_widget'	=> '</div>',
		'before_title'	=> '<h4 class="widget-title">',
		'after_title'	=> '</h4>',
	) );	
}
add_action('widgets_init','jaydenishere_widgets');



