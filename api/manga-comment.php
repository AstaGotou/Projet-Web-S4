<?php

require_once "../assets/php/Database.php";

$mangaId = isset($_GET['id']) ? $_GET['id'] : null;

$database = new Database();
$pdo = $database->getPdo();

$max = $pdo->query('SELECT COUNT(id) FROM manga_note where id = '.$mangaId.'')->fetchcolumn();

header('Content-Type: application/json');
echo json_encode($max);

?>