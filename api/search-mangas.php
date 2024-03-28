<?php

require_once "../assets/php/Database.php";

$mangaName = isset($_GET['name']) ? $_GET['name'] : null;

$database = new Database();
$pdo = $database->getPdo();

$manga = $pdo->query('SELECT * from manga WHERE id IN (SELECT distinct id FROM manga_all_title WHERE titre LIKE "%' . $mangaName . '%")')->fetchAll();

header('Content-Type: application/json');
echo json_encode($manga);

?>                                                                                              