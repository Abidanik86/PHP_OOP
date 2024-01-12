
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>Hello Bee Code</title>
 </head>
 <body>
 <?php 
 //copy by value
 $a = 10;
 $b = $a;
 $b = 100;
 echo "Copy By Value: " .  $a ."<br>";
//copy by refrence 
 $c = 20;
 $d = & $c; //& means adress of variable a
 $d = 100;
 echo "Copy By refrence: " .  $a ."<br>";

class student{
	public $name;
	public $course;

	public function __construct($n){
		$this->name = $n;
	}
	public function setcourse(course $c){
		$this->course = $c;
	}
	public function __clone(){
		$this->course = clone $this->course;
	}
}
class course{
	public $cname ;
	public function  __construct($cn){
		$this->cname = $cn;
	}
}
$student1 = new student("Abid Hasan Anik");
$course1 = new course('PHP');

$student1->setcourse($course1);

$student2 = clone  $student1; //copy by value . By default it is copy by refrence

$student2->name = "Salman Khan";
$student2->course->cname = 'Python';

echo "Student 1: " . $student1->name . "<br>";

echo "Student 2: " . $student2->name . "<br>";

echo "<pre>";

print_r($student1) ;

print_r($student2);
echo "</pre>";
 ?>
 </body>
 </html>