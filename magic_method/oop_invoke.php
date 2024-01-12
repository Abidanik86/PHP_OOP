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
		public $a ,$b;
		public function __construct($a,$b){
			$this->a = $a;
			$this->b = $b;
		}
		public function sum(){
			echo $this->a + $this->b;
		}
		public function __invoke(){
			echo "<h1>You Can't call direct object!</h1>"; 
		}
	}
	$obj = new abc(20,30);
	$obj->sum();
	echo "<br>";
	$obj(); //Direct call object
	 ?>
</body>
</html>