<header style="text-align: center; font-size: 30px;" >Abstract Method OOP</header>
<?php 
// Abstract classes and methods are when the parent class has a named method, but need its child class(es) to fill out the tasks.

// An abstract class is a class that contains at least one abstract method. An abstract method is a method that is declared, but not implemented in the code.

abstract class A{
	public $name;
	abstract protected function show($a);
}
class B extends a{
	public function show($a){
		echo "Hello Abstract Method";
	}
}
$test = new B();
$test->show("Abid Hasan Anik");

//Personal info
//Fees
//Library
//Cycle Stand

?>