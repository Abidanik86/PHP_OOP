<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
		Hello Bee Code
	</title>
</head>
<body>
	<header style="text-align: center; font-size: 30px;" >Mysqli Object OOP</header>

	<?php 
	$servername = "localhost";
	$username   = "root";
	$password   = "";
	$dbname     = "oop_mysqli";

	$conn = new mysqli($servername,$username,$password,$dbname);

	if ($conn->connect_error) {
		die("Connection Failed: " . $conn->connect_error);
	}
	
	$sql = "SELECT * FROM student";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()){
			echo "<h3>Id:  {$row["id"]} - Name: {$row["name"]} - Email: {$row["email"]} - Phone: {$row["phone"]} </h3><br>";
		}
	}else{
		echo "No Record Found";
	}
	$conn->close();
	 ?>
</body>
</html>