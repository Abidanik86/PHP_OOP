<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Hello Bee Code</title>
</head>
<body>
<?php 
//work for private methods
class name{
	private $name;
	private function hello($n) {$this->name = $n; }
	public function __call($method,$args){
		echo "<h1>This is private or non exesting property: 
			  ($method)
			  </h1>"; } }
$test = new name();
$test->hello();
$test->name("Abid Hasan Anik");
?>
</body>
</html>