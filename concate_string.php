<?php
/*
Concatenate Two String
Problem Statement: Write a program where two strings will be given, firstName and lastName, return a single string in the format "lastName, firstName".

Input
The input consists of two strings:
John Doe

Output
The output will print a string:
Doe, John
*/
  fscanf(STDIN, "%s %s", $firstName,$lastName );
  echo $lastName.", ".$firstName;
   
?>
