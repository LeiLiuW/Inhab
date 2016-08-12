<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package RED_Starter_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function red_starter_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'red_starter_body_classes' );

// Remove "Editor" links from sub-menus
function inhabitent_remove_submenus() {
    remove_submenu_page( 'themes.php', 'theme-editor.php' );
    remove_submenu_page( 'plugins.php', 'plugin-editor.php' );
}
add_action( 'admin_menu', 'inhabitent_remove_submenus', 110 );



function inhabitent_login_header_url() {
    return home_url();
		//get_bloginfo( 'url' );

}
add_filter( 'login_headerurl', 'inhabitent_login_header_url' );

function inhabitent_login_header_url_title() {
    return 'Inhabitent Ltd.';
}
add_filter( 'login_headertitle', 'inhabitent_login_header_url_title' );

function inhabitent_login_logo() {?>
    <style type="text/css">
      .login h1  a {
				background-image:url(<?php echo get_template_directory_uri();?>/Images/inhabitent-logo-text-dark.svg);
        height: 53px;
				width:300px;
				padding-bottom: 30px;
				background-size:  300px 53px;
			}
    </style>
		<?php
	}

add_filter('login_head', 'inhabitent_login_logo');
