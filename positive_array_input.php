<?php
/*
Problem Statement
Write a program to check if an array contains more positivity than negativity.
An array has more positivity if it contains strictly more unique positive values than unique negative values. 
If the number of positive and negative values are equal then it is also taken as negativity.
Input:5
1 -3 6 -2 -8
Output: Negativity
*/
fscanf(STDIN, "%d",$size);
$input = trim(fgets(STDIN));
$numbers = explode(" ", $input);
$numbers = array_map('intval', $numbers);
//$numbers=[-1,-3,-5,4];
$positiveCount=0;
$negativeCount=0;
for($i=0;$i<$size;$i++){
  if($numbers[$i]>0)
  {
    $positiveCount++;
    //echo "Positive";
  }
  elseif($numbers[$i]<0){
    //echo "Negative";
    $negativeCount++;
  }
}
if($positiveCount>$negativeCount){
  echo "Positivity";
}
elseif($positiveCount<$negativeCount){
  echo "Negativity";
}
else{
  echo "Negativity";
}

?>
