<?php
$servername="localhost";
$username="root";
$password="";
$database="college";
$conn = mysqli_connect($servername,$username,$password,$database);


$query="create table department(did int references emp(empid),dname varchar(30))";
if(mysqli_query($conn,$query))
{
echo"Table Created successfully";
}
else
{
echo"Error creating table:".mysqli_error($conn);
}
$query1="insert into department values(101,'IT')";
if(mysqli_query($conn,$query1))
echo"Record 1 inserted successfully";
else
echo "Error inserting record 1:".mysqli_error();
$query2="insert into department values(102,'CS')";
if(mysqli_query($conn,$query2))
echo"Record 2 inserted successfully";
else
echo "Error inserting record 2:".mysqli_error();


mysqli_close($conn);
?>
</body>
</html>
