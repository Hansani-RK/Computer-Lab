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
    
    $s="INSERT INTO item(item_code,item_name,added_date,availability)
    
    VALUES('$_POST[i_code]','$_POST[name]','$_POST[ad]','$_POST[r_lab]')";
    mysqli_query($conn,$s);
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
$sql ="SELECT * FROM item WHERE item_name='keyboard' ";
$search = $conn->query($sql);

if ($search->num_rows > 0) {
    echo "<table><tr>
    <th>Item code_</th>
    <th>Item name_</th>
    <th>Added date_</th>
    
    <th>Availability</th>
    
    </tr>";
    // output data of each row
    while($row = $search->fetch_assoc()) {
        echo "<tr><td>".$row["item_code"]."</td>
        <td>".$row["item_name"]."</td>
        <td>".$row["added_date"]."</td>
        <td>".$row["availability"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

echo "<br>";

//select mouse

//$sql = "SELECT * FROM item";
$sql ="SELECT * FROM item WHERE item_name='mouse' ";
$search = $conn->query($sql);

if ($search->num_rows > 0) {
    echo "<table><tr>
    <th>Item code_</th>
    <th>Item name_</th>
    <th>Added date_</th>
    
    <th>Availability</th>
    
    </tr>";
    // output data of each row
    while($row = $search->fetch_assoc()) {
        echo "<tr><td>".$row["item_code"]."</td>
        <td>".$row["item_name"]."</td>
        <td>".$row["added_date"]."</td>
        <td>".$row["availability"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}


echo "<br>";

//select monitor

//$sql = "SELECT * FROM item";
$sql ="SELECT * FROM item WHERE item_name='monitor' ";
$search = $conn->query($sql);

if ($search->num_rows > 0) {
    echo "<table><tr>
    <th>Item code_</th>
    <th>Item name_</th>
    <th>Added date_</th>
    
    <th>Availability</th>
    
    </tr>";
    // output data of each row
    while($row = $search->fetch_assoc()) {
        echo "<tr><td>".$row["item_code"]."</td>
        <td>".$row["item_name"]."</td>
        <td>".$row["added_date"]."</td>
        <td>".$row["availability"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}



$conn->close();
?>
        <a href="additem.php">Back</a>

        
</body>
</html>