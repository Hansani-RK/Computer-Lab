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

	<!--insert data-->
<?php

	$host="localhost";
	$uname="root";
	$pwd="";

	$dbname="cis_computer_lab";

	$conn=mysqli_connect($host,$uname,$pwd,$dbname);

	if($conn){
		echo "successfully connected";
		echo "<br>";
		echo "<br>";
		
	}

	else
	{
		echo "Error";
	}
	
	
	if(!empty($_POST['submit'])){
	
	$s="INSERT INTO repair(item_code,item_name,repair_date,company_name,tel,availability)
	
	VALUES('$_POST[i_code]','$_POST[name]','$_POST[give]','$_POST[c_name]','$_POST[c_tel]','$_POST[r_lab]')";
	mysqli_query($conn,$s);
}

				/*if (isset($_GET['submit'])) {

					$code = $_GET['i_code'];
					$name = $_GET['name'];
					$rd = $_GET['give'];
					$cn = $_GET['c_name'];
					$ct = $_GET['c_tel'];
					$return = $_GET['r_lab'];

					$query =("update item set item_name='$name',
						repair_date='$rd', company_name='$cn', tel='$ct', availability='$return' 
						where item_code='$code'");

					mysqli_query($conn,$query);
				}*/
	
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
$sql ="SELECT * FROM repair WHERE item_name='keyboard' ";
$search = $conn->query($sql);

if ($search->num_rows > 0) {
    echo "<table><tr>
    <th>Item code_</th>
    <th>Item name_</th>
    <th>Repair date_</th>
    <th>Company name_</th>
    <th>Company tel_</th>
    <th>Cost_</th>
    <th>Recieved date_</th>
    <th>Availability</th>
    
    </tr>";
    // output data of each row
    while($row = $search->fetch_assoc()) {
        echo "<tr><td>".$row["item_code"]."</td>
        <td>".$row["item_name"]."</td>
        <td>".$row["repair_date"]."</td>
        <td>".$row["company_name"]."</td>
        <td>".$row["tel"]."</td>
        <td>".$row["cost"]."</td>
        <td>".$row["re_date"]."</td>
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
$sql ="SELECT * FROM repair WHERE item_name='mouse' ";
$search = $conn->query($sql);

if ($search->num_rows > 0) {
    echo "<table><tr>
    <th>Item code_</th>
    <th>Item name_</th>
    <th>Repair date_</th>
    <th>Company name_</th>
    <th>Company tel_</th>
    <th>Cost_</th>
    <th>Recieved date_</th>
    <th>Availability</th>
    
    </tr>";
    // output data of each row
    while($row = $search->fetch_assoc()) {
        echo "<tr><td>".$row["item_code"]."</td>
        <td>".$row["item_name"]."</td>
        <td>".$row["repair_date"]."</td>
        <td>".$row["company_name"]."</td>
        <td>".$row["tel"]."</td>
        <td>".$row["cost"]."</td>
        <td>".$row["re_date"]."</td>
        <td>".$row["availability"]."</td></tr>";
    }
    echo "</table>";
}  else {
    echo "0 results";
}


echo "<br>";
//select monitors

//$sql = "SELECT * FROM item";
$sql ="SELECT * FROM repair WHERE item_name='monitors' ";
$search = $conn->query($sql);

if ($search->num_rows > 0) {
    echo "<table><tr>
    <th>Item code_</th>
    <th>Item name_</th>
    <th>Repair date_</th>
    <th>Company name_</th>
    <th>Company tel_</th>
    <th>Cost_</th>
    <th>Recieved date_</th>
    <th>Availability</th>
    
    </tr>";
    // output data of each row
    while($row = $search->fetch_assoc()) {
        echo "<tr><td>".$row["item_code"]."</td>
        <td>".$row["item_name"]."</td>
        <td>".$row["repair_date"]."</td>
        <td>".$row["company_name"]."</td>
        <td>".$row["tel"]."</td>
        <td>".$row["cost"]."</td>
        <td>".$row["re_date"]."</td>
        <td>".$row["availability"]."</td></tr>";
    }
    echo "</table>";
}  else {
    echo "0 results";
}




$conn->close();
?>
		<a href="insert.php">Back</a>

		
</body>
</html>