<?php

require_once "../assets/php/Database.php";

$animeId = isset($_GET['id']) ? $_GET['id'] : null;

$database = new Database();
$pdo = $database->getPdo();

$max = $pdo->query('SELECT COUNT(id) FROM anime_note where id = '.$animeId.'')->fetchcolumn();

header('Content-Type: application/json');
echo json_encode($max);

?>