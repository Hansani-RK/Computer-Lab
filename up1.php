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
    $return = $_GET['r_lab'];

    $query =("update item set item_name='$name',
        availability='$return' where item_code='$code'");

    mysqli_query($conn,$query);
}
    
?>

<!--search-->


    


<a href="home.php">Back</a>


</body>
</html>