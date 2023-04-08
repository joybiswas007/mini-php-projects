<?php
class Bank 
{
    private $balance = 0;
    public function depositAmount($amt) 
    {
        $this->balance += $amt;
        return $this;
    }
    public function deductAmount($amt) 
    {
        if ($this->balance <= 0) 
        {
            echo "Insufficient funds!" . PHP_EOL;
        }

        if ($this->balance <= $amt) 
        {
            echo "Your requested amount is less than your balance" . PHP_EOL;
        }

        $this->balance -= $amt;
        return $this;
    }
    public function checkBalance() 
    {
        echo "Your current balance: " . $this->balance . "$" . PHP_EOL;
        return $this;
    }
}

$user1 = new Bank();
$user1->depositAmount(readline("Enter amount you want to deposit: "))->checkBalance();
$user1->deductAmount(readline("Enter amount you want to withdraw: "))->checkBalance();
