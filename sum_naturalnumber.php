<?php
/*
Problem Statement
Write a program that calculates the sum of natural numbers up to a given number 'n'. For example, 
if the input is 5, the program should calculate and display the sum of natural numbers from 1 to 5 (1 + 2 + 3 + 4 + 5 = 15)
*/
   function sumOfNaturalNumbers($n) {
    $sum = 0;

    // Loop through numbers from 1 to $n and calculate the sum
    for ($i = 1; $i <= $n; $i++) {
        $sum += $i;
    }

    return $sum;
}

// Change the value of $n to calculate the sum up to a different number
fscanf(STDIN, "%d", $n );
$result = sumOfNaturalNumbers($n);

echo $result;
    
?>
