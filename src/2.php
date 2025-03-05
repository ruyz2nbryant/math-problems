<?php
// Define an array of math operations
$operations = ['+', '-', '*', '/'];
// Generate a random operation
$operation = $operations[rand(0, count($operations) - 1)];
// Generate two random numbers between 1 and 10
$num1 = rand(1, 10);
$num2 = rand(1, 10);
// Calculate the result of the operation
switch ($operation) {
    case '+':
        $result = $num1 + $num2;
        break;
    case '-':
        $result = $num1 - $num2;
        break;
    case '*':
        $result = $num1 * $num2;
        break;
    case '/':
        if ($num2 != 0) {
            $result = $num1 / $num2;
        } else {
            $result = 'DIVISION BY ZERO';
        }
        break;
}
// Output the result
echo "$num1 $operation $num2 = $result";
?>