<?php
include_once ("db_fuggvenyek_pdo.php");

$conn= csatlakozas();


    if (!($conn = csatlakozas())) { // ha nem sikerult csatlakozni, akkor kilepunk
        die("Hiba a csatlakozásnál");
    }

    $stmt = $conn->prepare("DELETE FROM secretcode where id=1" ); // ez csak egy string, még nem hajtódik végre


    $stmt->execute();
    $stmt = null;
    $conn = null;


    return true;

?>