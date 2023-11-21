<?php
   /*
   Write a program to create a function that returns an array of strings sorted by length in ascending order.
    input: 6
    abcde abc abcd abcdef ab a
    output: a ab abc abcd abcde abcdef
  
   */ 
    function sortByLengthAscending($arr) {
        usort($arr, function($a, $b) {
            return strlen($a) - strlen($b);
        });
        return $arr;
    }
    fscanf(STDIN, "%d",$init);
    $input = trim(fgets(STDIN));
    $stringArray = explode(" ", $input); // Split input string into an array

$sortedArray = sortByLengthAscending($stringArray);
foreach($sortedArray as $item){
    echo $item. " ";
}
//echo $sortedArray;

?>
