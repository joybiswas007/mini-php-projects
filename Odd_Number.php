<?php

/******************************
 ******************************
 A simple for Loop to generate
 Odd Numbers
 ******************************
*******************************/

for($i = 1; $i <= 100; $i++) 
{
	if ($i%2 == 0) 
	{
		continue;
	}

	if ($i == 25) 
	{
		break;
	}

	echo "Odd Number: " . $i . PHP_EOL;
}