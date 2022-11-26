<?php
    session_start();

    if ($_SESSION['userid']) {
        $id = $_GET["rezept"];

        require("conn.php");

        $befehl = "SELECT * FROM s_rezept WHERE id = $id";
        $ergebnis = $sql->query($befehl);
        $ergebnis = $ergebnis->fetch_assoc();
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
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.min.css">
    <title>Rezepte</title>

  </head>
  <body>
        
        <div style="display: flex; justify-content: space-between; margin-bottom: 54;">
            <h1>Neues Rezept hinzufügen</h1>
            <button><a href='../logout.php'>Ausloggen</a></button>
        </div>

        <form action="rezept_bearbeiten2.php?rezept=<?php echo $id; ?>" method="post">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <label for="rezept">Rezept</label>
            <input type="text" id="rezept" name="rezept" value="<?php echo $ergebnis["rezept"];?>">

            <label for="zutaten">Zutaten</label>
            <textarea id="zutaten" name="zutaten"><?php echo $ergebnis["zutaten"];?></textarea>

            <label for="kategorie">Kategorie</label>
            <select id="kategorie" name="kategorie">
                <option value="Vorspeise"> <?php if( $ergebnis["kategorie"] == 1) { echo "selected";} ?>Vorspeise</option>
                <option value="Hauptspeise"> <?php if( $ergebnis["kategorie"] == 2) { echo "selected";} ?>Hauptspeise</option>
                <option value="Dessert"> <?php if( $ergebnis["kategorie"] == 3) { echo "selected";} ?>Dessert</option>
                <option value="Snack"> <?php if( $ergebnis["kategorie"] == 4) { echo "selected";} ?>Snack</option>
                <option value="Frühstück"> <?php if( $ergebnis["kategorie"] == 5) { echo "selected";} ?>Frühstück</option>
            </select>

            <br>

            <button>Hinzufügen</button>

            
        </form>

  </body>
</html>
