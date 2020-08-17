<section id="faq" class="section-wrapper section-wrapper--sekcja_11">

    <div class="container text-center" data-aos="fade-up">
        <p class="heading mb-5">Najczęście zadawane pytania</p>

        <div class="faq-wrapper row mx-auto">

            <?php

            function returnTemplates($start, $stop, $data, $featured = '', $col = "col-lg-6")
            {
                echo '<div class="' . $col . ' px-0">';

                for ($i = $start; $i < $stop; $i++) {
                    $el = $data[$i];
            ?>

                    <div class="<?= $featured; ?> col-12 faq-el mb-5 text-left px-0 div<?= $i; ?>" data-aos="fade-down">
                        <p class="question"><?= __text($el["question"]); ?> <img src="<?= IMGS; ?>/Sekcja_11/<?= $el["icon"]; ?>" alt="question img"></p>
                        <p class="answer"><?= __text($el["answer"]); ?></p>

                    </div>

                <?php
                } ?>

        </div>
    <?php
            }

            $data = [
                ["question" => "CO SPRAWIA, ŻE TO WYDARZENIE JEST WYJĄTKOWE?", "answer" => "To spotkanie, gdzie Frazer poświęci Tobie maksimum swojego czasu i przekaże Tobie maksimum swojej wiedzy na temat budowanie network marketingu online. Będzie on z Tobą prawie przez cały dzień planowanego wydarzenia.
    Nie chodzi nam jednak tylko o naukę. Chcemy, abyś świetnie się bawił wśród ludzi z tą samą pasją co Ty. Ludzi, którzy z miłością budują lepsze życie dla siebie i swoich najbliższych.", "icon" => "1.png"],

                ["question" => "GDZIE POWINIŚMY SIĘ ZATRZYMAĆ JEŻLI PRZYJEŻDZAMY NA EVENT Z POLSKI?", "answer" => "To zależy wyłącznie od Ciebie. Okolica oferuje wiele hoteli o różnym standardzie, tak więc masz możliwość wybrania dogodnego dla siebie zakwaterowania.", "icon" => "2.png"],

                ["question" => "CO DZIEJE SIĘ W PRZYPADKU, KIEDY STACJONARNY EVENT ZOSTAJE ODWOŁANY Z PRZYCZYN NIEZALEŻNYCH OD ORGANIZATORA?", "answer" => "Mając na uwadze ostatnie wydarzenia, w przypadku sytuacji, w której będziemy zmuszeni do odwołania spotkania stacjonarnego z przyczyn niezależnych od nas, całe wydarzenie automatycznie odbywa się online.", "icon" => "3.png"],

                ["question" => "CZY W CENĘ BIETU JEST WLICZONE MIEJSCE PARKINGOWE NA TERENIE HOTELU?", "answer" => "Bilet nie zawiera miejsca parkingowego na terenie hotelu. Masz jednak możliwość odpłatnego skorzystania z podziemnego parkingu hotelowego na własny koszt. Koszt parkingu podziemnego na czas wydarzenia 
    to 70 zł brutto. Opłata bezpośrednio w recepcji hotelu.
    Dodatkowo okolica hotelu sprzyja bezproblemowemu zaparkowaniu samochodu. Decyzja należy od Ciebie.", "icon" => "4.png"],



                ["question" => "CZY W CENĘ BILETU JEST WLICZONY LUNCH?", "answer" => "Tak, bilet zawiera lunch.
    Zadbaliśmy o to, abyś otrzymał smaczny, wegetariański lunch w formie pudełkowej.", "icon" => "5.png"]
            ];

    ?>

    <?= returnTemplates(0, 1, $data, 'featured', 'col-lg-12'); ?>
    <?= returnTemplates(1, 3, $data, ''); ?>
    <?= returnTemplates(3, 5, $data, ''); ?>



    </div>

    </div>

    <img src="<?= IMGS; ?>/Sekcja_11/img-left.png" alt="imgleft" class="position-absolute imgleft">

</section>