<header style="text-align: center; font-size: 30px;" >Intro OOP</header>
<?php 
class math{

	public $a , $b , $c; //Properties

	function sum(){     //Methods
		$this->c = $this->a + $this->b;
		return $this->c;
	}
	function sub(){
		$this->c = $this->a - $this->b;
		return $this->c;
	}
}

$c1 = new math();

$c1->a = 10;
$c1->b = 20;

echo "Sum is =" . " " . $c1->sum();

$c2 = new math();

$c2->a = 70;
$c2->b = 50;

echo " <br><br> Substraction is =" . " " .  $c2->sub();
?>