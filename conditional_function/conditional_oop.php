<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Hello Bee Code</title>
</head>
<body>
	<header style="text-align: center; font-size: 30px;" >Conditionale Functions OOP</header>
<?php
 	trait Mytrait{
 		public function Mytrait(){
 		}
 	}

	interface myinterface{	
	} 

	class abc implements myinterface{
		public $property;
		public function __construct(){		
		}
		public function MyMethod(){
		}
	}
echo "<br>";

	if (class_exists('abc')) {
		echo "1: This class is exist.<br>";
	}else{
		echo "1: This class is not exist.<br>";
	}
echo "<br>";

	if (interface_exists('myinterface')) {
		echo "2: This interface is exist.<br>";
	}else{
		echo "2: This interface is not exist.<br>";
	}
echo "<br>";

	$obj = new abc();

	if (method_exists($obj,'MyMethod')) {
		echo "3: This Method is exist.<br>";
	}else{
		echo "3: This Method is not exist.<br>";
	}
echo "<br>";

	if (trait_exists('Mytrait')) {
		echo "4: This Trait is exist.<br>";
	}else{
		echo "4: This Trait is not exist.<br>";
	}
echo "<br>";

	if (property_exists($obj,'property')) {
		echo "5: This Property is exist.<br>";
	}else{
		echo "5: This Property is not exist.<br>";
	}
	

 ?>
</body>
</html>