<?php 
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			echo "id: " . $row["id"]. " - Name: " . $row["name"]. " " . $row["price"]. "<br>";
						    }
		} else {
			echo "0 results";
		} 
?>