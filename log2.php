<?php
	session_start();

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

	//include 'bdh.php';
	
	$name=$_POST['name'];
	$pwd=$_POST['pwd'];

	$sql = "SELECT * FROM users WHERE userName='$name' AND userPass='$pwd'";
	$result = $conn->query($sql);
	if(!$row=$result->fetch_assoc()){
		echo "Your User Name or Password is incorrect!";
	}
	else{
		$_SESSION['id']=$row['id'];
		header("Location: home.php");
	}
	
?>
