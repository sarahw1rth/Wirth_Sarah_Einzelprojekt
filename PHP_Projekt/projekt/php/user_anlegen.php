<?php

    require("conn.php");

    $new_username   = "user";
    $new_passwort   = "passwort";
    $new_email      = "test@test";

    $new_passwort = password_hash($new_passwort, PASSWORD_DEFAULT);

    $abfrage = "INSERT INTO s_user (username, passwort, email)
                VALUES ('" . $new_username . "', '" . $new_passwort . "', '" . $new_email . "')";

    if($sql->query($abfrage) === TRUE) {
        echo "Benutzer angelegt.";
    }
    else {
        echo "Anlegen fehlgeschlagen.";
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