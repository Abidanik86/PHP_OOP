<header style="text-align: center; font-size: 30px;" >Access Modifier OOP</header>
<?php 
// Properties and methods can have access modifiers which control where they can be accessed.

// public method
class base{
	public $name;

	public function __construct($n){
		$this->name = $n;
	}
	public function show(){
		echo "Public Method";
		echo "<h1>Your name is : " . $this->name . "</h1><br>";
	}
}
$a = new base("Abid Hasan Anik");
$a->show();



//Protected Method
class base2{
	protected $name;

	public function __construct($n){
		$this->name = $n;
	}
	protected function show(){
		echo "<h1>Your name is : " . $this->name . "</h1><br>";
	}

}
class derived extends base2{
	public function show2(){
		echo "Protected Method";
		echo "<h1> Your name is : " . $this->name . "</h1><br>";
	}
}
$p = new derived("Salman Khan");
$p->show2();





?>