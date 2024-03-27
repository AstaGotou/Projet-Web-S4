<?php

require_once "../assets/php/Database.php";

$animeId = isset($_GET['id']) ? (int)$_GET['id'] : null;

$database = new Database();
$pdo = $database->getPdo();

$anime = $pdo->query('SELECT * FROM anime_note where id = '.$animeId.' ORDER BY date_publication DESC, heure_publication DESC ')->fetchAll();

header('Content-Type: application/json');
echo json_encode($anime);

?>