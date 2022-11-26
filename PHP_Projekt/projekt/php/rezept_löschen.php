<?php
    session_start();

    if ($_SESSION['userid']) {
        $id = $_GET["rezept"];

        require("conn.php");

        $befehl = "DELETE FROM s_rezept WHERE id=$id";
        $ergebnis = $sql->prepare($befehl);
        $ergebnis = $ergebnis->execute();

        if ($ergebnis) {
            echo "Rezept gelöscht.";
        }
        
        else {
            echo "Bitte einloggen.";
        }
    }
?>

