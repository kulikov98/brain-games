<?php
namespace BrainGames\Even;

use function \cli\line;
use function \cli\prompt;

function questions ()
{
    $numbers = array_rand(range(0, 100), 3);
    foreach ($numbers as $number) {
        line("Question: {$number}");
        $answer = prompt("Your answer");
        $trueAnswer = isEven($number) ? 'yes' : 'no';

        if ($answer === $trueAnswer) {
            line("Correct!");
        } else {
            line("'{$answer}' is wrong answer ;(. Correct answer was '{$trueAnswer}'.");
            return false;
        }
    }
    return true;
}

function isEven($number)
{
    return $number % 2 === 0;
}
