<?php
   /*
Substring Occurrences Counting
------------------------------
Problem Statement
Write a program to create a function that finds and counts all occurrences of a substring within a larger string. 
For instance, in the string "abababab," the substring "ab" appears four times.
Input: abababab ab
Output: 4
*/
   fscanf(STDIN, "%s %s", $str_test,$find);
   $count = 0;
   $positions = array();
  for($i = 0; $i<strlen($str_test); $i++)
  {
       $pos = strpos($str_test, $find, $count);
       if($pos == $count){
             $positions[] = $pos;
       }
       $count++;
  }
  $result=0;
  foreach ($positions as $value) {
      
     // echo  $value;
       if($value!==false){
      $result++;
      }
  }
  echo $result;
?>
