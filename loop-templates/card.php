<?php $template = '<article class="card text-center p-5 mx-3 mx-md-2 mx-lg-3 card-new">
    <img src="' . $ikona . '" alt="' . $title . '">
    <p class="heading">' . $title . '</p>
    <p class="desc">' . $opis . '</p>
</article>'; ?>

<?php if ($link) { ?>
<a href="<?= $link['url']; ?>" <?= $link["target"] ? 'target="' . $link["target"] . '"' : ""; ?>>
    <?= $template; ?>
</a>
<?php } else {
    echo  $template;
}; ?>