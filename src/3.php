
<?php

// Generate a random math problem
$problem = rand(1, 100);
$operation = rand(1, 2);

if ($operation == 1) {
    $answer = $problem + rand(1, 10);
} else if ($operation == 2) {
    $answer = $problem - rand(1, 10);
}

// Ask the user to solve the problem
echo "What is $problem +/- 10?";
$userInput = readline();

// Check if the answer is correct
if ($userInput == $answer) {
    echo "Correct!";
} else {
    echo "Incorrect. The answer is $answer.";
}

?>