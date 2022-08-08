<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Secret</title>

    <!-- ez műkszik -->
    <meta http-equiv="content-type" content="text/html; charset=UTF8" >
    <link href="style.css" rel="stylesheet">
</HEAD>
<BODY>
<h2>Your secret</h2>
        <?php

        include_once("db_fuggvenyek_pdo.php");



        $id = $_POST['id'];


        if (  isset($id) ) {

            // beszúrjuk az új rekordot az adatbázisba
            $sikeres = retrieveById($id);


        } else {
            error_log("Nincs beállítva valamely érték");

        }

        echo '<form method="POST" action="deleteAll.php" accept-charset="utf-8">';
        echo '<td><input type="submit" value="delete"   /></td>';
        echo '</form>';





        ?>



</BODY>
</HTML>

