<header style="text-align: center; font-size: 30px;" >Method Chaining OOP</header>
<?php 

class personal{
	public function first(){
		echo "<h1>This Is First function</h1><br>";
		return $this; //Has to be return for method chaining
	}
	public function second(){
		echo "<h1>This Is Second function</h1><br>";
		return $this;
	}
	public function third(){
		echo "<h1>This Is Third function</h1><br>";
	}
}
$obj = new personal();

$obj->first()->second()->third();


?>