<?php

include_once ("db_fuggvenyek_pdo.php");
include "deleteById.php";
include "retrieveById.php";

$conn= csatlakozas();


    $id = ret();
    $sql = "DELETE FROM secretcode WHERE id=" . $_GET["id"];

    $statement = $conn->prepare($sql);
    $statement->bindValue(':id', $id);
    $statement->execute();

