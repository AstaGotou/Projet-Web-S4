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

?>