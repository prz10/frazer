<?php

/**
 * Template Name: Document Redirect
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

$file = get_field('aktualny_plik');
$url = '';
if ($file) {
    $url = $file;
} else {
    $url = home_url();
}

wp_redirect($url);
exit;