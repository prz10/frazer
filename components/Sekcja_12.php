<section id="wrapper-sekcja_12" class="section-wrapper section-wrapper--sekcja_12" style="background-image:url(<?= IMGS; ?>/Sekcja_12/bg.png)">

    <p class="heading text-center text-white">PARTNERZY WYDARZENIA</p>

    <div class="container text-center partners row mx-auto d-flex align-items-center justify-content-between" data-aos="fade-up">

        <?php
        $data = [
            ["logo" => "10tego.png", "name" => "10tego", "link" => ""],
            ["logo" => "WarsawC_Logo.png", "name" => "warsaw concept", "link" => ""],
            ["logo" => "logo_impact.png", "name" => "impact vision", "link" => ""],
            ["logo" => "artinhouse.png", "name" => "art in house", "link" => ""]
        ];

        foreach($data as $el){?>

<div class="partner d-flex justify-content-center px-4">
    <?= ($el["link"] ? "<a href='".$el["link"] ."'>" : "");?>
    <img src="<?=IMGS;?>/Sekcja_12/<?=$el["logo"];?>" alt="<?=$el["name"];?>" >
    <?= ($el["link"] ? "</a>": "");?>
</div>

     <?php   }

        ?>

    </div>


</section>