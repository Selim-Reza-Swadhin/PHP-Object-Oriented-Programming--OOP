<?php
require_once 'init.php';

$c = new Calculator;

$c->setOperation(new Adder);
$c->calculate(30, 30); //60

$c->setOperation(new Subtractor);
$c->calculate(10); //50

$c->setOperation(new Multiplier);
$c->calculate(4); //200

$c->setOperation(new Divider);
$c->calculate(2); //100

echo $c->getResult();

?>