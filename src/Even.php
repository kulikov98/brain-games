<?php
namespace BrainGames\Even;

use function \cli\line;
use function \cli\prompt;

function run()
{
    line("Welcome to the Brain Games!");
    line("Answer \"yes\" if number even otherwise answer \"no\".");
    $name = prompt("May I have your name?");
    line("Hello, {$name}");
    
    $numbers = array_rand(range(0, 100), 3);
    
    questions($numbers, $name);
    
    return;
}

function questions($numbers, $name)
{
    foreach ($numbers as $number) {
        line("Question: {$number}");
        $answer = prompt("Your answer");
        $trueAnswer = isEven($number) ? 'yes' : 'no';

        if ($answer === $trueAnswer) {
            line("Correct!");
        } else {
            line("'{$answer}' is wrong answer ;(. Correct answer was '{$trueAnswer}'.");
            line("Let's try again, {$name}!");
            return;
        }
    }
    line("Congratulations, {$name}!");
}

function isEven($number)
{
    return $number % 2 === 0;
}
