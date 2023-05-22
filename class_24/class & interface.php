<?php
class calculation{
public $n1 = 55;
public $n2 = 60;

public function sum($n1, $n2)
{
	$this->n1 = $n1;
	$this->n2 = $n2;
	return $this->n1 + $this->n2;
}

public function sub($n1, $n2)
{
	$this->n1 = $n1;
	$this->n2 = $n2;
	return $this->n1 - $this->n2;
}

public function mul($n1, $n2)
{
	$this->n1 = $n1;
	$this->n2 = $n2;
	return $this->n1 * $this->n2;
}
public function div($n1, $n2)
{
	$this->n1 = $n1;
	$this->n2 = $n2;
	return $this->n1 / $this->n2;
}

}

$object = new calculation();
echo $object->sum(5,5);
