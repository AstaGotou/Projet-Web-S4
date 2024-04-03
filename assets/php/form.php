<?php

require_once './Manga.php';

$mangaId = $_GET['id'];
$username = htmlspecialchars($_POST['username']);
$message = htmlspecialchars($_POST['message']);
$score = $_POST['myinfo_score'];

// var_dump => pour débuguer

if ($message !== '' && $username !== '' && strlen($username) < 100) {
    $manga = new Manga();

    $manga->insertReview((int) $mangaId, $username, (int) $score, $message);
}
header('Location: /manga.php?id=' . $mangaId);
?>