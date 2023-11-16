<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gästebuch</title>
    <link rel="stylesheet" href="./css/simple.css">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <h1>Gästebuch</h1>
    <form action="POST" method="POST">
        <label for="name">Wie heisst du?</label>
        <input type="text" id="name" name="name">
        
        <label for="headline">Ueberschrift</label>
        <input type="text" id="headline" name="headline">
        
        <label for="content">Schreib etwas</label>
        <input type="text" id="content" name="content">
        
        <div class="buttons">
            <input type="button" value="Abbrechen">
            <input type="button" value="Absenden">
        </div>
    </form>

    <hr>