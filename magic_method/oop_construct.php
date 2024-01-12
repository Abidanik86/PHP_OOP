<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Hello Bee Code</title>
</head>
<body>
<?php 
// A constructor allows you to initialize an object's properties upon creation of the object.

// If you create a __construct() function, PHP will automatically call this function when you create an object from a class.

// Notice that the construct function starts with two underscores (__)!

class person{
	public $name , $age ; //Properties

	function __construct($name = "Default Name" , $age = "Default Age"){ //Construct Fucntion	
		$this->name = $name;
		$this->age = $age;
	}
	function show(){
		echo $this->name . " - " . $this->age;
	}
}
$a1 = new person("Bee Code" , 20);

$a2 = new person("Abid Hasan Anik" , 26);

$a1->show();
echo "<br><br>";
$a2->show();
?>
</body>
</html>