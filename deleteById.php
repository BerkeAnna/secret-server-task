<?php

include_once("db_fuggvenyek_pdo.php");

$conn= csatlakozas();


if (!($conn = csatlakozas())) { // ha nem sikerult csatlakozni, akkor kilepunk
    die("Hiba a csatlakozásnál");
}
$id = $_POST['id'];

if(isset($id)) {
    $stmt = $conn->prepare("DELETE FROM secretcode WHERE id=" . $id);
    $stmt->execute();
    header("Location: index.html");
}

