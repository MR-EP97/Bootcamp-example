<?php


function primeCheck($number) 
{
    if ($number <= 1 ) {
        return false;
    }

    for ($i = 2; $i ** 2 <= $number; $i++) {
    
        if ($number % $i == 0) {
            return false;
        }
    }
    return true;
}

while(1)
{
    $number = readline('Enter Your Number : ');
    $isPrime = primeCheck($number); 
    
    if ($isPrime) {
        echo 'YES';
    } else {
        echo 'NO';
    }
    echo "\n";
    
}


