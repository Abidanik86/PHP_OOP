<?php 
// require 'first.php';
// require 'second.php';
function __autoload($class){
	require "autoloadmethod/" . $class . ".php";
}
$test = new first();
?>