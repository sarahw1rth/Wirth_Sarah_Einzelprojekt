<!DOCTYPE html>
<html lang="de">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Rezepte</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    </head>
    <body style="margin: 50px;">
        <h1>Rezeptübersicht</h1>
        
        <br>

        <table class="table">
            <thead>
                <tr>
                    <th>Rezept</th>
                    <th>Zutaten</th>
                    <th>Kategorie</th>
                </tr>
            </thead>

            <tbody>
                <?php
                $db_host = "db";
                $db_user = "sarah";
                $db_passwort = "sarahdatenbank";
                $db_name = "rezeptedatenbank_php";

                //Verbindung herstellen
                $conn = new MySQLi($db_host, $db_user, $db_passwort, $db_name);

                //Verbindung prüfen
                if (mysqli_connect_errno()) {
                    die("Verbindungfehler: " . mysqli_connect_error());
                }
                
                //Alle Spalten aus Datenbank lesen
                $sql = "SELECT * FROM s_rezept";
                $result = $conn->query($sql);

                if (!$result) {
                    die("Invalid query: " . $conn->error);
                }

                //Daten aus einzelner Spalte lesen
                while($row = $result->fetch_assoc()){
                    echo "<tr>
                            <td>" . $row["rezept"] . "</td>
                            <td>" . $row["zutaten"] . "</td>
                            <td>" . $row["kategorie"] . "</td>
                            <td>          
                                    <a href='/php/rezept_bearbeiten.php?rezept=" . $row["id"] . "'>Bearbeiten</a>
                                    <a class='erledigt-button' href='/php/rezept_löschen.php?rezept=" . $row["id"] . "''>Löschen</a>
                            </td>
                        </tr>";
                }
                ?>
            </tbody>
        </table>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <script language="javascript" type="text/javascript" src="/script.js"></script>
    </body>
</html>

