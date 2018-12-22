<?php
namespace BrainGames\Gcd;

function getQuestion ()
{
    $firstOperand = rand(1, 100);
    $secondOperand = rand(1, 100);

    $question = [
        'string' => "{$firstOperand} {$secondOperand}",
        'value' => ['firstOperand' => $firstOperand, 'secondOperand' => $secondOperand]
    ];
    return $question;
}

function checkAnswer ($question, $answer)
{
    $firstOperand = $question['firstOperand'];
    $secondOperand = $question['secondOperand'];

    $correctAnswer = gmp_gcd($firstOperand, $secondOperand);

    if ($answer == $correctAnswer) {
        return true;
    } else {
        return $correctAnswer;
    }
}