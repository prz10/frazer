<?php

/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php wp_head(); ?>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700&display=swap&subset=latin-ext"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <meta property="og:image" content=" <?= IMGS ?>/ogimage.jpg">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

</head>

<body <?php body_class(); ?>>
    <?php do_action('wp_body_open'); ?>
    <div class="site" id="page">

        <!-- ******************* The Navbar Area ******************* -->
        <div id="wrapper-navbar" itemscope itemtype="http://schema.org/WebSite">

            <a class="skip-link sr-only sr-only-focusable"
                href="#content"><?php esc_html_e('Skip to content', 'understrap'); ?></a>

            <?php if (!is_front_page()) : ?>

            <a class="navbar-brand logo-header d-block text-center" rel="home"
                href="<?php echo esc_url(home_url('/')); ?>"
                title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" itemprop="url"><img
                    src="<?= IMGS ?>/logo.png" alt="logo" data-aos="fade-up"></a>

            <?php endif; ?>
        </div><!-- #wrapper-navbar end -->