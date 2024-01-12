<header style="text-align: center; font-size: 30px;" >Interface OOP</header>
<?php 
// Interfaces allow you to specify what methods a class should implement.
// Interfaces make it easy to use a variety of different classes in the same way. When one or more classes use the same interface, it is referred to as "polymorphism".
// Interface are similar to abstract classes. The difference between interfaces and abstract classes are:

// Interfaces cannot have properties, while abstract classes can
// All interface methods must be public, while abstract class methods is public or protected
// All methods in an interface are abstract, so they cannot be implemented in code and the abstract keyword is not necessary
// Classes can implement an interface while inheriting from another class at the same time
 
interface Animal{
	public function makesound();
}
class cow implements Animal{
	public function makesound(){
		echo "Cow Sound's like : <h1>Hambaaa</h1>";
	}
}
class cat implements Animal{
	public function makesound(){
		echo "Cat Sounds's like : <h1>Meawwwww</h1>";
	}
}
class dog implements Animal{
	public function makesound(){
		echo "Dog Sounds's like : <h1>Ghew Ghew</h1>";
	}
}

// Create a list of animals
$cow = new cow();
$cat = new cat();
$dog = new dog();
$animals = array($cow,$cat,$dog);

//Normal Way to call
// $Cow->makesound(); 
// $Cat->makesound();
// $Dog->makesound();

// Tell the animals to make a sound by Foreach loop
foreach ($animals as $animal) {
	$animal->makesound();
}

 
 ?>