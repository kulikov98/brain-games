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
    
    $numbers = [15, 6, 7];
    
    questions($numbers, $name);
    
    return;
}

function questions (array $numbers, string $name)
{
    foreach ($numbers as $num) {
        line("Question: {$num}");
        $answer = prompt("Your answer");
        $trueAnswer = $num % 2 === 0 ? 'yes' : 'no'; 

        if (($num % 2 === 0 && $answer === 'yes') || ($num % 2 !== 0 && $answer === 'no')) {
            line("Correct!");
        }
        else {
            line("'{$answer}' is wrong answer ;(. Correct answer was '{$trueAnswer}'.");
            line("Let's try again, {$name}!");
            return;
        }
    }
    line("Congratulations, {$name}!");
}