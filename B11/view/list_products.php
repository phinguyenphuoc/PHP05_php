<?php 
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			$id=$row['id'];
			echo "id: " . $row["id"]. " - Name: " . $row["name"]. " - Price: " . $row["price"]. " - Image: " . $row['image'] . " - date: " . $row['date'] ."       ";
			echo "<a href='index.php?id=$id&action=edit'>Edit</a><br>";	
		}	
	} else {
		echo "0 results";
	} 
?>