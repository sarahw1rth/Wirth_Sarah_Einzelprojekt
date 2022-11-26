<?php
    session_start();

    if ($_SESSION['userid']) {
        $id = $_GET["rezept"];

        require("conn.php");

        $rezept = $_POST["rezept"];
        $zutaten = $_POST["zutaten"];
        $kategorie = $_POST["kategorie"];

        $befehl = "UPDATE s_rezept SET rezept='$rezept', zutaten='$zutaten', kategorie='$kategorie' WHERE id = $id";
        $ergebnis = $sql->prepare($befehl);
        $ergebnis = $ergebnis->execute();

        if ($ergebnis) {
            echo "Rezept erfolgreich geändert.</br> 
            Ein neues <a href = '../view_rezept_anlegen.php'> Rezept anlegen </a>.</br>
            Klicke <a href = '../rezept_anzeigen.php'> hier </a> um dir deine Rezepte anzusehen.";
        }
    }
    else {
        header ("location: /login.php");
            exit;
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