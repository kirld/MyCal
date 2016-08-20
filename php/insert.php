<?php
	include "db.php";
	if(isset($_POST["insert"])){
		$name = $_POST['name'];
		$time = $_POST["time"];
		$day = $_POST["day"];
		$instructor = $_POST["instructor"];

		$insert = "INSERT INTO vanarts_table (name,day,time,instructor) VALUES ('$name', '$day' , '$time', '$instructor')";

		$insertResult = mysqli_query( $connection, $insert );

		if($insertResult){
			echo "ok";
		}
		else {
			echo "error";
		}
	}
 ?>