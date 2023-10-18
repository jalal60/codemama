<?php
/*
Second to Hour:Minute
Problem Statement
Write a program which will take seconds as input and output into hour:minute.
Input
The input consists of a integer.
Output
The output will print in the form hour:minute. 
For example if it takes 130 as input then it will print 0:2.
*/
   fscanf(STDIN, "%d",$init);
   $hours = floor($init / 3600);
   $minutes = floor(($init / 60) % 60);
   $seconds = $init % 60;
   echo "$hours:$minutes";
    
?>
