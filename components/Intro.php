<section id="wrapper-intro" class="section-wrapper section-wrapper--intro">
    <div class="container">
        <img class="img-intro" src="<?= IMGS; ?>/Intro/photo.jpg" alt="photo" data-aos="fade-down">

        <a class="navbar-brand" rel="home" href="<?php echo esc_url(home_url('/')); ?>"
            title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" itemprop="url"><img
                src="<?= IMGS ?>/logo.png" alt="logo" data-aos="fade-up"></a>

        <div class="text" data-aos="fade-down">
            <p class="desc"> <?=
                                    __text('Jesteś na tym świecie kimś niepowtarzalnym.
            Wykorzystaj więc do maksimum to co dała Tobie natura.
            Słuchaj głosu swojego serca i swojej intuicji.
            I co najważniejsze podążaj za tym.'); ?>

            </p>

            <p class="heading">
                <?= __text('To Twój własny kod wyjątkowości
                Twoja własna historia…'); ?>
            </p>
        </div>

        <img src="<?= IMGS; ?>/Intro/elementy.png" alt="" class="elements">
        <img src="<?= IMGS; ?>/Intro/paski.png" alt="" class="paski">

    </div>
</section>