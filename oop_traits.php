<header style="text-align: center; font-size: 30px;" >Traits OOP</header>
<?php 
// PHP only supports single inheritance: a child class can inherit only from one single parent.

// So, what if a class needs to inherit multiple behaviors? OOP traits solve this problem.

// Traits are used to declare methods that can be used in multiple classes. Traits can have methods and abstract methods that can be used in multiple classes, and the methods can have any access modifier (public, private, or protected).

trait base{
	public function msg(){
		echo " <h1>Hello Everyone. OOP is fun!</h1><br>";
	}
	public function msg3(){
		echo " <h1>Hi Everyone. Coding is fun!</h1><br>";
	}
	public function msg4(){
		echo " <h1>Hi Everyone. This is fun!</h1><br>";
	}
}
trait base2{
	public function msg2(){
		echo "<h1>Hello Everyone. Php is fun!!</h1><br>";
	}
}
class child{
	use base ,base2; //use multiple traits
}

$obj = new child();

$obj->msg();
$obj->msg2();
$obj->msg3();
$obj->msg4();
?>