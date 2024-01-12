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
			public function __wakeup(){
				echo "<h1>Function unserialize done</h1>";
			}//when we unserialize a object then it will call sleep method.
		}
		$obj  = new abc();
		$test = serialize($obj);    //convert to array
		$us   = unserialize($test); //array convert to string
	
		print_r($us);
	 ?>
</body>
</html>