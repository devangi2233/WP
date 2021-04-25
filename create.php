<html>
<body>
<?php
      include "connection.php";
      if( isset($_POST["name"])){
		   $name    = $_POST['name'];
		  $phone   = $_POST['phone_number'];
		  $address = $_POST['address'];
		  $marks   = $_POST['marks'];

		  $sql = "INSERT INTO `student`(`name`, `phone`, `address`, `marks`) VALUES ('$name','$phone','$address','$marks')";
		  $conn->query($sql);
		echo "One record Insert";
	  }
  ?>
<center>
	<h1>Add Student Record</h1>
<hr>
	<form method="post" action="">
		<table border = 1 cellpadding = 15 width = 350 height = 175>
		<tr>
			<td>Name</td>
			<td><input type = "text" name = "name" placeholder = "Enter Student Name"/></td>
		</tr>
		<tr>
			<td>Phone</td>
			<td><input type = "number" name = "phone_number" placeholder = "Enter Student Phone Number"/></td>
		</tr>
		<tr>
			<td>Address</td>
			<td><textarea name = "address" placeholder = "Enter Student Address"></textarea></td>
		</tr>
		<tr>
			<td>Marks</td>
			<td><input type = "number" name = "marks" placeholder = "Enter Student Marks"/></td>
		</tr>
		<tr>
			<td colspan = 2 align = "right"><input type = "submit" value = "Save" /></td>
		</tr>
		</table>
	</form>
</center>
</body>
</html>