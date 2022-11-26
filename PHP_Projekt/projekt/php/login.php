<?php
    session_start();
    require("conn.php");

    
    $login_user         = $_POST["username"];
    $login_password     = $_POST["passwort"];

    $abfrage = "SELECT * FROM s_user WHERE username = '" . $login_user . "' ";
    $result = $sql->query($abfrage);
    $user = $result->fetch_assoc();

    if($user){
        // User wurde gefunden

        if( password_verify($login_password, $user['passwort']) ){
            $_SESSION['userid'] = $user['id'];

            echo "Passwort stimmt </br>
            Jetzt <a href= '../view_rezept_anlegen.php'> neues Rezept anlegen</a>. </br>
            Jetzt <a href= '../rezept_anzeigen.php'> zur Rezeptübersicht</a>.";
        }
        else{
            // Passwort stimmt nicht
            echo "Passwort stimmt nicht;
            </br> Jetzt <a href= '../login.php'> Einloggen nochmal probieren</a>.";
        }
    }
    else{
        // User wurde nicht gefunden
        echo " </br> User nicht gefunden";
        echo " </br> Jetzt <a href= '../login.php'> Einloggen nochmal probieren</a>.";
    }
?>

<!DOCTYPE html>
<html lang="de">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link   rel="stylesheet"
                href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.min.css">
    </head>
    <body>
    </body>
</html>

