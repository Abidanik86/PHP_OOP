<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Hello Bee Code</title>
</head>
<body>
<?php 
 class hello{
	public function __construct(){
		echo "<h1>1. Hello from Construct method.</h1><br>";
	}
	public function hello(){
		echo "<h1>2. Hello from Bee Code.</h1><br>";
	}
	public function __destruct(){
		echo "<h1>3. Hello From Distruct Method</h1>";
	}
}
$obj = new hello();
$obj->hello();
?>
</body>
</html>