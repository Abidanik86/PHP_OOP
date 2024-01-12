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
			private $course ="PHP";

			public function __unset($property){
				 unset($this->$property);			
			}
		}
		$test = new abc();
		unset($test->name);
		unset($test->course);
			
	 ?>
</body>
</html>
