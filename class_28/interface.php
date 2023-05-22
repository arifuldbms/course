<?php
class Parentclass{
public $numberOne;
public $numbertwo;

public function sum($n1,$n2)

{
	return $n1 + $n2;

 }

}

class childclass extends Parentclass{

}

$object = new childclass();

echo $object->sum(2,25);