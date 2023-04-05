<?php
class Calculator
{
    public $a;
    public $b;
    public $operation = "all";

    function __construct($a, $b, $operation) 
    {
        $this->a = $a;
        $this->b = $b;
        $this->operation = $operation;
    }
    public function calculator()
    {
        switch($this->operation) 
        {
            case "add":
                $result = $this->a + $this->b;
                echo "Add: " . $result . PHP_EOL;
                break;
            case "sub":
                $result = $this->a - $this->b;
                echo "Subtract: " . $result . PHP_EOL;
                break;
            case "multi":
                $result = $this->a * $this->b;
                echo "Multiply: " . $result . PHP_EOL;
                break;
            case "div":
                $result = $this->a / $this->b;
                echo "Divide: " . $result . PHP_EOL;
                break;
            default:
                $result = $this->a + $this->b;
                echo "Add: " . $result . PHP_EOL;
                $result = $this->a - $this->b;
                echo "Subtraction: " . $result . PHP_EOL;
                $result = $this->a * $this->b;
                echo "Multiply: " . $result . PHP_EOL;
                $result = $this->a / $this->b;
                echo "Divide: " . $result . PHP_EOL;
                break;
        }
    }
}

$calc = new Calculator(10, 2, "sub");
$calc->calculator();