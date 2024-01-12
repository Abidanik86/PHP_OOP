<header style="text-align: center; font-size: 30px;" >Static Member OOP</header>
<?php 
class A {
  public static function WebsiteName() {
    return " <h1>Beecode.com</h1>";
  }
}
echo A::WebsiteName();

//After Inhertiance

class B extends A {
  public $websiteName;
  public function __construct() {
    $this->websiteName = A::WebsiteName();
  }
}

$B = new B;
echo "Inheritance Method :" . $B -> websiteName;

?>