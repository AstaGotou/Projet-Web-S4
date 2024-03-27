<?php

$lang = 'fr';

if (isset($_GET['lang'])) {
    if ($_GET['lang'] === 'en' || $_GET['lang'] === 'fr') {
        setcookie(
            'lang',
            $_GET['lang'],
            time() + 60 * 60 * 24 * 365,
            '/',
            '',
            false,
            true,
        );
        $lang = $_GET['lang'];
    }
} else {
    if (isset($_COOKIE['lang']) && ($_COOKIE['lang'] === 'en' || $_COOKIE['lang'] === 'fr')) {
        $lang = $_COOKIE['lang'];
    }
}

if ($lang === 'en') {
    require_once 'assets/langue/en.php';
} else {
    require_once 'assets/langue/fr.php';
}

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
        <img src="assets/img/HomeWallpaper.jpeg" aria-hidden="true"/>
        <h2 id="Anime-recommandation"><?= $trad['Accueil']['Recommandations Anime'] ?></h2>
        <ul id = "Bloc-Anime-Recommandation" class="carousel-hori">
            <?php 
            $animeObj = new Anime();
            foreach ($animeObj->getAnimeRecommendation() as $animeRecommandation) : 
            ?>
            <li>
                <a href="anime.php?id=<?= $animeRecommandation['id'] ?>">
                    <img src="assets/img/poster/anime/<?= $animeRecommandation['chemin_photo'] ?>"/>
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
                    <img src="assets/img/poster/manga/<?= $mangaRecommandation['chemin_photo'] ?>"/>
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

