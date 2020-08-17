<?php

/**
 * Template Name: News Archive
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();
$container = get_theme_mod('understrap_container_type');
?>

<section class="posts-home pb-5 py-md-5 gray mt-5">

    <div class="container row mx-auto mb-5">
        <?php

        // The Query
        $args = array(
            'post_type' => 'post',
            'post_status' => 'publish',
            'posts_per_page' => -1,
            'order' => 'DESC',
        );

        $the_query = new WP_Query($args);
        // The Loop
        if ($the_query->have_posts()) {

            while ($the_query->have_posts()) {
                $the_query->the_post();
                echo '<div class="col-lg-4">';
                echo get_template_part('loop-templates/post-card');
                echo '</div>';
            }
        } else {
            // no posts found
        }
        /* Restore original Post Data */
        wp_reset_postdata(); ?>


    </div>
</section>


<?php get_footer();