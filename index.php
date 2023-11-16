<?php 
require __DIR__ . '/inc/db-connect.php'; 
require __DIR__ . '/inc/functions.php'; 

$stmt = $pdo->prepare('SELECT * FROM `entries` ORDER BY id DESC');
$stmt->execute();
$entries = $stmt->fetchAll(PDO::FETCH_ASSOC);

require __DIR__ . '/inc/header.php'; 
require __DIR__ . '/views/index.view.php';