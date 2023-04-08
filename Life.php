<?php

/*********************************************************************************
 *********************************************************************************
    A simple php program to calucate how many years, days and months is remaining
    from your current age. By default age is set to 100; and current age is set to
    21 and I'm 21 as of writing this code;
 *********************************************************************************
**********************************************************************************/

class Life {
	private $age = null;
	private $years;
	private $months;
	private $weeks;
	private $days;

	function __construct($age,) {
		$this->age = $age;
		$this->years = 100 - $this->age;
	}

	public function monthsRemaining() {
		$this->months = $this->years * 12;
		return $this->months;
	}

	public function weeksRemaining() {
		$this->weeks = $this->years * 52;
		return $this->weeks;
	}

	public function daysRemaining() {
		$this->days = $this->years * 365;
		return $this->days;
	}
}

$life = new Life(readline("Enter your current age: "));
echo "You have " . $life->daysRemaining() . " days" . ", " . $life->weeksRemaining() . " weeks" . ", " . "and " . $life->monthsRemaining() . " months left." . PHP_EOL;