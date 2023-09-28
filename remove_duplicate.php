<?php
/*
Write a program that removes duplicate characters from a given string, keeping only the first occurrence of each character.
The input consists of a string.
The output will be a string without any duplicate character.
Input:
apples
Output:
aples
*/
fscanf(STDIN, "%s", $a);
function remove_duplicate($var)
{
    $b = str_split($var);
    //  print_r($b);
    $c = array_unique($b);
    $d = implode('', $c);
    return $d;
}
echo remove_duplicate($a);
