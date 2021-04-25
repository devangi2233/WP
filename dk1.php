<html>
<body>
<?php
      include "connection1.php";
  ?>
<center>
	<h1>Employee records</h1>

<?php
$sql = "SELECT emp.empid, department.dname FROM emp INNER JOIN department where dname='IT' and empid=101";
if($result = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table border = 1 cellpadding = 15 width =200 height = 200>";
            echo "<tr>";
                echo "<th>empid</th>";
                echo "<th>dname</th>";
               
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['empid'] . "</td>";
                echo "<td>" . $row['dname'] . "</td>";
                
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
?>

</center>
