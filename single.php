<?php

/**
 * The template for displaying all single posts.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();
$container = get_theme_mod('understrap_container_type');
?>

<div class="wrapper" id="single-wrapper">

    <div class="<?php echo esc_attr($container); ?>" id="content" tabindex="-1">

        <div class="row">


            <main class="site-main mx-auto my-5" id="main">

                <?php while (have_posts()) : the_post(); ?>

                <?php get_template_part('loop-templates/content', 'single'); ?>

                <?php endwhile; // end of the loop. 
				?>

            </main><!-- #main -->

        </div><!-- .row -->

    </div><!-- #content -->

    <div class="wrapper-related-posts mt-5">

        <section class="posts-home pb-5 py-md-5 gray">
            <h2 class="heading text-center mb-5"><?= __('Pozostałe <span>wiadomości</span>'); ?></h2>
            <div class="container row mx-auto mb-5">
                <?php

				// The Query
				$args = array(
					'post_type' => 'post',
					'post__not_in' => array(get_the_ID()),
					'post_status' => 'publish',
					'posts_per_page' => 3,
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
				}
				/* Restore original Post Data */
				wp_reset_postdata(); ?>


            </div>

        </section>

    </div>

</div><!-- #single-wrapper -->

<?php get_footer();