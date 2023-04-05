<?php

class LeapYear
{
   public $year;

   public function __construct($year) 
   {
     $this->year = $year;
   }

   public function leapYear() 
   {
     if ($this->year%4 == 0) 
     {
        if ($this->year%100 == 0) 
        {
            if ($this->year%400 == 0) 
            {
                echo "Leap Year" . PHP_EOL;
            } else {
                echo "NOT Leap Year" . PHP_EOL;
            }
        } else {
            echo "Leap Year" . PHP_EOL;
        }
     } else {
        echo "NOT Leap Year" . PHP_EOL;
     }
   }
}

$leap = new LeapYear(2005);
$leap->leapYear();