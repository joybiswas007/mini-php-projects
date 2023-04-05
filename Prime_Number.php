<?php
class Prime 
{
    public $number;
    public $is_prime = TRUE;

    function __construct($number) 
    {
        $this->number = $number;
    }

    function prime_checker() 
    {
        for ($i = 2; $i < $this->number; $i++) 
        {
            if ($this->number%$i == 0) {
                $this->is_prime = FALSE;
            } 
        }

        if ($this->is_prime) 
        {
            echo $this->number . " is a prime number" . PHP_EOL;
        } else {
            echo $this->number . " is NOT a prime Number" . PHP_EOL;
        }
    }
}

$prime = new Prime(24);
$prime->prime_checker();