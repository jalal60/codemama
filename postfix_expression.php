<?php

/*
Problem Statement
Write a program to evaluate Postfix expression.A postfix expression is an expression where the operator appears after the operands.
Input: 56*
Output: 30
*/
   function evaluate_postfix($expression) {
    $stack = [];
    for ($i = 0; $i < strlen($expression); $i++) {
        $char = $expression[$i];

        if (is_numeric($char)) {
            array_push($stack, intval($char));
        } else {
            $operand2 = array_pop($stack);
            $operand1 = array_pop($stack);

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
 fscanf(STDIN, "%s", $postfix_expr);
$result = evaluate_postfix($postfix_expr);
echo $result;
    
?>
