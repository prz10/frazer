<?php

/**
 * Understrap functions and definitions
 *
 * @package understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;


// $debug = true;
// define('WP_DEBUG', $debug);
// define('WP_DEBUG_DISPLAY', $debug);
// @ini_set('display_errors', $debug);
// define('SCRIPT_DEBUG', $debug);

$understrap_includes = array(
	'/theme-settings.php',                  // Initialize theme default settings.
	'/setup.php',                           // Theme setup and custom theme supports.
	'/widgets.php',                         // Register widget area.
	'/enqueue.php',                         // Enqueue scripts and styles.
	'/template-tags.php',                   // Custom template tags for this theme.
	'/pagination.php',                      // Custom pagination for this theme.
	'/hooks.php',                           // Custom hooks.
	'/extras.php',                          // Custom functions that act independently of the theme templates.
	'/customizer.php',                      // Customizer additions.
	'/custom-comments.php',                 // Custom Comments file.
	'/jetpack.php',                         // Load Jetpack compatibility file.
	'/class-wp-bootstrap-navwalker.php',    // Load custom WordPress nav walker.
	'/woocommerce.php',                     // Load WooCommerce functions.
	'/editor.php',                          // Load Editor functions.
	'/deprecated.php',                      // Load deprecated functions.
);

foreach ($understrap_includes as $file) {
	$filepath = locate_template('inc' . $file);
	if (!$filepath) {
		trigger_error(sprintf('Error locating /inc%s for inclusion', $file), E_USER_ERROR);
	}
	require_once $filepath;
}

require('clearAdminPanel.php');




function acf_orphans($value, $post_id, $field)
{
	if (class_exists('iworks_orphan')) {
		$orphan = new \iworks_orphan();
		$value = $orphan->replace($value);
	}
	return $value;
}
add_filter('acf/format_value/type=textarea', 'acf_orphans', 10, 3);
add_filter('acf/format_value/type=wysiwyg', 'acf_orphans', 10, 3);
add_filter('acf/format_value/type=text', 'acf_orphans', 10, 3);

add_filter('widget_text', 'iworks_orphan');

function iworks_orphan($content)

{

	if (!class_exists('iWorks_Orphan')) {

		return $content;
	}

	$orphan = new iWorks_Orphan();

	return $orphan->replace($content);
}


if (!defined('IMGS')) {
	define('IMGS', get_template_directory_uri() . "/imgs");
}

add_filter('upload_mimes', function ($mime_types) {
	$mime_types['svg'] = 'image/svg+xml';
	return $mime_types;
}, 1, 1);





add_filter('wp_check_filetype_and_ext', function ($data, $file, $filename, $mimes) {
	global $wp_version;


	$filetype = wp_check_filetype($filename, $mimes);

	return [
		'ext'             => $filetype['ext'],
		'type'            => $filetype['type'],
		'proper_filename' => $data['proper_filename']
	];
}, 10, 4);



function register_menu()
{
	register_nav_menus(array(
		'footer-menu' => __('Footer Menu'),
	));
	register_nav_menus(array(
		'footer-menu-1' => __('Footer Menu 1'),
	));
}

add_action('init', 'register_menu');

function footer_nav($name)

{
	wp_nav_menu(

		array(

			'theme_location'  => $name,
			'menu'            => '',
			'container'       => '',
			'container_class' => '',
			'container_id'    => '',
			'menu_class'      => '',
			'menu_id'         => '',
			'echo'            => true,
			'fallback_cb'     => '',
			'before'          => '',
			'after'           => '',
			'link_before'     => '',
			'link_after'      => '',
			'items_wrap'      => '<ul class="page-footer-menu">%3$s</ul>',
			'depth'           => 0,
			'walker'          => ''
		)

	);
}



add_filter('shortcode_atts_wpcf7', 'custom_shortcode_atts_wpcf7_filter', 10, 3);

function custom_shortcode_atts_wpcf7_filter($out, $pairs, $atts)
{
	$title_post = 'title_post';
	$link_post = 'link_post';

	if (isset($atts[$title_post])) {
		$out[$title_post] = $atts[$title_post];
	}

	if (isset($atts[$link_post])) {
		$out[$link_post] = $atts[$link_post];
	}

	return $out;
}


add_action("wpcf7_before_send_mail", "wpcf7_do_something_else");
function wpcf7_do_something_else($cf7)
{
	// get the contact form object
	$wpcf = WPCF7_ContactForm::get_current();
	$submission = WPCF7_Submission::get_instance();
	// $posted_data = $cf7->get_posted_data();
	$data = '';
	if ($submission) {

		// get submission data
		$data = $submission->get_posted_data();
	}

	// file_put_contents(get_template_directory() . '/debug.log', print_r($data, true), FILE_APPEND);

	return $wpcf;
}


function debugToDebug($data)
{
	file_put_contents(get_template_directory() . '/debug.log', var_dump($data, true), FILE_APPEND);
}

// function email_to_service_recipient($components, $form, $object)
// {

// 	// if ($form->id() == 72) :


// 	$url = str_replace('#038;', '', wpcf7_special_mail_tag('', '_url', false));
// 	$title = wpcf7_special_mail_tag('', '_post_title', false);

// 	// }
// 	$submission = WPCF7_Submission::get_instance();
// 	file_put_contents(get_template_directory() . '/debug.log', print_r($submission, true), FILE_APPEND);

// 	// $post_id = 46;



// 	// if ($recipient_email) :
// 	// 	$components['recipient'] = $recipient_email;
// 	// endif;



// 	// endif;
// 	return $components;
// }
// add_filter('wpcf7_mail_components', 'email_to_service_recipient', 10, 3);

function __text($string)
{
	if (class_exists('iworks_orphan')) {
		$orphan = new iworks_orphan();
		return $orphan->replace($string);
	}
}

//Removes links
add_filter( 'woocommerce_product_is_visible','product_invisible');
function product_invisible(){
    return false;
}

//Remove single page
add_filter( 'woocommerce_register_post_type_product','hide_product_page',12,1);
function hide_product_page($args){
    $args["publicly_queryable"]=false;
    $args["public"]=false;
    return $args;
}