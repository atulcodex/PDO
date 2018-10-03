<?php

	try 
	{
		include '1.connection.php';

		$email = "abdulppj@gmail.com";

		$sth = $conn->prepare("UPDATE buyer SET email='$email' WHERE id='1'");

		$sth->execute();

		echo $sth->rowCount()." record updated";
	} 
	catch (Exception $e) 
	{
		echo "Error ".$e = getMessage();
	}
?>
