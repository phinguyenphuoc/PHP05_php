<?php 
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			echo "Chi tiet: " . $row["description"]. "<br>";
						    }
		} else {
			echo "0 results";
		} 
?>