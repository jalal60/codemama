<?php
/*
Problem Statement
Write a program to create a function that takes two arguments. 
Both arguments are integers, a and b. Return true if one of them is 10 or if their sum is 10.

Input
The input consists of two integers:
5 5
Output
The output will print "True" if one of the input is 10 or their sum is 10. Otherwise, it will print "False":
True
*/
  function lookforTen(int $a,int $b){
  if($a==10||$b==10||$a+$b==10){
    echo "True";
  }
  else{
    echo "False";
  }
}
fscanf(STDIN, "%d %d\n",$a,$b);
lookforTen($a,$b);
?>
