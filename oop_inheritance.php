<header style="text-align: center; font-size: 30px;" >Inheritence OOP</header>
<?php

// Inheritance in OOP = When a class derives from another class.

// The child class will inherit all the public and protected properties and methods from the parent class. In addition, it can have its own properties and methods.

// An inherited class is defined by using the extends keyword.

class employee{
	public $name;
	public $age;
	public $salary;

	function __construct($n,$a,$s){
		$this->name = $n;
		$this->age = $a;
		$this->salary = $s;
	}

	function info(){
		echo "<h2>Employee Profile.</h2>";
		echo "Employee Name : " . $this->name ."<br>" ;
		echo "Employee Age  : " . $this->age . "<br>" ;
		echo "Employee Salary :" . $this->salary . "<br>" ;
	}

}

class manager extends employee{ 
	public $ta = 1000;
	public $phone = 300;
	public $totalsalary;

	function info(){
		$this->totalsalary = $this->salary + $this->ta + $this->phone;

		echo "<h2>Manager Profile.</h2>";
		echo "Manager Name : " . $this->name ."<br>" ;
		echo "Manager Age  : " . $this->age . "<br>" ;
		echo "Manager Salary :" . $this->totalsalary . "<br>" ;
	}
}

$emp = new employee("Abid Hasan Anik" , 25 , 2000);
$ema = new manager("Salman Khan" , 45 , 5000);
$ema2 = new employee("Amir Khan" , 50 , 7000);

$emp->info();
$ema->info();
$ema2->info();
?>