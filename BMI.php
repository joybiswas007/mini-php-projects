<?php

/******************************
 ******************************
 A simple BMI Calculator
 ******************************
*******************************/

class BMI
{
	protected $height;
	protected $weight;
	protected $bmi;

	function __construct($height, $weight)
	{
		$this->height = $height;
		$this->weight = $weight;
	}

	function BMI()
	{
		$this->bmi = $this->weight / $this->height ** 2;
		return $this->bmi;
	}
}

$bmi = new BMI(1.9, 70);
echo "Your BMI is: " . $bmi->BMI() . PHP_EOL;