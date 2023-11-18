<?php
  /*
  Problem Statement:: Write a program to find the minimum value in a rotated sorted array using binary search algorithm. 
  If a sorted array is like {0,1,2,4,5,6,7} then the rotated sorted array can be {4,5,6,7,0,1,2}.

Input:
7
4 5 6 7 0 1 2
Output:
0
  */
  $line1=trim(fgets(STDIN));
    $line2=trim(fgets(STDIN));

    // print $line1."\n";
    // print $line2."\n";

    $arr=explode(" ",$line2);
   // print_r($arr);
   $n=intval($line1);
   $lastItem=$arr[$n-1];
   $start=0;
   $end=$n-1;

   while($start<$end){
    $mid=floor(($start+$end)/2);
   // print $start. " ".$mid. " ".$end."\n";

    if($arr[$mid]>$lastItem) {
        $start=$mid+1;
    }
    else
    {
        $end=$mid-1;
    }
   }
   if($arr[$mid]>$lastItem)$mid++;
   print $arr[$mid];
?>
