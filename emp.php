<?php
$servername="localhost";
$username="root";
$password="";
$database="college";
$conn=mysqli_connect($servername,$username,$password,$database);
if(!$conn){
    die("connection failed:".mysqli_connect_error());
}
$query= "create table emp(empid int primary key,ename varchar(30),designation varchar(30))";
if(mysqli_query($conn,$query)){
    echo"Table created successfully";
}
else{
    echo"Error creating table :".mysqli_error($conn);
}
$query1="insert into emp values(101,'Allen','MANAGER')";
if(mysqli_query($conn,$query1))
echo"Record 1 inserted successfully";
else
echo "Error inserting record 1:".mysqli_error();
$query2="insert into emp values(102,'Smith','CLERK')";
if(mysqli_query($conn,$query2))
echo"Record 2 inserted successfully";
else
echo "Error inserting record 2:".mysqli_error();


mysqli_close($conn);
?>
</body>
</html>