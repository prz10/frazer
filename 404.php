<?php

/**
 * The template for displaying 404 pages (not found).
 *
 * @package understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

wp_redirect(home_url());
exit;
get_header();

$container = get_theme_mod('understrap_container_type');
?>

<div class="wrapper" id="error-404-wrapper">

    <div class="<?php echo esc_attr($container); ?>" id="content" tabindex="-1">

        <div class="row">

            <div class="col-md-12 content-area" id="primary">

                <main class="site-main" id="main">

                    <section class="error-404 not-found">


                        <div class="page-content">

                            <p class="text-center p-3"><?php esc_html_e('Opsss... 404', 'understrap'); ?></p>



                        </div><!-- .page-content -->

                    </section><!-- .error-404 -->

                </main><!-- #main -->

            </div><!-- #primary -->

        </div><!-- .row -->

    </div><!-- #content -->

</div><!-- #error-404-wrapper -->

<?php get_footer();