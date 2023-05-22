<?php

	$a = 55;
	$b = 12;
	$c = 38;

	$d = ($b*$b) - (4*$a*$c);

	if($s < 0)
	{
		echo "Roots are imaginary";
	}
	elseif($d == 0)
	{
		$x1 = (-$b+sqrt($d))/(2*$b);
	}
	else
	{
		$x1 = (-$b+sqrt($d))/(2*$b);
		$x2 = (-$b-sqrt($d))/(2*$b);
	}