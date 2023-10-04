<?php
function calc(string $operator, int $nbr1, int $nbr2) {
    switch ($operator) {
        case '+':
            return $nbr1 + $nbr2;
        case '-':
            return $nbr1 - $nbr2;
        case '*':
            return $nbr1 * $nbr2;
        case '/':
            if ($nbr2 != 0) {
                return $nbr1 / $nbr2;
            } else {
                return "Cannot divide by 0";
            }
        case '%':
            if ($nbr2 != 0) {
                return $nbr1 % $nbr2;
            } else {
                return "Cannot divide by 0";
            }
        default:
            return "Unknown operator";
    }
}
?>