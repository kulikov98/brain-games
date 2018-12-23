<?php
namespace BrainGames\Gcd;

use function BrainGames\Cli\play;

function run()
{
    $rounds = 3;
    $rules = "Find the greatest common divisor of given numbers.";

    for ($i = 0; $i < $rounds; $i++) {
        $questionsAndAnswers[] = getQuestionAndAnswer();
    }

    play($rules, $questionsAndAnswers);
}

function getQuestionAndAnswer()
{
    $firstOperand = rand(1, 100);
    $secondOperand = rand(1, 100);
    $correctAnswer = gmp_gcd($firstOperand, $secondOperand);

    $question = [
        'question' => "{$firstOperand} {$secondOperand}",
        'answer' => "{$correctAnswer}"
    ];
    
    return $question;
}
