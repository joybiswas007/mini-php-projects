<?php

/******************************
 ******************************
 A simple php program to
 generate random names
 ******************************
*******************************/

class Roulette 
{
    private $names;
    private $arrNames;
    private $countNames;
    private $randomNames;

    public function __construct($names) 
    {
        $this->names = $names;
    }

    public function roulette() 
    {
        //The names we are gonna make it from users saving it as Array
        $this->arrNames = explode(", ", $this->names);
        
        //Counting the length for of the Array

        $this->countNames = count($this->arrNames);

        //Generating random names
        $this->randomNames = rand(0, $this->countNames - 1);

        echo $this->arrNames[$this->randomNames] . " is gonna pay the bill today!" . PHP_EOL;

    }
}

$roulette = new Roulette(readline("Enter names separate them with commas: "));
$roulette->roulette();