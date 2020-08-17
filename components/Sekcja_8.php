<section id="bilety" class="section-wrapper section-wrapper--sekcja_8">

    <img title="Bilet" src="<?= IMGS; ?>/Sekcja_8/ticket.png" alt="imgcenter" class="position-absolute imgcenter-ticket" data-aos="fade-down">
    <img src="<?= IMGS; ?>/Sekcja_8/ramka.png" alt="imgcenter" class="position-absolute imgcenter-ramka">

    <div class="container text-center row mx-auto pt-4 position-relative">

        <div class="col-md-6 left" data-aos="fade-up">
            <p class="heading text-md-left text-center">NA POWITANIE</p>

            <ul class="text-md-left text-center p-0">
                <li>identyfikator FTHB </li>
                <li>luźny worek na plecy w klimacie FTHB</li>
                <li>świeży sok FTHB </li>
                <li>edukacja na wynos FTHB – premiera książki z misją</li>
                <li>mini zestaw do notowania</li>
            </ul>

        </div>


        <div class="col-md-6 right pl-lg-4 mt-5 mt-md-0" data-aos="fade-up">
            <p class="heading text-md-left text-center">DZIELIMY SIĘ Z TOBĄ</p>

            <ul class="text-md-left text-center p-0">
                <li>najlepszym biznesowym przeżyciem </li>
                <li>wykładem Follow The Heart Beat, <br>abyś wzrastał w rytmie swojego serca</li>
                <li>całodzienną sesją specjalną z Frazer Brookes</li>
                <li>strefą chill out</li>
                <li>przerwą kawową</li>
                <li>wegetariańskim pudełkowym lunchem</li>
                <li>profesjonalnym symultanicznym tłumaczeniem Tomasza Kućmy, tłumacza każdego największego nazwiska ze świata biznesu i rozwoju osobistego,
                    które odwiedziło Polskę</li>
            </ul>


        </div>


        <div class="wrapper-ticket-info-price ">
            <p class="heading text-center">Resztę odkryjemy przed Tobą na miejscu. Dziękujemy za podzielenie się
                naszą pasją! DO ZOBACZENIA 6 września!</p>

            <div class="d-flex justify-content-center my-5 my-md-2" data-aos="fade-up">
                <?= get_template_part('components/Button'); ?>
            </div>


            <div class="price-wrapper">

                <?php
                $product = wc_get_product(11);
                $price = $product->get_regular_price();
                $promo = $product->get_sale_price();
                $priceother = $product->get_price();; ?>

                <?php if ($promo) : ?>
                    <p class="price-info" style="background-image:url(<?= IMGS; ?>/Sekcja_8/price-bg.png)">cena promocyjna <span class="promo"><?= $promo; ?> zł</span> <span class="regular"><?= $price; ?> zł</span></p>
                    <p class="heading expired">ważna do 30 czerwca 2020 r.</p>

                <?php else : ?>
                    <p class="price-info normal" style="background-image:url(<?= IMGS; ?>/Sekcja_8/price-bg.png)">cena <span><?= $price; ?> zł</span></p>

                <?php endif; ?>


            </div>


        </div>





        <img src="<?= IMGS; ?>/Sekcja_8/left-bg.png" alt="imgcenter" class="position-absolute imgleft-bg">

        <img src="<?= IMGS; ?>/Sekcja_8/right-bg.png" alt="imgcenter" class="position-absolute imgright-bg">

    </div>


    <img src="<?= IMGS; ?>/Sekcja_8/bg-section.png" alt="imgcenter" class="position-absolute bg-section">

    <img src="<?= IMGS; ?>/Sekcja_8/line-left.png" alt="imgcenter" class="position-absolute line-left">
    <img src="<?= IMGS; ?>/Sekcja_8/line-right.png" alt="imgcenter" class="position-absolute line-right">
    



</section>