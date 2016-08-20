<?php
	include "db.php";

	$data = array();

	$query = "SELECT * FROM vanarts_table";
	$queryResult = mysqli_query($connection, $query);
	$numberOfRows = mysqli_num_rows($queryResult);

	if($numberOfRows > 0){
		while($row = mysqli_fetch_assoc($queryResult)){
			$data[] = $row;
		}
	} else {
		echo "There is no data";
	}

	echo json_encode($data);
?>
