<?php

include 'connection.php';

  $name = mysqli_real_escape_string($con, $_POST["name"]);
  $password = mysqli_real_escape_string($con, $_POST["password"]);


$sql = "SELECT * FROM user WHERE name = '$name' and password = '$password' ;";

//echo $sql;

$result = $con->query($sql);

if(($result->num_rows > 0)){

	session_start();
	$_SESSION["gamer"] = $result->fetch_assoc();
	$_SESSION["ID"] = $last_id;

}

// Tell number of rows in results 		$result->num_rows
//	Fetch a row from the result 		$result->fetch_assoc()
//	Access different members of the result 			$row["id"]
//				Start session and set session variables

 	header('location:index.php');

?>