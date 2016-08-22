<?php
	include "db.php";
	if(isset($_POST["insert"])){
		$name = $_POST['name'];
		$time = $_POST["time"];
		$day = $_POST["day"];
		$timeOfDay = $_POST["timeOfDay"];
		$instructor = $_POST["instructor"];

		$insert = "INSERT INTO vanarts_table (name,day,time,timeOfDay,instructor) VALUES ('$name', '$day' , '$time', '$timeOfDay' ,'$instructor')";

		$insertResult = mysqli_query( $connection, $insert );

		if($insertResult){
			echo "ok";
		}
		else {
			echo "error";
		}
	}
 ?>