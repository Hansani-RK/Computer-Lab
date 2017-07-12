
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

//select keyboard
//$sql = "SELECT * FROM item";
$sql ="SELECT * FROM item WHERE availability='yes' ";
$search = $conn->query($sql);

if ($search->num_rows > 0) {
    echo "<table><tr>
    <th>Item code_</th>
    <th>Item name_</th>
    <th>Availability_</th>
    
    </tr>";
    // output data of each row
    while($row = $search->fetch_assoc()) {
        echo "<tr><td>".$row["item_code"]."</td>

        <td>".$row["item_name"]."</td>
        <td>".$row["availability"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}








$conn->close();

?>




<!--search-->

		<a href="search1.php">Back</a>

		
</body>
</html>


