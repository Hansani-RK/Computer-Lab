<html>
<head>
<title>CIS</title>
<style>
	table,th,td {
		border:1px solid black;
		background-color: #FF9900;

	}
</style>

</head>
<body>


<!--search-->

<?php

	$host="localhost";
	$uname="root";
	$pwd="";

	$dbname="cis_computer_lab";

	$conn=new mysqli($host,$uname,$pwd,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$sql = "SELECT * FROM item";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr>
    <th>Item code_</th>
    
    <th>Return lab</th>
    
    </tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["item_code"]."</td>
        
        <td>".$row["return_lab"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>
		<a href="search1.php">Back</a>

		
</body>
</html>