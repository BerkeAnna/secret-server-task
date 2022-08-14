<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Secret</title>

    <!-- ez műkszik -->
    <meta http-equiv="content-type" content="text/html; charset=UTF8" >
    <link href="Style/style.css" rel="stylesheet">
</HEAD>
<BODY>
<h2>Your secrets</h2>
        <?php

        include_once("db_fuggvenyek_pdo.php");



        $secretOwner = $_POST['secretOwner'];


        if (  isset($secretOwner) ) {

            // beszúrjuk az új rekordot az adatbázisba
            $sikeres = retrieveByName($secretOwner);

        } else {
            error_log("Nincs beállítva valamely érték");

        }
        //echo div class



        ?>

<form method="POST" action="deleteById.php" accept-charset="utf-8">
    <label>Add the id:</label>
    <input type="text" name="id" />
    <td><input type="submit" value="delete"   /></td>
</form>
</BODY>
</HTML>