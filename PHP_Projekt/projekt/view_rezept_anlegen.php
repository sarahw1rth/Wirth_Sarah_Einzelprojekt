<?php 
    session_start();
    ?>

<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rezepte</title>
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.min.css">
    <link href="./style.css" rel="stylesheet">
  </head>
  <body>
        <h1>Neues Rezept hinzufügen</h1>

        <form action="php/rezept_anlegen.php" method="post">
            <input name="rezept" id="rezept" type="text" placeholder="Wie soll dein Rezept heißen?"/>
            <input name="zutaten" id="zutaten" type="text" placeholder="Wie wird das Rezept zubereitet?"/>
            <label for="kategorie">Kategorie</label>
            <select id="kategorie" name="kategorie">
                <option value="Vorspeise">Vorspeise</option>
                <option value="Hauptspeise" selected>Hauptspeise</option>
                <option value="Dessert">Dessert</option>
                <option value="Snack">Snack</option>
                <option value="Frühstück">Frühstück</option>
            </select>

            <br>

            <input name="submit" id="submit" type="submit" value= "Hinzufügen" />
        </form>

  </body>
</html>
