<?php

require_once './Anime.php';

$animeId = $_GET['id'];
$username = htmlspecialchars($_POST['username']);
$message = htmlspecialchars($_POST['message']);
$score = $_POST['myinfo_score'];

// var_dump => pour débuguer

if ($message !== '' && $username !== '' && strlen($username) < 100) {
    $anime = new Anime();

    $anime->insertReview((int) $animeId, $username, (int) $score, $message);

    header('Location: ' . $_SERVER['HTTP_REFERER']);
}
?>