<?php
	include "db.php";
	if(isset($_POST["update"])){
		$id = $_POST['id'];
		$name = $_POST['name'];
		$day = $_POST['day'];
		$time = $_POST['time'];
		$instructor = $_POST['instructor'];

		$update = "UPDATE vanarts_table SET name='$name', day='$day', time='$time', instructor='$instructor' WHERE id='$id'"; 

		$updateResult = mysqli_query($connection, $update);
	}
?>