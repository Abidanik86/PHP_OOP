
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
//get adn set method are similar but set method need 2 parameter and get method need one parameter.
class abc{
	private $data = 
	["name" => "Abid Hasan Anik",
	"course" => "PHP_OOP" , 
	"fee" => "2000"];

	public function __get($property){
		echo "<h1>
			 !This is private or non exesting property($property)
			 </h1>";
	} //autocall magic method
}
$test = new abc();
echo $test->name; //make $data to public for get the output.
print_r($test->data); //cant access a private property for print
 ?>
 </body>
 </html>