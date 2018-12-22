<?php
namespace BrainGames\Calculator;

use function \cli\line;
use function \cli\prompt;

function questions ()
{
    for ($i = 0; $i < 3; $i++) {
        
        $firstOperand = rand(1, 10);
        $secondOperand = rand(1, 10);
        $operators = ['+','-','*'];
        $operator = $operators[rand(0, count($operators) - 1)];

        line("Question: {$firstOperand} {$operator} {$secondOperand}");
        $answer = prompt("Your answer");

        switch ($operator)
        {
            case '+':
                $correctAnswer = $firstOperand + $secondOperand;
                break;
            case '-':
                $correctAnswer = $firstOperand - $secondOperand;
                break;
            case '*':
                $correctAnswer = $firstOperand * $secondOperand;
                break;
        }
        
        if ($answer == $correctAnswer) {
            line("Correct!");
        } else {
            line("'{$answer}' is wrong answer ;(. Correct answer was '{$correctAnswer}'.");
            return false;
        }
    }
    return true;
}
    