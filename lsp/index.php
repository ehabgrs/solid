<?php
namespace SOLID\LSP;

require_once('../autoload.php');

$square = new Square();
$square->setHeight(10);
$square->setWidth(5);
//this function violate the rules of ocp or lsp
function checkArea($rect)
{
	
	if($rect instanceof Square ) {
		if($rect->getArea() !== 25) {
		echo 'out of our expectation';
		}
	} else {
		if($rect->getArea() !== 50) {
		echo 'out of our expectation';
		}
	}
	echo $rect->getArea();
}
//checkArea($square);


$type = new LSP_violation_subtype();
$type->setSalary(2000);

$violation = new LSP_violation();
echo $violation->calculateSalaryOfEmployee($type,15);

//pre-conditions
//$name must be string
//must be more than 0 charachters
function test($name)
{
	//invariants
	//loop-invariants
	
	
	//post conditions
	//all leters in the return must be lowercase
} 

