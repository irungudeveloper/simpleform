<?php 

	$host="134.209.67.100";
	$database="server_admin";
	$user="nyaga"
	$password="Nyaga@dm1n";

	$connect = new mysqli($host,$database,$user,$password);

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