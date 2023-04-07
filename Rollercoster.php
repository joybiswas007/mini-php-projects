<?php
class Rollercoster 
{
	private $bill = 0;

	public $height;
	public $age;
	public $photo;

	function __construct($height) 
	{
		$this->height = $height;
	}

	public function rollercoster() 
	{
		if ($this->height >= 120) {

			echo "You can ride Rollercoster!" . PHP_EOL;

			$this->age = readline("Enter your age: ");

			if($this->age < 12) {

				$this->bill += 5;
				echo "The price of kids tickets: " . $this->bill . "$" . PHP_EOL;

			} else if ($this->age <= 18) {

				$this->bill += 7;
				echo "The price of youths tickets: " . $this->bill . "$" . PHP_EOL;
			} else if ($this->age > 18) {

				$this->bill += 10;
				echo "The price of adults tickets: " . $this->bill . "$" . PHP_EOL;
			}

			$this->photo = readline("Do you want you photo taken for 2$? type 'y' or 'n': ");
			if ($this->photo == "y") {
				$this->bill += 2;
			}

			echo "Final bill: " . $this->bill . "$" . PHP_EOL;

		} else {
			echo "You are not tall enough to ride rollercoster :(" . PHP_EOL;
		}
	}
}

$rider = new Rollercoster(readline("Enter your height in cm: "));
$rider->rollercoster();