<?php

require_once "../assets/php/Database.php";

$animeId = isset($_GET['id']) ? $_GET['id'] : null;
$OFFSET = isset($_GET['offset']) ? $_GET['offset'] : 0;

$database = new Database();
$pdo = $database->getPdo();

$anime = $pdo->query('SELECT * FROM anime_note where id = '.$animeId.' ORDER BY date_publication DESC, heure_publication DESC LIMIT 5 OFFSET '.$OFFSET.'')->fetchAll();

header('Content-Type: application/json');
echo json_encode($anime);

?>