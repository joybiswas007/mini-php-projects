<?php

/*********************************************************************************
 *********************************************************************************
 When a number is divisible by 3 it prints "Fizz" and when a number is divisble by
 5 it prints "Buzz". When the number is divisible by both 3 & 5 e.g 15 it prints
 "FizzBuzz"
 *********************************************************************************
**********************************************************************************/

for ($i = 1; $i <= 100; $i++)
{
	if ($i%3 == 0 && $i%5 == 0)
	{
		echo "FizzBuzz" . PHP_EOL;
	} else if ($i%5 == 0)
	{
		echo "Buzz" . PHP_EOL;
	} else if ($i%3 == 0)
	{
		echo "Fizz" . PHP_EOL;
	} else {
		echo $i . PHP_EOL;
	}
}
