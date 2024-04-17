<?php

require_once 'assets/template/setlangue.php';

require_once 'assets/php/Manga.php';

$mangaId = $_GET['id'];
$mangaObj = new Manga();
$mangaInfo = $mangaObj->getMangaById($mangaId);
$mangaGenre = $mangaObj->getMangaGenreById($mangaId);
$mangaSynopsis = $mangaObj->getMangaSynopsisById($mangaId, $lang);
$mangaNote = $mangaObj->getMoyenneNote($mangaId);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/presentation.css" rel="stylesheet">
    <script defer src="assets/js/nav.js "></script>
    <script src="assets/js/ajax-manga.js" type="module"></script>
    <title>Manga</title>
</head>
<body>
<?php
    require_once 'assets/template/nav.php';
    ?>
    <main>
        <h1><?=$mangaInfo['titre'] ?></h1>
        <img src="assets/img/poster/manga/<?=$mangaInfo['chemin_photo'] ?>" alt="">
        <h2 id ="Synopsis">Synopsis</h2>
        <p><?=$mangaSynopsis['synopsis'] ?></p>
        <ul>
            <li><strong><?= $trad['Info']['Type'] ?> : </strong><?= $mangaInfo['type'] ?></li>
            <li><strong><?= $trad['Info']['Statut']['Label'] ?> : </strong> <?=$trad['Info']['Statut'][$mangaInfo['statut']] ?></li>
            <li><strong><?= $trad['Info']['Genre'] ?> : </strong> <?php foreach ($mangaGenre as $genre) : ?><?= $genre['genre'] ?>, <?php endforeach ?></li>
            <li><strong><?= $trad['Info']['Date de sortie'] ?> : </strong><?= $mangaInfo['date_sortie'] ?></li>
            <li><strong><?= $trad['Info']['Date de fin'] ?> : </strong><?= ($mangaInfo['date_fin']===NULL) ? '?' : $mangaInfo['date_fin'] ?></li>
            <li><strong><?= $trad['Info']['Nombre de volumes'] ?> : </strong><?= $mangaInfo['nombre_volume'] ?></li>
            <li><strong><?= $trad['Info']['Nombre de chapitres'] ?> : </strong><?= $mangaInfo['nombre_chapitre'] ?></li>
        </ul>
        <div>
            <p>SCORE</p>
            <p2><strong><?= ($mangaNote === (float)-1) ? 'N/A' : number_format($mangaNote, 2) ?> ⭐️</strong> </p2>
        </div>
        <h2 id="InsertReview"><strong><?= $trad['Review']['Write a review'] ?> :</strong></h2>
        <form action="assets/php/form.php<?= '?id=' . $mangaId ?>" method="post">
            <label for="username">Username : </label>
            <input type="text" id="username" name="username" required/>

            <label for="message">Message :</label>
            <textarea id="message" name="message" required></textarea>
            
            <label for="myinfo_score">Score : </label>
            <select name="myinfo_score" id="myinfo_score" required>
                <option selected="selected" value="-1">Select</option>
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
            <button aria-label="Poster la critique" type="submit"><?=$trad['Review']['Post a review'] ?></button>
        </form>
        <h2 id ="AllReviews"><strong><?= $trad['Review']['All Reviews'] ?> :</strong></h2>
        <section>

        </section>

        <button aria-label='Affiche les critiques suivantes' id="seeMore">Voir plus</button>
    </main>
    <?php
    require_once 'assets/template/footer.php';
    ?>
</body>
</html>
