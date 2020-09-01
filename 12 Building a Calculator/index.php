<?php
require_once 'classes/Calculator.php';
require_once 'classes/OperatorInterface.php';
require_once 'classes/Adder.php';
require_once 'classes/Subtractor.php';
require_once 'classes/Multiplier.php';
require_once 'classes/Divider.php';

$c = new Calculator;

$c->setOperation(new Adder);
$c->calculate(20, 30); //50

$c->setOperation(new Subtractor);
$c->calculate(10); //40

$c->setOperation(new Multiplier);
$c->calculate(2); //80

$c->setOperation(new Divider);
$c->calculate(4); //20

echo $c->getResult();

?>