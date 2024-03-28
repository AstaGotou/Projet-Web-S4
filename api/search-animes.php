<?php

require_once "../assets/php/Database.php";

$animeName = isset($_GET['name']) ? $_GET['name'] : null;

$database = new Database();
$pdo = $database->getPdo();

$anime = $pdo->query('SELECT * from anime WHERE id IN (SELECT distinct id FROM anime_all_title WHERE titre LIKE "%' . $animeName . '%")')->fetchAll();

header('Content-Type: application/json');
echo json_encode($anime);

?>                                                                                              