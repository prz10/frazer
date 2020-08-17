<?php

/**
 * Template Name: Template Home
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();
?>


<div class="wrapper py-0" id="full-width-page-wrapper">

    <?= get_template_part('components/Intro'); ?>

    <?php for ($i=1; $i < 13; $i++) { 
      echo get_template_part('components/Sekcja_'.$i);
    } ?>

</div><!-- #full-width-page-wrapper -->

<?php get_footer();