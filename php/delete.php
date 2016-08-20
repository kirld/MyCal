<?php
	include "db.php";
	if(isset($_GET["delete"])){
		$id = $_GET['id'];

		$delete = "DELETE FROM vanarts_table WHERE id='$id'"; 

		$deleteResult = mysqli_query($connection, $delete);
	}
?>