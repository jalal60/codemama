<?php
/*
Problem Statement
Write a program to evaluate Prefix expression.A prefix expression is an expression where the operator appears before the operands.

Input: *56
Output: 30
*/
function evaluate_prefix($expression) {
    $stack = [];
    $operators = ['+', '-', '*', '/'];

    for ($i = strlen($expression) - 1; $i >= 0; $i--) {
        $char = $expression[$i];

        if (is_numeric($char)) {
            array_push($stack, intval($char));
        } elseif (in_array($char, $operators)) {
            $operand1 = array_pop($stack);
            $operand2 = array_pop($stack);

            switch ($char) {
                case '+':
                    array_push($stack, $operand1 + $operand2);
                    break;
                case '-':
                    array_push($stack, $operand1 - $operand2);
                    break;
                case '*':
                    array_push($stack, $operand1 * $operand2);
                    break;
                case '/':
                    array_push($stack, (int)($operand1 / $operand2)); // For integer division
                    break;
                default:
                    break;
            }
        }
    }

    return array_pop($stack);
}

// Example usage:
fscanf(STDIN, "%s", $prefix_expr);
$result = evaluate_prefix($prefix_expr);
echo $result;
    
?>
