
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>List</title>
</head>
<body>
	<div>
		<div class="box-header with-border">
	        <h3 class="box-title">List Product</h3>
	    </div>
	            <!-- /.box-header -->
	            <div class="box-body">
	              	<table class="table table-bordered">
		                <tr>
		                  <th style="width: 10px">Id</th>
		                  <th>Name</th>
		                  <th>Price</th>
		                  <th style="width: 40px">Img</th>
		                  <th>Date</th>
		                </tr>
						<?php 
						if ($result->num_rows > 0) {
							while($row = $result->fetch_assoc()) { 
								$id=$row['id'];
								echo "
								<tr>
									<td>".$row['id']."</td>
									<td>".$row["name"]."</td>
									<td><span class='badge bg-red'>".$row["price"]."</span></td>
									<td>".$row['image']."</td>
									<td>".$row['date']."</td>
									<td><span class='badge bg-yellow'><a href='index.php?id=$id&action=edit'>EDIT</a></span></td>
									<td><span class='badge bg-yellow'><a href='index.php?id=$id&action=delete'>DELETE</a></span></td>
								</tr>";
							}
						}
						?>
					</table>
   				</div>
   	</div>
</body>
</html>