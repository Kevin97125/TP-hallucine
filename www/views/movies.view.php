<?php

ob_start();
?>

<section id="movie_section">
                <div id="movie_section_content">
                    <div id="movie_section_content_left">
                    <img src="<?= IMAGE_PATH.$movie->getImageUrl(); ?>" alt="<?= $movie->getTitle(); ?>">   
                    </div>
                    <div id="movie_section_content_right">
                        <h2><?= $movie->getTitle();?></h2>
                        <h3><?= $movie->getRelaseDate()->format("d-m-Y"); ?></h3>
                        <div id="rating" data-attr="">
                            <div id="progressBar"></div>
                        </div>
                        <h4>Genre : Horreur, Aventure</h4>
                        <h4>Durée : <?= $movie.getRuntime(); ?></h4>
                        <h4>Acteurs : Kad Merad, Marina Foïs, Kad Merad, Marina Foïs, Kad Merad, Marina Foïs, Kad Merad, Marina Foïs</h4>
                        <h4>Scénariste : Kad Merad, Marina Foïs</h4>
                        <h4>Réalisateur : Kad Merad, Marina Foïs</h4>
                        <h3>Résumé :<br> Un film français plein de gags avec Kad Merad, Marina Foïs...</h3>
                    </div>
                </div>
                </section>

<?php
for($i=0; $i < count($movies);$i++) : 
?>

<div class="item col">
<a href="index.php?page=movie&movieid=<? $movies[$i]->getId() ?>
    <img src="<?= $movies[$i]->getImageUrl(); ?>>
    <br>
    <?= $movies[$i]->getTitle(); ?>
    <br>
    <?= $movies[$i]->getRelaseDate()->format("Y"); ?>
    </a>
</div>

<?php endfor; ?>

<?php
$content = ob_get_clean();
$pageTitle = "Halluciné - Films";
require "template.view.php";
?>