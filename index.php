<?php 

	require_once 'config.php';

	// $f_name;
	// $l_name;
	// $age;

	// if ($_SERVER["REQUEST_METHOD"]=="POST") 
	// {
	// 	$f_name = $_POST['f_name'];
	// 	$l_name = $_POST['l_name'];
	// 	$age = $_POST['age'];

	// 	insert($f_name,$l_name,$age);
	// 	echo "Data Inserted";

	// }

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>PROJECT 1</title>
</head>
<body>

	<form method="POST" action="index.php">
		<label>
			First name
		</label>
		<input type="text" name="f_name">
		<br>
		<label>
			Last name
		</label>
		<input type="text" name="l_name">
		<br>
		<label>
			Age
		</label>
		<input type="text" name="age">
		<br>
		<input type="submit" name="submit" value="Submit">

	</form>

</body>
</html>