<?php> 
    session_start();

    $rezept = $_POST["rezept"];
    $zutaten = $_POST["zutaten"];
    $kategorie = filter_input (INPUT_POST, "kategorie", FILTER_VALIDATE_INT);
    
    $db_host = "db";
    $db_user = "sarah";
    $db_passwort = "sarahdatenbank";
    $db_name = "rezeptedatenbank_php";

    $conn = new MySQLi($db_host, $db_user, $db_passwort, $db_name);

    if (mysqli_connect_errno()) {
        die("Verbindungfehler: " . mysqli_connect_error());
    }

    $sql = "INSERT INTO b_rezept (rezept, zutaten, kategorie)
            VALUES (?, ?, ?, ?, ?)";

    $stmt = mysqli_stmt_init($conn);

    if ( ! mysqli_stmt_prepare($stmt, $sql)) {
        die(mysqli_error($conn));
    }

    mysqli_stmt_bind_param($stmt, "ssi", $rezept, $zutaten, $kategorie);

    mysqli_stmt_execute($stmt);

    echo "Rezept wurde hinzugefügt.";
    echo "</br> Neues <a href='../php/rezept_anlegen.php'> Rezept hinzufügen </a>. </br> ";
    echo "</br> Klicke <a href='../rezept_anzeigen.php'> hier </a> um dir deine Rezepte anzusehen.";

    ?>

    