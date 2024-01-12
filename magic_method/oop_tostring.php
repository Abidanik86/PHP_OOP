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
	 	public function __toString(){
	 		return "<h1>You Can't print object as string!</h1>";
	 	}
	 }
	 $test= new abc();
	 echo $test;
	 ?>
</body>
</html>