<?php
/*
Problem Statement
Write a program to verify that all the brackets in a given string are correctly matched and nested.

Input:[{{()}}]
output:Brackets are balanced.
*/

function areBracketsMatched($str) {
    $stack = [];
    $openBrackets = ['(', '[', '{'];
    $closeBrackets = [')', ']', '}'];

    for ($i = 0; $i < strlen($str); $i++) {
        $char = $str[$i];

        if (in_array($char, $openBrackets)) {
            array_push($stack, $char);
        } elseif (in_array($char, $closeBrackets)) {
            $top = end($stack);
            if (empty($stack) || array_search($top, $openBrackets) !== array_search($char, $closeBrackets)) {
                return false;
            }
            array_pop($stack);
        }
    }

    return empty($stack);
}

// Example usage:

 fscanf(STDIN, "%s", $stringToCheck);
if (areBracketsMatched($stringToCheck)) {
    echo "Brackets are balanced.";
} else {
    echo "Brackets are not balanced.";
}
?>
