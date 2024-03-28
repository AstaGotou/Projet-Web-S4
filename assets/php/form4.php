<?php

require_once './Anime.php';

$mangaName = htmlspecialchars($_GET['name']);

// var_dump => pour débuguer

if ($mangaName === '') {
    header('Location: ' . $_SERVER['HTTP_REFERER']);
}

if ($mangaName !== '' && $username !== '' && strlen($username) < 100) {
    header('Location: /searchmanga.php?name=' . $mangaName);
}
?>