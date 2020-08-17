<?php

/**
 * Single post partial template.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;
?>

<?php
$isArchive = get_field('wiadomosc_archiwalna');

?>


<article <?php post_class('singular-post'); ?> id="post-<?php the_ID(); ?>">

    <header class="entry-header">

        <?php echo get_the_post_thumbnail($post->ID, 'full'); ?>

        <div
            class="entry-meta d-flex flex-wrap text-center text-md-left flex-column flex-md-row wrapp-text-archive-date">
            <p class="date pt-3"><i class="far fa-calendar-alt"></i> <?php echo get_the_date(); ?></p>
            <?= ($isArchive ? '<p class="date pl-lg-5 p-3 pt-3 archive-text"><i class="fas fa-archive"></i> ' . __('Wiadomość Archiwalna') . '</p>' : ""); ?>
        </div><!-- .entry-meta -->

        <?php the_title('<h1 class="entry-title text-center text-lg-left singular-title heading mb-4">', '</h1>'); ?>

    </header><!-- .entry-header -->

    <div class="entry-content">
        <?php the_content(); ?>
    </div><!-- .entry-content -->

</article><!-- #post-## -->