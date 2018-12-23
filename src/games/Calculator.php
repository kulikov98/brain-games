<?php
namespace BrainGames\Calculator;

use function BrainGames\Cli\play;

const GAME_RULE = "What is the result of the expression?";

function run()
{
    play(GAME_RULE, function () {
        return getQuestionAndAnswer();
    });
}

function getQuestionAndAnswer()
{
    $firstOperand = rand(1, 10);
    $secondOperand = rand(1, 10);
    $operators = ['+','-','*'];
    $operator = $operators[rand(0, count($operators) - 1)];

    switch ($operator) {
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

    $questionAndAnswer = [
        'question' => "{$firstOperand} {$operator} {$secondOperand}",
        'answer' => "{$correctAnswer}"
    ];
    
    return $questionAndAnswer;
}
