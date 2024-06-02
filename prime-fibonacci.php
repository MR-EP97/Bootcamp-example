<?php 

function fibonacci($number) {
    $fib = [0, 1]; 
    for ($i = 2; $i < $number; $i++) {
        $fib[$i] = $fib[$i - 1] + $fib[$i - 2];
    }

    return $fib;
}

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

function primeFibonacci() {

}
$n = 50;
$fibSeries = fibonacci($n);

// نمایش 50 عدد فیبوناچی
foreach ($fibSeries as $index => $value) {
    echo "Fibonacci number $index: $value\n";
}