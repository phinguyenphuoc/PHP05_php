
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>List</title>
	<style type="text/css">
		table {
    		border-collapse: collapse;
		}
		table, th, td {
    		border: 1px solid black;
		}
		th,td{
			width: 180px;	
			padding-left: 20px;
		}
	</style>
</head>
<body>
	<table>
		<tr>
			<th>Id</th>
			<th>Name</th>
			<th>Price</th>
			<th>Img</th>
			<th>Date</th>
			<th></th>
		</tr>
		<?php 
		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) { 
				$id=$row['id'];
				echo "
				<tr>
					<td>".$row['id']."</td>
					<td>".$row["name"]."</td>
					<td>".$row["price"]."</td>
					<td>".$row['image']."</td>
					<td>".$row['date']."</td>
					<td><a href='index.php?id=$id&action=edit'>Edit</a></td>
				</tr>";
			}
		}
		?>
	</table>
</body>
</html>