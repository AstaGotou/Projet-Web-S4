<?php

require_once './Comment.php';

$username = htmlspecialchars($_POST['username']);
$message = htmlspecialchars($_POST['message']);

// var_dump => pour débuguer

if ($message !== '' && $username !== '' && strlen($username) < 100) {
    $comment = new Comment();
    $comment->insertComment($username, $message);

    header('Location: /recette.php');
}
