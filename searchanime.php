<?php
require_once 'assets/template/setlangue.php';

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
    <script src="assets/js/ajax-searchanime.js" type="module"></script>
    <title>Anime</title>
</head>
<body>
    <?php
    require_once 'assets/template/nav.php';
    ?>
    <main>
        <form method="get" action="assets/php/form3.php">
            <input type="search" name="name" placeholder="Search.." value ="<?= isset($_GET['name']) ? $_GET['name'] : '' ?>"/>
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