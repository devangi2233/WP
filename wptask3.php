<?php
if ($_SERVER['REQUEST_METHOD']== 'POST'){ 
$name=$_POST["name"] ;
$email=$_POST["email"] ;
$color=$_POST["color"] ;
}
$servername = "localhost";
$username = "root";
$password = "";
$database = "college";
//Creating a connection
$conn = mysqli_connect($servername, $username, $password, $database);
if(!$conn){
die("Sorry, we failed to update");
}
else{
echo "Successful creation of db";
}
$sql = "INSERT INTO color(name,email,color)
VALUES ('$name','$email','$color')";
if ($conn->query($sql) === TRUE) {
 // echo "you form submited";
 function function_alert($message) {

 // Display the alert box
 echo "<script>alert('$message');</script>";
}


// Function call
function_alert($color);
} else {
 echo "Error: " . $sql . "<br>" . $conn->error;
}
?>