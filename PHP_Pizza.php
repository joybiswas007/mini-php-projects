<?php
/**************************************
 **************************************
 * A simple php program to order pizza
 **************************************
 **************************************/

class Pizza {

	private $bill = 0;
	public $size;
	public $add_pepperoni;
	public $extra_cheese;

	public function __construct($size, $add_pepperoni, $extra_cheese) 
	{
		$this->size = $size;
		$this->add_pepperoni = $add_pepperoni;
		$this->extra_cheese = $extra_cheese;
	}

	public function orderPizza() 
	{
		if ($this->size == "l") 
		{
			$this->bill = 25;
			if ($this->add_pepperoni == "y") 
			{
				$this->bill += 2;
			}
			if($this->extra_cheese == "y") 
			{
				$this->bill += 1;
			}
			echo "Your bill is: " . $this->bill . "$" . PHP_EOL;
		} else if ($this->size == "m")
		{
			$this->bill = 20;
			if ($this->add_pepperoni == "y") 
			{
				$this->bill += 2;
			}
			if ($this->extra_cheese == "y") 
			{
				$this->bill += 1;
			}
			echo "Your bill is: " . $this->bill . "$" . PHP_EOL;
		} else if ($this->size == "s") 
		{
			$this->bill += 15;
			if ($this->add_pepperoni == "y") 
			{
				$this->bill += 2;
			}
			if ($this->extra_cheese == "y") 
			{
				$this->bill += 1;
			}
			echo "Your bill is: " . $this->bill . "$" . PHP_EOL;
		} else {
			echo "NO order was placed :(" . PHP_EOL;
		}
	}
}
echo "Welcome to PHP Pizza!" . PHP_EOL;
$order1 = new Pizza(readline("What size of Pizza do you want? l/m/s: "), 
readline("Do you want to add pepperoni? y/n: "), 
readline("Do you want extra cheese? y/n: ")
);

$order1->orderPizza();