<?php
$isArchive = get_field('wiadomosc_archiwalna');
?>

<a href="<?= the_permalink(); ?>">
    <article class="card-post p-3 <?= ($isArchive ? "archive-news" : ''); ?>">

        <img src="<?= get_the_post_thumbnail_url(); ?>" alt="">
        <div class="wrapp row d-flex justify-content-between px-3 wrapp-text-archive-date">
            <p class="date pt-3"><i class="far fa-calendar-alt"></i> <?php echo get_the_date(); ?></p>

            <?= ($isArchive ? '<p class="date pt-3 archive-text"><i class="fas fa-archive"></i> ' . __('Wiadomość Archiwalna') . '</p>' : ""); ?>
        </div>


        <p class="heading">
            <?php the_title(); ?>
        </p>
        <p class="desc">
            <?php echo (strlen(get_the_excerpt()) > 170) ? substr(get_the_excerpt(), 0, 167) . '...' : get_the_excerpt(); ?>
        </p>

    </article>
</a>