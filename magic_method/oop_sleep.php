<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Hello Bee Code</title>
</head>
<body>
	<?php 
		class abc{
			public $name = "Abid Hasan Anik";
			public $course = "PHP";
			public function __sleep(){ 
				return array("name","course");
			}//when we serialize a object then it will call sleep method.
		}
		$obj = new abc();
		$test = serialize($obj); //convert to array
		print_r($test);

		echo "<br>O = object<br>";
		echo "2 = two properties<br>";
	 	echo "s = string value<br>";
	 	echo "4 = string properties<br>";

	 ?>
</body>
</html>