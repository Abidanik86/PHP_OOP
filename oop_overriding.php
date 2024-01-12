<header style="text-align: center; font-size: 30px;" >Over Riding OOP</header>
<?php 
//Overriding Properties
class base{
	public $name = "Parent Class<br>";
}
class derived extends base{
	public $name = "Child Class<br>";
}
$test = new base();
//$test = new derived();
echo $test->name;



//Overriding Method
class base2{
	public function calc($a ,$b){
		return  $a * $b;
	}
}
class deriveds extends base2{
	public function calc($a ,$b){
		return  $a + $b;
	}
}
$tests = new base2();
//$tests = new deriveds();

echo $tests->calc(5 , 10);
?>