<html>
<body>
<?php
      include "connection.php";
  ?>
<center>
	<h1>All Student Record</h1>
<hr>
		<table border = 1 cellpadding = 15 width = 600 height = 300>
			<tr>
				<th>Roll Number</th>
				<th>Name</th>
				<th>Phone</th>
				<th>Address</th>
				<th>Marks</th>
			</tr>
			<?php
				$sql = "SELECT * FROM `student` ORDER BY name asc";
				$res = mysqli_query($conn,$sql);
				while($rows = mysqli_fetch_array($res)){
					echo "<tr>
						<td>$rows[rollnumber]</td>
						<td>$rows[name]</td>
						<td>$rows[phone]</td>
						<td>$rows[address]</td>
						<td>$rows[marks]</td>
						</tr>";
				}
			?>
		</table>
</center>
</body>
</html>