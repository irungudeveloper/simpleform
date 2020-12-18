<?php 

	$host="localhost";
	$database="server_admin";
	$user="nyaga"
	$password="Nyaga@dm1n";

	$connect = new mysqli($host,$database,$user,$password);


	if($connect->connect_error)
	{
		echo "connect error". $connect->connect_error;
	}else
	{
		echo "Connected";
	}


	public function insert($fname,$lname,$age)
	{
		$sql = "INSERT INTO 'personal_details'(fname,lname,age) VALUES($fname,$lname,$age)";
		if ($connect->query($sql) == TRUE) 
		{
			return true;
		}else
		{
			return false;
		}
	}

 ?>