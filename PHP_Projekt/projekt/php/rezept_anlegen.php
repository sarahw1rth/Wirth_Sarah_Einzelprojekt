<?php

    require("conn.php");

    $new_rezept     = $_POST["rezept"];
    $new_zutaten    = $_POST["zutaten"];
    $new_kategorie  = $_POST["kategorie"];

    
    $abfrage = "INSERT INTO s_rezept (rezept, zutaten, kategorie)
                VALUES ('" . $new_rezept . "', '" . $new_zutaten . "', '" . $new_kategorie . "')";


    if($sql->query($abfrage) === TRUE) {
        echo "Rezept hinzugefügt. </br> 
        Neues <a href='../view_rezept_anlegen.php'> Rezept hinzufügen </a>. </br>
        Klicke <a href='../rezept_anzeigen.php'> hier </a> um dir deine Rezepte anzusehen.";
        
    }
    else {
        echo "Rezept konnte ich nicht hinzugefügt werden.";
    }
    
?> 

<!DOCTYPE html>
<html lang="de">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link   rel="stylesheet"
                href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    </head>
    <body>
    </body>
</html>