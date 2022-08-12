<?php

function csatlakozas() {
	
	try {
		$conn = new PDO("mysql:host=localhost;dbname=secret;charset=utf8", "root", "berkeanna");
	} catch (PDOException $ex) {
		echo "Csatlakozási hiba: " . $ex->getMessage();
	}
		
	return $conn;
	
}

function beszur($id, $secretName, $secret, $secretOwner) {
	
	if ( !($conn = csatlakozas()) ) { // ha nem sikerult csatlakozni, akkor kilepunk
		die("Hiba a csatlakozásnál");
	}

	$stmt = $conn->prepare('INSERT INTO secretcode(id, secretName, secret, secretOwner) VALUES (:id, :secretName, :secret, :secretOwner)');
	

	$stmt->bindParam(':id',$id, PDO::PARAM_STR, 20);
	$stmt->bindParam(':secretName',$secretName, PDO::PARAM_STR, 100);
	$stmt->bindParam(':secret', $secret, PDO::PARAM_STR, 60);
	$stmt->bindParam(':secretOwner', $secretOwner, PDO::PARAM_STR, 60);

	$stmt->execute();
	 
	$stmt = null;
	$conn = null;
	return true;
}
function retrieveByName($secretOwner){
    $conn=csatlakozas();
    $sql = "SELECT id, secretName, secret, secretOwner FROM secretcode"; // ez csak egy string, még nem hajtódik végre



    $res = $conn->query($sql);
    echo '<table border=1>';
    echo '<tr>'; // táblázat fejléce
    echo '<th>ID</th>';
    echo '<th>Secret name</th>';
    echo '<th>secret</th>';
    echo '<th>secretOwner</th>';
    echo '</tr>';


    foreach ( $res as $current_row) {
        if ($current_row["secretOwner"] == $secretOwner) {
            echo '<tr>';
            echo '<td>' . $current_row["id"] . '</td>';
            echo '<td>' . $current_row["secretName"] . '</td>';
            echo '<td>' . $current_row["secret"] . '</td>';
            echo '<td>' . $current_row["secretOwner"] . '</td>';
            echo '</tr>';
        }
    }
echo '</table>';
}



function retrieveById($id){
    $conn=csatlakozas();
    $sql = "SELECT id, secretName, secret, secretOwner FROM secretcode";



    $res = $conn->query($sql);
    echo '<table border=1>';
    echo '<tr>';
    echo '<th>ID</th>';
    echo '<th>Secret name</th>';
    echo '<th>secret</th>';
    echo '<th>secretOwner</th>';
    echo '<th>delete</th>';
    echo '</tr>';

    foreach ( $res as $current_row) {
        if ($current_row["id"] == $id) {
            echo '<tr>';
            echo '<td>' . $current_row["id"] . '</td>';
            echo '<td>' . $current_row["secretName"] . '</td>';
            echo '<td>' . $current_row["secret"] . '</td>';
            echo '<td>' . $current_row["secretOwner"] . '</td>';
            echo '<td><a href="deleteById.php"?id=<?php echo $current_row[id];?>">Delete</a></td>';
            echo '</tr>';
        }
    }
    echo '</table>';
}
