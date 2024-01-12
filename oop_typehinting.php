 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>Bee Code OOP Type Hinting</title>
 </head>
 <body>
 	<header style="text-align: center; font-size: 30px;" >Type Hinting OOP</header>
 	<?php 
 		//Type hinting By normal fucntion
 		function sum(int $v){  			//int type

 			echo "<h1>Integer Type : " .  $v + 1 . "</h1>";
 		}
 			sum(50);

 		function fruits(array $names){  
 			foreach ($names as $name) {
 				echo "<h1>Array Type : " .  $name . "</h1><br>"; 
 			}
 		}
 			$test = ["Apple"];
 			fruits($test);

 			//Type hinting using by class
 		class hello{
 			public function sayhello(){
 				echo "<h1>Hello Everyone.</h1>";
 			}
 		}	
 		class bye{
 			public function saybye(){
 				echo "<h1>Bye Everyone.</h1>";
 			}
 		}
 		function wow(hello $c){
 			$c->sayhello();
 		}

 		$tests = new hello();
 		wow($tests);


 		//Type hinting using by class
 		class school{
 			public function Getnames(student $names){
 				echo "<ul>";
 				foreach ($names->Names() as $name){
 					echo "<li><h2>" .  $name . "</h2></li><br>";
 				}
 				echo "</ul>";
 			}
 		}	

 		class student{
 			public function Names(){
 				return ["Abid","Hasan","Anik"];
 			}
 		}

 		class library{

 		}
 		$stu = new student();
 		$sch = new school();

 		$sch->Getnames($stu);
 	?>
 </body>
 </html>