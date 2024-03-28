<?php

require_once './Anime.php';

$animeName = htmlspecialchars($_GET['name']);

// var_dump => pour débuguer

header('Location: /searchanime.php?name=' . $animeName);

?>