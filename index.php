<?php
$lang = 'fr';

if (isset($_GET['lang'])) {
    if ($_GET['lang'] === 'en' || $_GET['lang'] === 'fr') {
        setcookie(
            'lang',
            $_GET['lang'],
            time() + 60 * 60 * 24 * 365,
            '',
            '',
            true,
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
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/css/style.css" rel="stylesheet">
    <script defer src="assets/js/script.js"></script>
    <title>Animetosh.net - Anime and manga List</title>
</head>
<body>

    <?php
    require_once 'assets/template/nav.php';
    ?>
</body>
</html>