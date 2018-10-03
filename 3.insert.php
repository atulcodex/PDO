<?php
	try 
	{
		include '1.connection.php';
		$id = 9;
		$name = "dhaval rokani";
		$number = 445687912;
		$email = "dhaval@gmail.com";
		$location = "gujrat";
		$gender = "male";
		$profession = "accountent";
		$salary = 90000;
		$picsource = "hghjhgjhgjh.jpg";

		$sth = $conn->prepare("INSERT INTO buyer(id,name,number,email,location,gender,profession,salary,picsource) VALUES(:id,:name,:number,:email,:location,:gender,:profession,:salary,:picsource)");

		$sth->bindParam(':id',$id);
		$sth->bindParam(':name',$name);
		$sth->bindParam(':number',$number);
		$sth->bindParam(':email',$email);
		$sth->bindParam(':location',$location);
		$sth->bindParam(':gender',$gender);
		$sth->bindParam(':profession',$profession);
		$sth->bindParam(':salary',$salary);
		$sth->bindParam(':picsource',$picsource);

		$sth->execute();
		echo "data inserted";
	} 
	catch (PDOException $e) 
	{
		echo "Errorr ".$e=getMessage();
	}
?>
