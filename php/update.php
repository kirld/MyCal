<?php
	include "db.php";
	if(isset($_POST["update"])){
		$id = $_POST['id'];
		$name = $_POST['name'];
		$day = $_POST['day'];
		$time = $_POST['time'];
		$timeOfDay = $_POST['timeOfDay'];
		$instructor = $_POST['instructor'];

		$update = "UPDATE vanarts_table SET name='$name', day='$day', time='$time', timeOfDay='$timeOfDay', instructor='$instructor' WHERE id='$id'"; 

		$updateResult = mysqli_query($connection, $update);
	}
?>