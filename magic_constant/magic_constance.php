
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>Hello Bee Code</title>
 </head>
 <body>
 <?php 
	echo "Line Number : " . __LINE__ . "<br>";

	echo "The Full Path Of This File : " . __FILE__ . "<br>";

	echo "The Full Path Of This Folder Name : " . __DIR__ . "<br>";

	function myfunction(){
		echo "The Function Name is : " . __FUNCTION__ . "<br>";
	}
	myfunction();

	class myclass{
		function getclassname(){
		return  __CLASS__ . "<br>";
	}
	}
	$obj = new myclass();
	echo "My Class Name is : " . $obj->getclassname();

	class mymethod{
		function getmethodname(){
		return  __METHOD__ . "<br>";
	}
	}
	$obj = new mymethod();
	echo "My Method Name is : " . $obj->getmethodname();
	
	
 ?>
 </body>
 </html>