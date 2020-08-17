<?php

$columns = [
    ["title" => "<span>osobiste spotkanie 
    <br>z Frazerem</span>
    i wiele wspólnych godzin rozwoju
    ", "img" => ""],
    ["title" => "<span>całodniowe masterclass z Frazerem</span>
    z network 
    marketingu online
    ", "img" => ""],
    ["title" => "<span>skuteczne budowanie<br> 
    z Frazerem</span>
    Twojego network marketingu online
    ", "img" => ""],
    ["title" => "<span>Ty i Frazer Brookes</span> oraz
    TWÓJ NETWORK MARKETING ONLINE
    ", "img" => ""]
];

?>

<section id="wrapper-sekcja_5" class="section-wrapper section-wrapper--sekcja_5">

    <div class="container text-center" data-aos="fade-up">

        <p class="heading mb-5"><?= __text('BĄDŹ WTEDY Z NAMI…'); ?></p>

        <div class="row mx-auto">

            <?php for ($i = 0; $i < count($columns); $i++) {
                $number = $i + 1;
            ?>

            <div class="col-md-6 col-lg-3 pt-2 px-4 pb-5 column-number my-3"
                style="background-image: url(<?= IMGS; ?>/Sekcja_5/<?= $number ?>.png)">
                <p class="number mb-1"><?= $number ?></p>
                <p class="heading"><?= $columns[$i]['title']; ?></p>
            </div>

            <?php } ?>

        </div>

        <div class="row columns-hashs mx-auto mt-4">
            <p class="heading col-12 mb-5"><?= __text('PRZESTRZENIE, KTÓRYCH DOTKNIESZ:'); ?></p>

            <div class="col-md-4 text-center text-md-left">
                <p>#socialmedia</p>
                <p>#praktyczna wiedza</p>
                <p>#nauka</p>
            </div>
            <div class="col-md-4 text-center text-md-left">
                <p>#przykłady</p>
                <p>#odpowiedzi</p>
                <p>#współdziałanie</p>
            </div>
            <div class="col-md-4 text-center text-md-left">
                <p>#transformacja</p>
                <p>#motywacja</p>
                <p>#mnóstwo pozytywnej energii</p>
            </div>

            <div class="col-12 text-center mt-3">
                <p>#spotkanie z człowiekiem, który dzieli tę samą pasję co Ty
                </p>
            </div>
        </div>


    </div>

    <img src="<?= IMGS; ?>/Sekcja_5/left.png" alt="imgleft" class="position-absolute imgleft">
    <img src="<?= IMGS; ?>/Sekcja_5/line-left.png" alt="imglineleft" class="position-absolute imglineleft">
    <img src="<?= IMGS; ?>/Sekcja_5/right.png" alt="imgright" class="position-absolute imgright">
    <img src="<?= IMGS; ?>/Sekcja_5/right-bottom.png" alt="imgbottom" class="position-absolute imgbottom">

</section>