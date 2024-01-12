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
	private $name;
	public function __get($property){
		echo "<h1>
			 !This is private or non exesting property($property)
			 </h1>";
	}
	public function __set($property,$value){
		echo "<h1>
			 !This is private or non exesting property($property)
			 </h1>";
	} //autocall magic method
}
$test = new abc();
$test->name = "Abid Hasan Anik";
$test->course = "php";
 ?>
 </body>
 </html>