<?php

require_once 'assets/template/setlangue.php';

require_once 'assets/php/Anime.php';
require_once 'assets/php/Manga.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/index.css" rel="stylesheet">
    <script defer src="assets/js/nav.js " type="module"></script>
    <title>Animetosh.net - Anime and manga List</title>
</head>
<body>

    <?php
    require_once 'assets/template/nav.php';
    ?>
    <main>
        <img src="assets/img/HomeWallpaper.jpeg" aria-hidden="true" alt=""/>
        <h2 id="Anime-recommandation"><?= $trad['Accueil']['Recommandations Anime'] ?></h2>
        <ul id = "Bloc-Anime-Recommandation" class="carousel-hori">
            <?php 
            $animeObj = new Anime();
            foreach ($animeObj->getAnimeRecommendation() as $animeRecommandation) : 
            ?>
            <li>
                <a href="anime.php?id=<?= $animeRecommandation['id'] ?>">
                    <img src="assets/img/poster/anime/<?= $animeRecommandation['chemin_photo'] ?>" alt="Renvoie vers l'anime <?= $animeRecommandation['titre'] ?>"/>
                </a>
            </li>
            <?php endforeach; ?>
        </ul>
        <h2 id="Manga-recommandation"><?= $trad['Accueil']['Recommandations Manga'] ?></h2>
        <ul id = "Bloc-Manga-Recommandation" class="carousel-hori">
            <?php 
            $mangaObj = new Manga();
            foreach ($mangaObj->getMangaRecommendation() as $mangaRecommandation) : 
            ?>
            <li>
                <a href="manga.php?id=<?= $mangaRecommandation['id'] ?>">
                    <img src="assets/img/poster/manga/<?= $mangaRecommandation['chemin_photo'] ?>" alt="Renvoie vers le manga <?= $mangaRecommandation['titre'] ?>"/>
                </a>
            </li>
            <?php endforeach; ?>
        </ul>
    </main>
    <?php
    require_once 'assets/template/footer.php';
    ?>
</body>
</html>

