<?php

require_once './Anime.php';

$animeName = isset($_GET['name']) ? $_GET['name'] : '';

// var_dump => pour débuguer

header('Location: /searchanime.php?name=' . $animeName);

?>