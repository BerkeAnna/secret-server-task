<?php
include "db_fuggvenyek_pdo.php";




    if (!($conn = csatlakozas())) { // ha nem sikerult csatlakozni, akkor kilepunk
        die("Hiba a csatlakozásnál");
    }

    $stmt = $conn->prepare("DELETE FROM secretcode" ); // ez csak egy string, még nem hajtódik végre


    $stmt->execute();
    $stmt = null;
    $conn = null;


    return true;

?>