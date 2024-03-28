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
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/search.css" rel="stylesheet">
    <script defer src="assets/js/nav.js "></script>
    <script src="assets/js/ajax-searchmanga.js" type="module"></script>
    <title>Anime</title>
</head>
<body>
    <?php
    require_once 'assets/template/nav.php';
    ?>
    <main>
        <form method="get" action="assets/php/form4.php">
            <input type="search" name="name" placeholder="Search.." value ="<?= isset($_GET['name']) ? $_GET['name'] : '' ?>" required/>
        </form>
        <section>

        </section>
        <button id="seeMore">Voir plus</button>
    </main>
    <?php
    require_once 'assets/template/footer.php';
    ?>
</body>
</html>