<?php

/*********************************************************************************
 *********************************************************************************
    A simple Password Generator for generating strong passwords
 *********************************************************************************
**********************************************************************************/
function password_generator($length)
{
   $data = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789~!@#$%^&*()-_=+/\|<>,.?:;";
   return substr(str_shuffle($data), 0, $length);
}

echo "Your Password is: " . password_generator(readline("Choose a length for your password: ")) . PHP_EOL;