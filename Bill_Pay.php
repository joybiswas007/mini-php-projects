<?php

/******************************
 ******************************
 A simple php program using 
 encapsulation for how much a
 person should pay whiling 
 shareing bills with others
 ******************************
*******************************/

	class Bill
	{
		private $bill;
		private $people;
		private $tip;
		private $totalBill;
		private $billPerPeron;

		function __construct($bill, $people, $tip)
		{
			$this->bill = $bill;
			$this->people = $people;
			$this->tip = $tip;
		}

		function billWithTips()
		{
			$this->totalBill = $this->tip / 100 * $this->bill + $this->bill;
			$this->billPerPeron = $this->totalBill / $this->people;
			return $this->billPerPeron;
		}
	}

$bill1 = new Bill(readline("Enter the total amount :$ "),
 readline("How many persons to divide the bills?: "), 
 readline("How many percent tip you want to give? 10/12/15: "));
echo "Bill per person:: " . $bill1->billWithTips() . "$" . PHP_EOL;