<?php

require_once "../assets/php/Database.php";

$mangaId = isset($_GET['id']) ? (int)$_GET['id'] : null;

$database = new Database();
$pdo = $database->getPdo();

$manga = $pdo->query('SELECT * FROM manga_note where id = '.$mangaId.' ORDER BY date_publication DESC, heure_publication DESC ')->fetchAll();

header('Content-Type: application/json');
echo json_encode($manga);

?>