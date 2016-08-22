<?php
 	header("Access-Control-Allow-Origin: *");

 	$host = "localhost";
 	$username = "kiralynn_myCal";
 	$password = "myCal";
 	$database = "kiralynn_schedule";

 	$connection = mysqli_connect($host,$username,$password,$database);

 	//if no connection
 	if(!$connection) {	
 		die("Connection has failed: " . mysqli_connect_error());
 	} else {
 		// echo "Everything is good.";
 	}

?>