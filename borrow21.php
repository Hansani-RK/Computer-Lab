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
<?php

	$host="localhost";
	$uname="root";
	$pwd="";

	$dbname="cis_computer_lab";


	$conn=mysqli_connect($host,$uname,$pwd,$dbname);
/*
	if($conn){
		echo "successfully connected";
		echo "<br>";
		echo "<br>";
	}

	else
	{
		echo "Error";
	}

	*/
	if (isset($_GET['submit'])) {

$code = $_GET['i_code'];
$name = $_GET['name'];
$rd = $_GET['red'];
$return = $_GET['r_lab'];

$query =("update borrow set item_name='$name',
	  received_date='$rd', availability='$return' where item_code='$code'");

mysqli_query($conn,$query);
}
	
?>

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
$sql ="SELECT * FROM borrow WHERE item_name='keyboard' ";
$search = $conn->query($sql);

if ($search->num_rows > 0) {
    echo "<table><tr>
    <th>Item code_</th>
    <th>Item name_</th>
    <th>Borrowed date_</th>
    <th>Borrowed by_</th>
    <th>Mobile_</th>
    <th>Recieved date_</th>
    <th>Availability</th>
    
    </tr>";
    // output data of each row
    while($row = $search->fetch_assoc()) {
        echo "<tr><td>".$row["item_code"]."</td>
        <td>".$row["item_name"]."</td>
        <td>".$row["borrowed_date"]."</td>
        <td>".$row["borrowed_by"]."</td>
        <td>".$row["mobile"]."</td>
        <td>".$row["received_date"]."</td>
        <td>".$row["availability"]."</td></tr>";
    }
    echo "</table>";
} 
else {
    echo "0 results";
}

echo "<br>";

//select mouse

//$sql = "SELECT * FROM item";
$sql ="SELECT * FROM borrow WHERE item_name='mouse' ";
$search = $conn->query($sql);

if ($search->num_rows > 0) {
    echo "<table><tr>
    <th>Item code_</th>
    <th>Item name_</th>
    <th>Borrowed date_</th>
    <th>Borrowed by_</th>
    <th>Mobile_</th>
    <th>Recieved date_</th>
    <th>Availability</th>
    
    </tr>";
    // output data of each row
    while($row = $search->fetch_assoc()) {
        echo "<tr><td>".$row["item_code"]."</td>
        <td>".$row["item_name"]."</td>
        <td>".$row["borrowed_date"]."</td>
        <td>".$row["borrowed_by"]."</td>
        <td>".$row["mobile"]."</td>
        <td>".$row["received_date"]."</td>
        <td>".$row["availability"]."</td></tr>";
    }
    echo "</table>";
}  else {
    echo "0 results";
}


echo "<br>";
//select monitors

//$sql = "SELECT * FROM item";
$sql ="SELECT * FROM borrow WHERE item_name='monitor' ";
$search = $conn->query($sql);

if ($search->num_rows > 0) {
    echo "<table><tr>
    <th>Item code_</th>
    <th>Item name_</th>
    <th>Borrowed date_</th>
    <th>Borrowed by_</th>
    <th>Mobile_</th>
    <th>Recieved date_</th>
    <th>Availability</th>
    
    </tr>";
    // output data of each row
    while($row = $search->fetch_assoc()) {
        echo "<tr><td>".$row["item_code"]."</td>
        <td>".$row["item_name"]."</td>
        <td>".$row["borrowed_date"]."</td>
        <td>".$row["borrowed_by"]."</td>
        <td>".$row["mobile"]."</td>
        <td>".$row["received_date"]."</td>
        <td>".$row["availability"]."</td></tr>";
    }
    echo "</table>";
}  else {
    echo "0 results";
}




$conn->close();
	

?>
<a href="update.php">Back</a>


</body>
</html>