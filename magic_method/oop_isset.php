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
<?php
class abc{

	public  $name ;
	private $age  ;
	PUBLIC function setname($name,$age){
		$this->name = $name;
		$this->age = $age;
	}
	public function __isset($property){
		echo isset($test->$property);	
	}
}
	$test = new abc();
	$test->setname("Bee Code" , "25");
	echo isset($test->name);
	echo isset($test->age);
?>
</body>
</html>