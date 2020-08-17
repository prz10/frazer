<?php

/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;
?>



<section class="pt-5 footer-wrapper" id="wrapper-footer">

    <footer class="container">

        <p class="heading big text-center text-white">#LetsGetSocial </p>
        <p class="heading text text-center text-white">SURROUNDED BY <span>LOVE</span> SURROUNDED BY <span>PASSION</span> SURROUNDED BY <span>TRUTH</span></p>

        <div class="section-footer d-flex py-5 justify-content-md-between align-items-start justify-content-center">

            <div class="logo">
                <a href="<?= home_url(); ?>"><img src="<?= IMGS; ?>/Footer/logo.png" alt="logo"></a>
            </div>

            <p class="link-footer"><a href="<?=home_url();?>#bilety">Bilety</a></p>
            <p class="link-footer"><a href="<?=home_url();?>#faq">FAQ</a></p>
            <p class="link-footer"><a href="<?=home_url();?>/polityka-prywatnosci">Polityka Prywatności</a></p>
            <p class="link-footer text-center text-md-left"><a href="mailto:fthb@followtheheartbeat.online">Bądźmy w kontakcie!</a><a href="mailto:fthb@followtheheartbeat.online" class="d-block sub-link">fthb@followtheheartbeat.online</a></p>




            <div class="social-media">
                <a class="p-2" href="#"><img src="<?= IMGS; ?>/Footer/Messenger.png" alt="messenger"></a>
                <a class="p-2" href="#"><img src="<?= IMGS; ?>/Footer/Facebook.png" alt="facebook"></a>
                <a class="p-2" href="#"><img src="<?= IMGS; ?>/Footer/Instagram.png" alt="instagram"></a>
            </div>
        </div>

        <p class="copyright text-center text-md-left text-white mb-0 pb-3">© 2020 Followtheheartbeat. All rights reserved</p>
    </footer><!-- container end -->
    <img src="<?= IMGS; ?>/Footer/bg.png" alt="bg" class="bg-footer position-absolute">
</section><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->


<?= get_template_part('components/BackToTop'); ?>
<?= get_template_part('Assets'); ?>

<?php wp_footer(); ?>

</body>

</html>