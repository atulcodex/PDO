<?php
	include '1.connection.php';

	$query = ("DELETE FROM users WHERE id='8'");

	$conn->exec($query);
	echo "record deleted";
?>
