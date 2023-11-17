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
    <form action="submit.php" method="POST">
        <label for="name">Wie heisst du?</label>
        <input required type="text" id="name" name="name">
        
        <label for="headline">Ueberschrift</label>
        <input required type="text" id="headline" name="headline">
        
        <label for="content">Schreib etwas</label>
        <textarea required type="text" id="content" name="content" rows="4">
        </textarea>
        
        <div class="buttons">
            <input class="inputButtons" type="button" value="Abbrechen">
            <input class="inputButtons" type="submit" value="Absenden">
        </div>
    </form>
    <hr>
<!--<pre>
        <?php   
        /*
            var_dump($entries)
        */
        ;?>

</pre>
--> 

<ul class="guestbook-pagination">
    <li class="guestbook-pagination-li">
        <a href="" class="guestbook-pagination-a guestbook-pagination-active">1</a>
    </li>
    <li class="guestbook-pagination-li">
        <a href="" class="guestbook-pagination-a guestbook-pagination-active">2</a>
    </li>
    <li class="guestbook-pagination-li">
        <a href="" class="guestbook-pagination-a guestbook-pagination-active">3</a>
    </li>
    <li class="guestbook-pagination-li">
        <a href="" class="guestbook-pagination-a guestbook-pagination-active">4</a>
    </li>
</ul>


<div class="entries">
    
    <?php
    if (!empty($entries)) {
        foreach ($entries as $entry) {
            echo '<div class="entry">';
            echo '<h3>' . e($entry['name']) . '</h3>';
            echo '<h2>' . e($entry['headline']) . '</h2>';
            echo '<p>' . e($entry['content']) . '</p>';
            echo '</div>';
        }
    } else {
        echo '<p>Es sind noch keine Eintraege vorhanden.</p>';
        echo '<p>Schreibe als erstes etwas.</p>';
    }

    ;?>

</div>

<ul class="guestbook-pagination">
    <li class="guestbook-pagination-li">
        <a href="" class="guestbook-pagination-a">1</a>
    </li>
    <li class="guestbook-pagination-li">
        <a href="" class="guestbook-pagination-a">2</a>
    </li>
    <li class="guestbook-pagination-li">
        <a href="" class="guestbook-pagination-a">3</a>
    </li>
    <li class="guestbook-pagination-li">
        <a href="" class="guestbook-pagination-">4</a>
    </li>
</ul>
</body>
</html>