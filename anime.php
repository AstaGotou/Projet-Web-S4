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

$animeId = $_GET['id'];
$animeObj = new Anime();
$animeInfo = $animeObj->getAnimeById($animeId);
$animeSynopsis = $animeObj->getAnimeSynopsisById($animeId, $lang);
$animeGenre = $animeObj->getAnimeGenreById($animeId);
$animeNote = $animeObj->getMoyenneNote($animeId);
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/presentation.css" rel="stylesheet">
    <script defer src="assets/js/nav.js "></script>
    <script src="assets/js/ajax-anime.js" type="module"></script>
    <title>Anime</title>
</head>
<body>
    <?php
    require_once 'assets/template/nav.php';
    ?>
    <main>
        <h1><?=$animeInfo['titre'] ?></h1>
        <img src="assets/img/poster/anime/<?=$animeInfo['chemin_photo'] ?>" alt="">
        <h2 id ="Synopsis">Synopsis</h2>
        <p><?=$animeSynopsis['synopsis'] ?></p>
        <ul>
            <li><strong><?= $trad['Info']['Type'] ?> : </strong><?= $animeInfo['type'] ?></li>
            <li><strong><?= $trad['Info']['Statut']['Label'] ?> : </strong><?= $trad['Info']['Statut'][$animeInfo['statut']] ?></li>
            <li><strong><?= $trad['Info']['Genre'] ?> : </strong> <?php foreach ($animeGenre as $genre) : ?><?= $genre['genre'] ?>, <?php endforeach ?></li>
            <li><strong><?= $trad['Info']['Date de sortie'] ?> : </strong><?= $animeInfo['date_sortie'] ?></li>
            <li><strong><?= $trad['Info']['Date de fin'] ?> : </strong><?= ($animeInfo['date_fin']===NULL) ? '?' : $animeInfo['date_fin'] ?></li>
            <li><strong><?= $trad['Info']['Nombre épisodes'] ?> : </strong><?= $animeInfo['nombre_ep'] ?></li>
        </ul>
        <div>
            <p>SCORE</p>
            <p2><strong><?= ($animeNote === (float)-1) ? 'N/A' : number_format($animeNote, 2) ?> ⭐️</strong> </p2>
        </div>
        <h2 id="InsertReview"><strong><?= $trad['Review']['Write a review'] ?> :</strong></h2>
        <form action="assets/php/form2.php<?= '?id=' . $animeId ?>" method="post">
            <label for="username">Username : </label>
            <input type="text" id="username" name="username" required/>

            <label for="message">Message :</label>
            <textarea id="message" name="message" required></textarea>

            <label for="myinfo_score">Score : </label>
            <select name="myinfo_score" id="myinfo_score" required>
                <?php
                $scores = array(
                    10 => "(10) " . $trad['Note']['10'],
                    9 => "(9) " . $trad['Note']['9'],
                    8 => "(8) " . $trad['Note']['8'],
                    7 => "(7) " . $trad['Note']['7'],
                    6 => "(6) " . $trad['Note']['6'],
                    5 => "(5) " . $trad['Note']['5'],
                    4 => "(4) " . $trad['Note']['4'],
                    3 => "(3) " . $trad['Note']['3'],
                    2 => "(2) " . $trad['Note']['2'],
                    1 => "(1) " . $trad['Note']['1'] 
                );
                foreach ($scores as $value => $label) {
                    echo '<option value="' . $value . '">' . $label . '</option>';
                }
                ?>
            </select>
            <button type="submit"><?=$trad['Review']['Post a review'] ?></button>
        </form>
        <h2 id ="AllReviews"><strong><?= $trad['Review']['All Reviews'] ?> :</strong></h2>
        <section>

        </section>

        <button id="seeMore">Voir plus</button>
    </main>
    <?php
    require_once 'assets/template/footer.php';
    ?>
</body>
</html>