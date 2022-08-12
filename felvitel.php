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
<?php

include_once("db_fuggvenyek_pdo.php");

$id = $_POST['id'];
$secretName = $_POST['secretName'];
$secret = $_POST['secret'];
$secretOwner = $_POST['secretOwner'];


if ( isset($id) && isset($secretName) &&
     isset($secret) && isset($secretOwner) ) {

	$sikeres = beszur($id, $secretName, $secret, $secretOwner);
	if ($sikeres == true) {
		header("Location: index.html");
	} else {
		echo "Hiba volt a beszúrásnál";
	}
} else {
	error_log("Nincs beállítva valamely érték");
	
}




?>

</BODY>
</HTML>

