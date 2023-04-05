<?php

/******************************
 ******************************
 A simple for Loop to generate
 Even Numbers
 ******************************
*******************************/

for ($i = 1; $i <= 100; $i++) 
{
	if ($i%2 == 0) 
	{
		echo "Even Number: " . $i . PHP_EOL;
	}

	if($i == 20) {
		break;
	}
}