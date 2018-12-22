<?php
namespace BrainGames\Calculator;

use function \cli\line;
use function \cli\prompt;

function getQuestion ()
{       
    $firstOperand = rand(1, 10);
    $secondOperand = rand(1, 10);
    $operators = ['+','-','*'];
    $operator = $operators[rand(0, count($operators) - 1)];

    $question = [
        'string' => "{$firstOperand} {$operator} {$secondOperand}",
        'value' => ['firstOperand' => $firstOperand, 'operator' => $operator, 'secondOperand' => $secondOperand]
    ];
    return $question;
}

function checkAnswer ($question, $answer)
{
    $firstOperand = $question['firstOperand'];
    $secondOperand = $question['secondOperand'];
    $operator = $question['operator'];

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
        return true;
    } else {
        return "'{$answer}' is wrong answer ;(. Correct answer was '{$correctAnswer}'.";
    }
}
    