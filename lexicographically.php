<?php
   /*
   Write a program to create a function that returns the lexicographically first rearrangements of a lowercase string.
    input: hello
    output: ehllo
  
   */
    function lexicographicallyFirst($str) {
    $chars = str_split($str); // Split the string into an array of characters
    sort($chars); // Sort the characters lexicographically
    return implode('', $chars); // Concatenate the characters to form a string
}
fscanf(STDIN, "%s",$myString);
$lexicographicallyFirst = lexicographicallyFirst($myString);
echo $lexicographicallyFirst;
    
?>
