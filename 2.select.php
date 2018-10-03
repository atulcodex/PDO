<?php
	try
	{
		include '1.connection.php';

		$sth = $conn->prepare("SELECT * FROM buyer");

		$sth->setFetchMode(PDO::FETCH_OBJ);

		$sth->execute();

		while ($result = $sth->fetch()) 
		{
			echo $result->name."<br>";
		}	
	} 
	catch (PDOException $e) 
	{
		echo "Error ".$e=getMessage();
	}
?>

