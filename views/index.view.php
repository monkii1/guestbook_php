

<!--<pre>
        <?php   
        /*
            var_dump($entries)
        */
        ;?>

</pre>
--> 

<div class="entries">
    
    <?php
    if (!empty($entries)) {
        foreach ($entries as $entry) {
            echo '<div class="entry">';
            echo '<h3>' . $entry['name'] . '</h3>';
            echo '<h2>' . $entry['headline'] . '</h2>';
            echo '<p>' . $entry['content'] . '</p>';
            echo '</div>';
        }
    } else {
        echo '<p>Es sind noch keine Eintraege vorhanden.</p>';
        echo '<p>Schreibe als erstes etwas.</p>';
    }

    ;?>

</div>

</body>
</html>