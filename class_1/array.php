<?php
$array = [40,50,60,25,55,60,43,89];

$size = sizeof($array);

for($counter = 0; $counter < $size; $counter++)
{
	echo "index:".$counter." = " .$array[$counter]."<br>";
}
