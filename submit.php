<?php

require_once __DIR__ . '/inc/db-connect.php'; 
require_once __DIR__ . '/inc/functions.php'; 

if (!empty($_POST)) {

    $name = '';
    if (isset($_POST['name'])) {
        $name = @(string) $_POST['name'];

    }
    $headline = '';
    if (isset($_POST['headline'])) {
        $headline = @(string) $_POST['headline'];
    }
    $content = '';
    if (isset($_POST['content'])) {
        $content = @(string) $_POST['content'];
    }
}

if(!empty($name) && !empty($headline) && !empty($content)) {
    $stmt = $pdo->prepare('INSERT INTO entries (`name`, `headline`, `content`) 
                            VALUES (:name, :headline, :content)');
    $stmt->bindValue('name', $name);
    $stmt->bindValue('headline', $headline);
    $stmt->bindValue('content', $content);
    $stmt->execute();

    echo '<a href="index.php">Zurück zum Gästebuch...</a>';
}  else {
    echo 'Ups somehing went wrong..';
}


