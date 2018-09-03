<?php

function wordpress_main_style() {
        wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/site.css');
}
add_action( 'wp_enqueue_scripts', 'wordpress_main_style' );

// Add scripts and stylesheets
function startwordpress_scripts() {
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '3.3.6' );
	wp_enqueue_style( 'blog', get_template_directory_uri() . '/css/blog.css' );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ), '3.3.6', true );
}

add_action( 'wp_enqueue_scripts', 'startwordpress_scripts' );


// Add Google Fonts
function startwordpress_google_fonts() {
        wp_register_style('Lora', 'https://fonts.googleapis.com/css?family=Lora');
        wp_enqueue_style( 'Lora');
}

add_action('wp_print_styles', 'startwordpress_google_fonts');
 
// WordPress Titles
add_theme_support( 'title-tag' );

// Support Featured Images
add_theme_support( 'post-thumbnails' );

// Enable Shortcodes
add_filter( 'widget_text', 'shortcode_unautop');
add_filter( 'widget_text', 'do_shortcode');

add_filter( 'the_excerpt', 'shortcode_unautop');
add_filter( 'the_excerpt', 'do_shortcode');

require get_template_directory() . '/bootstrap-navwalker.php';

register_nav_menus( array(
        'menu-1' => esc_html__( 'Primary', 'theme-textdomain' ),
    ) );


// Custom settings
function custom_settings_add_menu() {
        add_menu_page( 'Custom Settings', 'Custom Settings', 'manage_options', 'custom-settings', 'custom_settings_page', null, 99 );
      }
      add_action( 'admin_menu', 'custom_settings_add_menu' );

// Twitter
function setting_twitter() { ?>
        <input type="text" name="twitter" id="twitter" value="<?php echo get_option( 'twitter' ); ?>" />
      <?php }

function custom_settings_page_setup() {
  add_settings_section( 'section', 'All Settings', null, 'theme-options' );
  add_settings_field( 'twitter', 'Twitter URL', 'setting_twitter', 'theme-options', 'section' );

  register_setting('section', 'twitter');
}
add_action( 'admin_init', 'custom_settings_page_setup' );


function right_sidebar_widget() {
        register_sidebar( array(
            'name'          => __( 'Primary Sidebar', 'theme_name' ),
            'id'            => 'sidebar-1',
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget'  => '</aside>',
            'before_title'  => '<h1 class="widget-title">',
            'after_title'   => '</h1>',
        ) );
     
        register_sidebar( array(
            'name'          => __( 'Secondary Sidebar', 'theme_name' ),
            'id'            => 'sidebar-2',
            'before_widget' => '<ul><li id="%1$s" class="widget %2$s">',
            'after_widget'  => '</li></ul>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        ) );
    }
    add_action( 'widgets_init', 'right_sidebar_widget' );       
    
?>



