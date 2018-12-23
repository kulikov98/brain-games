<?php
namespace BrainGames\Gcd;

use function BrainGames\Cli\play;

const GAME_RULE = "Find the greatest common divisor of given numbers.";

function run()
{
    play(GAME_RULE, function() {
        return getQuestionAndAnswer();
    });
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
